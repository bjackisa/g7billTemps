{* ROTARY — knowledge base home / category / tag listing *}
<section class="rt-kb-hero rt-bleed">
  <div class="container">
    <span class="rt-eyebrow">Knowledge base</span>
    <h1>{if !empty($smarty.request.cat)}{Vars::Get("title","kb","`id`='{$smarty.request.cat}'")}{else}How can we help?{/if}</h1>
    <form action="/" method="get" name="kb" class="rt-searchbox" role="search">
      <input type="hidden" name="dad" value="index" />
      <input type="hidden" name="jc" value="kb" />
      <i class="fas fa-search" aria-hidden="true"></i>
      <input type="text" class="form-control" placeholder="Search articles, guides and answers…" name="term" value="{if !empty($smarty.request.term)}{$smarty.request.term}{/if}" aria-label="Search the knowledge base">
      <button type="submit" class="btn rt-btn-gold">Search</button>
    </form>
  </div>
</section>

<div class="rt-kb">
  {if !empty($cats)}
  <section class="rt-kb-block {if !empty($smarty.request.cat) or !empty($smarty.request.term)}is-compact{/if}">
    <header class="rt-card-headline"><h2><i class="far fa-folder-open"></i> Browse by category</h2></header>
    <div class="rt-kb-cats">
      {section name=results loop=$cats}
      {assign var='R' value=V::D($cats[results])}
      {assign var='url' value="{Seo::Get(['def'=>"?dad=index&jc=kb&cat={$R.id}",'id'=>$R.permalink])}"}
      {if empty($R.count)||!empty($R.cats)}{continue}{/if}
      <a href="{$url}" title="{$R.title}" class="rt-kb-cat {if $smarty.request.cat eq $R.id}is-active{/if}">
        <span class="rt-kb-cat-ico"><i class="{$R.icon|default:'far fa-folder-open'}"></i></span>
        <span class="rt-kb-cat-body"><strong>{$R.title}</strong><small>{Vars::Limit($R.body|strip_tags,29)}</small></span>
        <span class="rt-kb-count">{$R.count}</span>
      </a>
      {/section}
    </div>
  </section>
  {else}
  <div class="rt-empty"><div class="rt-empty-ico"><i class="far fa-folder"></i></div><h3>No knowledge base categories found</h3></div>
  {/if}

  <div class="rt-kb-layout">
    <section class="rt-kb-main">
      {if !empty($articles)}
      <header class="rt-card-headline"><h2><i class="far fa-file-alt"></i> {Vars::Get("title","kb","`id`='{$smarty.request.cat}'")} Articles</h2></header>
      <div class="rt-article-list">
        {section name=results loop=$articles}
        {assign var='R' value=V::D($articles[results])}
        {assign var='url' value="{Seo::Get(['def'=>"?dad=index&jc=kb&a=article&id={$R.id}",'id'=>$R.permalink])}"}
        <article class="rt-article-row">
          {if $R.thumbnail!='off'}<a href="{$url}" class="rt-article-thumb"><img src="{$R.thumbnail}" title="{$R.title}" alt="{$R.title}" loading="lazy" /></a>{/if}
          <div class="rt-article-body">
            <h3><a href="{$url}" title="{$R.title}">{$R.title}</a></h3>
            <p>{U::L(['str'=>$R.body|strip_tags,'limit'=>300])}</p>
            <a href="{$url}" class="rt-link-arrow">Read article <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
        {/section}
      </div>
      <div class="rt-pager">{FF::Pagination()}</div>
      {elseif !empty($smarty.request.cat)}
      <div class="rt-empty"><div class="rt-empty-ico"><i class="far fa-file-alt"></i></div><h3>No articles found in this category</h3><a href="/?dad=index&jc=kb" class="btn rt-btn-soft">All categories</a></div>
      {else}
      <div class="rt-empty"><div class="rt-empty-ico"><i class="far fa-file-alt"></i></div><h3>No articles found</h3></div>
      {/if}
    </section>

    {if !empty($popular)}
    <aside class="rt-kb-side">
      <div class="rt-side-card">
        <h3><i class="far fa-bookmark"></i> Popular articles</h3>
        <ol class="rt-popular">
          {section name=results loop=$popular}
          {assign var='R' value=V::D($popular[results])}
          <li><a href="{U::MR("{$base}/?dad=index&jc=kb&a=article&id={$R.id}")}"><strong>{$R.title}</strong><small>{Vars::Limit($R.body|strip_tags,190)}</small></a></li>
          {/section}
        </ol>
      </div>
    </aside>
    {/if}
  </div>
</div>
