{if empty($rows)}{assign var='_rt_lib' value=Lib::Load('stores')}{assign var='rows' value=Store::Get(['limit'=>$limit|default:'6','featured'=>1,'product'=>$product|default:0])}{/if}
{if $rows|count eq 1}{assign var='rt_grid' value='rt-grid-1'}
{elseif $rows|count eq 2}{assign var='rt_grid' value='rt-grid-2'}
{else}{assign var='rt_grid' value=''}{/if}
{assign var='csrf' value=CSRF::Token()}
{assign var='rt_pk_home' value=0}{if (empty($smarty.request.dad) or $smarty.request.dad eq 'index') and (empty($smarty.request.jc) or $smarty.request.jc eq 'index')}{assign var='rt_pk_home' value=1}{/if}
{if !empty($rows)}
{if $rt_pk_home}<section class="rt-section rt-section-white rt-bleed"><div class="container">
<div class="rt-section-head"><span class="rt-eyebrow">Get involved</span><h2>Ways to support &amp; take part</h2><p>Membership, causes and programmes you can join or support today.</p></div>{/if}
<div class="rt-grid {$rt_grid}">
{section name=results loop=$rows}
{assign var='R' value=V::D($rows[results])}
{assign var='term' value="{if $R.term_default!='once'}{$R.term_default}{else}{/if}"}
{if $R.order eq 'on' and (!$R.amount_hide||$R.amount_hide eq 'off')}
{assign var='price' value="From {if $R.type eq 'rate' and $rows[results].cost<=1}{$rows[results].cost*100}%{else}{Cur::XE(['from'=>$R.cur,'amount'=>$rows[results].cost])}{/if} {$term|ucwords}"}
{else}{assign var='price' value=''}{/if}
{assign var='url' value="{Seo::Get(['def'=>"?dad=index&jc=packages&a=open&id={$R.id}",'id'=>$R.permalink])}"}
{assign var='name' value="{$R.title}"}
{if $R.order eq 'on'}
{assign var='button' value="<a id='{$R.id}' onclick=\"Ajax('/?dad=index&jc=cart&a=add&package={$R.id}');document.getElementById('_{$R.id}').style.display = ''; this.style.display = 'none';\" class='btn rt-btn-primary mt-ladda-btn ladda-button mt-progress-demo' data-style='slide-right' style='{if !empty($_G7BILL_.theme.button.addtocart)}{$_G7BILL_.theme.button.addtocart}{/if}'> <span class='ladda-label'>{$LANG.T000016} <i class='{$LANG.T000018}'></i></span></a>"}
{else}{assign var='button' value="<a href='?dad=index&jc=contact' class='btn rt-btn-primary'> Contact Us <i class='fa fa-comments'></i></a>"}{/if}
  <article class="rt-card">
    <a href="{$url}" class="rt-card-media" title="{$R.name}">
      {if !empty($R.def)}<span class="rt-card-tag rt-tag-gold"><i class="fa fa-star"></i> Featured</span>{/if}
      <img src="{$R.thumbnail}" alt="{$R.name}" title="{$R.name}" loading="lazy">
    </a>
    <div class="rt-card-body">
      <h3><a href="{$url}" title="{$R.name}">{U::L(['str'=>$name,'limit'=>62])}</a></h3>
      <p>{if U::F('widget.packages.desc.php',$R.description)}{include file="widget.packages.desc.php"}{else}{$R.desc}{/if}</p>
      <div class="rt-card-actions">
        <a href="{$url}" class="btn rt-btn-soft" style="{if !empty($_G7BILL_.theme.button.learnmore)}{$_G7BILL_.theme.button.learnmore}{/if}" title="{$R.name}">Learn more <i class="fa fa-info-circle"></i></a>
        {if $R.order_button neq 'add_to_cart'}<a href="{if $R.order_button eq 'pay_now'}?dad=index&jc=order&a=form&package={$R.id}{else}?dad=index&jc=cart&a=add&package={$R.id}{/if}" class="btn rt-btn-gold">{U::RP('_',' ',$R.order_button)|ucwords} <i class="{$LANG.T000018}"></i></a>
        {else}
        <a id="_{$R.id}" href="?dad=index&jc=cart" class="btn rt-btn-gold" style="display:none;">{$LANG.T000017} <i class="{$LANG.T000018}"></i></a>
        {if !empty($R.type)}{if Cart::IS(['key'=>'item_id','value'=>$R.id])}<a href="?dad=index&jc=cart" class="btn rt-btn-gold">{$LANG.T000017} <i class="{$LANG.T000018}"></i></a>{else}{$button}{/if}{/if}
        {/if}
      </div>
    </div>
  </article>
{/section}
</div>
{if $rt_pk_home}</div></section>{/if}
{else}{if $smarty.request.jc eq 'packages'}{Msgs::Error($LANG.E000079)}{/if}{/if}
