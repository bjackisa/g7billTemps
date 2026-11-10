{* ROTARY — SMS KPI strip *}
<div class="rt-kpis rt-kpis-4">
  <a class="rt-kpi is-gold" href="{if Extended::Value(['name'=>'accounts_refill','group'=>'accounts'])}?dad=accounts&jc=cnotes{else}{/if}">
    <span class="rt-kpi-ico"><i class="fas fa-wallet"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::XE(['amount'=>$account.balance|default:0.00,'F'=>1])}">0</span></span>
      <span class="rt-kpi-label">GWallet</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-cardinal" href="?dad=vsms&jc=sc">
    <span class="rt-kpi-ico"><i class="far fa-bell"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($vsms.schedules)}">0</span></span>
      <span class="rt-kpi-label">Total Schedules</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-grass" href="?dad=vsms&jc=out">
    <span class="rt-kpi-ico"><i class="fas fa-paper-plane"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($vsms.outbox)}">0</span></span>
      <span class="rt-kpi-label">Total Outbox</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-violet" href="?dad=vsms&jc=in">
    <span class="rt-kpi-ico"><i class="fas fa-inbox"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($vsms.inbox)}"></span></span>
      <span class="rt-kpi-label">Total Inbox</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
</div>
