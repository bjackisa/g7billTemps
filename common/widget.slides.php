{assign var='rows' value=Site::Slides()}
{if !empty($rows)}
<section class="rt-hero rt-bleed carousel slide carousel-fade" id="rt-hero" data-ride="carousel" data-interval="7000" aria-label="Highlights">
  <div class="carousel-inner" role="listbox">
  {assign var='i' value=0}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
    <div class="item {if $i eq 0}active{/if}">
      <img src="{$R.thumbnail}" alt="{$R.title|strip_tags|escape}">
      {if !U::F('title',$R.hide)}
      <div class="rt-hero-caption">
        <div class="container">
          <div class="rt-hero-box">
            <span class="rt-eyebrow">{$companyname|default:'Rotary'}</span>
            <h1>{$R.title}</h1>
            <div class="rt-hero-cta">
              {if E::V(['name'=>'user_signup','group'=>'user']) and empty($newuid)}<a href="/account/?sa=signup" class="btn btn-lg rt-btn-gold"><i class="fa fa-user-plus"></i> Become a Member</a>{/if}
              <a href="/about/" class="btn btn-lg rt-btn-ghost">Discover our work <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      {/if}
    </div>
  {assign var='i' value=$i+1}{/section}
  </div>
  {if $rows|count > 1}
  <ol class="carousel-indicators">
  {assign var='i' value=0}
  {section name=results loop=$rows}
    <li data-target="#rt-hero" data-slide-to="{$i}" class="{if $i eq 0}active{/if}"></li>
  {assign var='i' value=$i+1}{/section}
  </ol>
  <a class="left carousel-control" href="#rt-hero" role="button" data-slide="prev"><span class="rt-arrow"><i class="fas fa-chevron-left"></i></span><span class="sr-only">Previous</span></a>
  <a class="right carousel-control" href="#rt-hero" role="button" data-slide="next"><span class="rt-arrow"><i class="fas fa-chevron-right"></i></span><span class="sr-only">Next</span></a>
  {/if}
  <div class="rt-hero-stripe rt-ribbon"></div>
</section>
{/if}
