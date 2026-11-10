{* ROTARY — packages intro + filter bar *}
{assign var='search_widget_show' value="{if $smarty.request.dad eq 'index' and ($smarty.request.jc eq 'index' or $smarty.request.jc eq 'packages') and !$smarty.request.a}TRUE{else}FALSE{/if}"}
<section class="rt-filterbar {if $product.d1|strip_tags|strlen<10}hide{/if}">
  <div class="rt-filterbar-intro">
    <h2><i class="fas fa-sliders-h"></i> {$product.d1|default:'TOP PICKS FOR [[YEAR]]'}</h2>
    <p>{$product.header|default:'[[CN]] offers a wide range of products and services in order to support SMEs in their business in the domestic and international market.'}</p>
  </div>
  <form action="/" method="post" class="rt-filters {if !$product or $product.filters_status eq 'off'}hide{/if} {if !$search_widget_show}is-collapsed{/if}" enctype="multipart/form-data">
    <input type="hidden" name="dad" value="index" />
    <input type="hidden" name="jc" value="packages" />
    <input type="hidden" name="id" value="{$smarty.request.id}" />
    <label class="rt-filter rt-filter-search"><span><i class="fas fa-search"></i> By name</span>{FF::Text(['name'=>'name','value'=>$smarty.post.name|default:'','_min_'=>1])}</label>
    <label class="rt-filter {if empty($budget)}hide{/if}"><span><i class="fas fa-funnel-dollar"></i> Budget</span>{FF::Select(['name'=>'budget','value'=>$smarty.post.budget|default:'','options'=>$budget,'assoc'=>1,'_min_'=>1])}</label>
    <label class="rt-filter {if empty($groups)}hide{/if}"><span><i class="{$LANG.T000002}"></i> {$LANG.T000001}</span>{FF::Select(['name'=>'group','value'=>$smarty.post.group|default:'','options'=>$groups,'assoc'=>1,'_min_'=>1])}</label>
    <label class="rt-filter {if empty($cats)}hide{/if}"><span><i class="{$LANG.T000004}"></i> {$LANG.T000003}</span>{FF::Select(['name'=>'category','value'=>$smarty.post.category|default:'','options'=>$cats,'assoc'=>1,'_min_'=>1])}</label>
    <label class="rt-filter {if empty($tags)}hide{/if}"><span><i class="fas fa-tags"></i> Tag</span>{FF::Select(['name'=>'tags','value'=>$smarty.post.tags|default:'','options'=>$tags,'assoc'=>1,'_min_'=>1])}</label>
    <div class="rt-filter-actions">
      <button type="reset" class="btn rt-btn-text"><i class="fas fa-redo"></i> Reset</button>
      <button type="submit" name="submit" value="{$LANG.T000005}" class="btn rt-btn-primary"><i class="fas fa-filter"></i> {$LANG.T000005}</button>
    </div>
  </form>
</section>
