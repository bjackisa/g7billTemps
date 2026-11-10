{* ROTARY — club home content driven by KB articles (index.index.header, c2a.1, mini, c2a.2, mini2) *}
{if !empty($iih)}
{assign var='about' value="{if !empty($iih.link)}{$iih.link}{else}/about/{/if}"}
<section class="rt-section rt-section-white rt-bleed {${"index.index.header"}.class|default:''}">
  <div class="container">
    <div class="rt-intro">
      <div>
        <span class="rt-eyebrow">Welcome</span>
        <h2>{$iih.title|default:''}</h2>
        {if !empty($iih.subtitle)}<h3>{$iih.subtitle}</h3>{/if}
        <div class="rt-lead">{$iih.body|default:''}</div>
        <div class="rt-hero-cta"><a href="{$about}" class="btn btn-lg rt-btn-primary" target="{if !empty($iih.link)}_blank{/if}" title="{$iih.title}">Learn more <i class="fas fa-arrow-right"></i></a></div>
      </div>
      <div class="rt-intro-media">
        <a href="{$about}" target="{if !empty($iih.link)}_blank{/if}" title="{$iih.title}"><img src="{if !empty($iih.thumbnail)}{$iih.thumbnail}{else}{Pic::Get('1.jpg')}{/if}" alt="{$iih.title}" title="{$iih.title}" /></a>
        <div class="rt-intro-badge"><i class="fas fa-hands-helping"></i><div><strong>Service Above Self</strong><small>{$companyname}</small></div></div>
      </div>
    </div>
  </div>
</section>
{/if}

<!--obituaries-->
{assign var='limit' value=3}{include file="{Vars::LoadTemp('widget.obituaries')}"}
<!--/obituaries-->

{assign var='c2a1' value=KB::Get(['code'=>'index.index.c2a.1','limit'=>1])}
{if $c2a1}
<section class="rt-section-tight rt-bleed"><div class="container">
  <div class="rt-cta"><div class="rt-cta-inner"><h2>{$c2a1.body|default:''}</h2></div></div>
</div></section>
{/if}

{assign var='minis' value=KB::Get(['code'=>'mini','limit'=>6])}
{if !empty($minis)}
<section class="rt-section rt-section-tint rt-bleed">
  <div class="container">
    <div class="rt-section-head"><span class="rt-eyebrow">Our work</span><h2>Projects &amp; programmes</h2></div>
    <div class="rt-grid">
    {section name=results loop=$minis}
    {assign var='R' value=V::D($minis[results])}
    {assign var='tl' value="{if $R.title|strlen<34}-10{else}{$R.title|strlen}{/if}"}
    {assign var='url' value="{if !empty($R.link)}{$R.link}{else}{Seo::Get(['def'=>"?dad=index&jc=kb&a=page&id={$R.id}",'id'=>$R.permalink])}{/if}"}
      <article class="rt-card">
        {if $R.thumbnail!='off'}<a href="{$url}" class="rt-card-media"><img src="{if !U::F('_default_',$R.thumbnail)}{$R.thumbnail}{else}{Pic::Get('2.jpg')}{/if}" alt="{$R.title}" title="{$R.title}" loading="lazy" /></a>{/if}
        <div class="rt-card-body">
          {if !empty($R.icon)}<span class="rt-card-icon"><i class="{$R.icon}"></i></span>{/if}
          <h3><a href="{$url}">{$R.title}</a></h3>
          {if !empty(U::C(['text'=>$R.body]))}<p>{U::L(['str'=>$R.body|strip_tags,'limit'=>181-$tl,'fill'=>1])}</p>{/if}
          <div class="rt-card-actions">
            <a href="{$url}" class="btn rt-btn-soft" title="{$R.title}">Learn more <i class="fas fa-arrow-right"></i></a>
            {if $R.package}
            {assign var='package' value=Store::Package(['id'=>$R.package])}
            {assign var='comments' value="Donations towards {$R.title}"}
            {if $package.button}<a href="?dad=index&jc=cart&a=add&package={$package.id}&comments={$comments|urlencode}" class="btn rt-btn-gold">{$LANG.T000050} <i class="fas fa-donate"></i></a>{/if}
            {/if}
          </div>
        </div>
      </article>
    {/section}
    </div>
  </div>
</section>
{/if}

{assign var='c2a2' value=KB::Get(['code'=>'index.index.c2a.2','limit'=>1])}
{if $c2a2}
<section class="rt-section-tight rt-bleed"><div class="container">
  <div class="rt-cta rt-cta-gold"><div class="rt-cta-inner"><h2>{$c2a2.body|default:''}</h2></div></div>
</div></section>
{/if}

{assign var='minis2' value=KB::Get(['code'=>'mini2','limit'=>6])}
{if !empty($minis2)}
<section class="rt-section rt-section-white rt-bleed">
  <div class="container">
    <div class="rt-grid">
    {section name=results loop=$minis2}
    {assign var='R' value=V::D($minis2[results])}
    {assign var='tl' value="{if $R.title|strlen<34}-10{else}{$R.title|strlen}{/if}"}
    {assign var='url' value="{if !empty($R.link)}{$R.link}{else}{Seo::Get(['def'=>"?dad=index&jc=kb&a=page&id={$R.id}",'id'=>$R.permalink])}{/if}"}
      <article class="rt-card">
        {if $R.thumbnail!='off'}<a href="{$url}" class="rt-card-media"><img src="{if !U::F('_default_',$R.thumbnail)}{$R.thumbnail}{else}{Pic::Get('2.jpg')}{/if}" alt="{$R.title}" title="{$R.title}" loading="lazy" /></a>{/if}
        <div class="rt-card-body">
          {if !empty($R.icon)}<span class="rt-card-icon"><i class="{$R.icon}"></i></span>{/if}
          <h3><a href="{$url}">{$R.title}</a></h3>
          {if !empty(U::C(['text'=>$R.body]))}<p>{U::L(['str'=>$R.body|strip_tags,'limit'=>200-$tl,'fill'=>1])}</p>{/if}
          <div class="rt-card-actions">
            <a href="{$url}" class="btn rt-btn-soft" title="{$R.title}">Learn more <i class="fas fa-arrow-right"></i></a>
            {if $R.package}
            {assign var='package' value=Store::Package(['id'=>$R.package])}
            {assign var='comments' value="Donations towards {$R.title}"}
            {if $package.button}<a href="?dad=index&jc=cart&a=add&package={$package.id}&comments={$comments|urlencode}" class="btn rt-btn-gold">{$LANG.T000050} <i class="fas fa-donate"></i></a>{/if}
            {/if}
          </div>
        </div>
      </article>
    {/section}
    </div>
  </div>
</section>
{/if}
