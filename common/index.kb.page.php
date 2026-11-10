{* ROTARY — content page (KB page) *}
{assign var='R' value=V::D($row)}
{assign var='qns' value=Site::Get(['code'=>'index.questions','row'=>1])}
<section class="rt-kb-hero rt-kb-hero-sm rt-bleed" {if $R.header neq 'off' and $row.thumbnail neq 'off' and !empty($row.thumbnail)}style="--rt-hero-img:url('{$row.thumbnail}')"{/if}>
  <div class="container">
    <nav class="rt-crumbs" aria-label="Breadcrumb"><a href="{$base}/">Home</a><i class="fas fa-chevron-right"></i><span>{$R.title|strip_tags|truncate:60}</span></nav>
    {if !empty($R.title)}<h1>{$R.title}</h1>{/if}
    {if !empty($R.subtitle)}<p class="rt-product-sub">{$R.subtitle}</p>{/if}
    <div class="rt-meta-row"><span><i class="far fa-calendar"></i> {$R.timestamp}</span><span><i class="far fa-eye"></i> {$R.hits|number_format} views</span></div>
  </div>
</section>
<div class="rt-kb-layout {if empty($qns)}is-full{/if}">
  <article class="rt-kb-main">
    <div class="rt-prose-card">
      <div class="rt-prose">{$R.body}</div>
      <footer class="rt-article-foot"><span class="rt-muted">Have a question?</span><a href="{U::MR("{$base}/?dad=index&jc=contact")}" class="btn rt-btn-soft"><i class="far fa-envelope"></i> Contact us</a></footer>
    </div>
    {if !empty($row.latitude)}
    <section class="rt-prose-card"><h3 class="rt-card-label"><i class="fas fa-map-marker-alt"></i> Location</h3><div id="gmap_marker" class="gmaps rt-map"></div></section>
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
    {if !empty($row.gallery)}
    <section class="rt-prose-card">
      <h3 class="rt-card-label"><i class="far fa-images"></i> Gallery</h3>
      <div class="portfolio-content portfolio-1">
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
  </article>
  {if !empty($qns)}
  <aside class="rt-kb-side">
    <div class="rt-side-card rt-side-card-royal">
      <span class="rt-card-icon"><i class="far fa-question-circle"></i></span>
      <h3>{$qns.title|default:'Questions?'}</h3>
      <div class="rt-prose">{$qns.body}</div>
    </div>
  </aside>
  {/if}
</div>
