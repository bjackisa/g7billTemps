{* ROTARY — developer centre navigation *}
<div class="rt-dev-hero">
  <div class="rt-dev-hero-text">
    <span class="rt-eyebrow">Developers</span>
    <h1>Build with the [[CNS]] API</h1>
    <p>Accept and send payments, embed buttons and connect your store — all from one key.</p>
  </div>
  <span class="rt-dev-hero-ico" aria-hidden="true"><i class="fas fa-code"></i></span>
</div>
<nav class="rt-subnav" aria-label="API sections">
  <a href="?dad=info&jc=api" class="rt-subnav-item {if $smarty.request.hs eq ''}is-active{/if}"><i class="fas fa-book"></i> API Documentation</a>
  <a href="?dad=info&jc=api&hs=ab" class="rt-subnav-item {if $smarty.request.hs eq 'ab' or $smarty.request.hs eq 'buttons'}is-active{/if}"><i class="far fa-hand-pointer"></i> Advanced Buttons</a>
  <a href="?dad=info&jc=api&hs=plugins" class="rt-subnav-item {if $smarty.request.hs eq 'plugins'}is-active{/if}"><i class="fas fa-plug"></i> Plugins</a>
  <a href="?dad=info&jc=api&hs=pb" class="rt-subnav-item {if $smarty.request.hs eq 'pb'}is-active{/if}"><i class="fas fa-shopping-cart"></i> Payment Buttons</a>
</nav>
