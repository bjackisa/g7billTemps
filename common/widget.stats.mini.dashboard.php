{* ROTARY — dashboard KPI strip (preloaded stats) *}
{assign var="bill" value=Vars::Stats('bill')}
<div class="rt-kpis rt-kpis-4">
  <a class="rt-kpi {if $inv.due>0}is-cardinal{else}is-turquoise{/if}" href="?dad=money&jc=invoices&field=status&item=0">
    <span class="rt-kpi-ico"><i class="fas fa-file-invoice-dollar"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>{Cur::XE(['prefix'=>1])}</sup><span data-counter="counterup" data-value="{Cur::D(Cur::XE(['amount'=>$inv.due,'_API_'=>1]))}">0</span></span>
      <span class="rt-kpi-label">Outstanding Bill</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi {if $act.balance>0}is-turquoise{elseif $act.balance<0}is-cardinal{else}is-royal{/if}" href="{if Extended::Value(['name'=>'accounts_refill','group'=>'accounts'])}?dad=accounts&jc=cnotes{else}{/if}">
    <span class="rt-kpi-ico"><i class="fas fa-wallet"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>{Cur::XE(['prefix'=>1])}</sup><span data-counter="counterup" data-value="{Cur::D(Cur::XE(['amount'=>$act.balance,'_API_'=>1]))}">0</span></span>
      <span class="rt-kpi-label">GWallet</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-grass" href="?dad=info&jc=support">
    <span class="rt-kpi-ico"><i class="fas fa-life-ring"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{$hd.total}">0</span></span>
      <span class="rt-kpi-label">Help Desk Tickets</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-violet" href="">
    <span class="rt-kpi-ico"><i class="fas fa-layer-group"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{$store.orders.total}">0</span></span>
      <span class="rt-kpi-label">Orders</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
</div>
