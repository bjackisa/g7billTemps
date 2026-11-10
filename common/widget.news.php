{* ROTARY — news list (home, replaces the hero when news exists) *}
<section class="rt-section rt-section-white rt-bleed">
  <div class="container">
    <div class="rt-section-head rt-left"><span class="rt-eyebrow">Latest</span><h2>Club news <span class="badge badge-warning" style="vertical-align:middle;font-size:13px">{$news|count}</span></h2></div>
    <div class="rt-news">
    {section name=results loop=$news}
    {assign var='R' value=V::D($news[results])}
      <article class="rt-news-item">
        <div class="rt-news-date">{$R.timestamp}</div>
        <div>
          <h3><a href="?dad=index&jc=kb&a=article&id={$R.id}">{$R.title}</a></h3>
          <p>{U::L(['str'=>$R.body|strip_tags,'limit'=>320])}</p>
        </div>
        <a href="?dad=index&jc=kb&a=article&id={$R.id}" class="rt-news-go" aria-label="Read {$R.title|strip_tags|escape}"><i class="fas fa-arrow-right"></i></a>
      </article>
    {/section}
    </div>
  </div>
</section>
