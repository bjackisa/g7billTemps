{$header}
{$top}
{literal}
<script type="text/javascript">window.addEvent && window.addEvent('domready', function() { $$('.cartRemoveItem').each(function(el) { el.addEvent('click', function(e) { e.stop(); if (confirm('{/literal}{$smarty.const.REMOVEFROMCART}{literal}')) { window.location = el.get('href'); } });  }); });</script>
{/literal}
{$boxtop}
<section class="rt-summary-card" id="cart">
  <header class="rt-card-headline"><h2><i class="fas fa-sliders-h"></i> {$smarty.const.ITEM_PRECONFIGURATION_REQUIRED}</h2></header>
  {$msg}
  <p class="rt-muted">{$smarty.const.PRECONFIG_BLUB}</p>
  <div class="rt-precfg">
    {if !empty($left_content)}<aside class="rt-precfg-side">{$boxtop}{$left_content}{$boxbottom}</aside>{/if}
    <div class="rt-precfg-main">{$boxtop}
      <h3 class="rt-ff-section-title"><i class="fas fa-shopping-bag"></i> {$smarty.const.ITEMS_REQUIRING_CONFIGS}</h3>
      {$body}
      {$boxbottom}</div>
    {if !empty($right_content)}<aside class="rt-precfg-side">{$boxtop}{$right_content}{$boxbottom}</aside>{/if}
  </div>
  <div class="rt-legend"><strong>{$smarty.const.SPINLEGEND}</strong><span>{$smarty.const.ORDERLEGEND1}</span><span>{$smarty.const.ORDERLEGEND2}</span></div>
</section>
{$boxbottom}
{$bottom}
