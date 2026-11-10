{* ROTARY — partners marquee (items rendered twice for a seamless loop) *}
{assign var='rows' value=Site::Partners()}
{if !empty($rows)}
<section class="rt-section-tight rt-section-white rt-bleed">
  <div class="container">
    <div class="rt-section-head" style="margin-bottom:24px"><span class="rt-eyebrow">Partners</span></div>
    <div class="rt-logos slider2">
      <div class="rt-logos-track slide-track2">
      {section name=results loop=$rows}{assign var='R' value=V::D($rows[results])}
        <div class="rt-logo slide2" onclick="window.open('{$R.link}')" title="{$R.title}"><img src="{$R.thumbnail}" alt="{$R.title}" loading="lazy" /></div>
      {/section}
      {section name=results loop=$rows}{assign var='R' value=V::D($rows[results])}
        <div class="rt-logo slide2" onclick="window.open('{$R.link}')" title="{$R.title}" aria-hidden="true"><img src="{$R.thumbnail}" alt="" loading="lazy" /></div>
      {/section}
      </div>
    </div>
  </div>
</section>
{/if}
