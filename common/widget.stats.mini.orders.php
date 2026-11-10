{* ROTARY — orders KPI strip *}
<div class="rt-kpis rt-kpis-4">
  <a class="rt-kpi is-grass" href="?dad=orders&jc=manage">
    <span class="rt-kpi-ico"><i class="fas fa-dolly"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($orders.active)}">{Cur::D($orders.active)}</span><span class="rt-kpi-share">{Cur::D(($orders.active/$orders.total)*100)}%</span></span>
      <span class="rt-kpi-label">Active</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-gold" href="?dad=orders&jc=manage">
    <span class="rt-kpi-ico"><i class="fas fa-power-off"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($orders.suspended)}">{Cur::D($orders.suspended)}</span><span class="rt-kpi-share">{Cur::D(($orders.suspended/$orders.total)*100)}%</span></span>
      <span class="rt-kpi-label">Suspended</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-slate" href="?dad=orders&jc=manage">
    <span class="rt-kpi-ico"><i class="fas fa-flag-checkered"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($orders.ended)}">{Cur::D($orders.ended)}</span><span class="rt-kpi-share">{Cur::D(($orders.ended/$orders.total)*100)}%</span></span>
      <span class="rt-kpi-label">Ended</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-royal" href="?dad=orders&jc=manage">
    <span class="rt-kpi-ico"><i class="fas fa-chart-bar"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($orders.total)}">{Cur::D($orders.total)}</span></span>
      <span class="rt-kpi-label">Total</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
</div>
