{* ROTARY — obituaries search *}
<section class="rt-kb-hero rt-bleed rt-hero-soft">
  <div class="container">
    <span class="rt-eyebrow">In memoriam</span>
    <h1>Find obituaries &amp; services</h1>
    <p class="rt-product-sub">Search obituaries from across [[CC]] by first or last name. Find details of upcoming services, share a favourite photo or memory, and send support to the family.</p>
    <form action="/" name="search" method="post" class="rt-searchbox" role="search">
      <input type="hidden" name="dad" value="index" />
      <input type="hidden" name="jc" value="obituaries" />
      <input type="hidden" name="a" value="report" />
      <input type="hidden" name="csrf" value="{CSRF::Token()}" />
      <i class="fas fa-search" aria-hidden="true"></i>
      <input type="text" class="form-control" name="name" value="{$smarty.request.name|default:''}" placeholder="Search by name…" aria-label="Search obituaries by name">
      <button class="btn rt-btn-gold" type="submit" name="search" value="search">Search</button>
    </form>
  </div>
</section>
