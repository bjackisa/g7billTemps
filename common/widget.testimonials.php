{* ROTARY — testimonials *}
{assign var='_rt_lib' value=Lib::Load('hd')}{assign var='rows' value=HD::Testimonials(['limit'=>$limit|default:'4'])}
{if !empty($rows)}
<section class="rt-section rt-section-tint rt-bleed">
  <div class="container">
    <div class="rt-section-head"><span class="rt-eyebrow">Voices</span><h2>What members &amp; partners say</h2></div>
    <div class="rt-grid {if $rows|count eq 1}rt-grid-1{else}rt-grid-2{/if}">
    {section name=results loop=$rows}
    {assign var='R' value=V::D($rows[results])}
      <figure class="rt-quote">
        <div class="rt-quote-stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
        <blockquote>{U::L(['str'=>$R.body|strip_tags,'limit'=>110])}</blockquote>
        <figcaption class="rt-quote-foot">
          <span class="rt-quote-author"><span class="rt-avatar">{$R.title|strip_tags|truncate:1:''|upper}</span>{$R.title}</span>
          <a href="?dad=index&jc=kb&a=testimonials" class="rt-link-arrow">Read more <i class="fas fa-arrow-right"></i></a>
        </figcaption>
      </figure>
    {/section}
    </div>
  </div>
</section>
{/if}
