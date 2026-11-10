{* ROTARY — knowledge base article *}
{assign var='R' value=V::D($row)}
<section class="rt-kb-hero rt-kb-hero-sm rt-bleed">
  <div class="container">
    <nav class="rt-crumbs" aria-label="Breadcrumb"><a href="{$base}/">Home</a><i class="fas fa-chevron-right"></i><a href="/?dad=index&jc=kb">Knowledge base</a><i class="fas fa-chevron-right"></i><span>{$R.title|strip_tags|truncate:60}</span></nav>
    {if !empty($R.title)}<h1>{$R.title}</h1>{/if}
    {if !empty($R.subtitle)}<p class="rt-product-sub">{$R.subtitle}</p>{/if}
    <div class="rt-meta-row"><span><i class="far fa-calendar"></i> <a href="{$link.rc}">{$R.timestamp}</a></span>{if !empty($newuid)}<a href="#comments"><i class="far fa-comments"></i> {$comments|count} comments</a>{/if}</div>
  </div>
</section>
{U::Widget(['widget'=>'share','title'=>$R.title,'image'=>$R.thumbnail])}

<div class="rt-kb-layout rt-article-layout">
  <article class="rt-kb-main">
    <div class="rt-prose-card">
      {if IS::URL($R.thumbnail)}<figure class="rt-article-cover"><img src="{$R.thumbnail}" title="{$R.title}" alt="{$R.title}" /></figure>{/if}
      <div class="rt-prose">{$R.body}</div>
      {if !empty($R.video)}<div class="rt-video"><iframe src="{$R.video}" title="{$R.title|strip_tags|escape}" allowfullscreen loading="lazy"></iframe></div>{/if}
      <footer class="rt-article-foot">
        <span class="rt-muted">Still need help?</span>
        <a href="{$securebase}/welcome.php?dad=info&jc=support" class="btn rt-btn-soft"><i class="far fa-life-ring"></i> Help desk</a>
      </footer>
    </div>

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

    <a name="comments" id="comments"></a>
    {if !empty($newuid)}
    <section class="rt-prose-card rt-comments">
      <h3 class="rt-card-label"><i class="far fa-comments"></i> Comments ({$comments|count})</h3>
      <ul class="rt-comment-list">
        <li class="rt-comment is-pinned">
          <img class="rt-comment-avatar" alt="" src="{Pic::Get('logo.png')}">
          <div class="rt-comment-body"><div class="rt-comment-head"><strong>[[CN]]</strong><time>{Vars::Date()}</time></div><p>If you have any comments or suggestions please feel free to let us know.</p></div>
        </li>
        {section name=results loop=$comments}
        {assign var='R' value=V::D($comments[results])}
        <li class="rt-comment {if $R.status neq 'on'}is-pending{/if}" {if $R.status neq 'on'}title="Pending approval"{/if}>
          <img class="rt-comment-avatar" alt="" src="{$R.avatar}">
          <div class="rt-comment-body"><div class="rt-comment-head"><strong>{$R.name}</strong><time>{$R.timestamp}</time>{if $R.status neq 'on'}<span class="rt-badge-soft">Pending approval</span>{/if}</div><div class="rt-prose">{$R.body}</div></div>
        </li>
        {/section}
      </ul>
      <h4 class="rt-card-label">Leave a comment</h4>
      <form action="/" method="post" name="kb" class="rt-form">
        <input type="hidden" name="dad" value="index" />
        <input type="hidden" name="jc" value="kb" />
        <input type="hidden" name="a" value="comment" />
        <input type="hidden" name="articles" value="{$smarty.request.id}" />
        <div class="form-group"><input type="text" name="title" placeholder="Your website (optional)" class="form-control" aria-label="Your website"></div>
        <div class="form-group"><textarea rows="5" name="body" placeholder="Write your comment…" class="form-control" aria-label="Comment"></textarea></div>
        <button type="submit" class="btn rt-btn-primary"><i class="far fa-paper-plane"></i> Post comment</button>
      </form>
    </section>
    {/if}
  </article>

  <aside class="rt-kb-side">
    <div class="rt-side-card">
      <form action="/" method="get" name="kb" class="rt-searchbox rt-searchbox-sm" role="search">
        <input type="hidden" name="dad" value="index" />
        <input type="hidden" name="jc" value="kb" />
        <i class="fas fa-search" aria-hidden="true"></i>
        <input type="text" name="term" class="form-control" placeholder="Search knowledge base" aria-label="Search knowledge base">
      </form>
    </div>
    {if (!empty($related))}
    <div class="rt-side-card"><h3><i class="far fa-file-alt"></i> Related articles</h3>
      <ul class="rt-side-links">
        {section name=results loop=$related}{assign var='R' value=V::D($related[results])}
        <li><a href="{U::MR("{$base}/?dad=index&jc=kb&a=article&id={$R.id}")}">{$R.title}</a></li>
        {/section}
      </ul>
    </div>
    {/if}
    {if (!empty($tags))}
    <div class="rt-side-card"><h3><i class="fas fa-tags"></i> Tags</h3>
      <div class="rt-tags">
        {section name=results loop=$tags}{assign var='R' value=V::D($tags[results])}
        <a href="{U::MR("{$base}/?dad=index&jc=kb&tag={$R.id}")}" class="rt-tag">{$R.title}</a>
        {/section}
      </div>
    </div>
    {/if}
    {if (!empty($links))}
    <div class="rt-side-card"><h3><i class="fas fa-link"></i> Quicklinks</h3>
      <ul class="rt-side-links">
        {section name=results loop=$links}{assign var='R' value=V::D($links[results])}
        <li><a href="{$R.body}" target="_blank" rel="nofollow noopener noreferrer">{$R.title} <i class="fas fa-external-link-alt"></i></a></li>
        {/section}
      </ul>
    </div>
    {/if}
    {if (!empty($cats))}
    <div class="rt-side-card"><h3><i class="far fa-folder-open"></i> Categories</h3>
      <ul class="rt-side-links">
        {section name=results loop=$cats}{assign var='R' value=V::D($cats[results])}
        {if $R.count<=0}{continue}{/if}
        <li><a href="{U::MR("{$base}/?dad=index&jc=kb&cat={$R.id}")}">{$R.title} <span class="rt-kb-count">{$R.count}</span></a></li>
        {/section}
      </ul>
    </div>
    {/if}
  </aside>
</div>
