{* ROTARY — affiliate dashboard KPIs *}
<div class="rt-kpis rt-kpis-4">
  <div class="rt-kpi is-gold">
    <span class="rt-kpi-ico"><i class="fas fa-hourglass-half"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>{$config.default_currency}</sup><span data-counter="counterup" data-value="{Cur::D($pb)}">{$pb}</span></span>
      <span class="rt-kpi-label">Pending balance</span>
    </span>
  </div>
  <div class="rt-kpi is-grass">
    <span class="rt-kpi-ico"><i class="fas fa-chart-bar"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>{$config.default_currency}</sup><span data-counter="counterup" data-value="{Cur::D($te)}">{$te}</span></span>
      <span class="rt-kpi-label">Total earnings</span>
    </span>
  </div>
  <div class="rt-kpi is-royal">
    <span class="rt-kpi-ico"><i class="fas fa-shopping-cart"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($ts)}">{$ts}</span></span>
      <span class="rt-kpi-label">Total sales</span>
    </span>
  </div>
  <div class="rt-kpi is-violet">
    <span class="rt-kpi-ico"><i class="fas fa-globe-africa"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($row.hits)}">{$row.hits}</span></span>
      <span class="rt-kpi-label">Total hits</span>
    </span>
  </div>
</div>
