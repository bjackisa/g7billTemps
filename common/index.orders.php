{* ROTARY — showcase of implementations *}
<div class="rt-page-title"><div><span class="rt-eyebrow">Showcase</span><h1>Real-life implementations</h1></div></div>
<div class="rt-grid">
{section name=results loop=$rows}
{assign var='R' value=V::D($rows[results])}
{assign var='length' value="{if $R.title|strlen<=36}125{else}90{/if}"}
  <article class="rt-card">
    <a href="{$R.url}" class="rt-card-media ignore" target="_blank" rel="nofollow noopener noreferrer"><img src="{Pic::Get({$R.image})}" alt="{$R.title}" title="{$R.title}" loading="lazy"></a>
    <div class="rt-card-body">
      <h3>{$R.title|default:$R.item_name}</h3>
      <p>{U::L(['str'=>$R.description,'limit'=>$length])}</p>
      <div class="rt-card-actions"><a href="{$R.url}" class="btn rt-btn-soft ignore" target="_blank" rel="nofollow noopener noreferrer">Visit <i class="fas fa-external-link-alt"></i></a></div>
    </div>
  </article>
{/section}
</div>
