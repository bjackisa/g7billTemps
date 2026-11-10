{* ROTARY — contacts KPI strip *}
<div class="rt-kpis rt-kpis-2">
  <a class="rt-kpi is-grass" href="?dad=account&jc=contacts">
    <span class="rt-kpi-ico"><i class="fas fa-user-check"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($stats.on)}">{Cur::D($stats.on)}</span></span>
      <span class="rt-kpi-label">Active Contacts</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-cardinal" href="?dad=account&jc=contacts">
    <span class="rt-kpi-ico"><i class="fas fa-user-times"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($stats.off)}">{Cur::D($stats.off)}</span></span>
      <span class="rt-kpi-label">Disabled Contacts</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
</div>
