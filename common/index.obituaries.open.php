{* ROTARY — obituary detail *}
{assign var='R' value=V::D($row)}
{assign var='url' value="$base/?dad=index&jc=obituaries&a=open&id={$R.id}"}
{assign var='cart' value="config1=data&config2={$R.id}&obituary=[{$R.id}] {$R.name|urlencode}"}
{assign var='support' value="
{if !empty($R.package.give)}<a href='?dad=index&jc=cart&a=add&{$cart}&package={$R.package.give.id}' class='btn btn-lg btn-block rt-btn-gold'><i class='fas fa-hand-holding-heart'></i> Show support</a>{/if}
{if !empty($R.package.flowers)}<a href='?dad=index&jc=cart&a=add&{$cart}&package={$R.package.flowers.id}' class='btn btn-lg btn-block rt-btn-soft'><i class='fas fa-spa'></i> Send flowers</a>{/if}
"}
{assign var='share' value="
<div class='rt-share'><span>Share</span>
<a href='https://www.facebook.com/sharer/sharer.php?u={$url|urlencode}&t={$R.name|urlencode}' class='rt-share-btn is-fb ignore' target='_blank' rel='noopener' aria-label='Share on Facebook'><i class='fab fa-facebook-f'></i></a>
<a href='whatsapp://send?text={$R.name|urlencode} :: {$url|urlencode}' class='rt-share-btn is-wa ignore' target='_blank' rel='noopener' aria-label='Share on WhatsApp'><i class='fab fa-whatsapp'></i></a>
<a href='https://twitter.com/intent/tweet?url={$url|urlencode}&text={$R.name|urlencode}' class='rt-share-btn is-tw ignore' target='_blank' rel='noopener' aria-label='Share on X'><i class='fab fa-twitter'></i></a>
</div>
"}
<section class="rt-memorial-hero rt-bleed">
  <div class="container">
    <button type="button" class="rt-memorial-photo tooltips" onclick="window.open('{$R.pic}')" {$_TIP_} title="View photograph"><img src="{$R.pic}" alt="{$R.name|escape}"></button>
    <div>
      <span class="rt-eyebrow">In loving memory</span>
      <h1>{$R.name}</h1>
      <p class="rt-memorial-years">{if !empty($row.dob)}{$row.dob|date_format} &ndash; {/if}{$row.dod|date_format}</p>
    </div>
  </div>
</section>

<div class="rt-product">
  <div class="rt-product-main">
    <section class="rt-prose-card">
      <h3 class="rt-card-label"><i class="far fa-id-card"></i> Overview</h3>
      <dl class="rt-kv rt-kv-lines">
        {if !empty($R.parents)}<div><dt>Parents</dt><dd>{$R.parents|default:'N/A'}</dd></div>{/if}
        {if !empty($R.husband)}<div><dt>Husband</dt><dd>{$R.husband|default:'N/A'}</dd></div>{/if}
        {if !empty($R.wife)}<div><dt>Wife</dt><dd>{$R.wife|default:'N/A'}</dd></div>{/if}
        <div><dt>Children</dt><dd>{$R.children|default:'N/A'}</dd></div>
        {if !empty($R.grandchildren)}<div><dt>Grandchildren</dt><dd>{$R.grandchildren|default:'N/A'}</dd></div>{/if}
        {if !empty($R.great_grandchildren)}<div><dt>Great grandchildren</dt><dd>{$R.great_grandchildren|default:'N/A'}</dd></div>{/if}
        {if !empty($R.career)}<div><dt>Career</dt><dd>{$R.career|default:'N/A'}</dd></div>{/if}
      </dl>
      <div class="rt-prose" style="margin-top:18px">{$R.description|default:'N/A'}</div>
    </section>

    {if !empty($R.video)}
    <section class="rt-prose-card"><h3 class="rt-card-label"><i class="far fa-play-circle"></i> Video</h3><div class="rt-video"><iframe src="{$R.video}" title="{$R.name|strip_tags|escape}" allowfullscreen loading="lazy"></iframe></div></section>
    {/if}

    {if !empty($row.gallery)}
    <section class="rt-prose-card pricing-content-1">
      <h3 class="rt-card-label"><i class="far fa-images"></i> Gallery</h3>
      <div class="portfolio-content portfolio-1">
        <div id="js-filters-juicy-projects" class="cbp-l-filters-button hide"><div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All<div class="cbp-filter-counter"></div></div></div>
        <div id="js-grid-juicy-projects" class="cbp rt-gallery">
          {section name=results loop=$row.gallery}
          {assign var='R' value=V::D($row.gallery[results])}
          <div class="cbp-item graphic">
            <div class="cbp-caption">
              <div class="cbp-caption-defaultWrap"><img src="{$R.path}" alt="{$R.name|escape}" loading="lazy"></div>
              <div class="cbp-caption-activeWrap"><div class="cbp-l-caption-alignCenter"><div class="cbp-l-caption-body"><a href="{$R.path}" class="cbp-lightbox btn rt-btn-ghost ignore" data-title="{$R.name|ucwords}"><i class="fas fa-expand"></i> View</a></div></div></div>
            </div>
            <div class="cbp-l-grid-projects-title">{$R.name}</div>
          </div>
          {/section}
        </div>
      </div>
    </section>
    {/if}

    {if !empty($row.latitude)}
    <section class="rt-prose-card"><h3 class="rt-card-label"><i class="fas fa-map-marker-alt"></i> Burial location</h3><div id="gmap_marker" class="gmaps rt-map"></div></section>
<script type="text/javascript">
var MapsGoogle = function() {
    var t = function() {
            var o = new GMaps({
                div: "#gmap_marker",
                lat: "{$row.latitude}",
                lng: "{$row.longitude}"
            });
            o.addMarker({
                lat: "{$row.latitude}",
                lng: "{$row.longitude}",
                title: "{$row.name}",
                infoWindow: {
                    content: '<span style="color:#000">{$row.name}</span>'
                }
            }), o.setZoom(8)
        };
    return {
        init: function() {
            t()
        }
    }
}();
window.addEventListener("load", function(evt) {
    if (typeof GMaps !== 'undefined') MapsGoogle.init()
});
</script>
    {/if}

    <section class="rt-prose-card rt-comments"><h3 class="rt-card-label"><i class="far fa-comments"></i> Condolences</h3>{V::RP('Comment','Condolence',$condolence)}</section>
    {if !empty($faqs)}<section class="rt-prose-card">{$faqs}</section>{/if}
  </div>
  <aside class="rt-product-aside">
    <div class="rt-buybox">
      <span class="rt-buybox-label">Remember {$R.name|strip_tags}</span>
      <p class="rt-muted" style="margin:8px 0 16px">Send a token of care or support to the family.</p>
      {$support}
      {$share}
    </div>
  </aside>
</div>
