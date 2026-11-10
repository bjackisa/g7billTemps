{* ROTARY — additional contacts KPIs *}
<div class="rt-kpis rt-kpis-4">
  <div class="rt-kpi is-royal">
    <span class="rt-kpi-ico"><i class="fas fa-envelope-open-text"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{$stats.email+$stats.sms|number_format}">0</span></span>
      <span class="rt-kpi-label">Email &amp; SMS contacts</span>
    </span>
  </div>
  <div class="rt-kpi is-gold">
    <span class="rt-kpi-ico"><i class="fas fa-building"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{$stats.all|number_format}">0</span></span>
      <span class="rt-kpi-label">All departments</span>
    </span>
  </div>
  <div class="rt-kpi is-violet">
    <span class="rt-kpi-ico"><i class="fas fa-life-ring"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{$stats.support|number_format}">0</span></span>
      <span class="rt-kpi-label">Support department</span>
    </span>
  </div>
  <div class="rt-kpi is-turquoise">
    <span class="rt-kpi-ico"><i class="fas fa-coins"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{$stats.accounts|number_format}">0</span></span>
      <span class="rt-kpi-label">Accounts department</span>
    </span>
  </div>
</div>
