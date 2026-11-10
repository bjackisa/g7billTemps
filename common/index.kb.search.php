{* ROTARY — knowledge base search results *}
<section class="rt-kb-hero rt-kb-hero-sm rt-bleed">
  <div class="container">
    <span class="rt-eyebrow">{$smarty.const.SEARCH_RESULTS|ucwords}</span>
    <h1>{if !empty($smarty.request.term)}&ldquo;{$smarty.request.term|escape}&rdquo;{else}Search{/if}</h1>
    <form action="/" method="get" name="kb" class="rt-searchbox" role="search">
      <input type="hidden" name="dad" value="index" />
      <input type="hidden" name="jc" value="kb" />
      <i class="fas fa-search" aria-hidden="true"></i>
      <input type="text" class="form-control" placeholder="Search articles, guides and answers…" name="term" value="{$smarty.request.term|default:''}" aria-label="Search the knowledge base">
      <button type="submit" class="btn rt-btn-gold">Search</button>
    </form>
  </div>
</section>
<section class="rt-faq">
  {if !empty($rows)}
  <div class="panel-group accordion rt-accordion" id="accordion1">
    {foreach from=$rows key=kk item=vv}
    <div class="panel rt-acc-item">
      <div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1_{$vv.id}">{Vars::Clean($vv.question)}<span class="rt-acc-ico" aria-hidden="true"></span></a></h4></div>
      <div id="collapse_1_{$vv.id}" class="panel-collapse collapse"><div class="panel-body rt-prose"><p>{Vars::Clean($vv.answer)}</p></div></div>
    </div>
    {/foreach}
  </div>
  {else}
  <div class="rt-empty"><div class="rt-empty-ico"><i class="fas fa-search"></i></div><h3>{$smarty.const.NO_RECORD}</h3><p>Try different keywords or browse the categories.</p><a href="/?dad=index&jc=kb" class="btn rt-btn-soft">Browse knowledge base</a></div>
  {/if}
</section>
