{* ROTARY — photo & video gallery *}
<div class="rt-page-title"><div><span class="rt-eyebrow">Gallery</span><h1>Photo &amp; video gallery</h1><p class="rt-muted">Take a digital stroll through our gallery to get a glimpse of [[CN]].</p></div></div>
<div class="portfolio-content portfolio-1">
  <div id="js-filters-juicy-projects" class="cbp-l-filters-button rt-gallery-filters">
    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All <div class="cbp-filter-counter"></div></div>
  </div>
  <div id="js-grid-juicy-projects" class="cbp rt-gallery">{assign var='i' value=1}
    {section name=results loop=$rows}
    {assign var='R' value=V::D($rows[results])}
    {if $i>200}{continue}{/if}
    <div class="cbp-item graphic">
      <div class="cbp-caption">
        <div class="cbp-caption-defaultWrap"><img src="{$R.url}" alt="{$R.name|escape}" loading="lazy"></div>
        <div class="cbp-caption-activeWrap"><div class="cbp-l-caption-alignCenter"><div class="cbp-l-caption-body"><a href="{$R.url}" class="cbp-lightbox btn rt-btn-ghost ignore" data-title="{$R.name|ucwords}"><i class="fas fa-expand"></i> View</a></div></div></div>
      </div>
      <div class="cbp-l-grid-projects-title">{$R.name}</div>
    </div>
    {assign var='i' value=$i+1}{/section}
  </div>
</div>
