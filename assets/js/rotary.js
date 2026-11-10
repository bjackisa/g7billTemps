/* =====================================================================
   ROTARY — G7Bill template behaviour
   Loaded at the end of <body>, after jQuery/Bootstrap and before the
   page-level Metronic scripts. Vanilla JS, progressive enhancement.
   ===================================================================== */
(function (w, d) {
  'use strict';

  var body = d.body;
  if (!body || !body.classList) return;

  /* ── Compatibility: Metronic page scripts expect a global Layout ── */
  if (typeof w.Layout === 'undefined') {
    w.Layout = {
      init: function () {},
      fixContentHeight: function () {},
      initFixedSidebar: function () {},
      initFixedSidebarHoverEffect: function () {},
      initSlimScroll: function () {},
      getLayoutImgPath: function () { return w.App && App.getAssetsPath ? App.getAssetsPath() + 'layouts/layout/img/' : ''; },
      getLayoutCssPath: function () { return w.App && App.getAssetsPath ? App.getAssetsPath() + 'layouts/layout/css/' : ''; }
    };
  }

  function $$(sel, ctx) { return Array.prototype.slice.call((ctx || d).querySelectorAll(sel)); }
  function on(el, ev, fn, opt) { if (el) el.addEventListener(ev, fn, opt || false); }
  function setCookie(name, value, days) {
    var e = new Date(); e.setTime(e.getTime() + days * 864e5);
    d.cookie = name + '=' + encodeURIComponent(value) + '; expires=' + e.toUTCString() + '; path=/; SameSite=Lax';
  }

  /* ── Scroll state ────────────────────────────────────────────────── */
  var ticking = false;
  function onScroll() {
    if (ticking) return; ticking = true;
    (w.requestAnimationFrame || setTimeout)(function () {
      var y = w.pageYOffset || d.documentElement.scrollTop;
      body.classList.toggle('rt-scrolled', y > 8);
      body.classList.toggle('rt-scrolled-far', y > 600);
      ticking = false;
    });
  }
  on(w, 'scroll', onScroll, { passive: true });
  onScroll();
  $$('[data-rt-top]').forEach(function (b) {
    on(b, 'click', function () { w.scrollTo({ top: 0, behavior: 'smooth' }); });
  });

  /* ── Public site: navigation drawer ─────────────────────────────── */
  var mq = w.matchMedia ? w.matchMedia('(max-width: 1099px)') : { matches: false };
  function setNav(open) {
    body.classList.toggle('rt-nav-open', open);
    $$('[data-rt-nav-toggle]').forEach(function (b) { b.setAttribute('aria-expanded', open ? 'true' : 'false'); });
  }
  $$('[data-rt-nav-toggle]').forEach(function (b) {
    on(b, 'click', function (e) { e.preventDefault(); setNav(!body.classList.contains('rt-nav-open')); });
  });
  $$('[data-rt-nav-close]').forEach(function (b) { on(b, 'click', function () { setNav(false); }); });
  on(d, 'keydown', function (e) {
    if (e.key === 'Escape') { setNav(false); body.classList.remove('rt-side-open'); }
  });

  // Mobile: first tap on a parent item opens its submenu; second tap follows the link.
  $$('.rt-nav .nav > li').forEach(function (li) {
    var sub = li.querySelector(':scope > .dropdown-menu');
    var link = li.querySelector(':scope > a');
    if (!sub || !link || !sub.children.length) return;
    link.setAttribute('aria-haspopup', 'true');
    on(link, 'click', function (e) {
      if (!mq.matches) return;
      if (!li.classList.contains('rt-open')) {
        e.preventDefault();
        $$('.rt-nav .nav > li.rt-open').forEach(function (o) { if (o !== li) o.classList.remove('rt-open'); });
        li.classList.add('rt-open');
      }
    });
  });

  /* ── Member area: sidebar ───────────────────────────────────────── */
  var menu = d.querySelector('.rt-menu');
  if (menu) {
    $$(':scope > li', menu).forEach(function (li) {
      var a = li.querySelector(':scope > a');
      var sub = li.querySelector(':scope > .sub-menu');
      var title = li.querySelector(':scope > a > .title');
      if (a && title) a.setAttribute('data-title', title.textContent.trim());
      var hasSub = sub && sub.querySelector('li');
      if (!hasSub) { li.classList.add('rt-empty'); return; }
      on(a, 'click', function (e) {
        var mini = body.classList.contains('rt-side-collapsed') && !w.matchMedia('(max-width: 991px)').matches;
        if (mini) return; // flyout on hover; click follows the link
        e.preventDefault();
        var open = !li.classList.contains('open');
        $$(':scope > li.open', menu).forEach(function (o) { if (o !== li) o.classList.remove('open'); });
        li.classList.toggle('open', open);
      });
    });
  }
  $$('[data-rt-side-collapse]').forEach(function (b) {
    on(b, 'click', function () {
      var collapsed = !body.classList.contains('rt-side-collapsed');
      body.classList.toggle('rt-side-collapsed', collapsed);
      setCookie('umenu', collapsed ? 'CLOSED' : 'OPEN', 365);
    });
  });
  $$('[data-rt-side-open]').forEach(function (b) {
    on(b, 'click', function () { body.classList.toggle('rt-side-open'); });
  });
  $$('[data-rt-side-close]').forEach(function (b) {
    on(b, 'click', function () { body.classList.remove('rt-side-open'); });
  });

  /* ── Auth: show / hide password, swap login ⇄ reset panels ─────── */
  $$('[data-rt-eye]').forEach(function (b) {
    on(b, 'click', function () {
      var input = d.getElementById(b.getAttribute('data-rt-eye'));
      if (!input) return;
      var show = input.type === 'password';
      input.type = show ? 'text' : 'password';
      var i = b.querySelector('i');
      if (i) i.className = show ? 'far fa-eye-slash' : 'far fa-eye';
    });
  });
  $$('[data-rt-swap]').forEach(function (b) {
    on(b, 'click', function (e) {
      e.preventDefault();
      var show = d.querySelector(b.getAttribute('data-rt-swap'));
      var hide = d.querySelector(b.getAttribute('data-rt-swap-hide'));
      if (hide) hide.style.display = 'none';
      if (show) { show.style.display = 'block'; var f = show.querySelector('input:not([type=hidden])'); if (f) f.focus(); }
    });
  });

  /* ── Reveal on scroll ───────────────────────────────────────────── */
  var reduce = w.matchMedia && w.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!reduce && 'IntersectionObserver' in w) {
    var targets = $$('.rt-card, .rt-focus-item, .rt-test-item, .rt-quote, .rt-news-item, .rt-intro, .rt-cta, .rt-section-head, .rt-site .thumbnail');
    if (targets.length) {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
          if (en.isIntersecting) { en.target.classList.add('rt-in'); io.unobserve(en.target); }
        });
      }, { rootMargin: '0px 0px -50px 0px', threshold: 0.06 });
      targets.forEach(function (el, i) {
        el.classList.add('rt-reveal');
        el.style.transitionDelay = (i % 4) * 70 + 'ms';
        io.observe(el);
      });
    }
  }

  /* ── Wide plain tables scroll horizontally on phones ────────────── */
  if (w.innerWidth < 768) {
    $$('.rt-content table.table, .rt-app-content table.table').forEach(function (t) {
      var p = t.parentNode;
      if (!p || /table-responsive|table-scrollable|dataTables_/.test(p.className || '')) return;
      if (/dt-responsive|dataTable|datatable/.test(t.className || '') || /sample_|datatable/i.test(t.id || '')) return;
      var wrap = d.createElement('div');
      wrap.className = 'table-responsive';
      p.insertBefore(wrap, t);
      wrap.appendChild(t);
    });
  }
})(window, document);
