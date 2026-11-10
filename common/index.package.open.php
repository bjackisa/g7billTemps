{* ROTARY — product / package detail *}
{assign var='R' value=V::D($row)}
{assign var='url' value="$base/?dad=index&jc=packages&a=open&id={$row.id}"}
{assign var='buttons' value="
<div class='rt-share'><span>Share</span>
<a href='https://www.facebook.com/sharer/sharer.php?u={$url|urlencode}&t={$row.name|urlencode}' class='rt-share-btn is-fb ignore' target='_blank' rel='noopener' aria-label='Share on Facebook'><i class='fab fa-facebook-f'></i></a>
<a href='whatsapp://send?text={$row.name|urlencode} :: {$url|urlencode}' class='rt-share-btn is-wa ignore' target='_blank' rel='noopener' aria-label='Share on WhatsApp'><i class='fab fa-whatsapp'></i></a>
<a href='https://twitter.com/intent/tweet?url={$url|urlencode}&text={$row.name|urlencode}' class='rt-share-btn is-tw ignore' target='_blank' rel='noopener' aria-label='Share on X'><i class='fab fa-twitter'></i></a>
</div>
"}
{if $row.order eq 'on'}
{assign var='button' value="<a href='?dad=index&jc=cart&a=add&package={$row.id}' class='btn btn-lg btn-block rt-btn-gold rt-buy'>{if $row.order_button neq 'add_to_cart'}{U::RP('_',' ',$row.order_button)|ucwords}{else}{$LANG.T000016}{/if} <i class='{$LANG.T000018}'></i></a>"}
{else}{assign var='button' value="<a href='?dad=index&jc=contact' class='btn btn-lg btn-block rt-btn-primary rt-buy'>Contact us <i class='far fa-comments'></i></a>"}{/if}

<section class="rt-product-hero rt-bleed" style="background-image:url('{$row.header}')">
  <div class="container">
    <nav class="rt-crumbs" aria-label="Breadcrumb"><a href="{$base}/">Home</a><i class="fas fa-chevron-right"></i><a href="/?dad=index&jc=packages">Packages</a><i class="fas fa-chevron-right"></i><span>{$row.name|strip_tags}</span></nav>
    {if !$package_configs.title_open_hide}
    <div class="rt-product-hero-box">
      {if !empty($row.grade)}<span class="rt-card-tag rt-tag-gold">{U::RP('_',' ',$row.grade)|strtoupper}</span>{/if}
      <h1>{$row.name}</h1>
      {if !empty($row.d3)}<p class="rt-product-sub">{$row.d3}</p>{/if}
    </div>
    {/if}
  </div>
</section>

<div class="rt-product">
  <div class="rt-product-main">
    <article class="rt-prose-card">
      {if U::C(['text'=>$row.d5])}<h2>{$row.d5}</h2>{/if}
      <div class="rt-prose">{if U::F('widget.packages.desc.php',$row.description)}{include file="widget.packages.desc.php"}{else}{eval var=$row.description}{/if}</div>
    </article>

    {if !empty($row.video)}
    <section class="rt-prose-card">
      <h3 class="rt-card-label"><i class="far fa-play-circle"></i> Video</h3>
      <div class="rt-video"><iframe src="{$row.video}" title="{$row.name|strip_tags|escape}" allowfullscreen loading="lazy"></iframe></div>
    </section>
    {/if}

    {if !empty($row.latitude)}
    <section class="rt-prose-card">
      <h3 class="rt-card-label"><i class="fas fa-map-marker-alt"></i> Location</h3>
      <div id="gmap_marker" class="gmaps rt-map"></div>
    </section>
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

    {if $package_configs.gallery_open_hide}{else}
    {if !empty($row.gallery)}
    <section class="rt-prose-card pricing-content-1">
      <h3 class="rt-card-label"><i class="far fa-images"></i> Gallery</h3>
      <div class="portfolio-content portfolio-1">
        <div id="js-filters-juicy-projects" class="cbp-l-filters-button hide">
          <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All<div class="cbp-filter-counter"></div></div>
        </div>
        <div id="js-grid-juicy-projects" class="cbp rt-gallery">
          {section name=results loop=$row.gallery}
          {assign var='R' value=V::D($row.gallery[results])}
          {if U::F('thumbnail',$R.path)}{continue}{/if}
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
    {/if}

    {if !empty($row.day1)}
    <section class="rt-prose-card">
      <h3 class="rt-card-label"><i class="far fa-calendar-alt"></i> Itinerary</h3>
      <ol class="rt-timeline">
      {for $i=1 to 10}{$day="day$i"}
        {if empty($row.$day)}{continue}{/if}
        {$P=Store::Get(['id'=>$row.$day])}
        {if empty($P)}{continue}{/if}
        {$lodge="lodge$i"}
        <li class="rt-timeline-item">
          <span class="rt-timeline-day">Day {$i}</span>
          <div class="rt-timeline-card">
            <a href="?dad=index&jc=packages&a=open&id={$P.id}" class="rt-timeline-img" target="_blank" rel="nofollow noopener noreferrer"><img src="{$P.header}" alt="{$P.name}" loading="lazy"></a>
            <div class="rt-timeline-body">
              <h4><a href="?dad=index&jc=packages&a=open&id={$P.id}" target="_blank" rel="nofollow noopener noreferrer">{$P.name}</a></h4>
              <p>{U::L(['str'=>$P.d1|strip_tags,'limit'=>286])}</p>
              <div class="rt-timeline-meta">
                {if !empty($row.$lodge)}{$L=Store::Get(['id'=>$row.$lodge])}<a href="?dad=index&jc=packages&a=open&id={$L.id}" target="_blank" title="{$L.name}" rel="nofollow noopener noreferrer"><i class="fas fa-bed"></i> {$L.name}</a>{else}<span><i class="fas fa-bed"></i> N/A</span>{/if}
                <a href="?dad=index&jc=packages&a=open&id={$P.id}" target="_blank" rel="nofollow noopener noreferrer" class="rt-link-arrow">More information <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </li>
      {/for}
      </ol>
    </section>
    {/if}

    {include file="{Vars::LoadTemp('index.packages.faqs')}"}
    {if !empty($row.d2)}<div class="rt-prose-card">{V::RP('[ID]',$row.id,$row.d2)}</div>{/if}
  </div>

  <aside class="rt-product-aside">
    <div class="rt-buybox">
      {if $row.order eq 'on' and $row.cost neq 0}
      <span class="rt-buybox-label">From</span>
      <div class="rt-buybox-price">{if $row.type eq 'rate' and $row.cost<=1}{$row.cost*100}%{else}{Cur::XE(['from'=>$row.cur,'amount'=>$row.cost])}{/if}</div>
      {if !empty($row.term_default)}<span class="rt-buybox-term">{$row.term_default|ucwords}</span>{/if}
      {else}
      <span class="rt-buybox-label">Interested?</span>
      <div class="rt-buybox-price rt-buybox-price-sm">{$row.name|strip_tags}</div>
      {/if}
      {$button}
      <ul class="rt-buybox-perks">
        <li><i class="fas fa-shield-alt"></i> Secure checkout</li>
        <li><i class="far fa-envelope"></i> Instant confirmation by email</li>
        <li><i class="fas fa-hands-helping"></i> Supports {$companyname}</li>
      </ul>
      {$buttons}
    </div>
  </aside>
</div>
