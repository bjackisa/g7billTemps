{* ROTARY — enrolment KPI strip *}
<div class="rt-kpis rt-kpis-4">
  <a class="rt-kpi is-gold" href="#">
    <span class="rt-kpi-ico"><i class="fas fa-user"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($stats.clients)}">0</span></span>
      <span class="rt-kpi-label">Total Clients</span>
    </span>
  </a>
  <a class="rt-kpi is-cardinal" href="#">
    <span class="rt-kpi-ico"><i class="fas fa-chart-bar"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($stats.enrollments)}">0</span></span>
      <span class="rt-kpi-label">Total Enrollments</span>
    </span>
  </a>
  <a class="rt-kpi is-grass" href="#">
    <span class="rt-kpi-ico"><i class="fas fa-users"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($stats.groups)}">0</span></span>
      <span class="rt-kpi-label">Total Groups</span>
    </span>
  </a>
  <a class="rt-kpi is-violet" href="#">
    <span class="rt-kpi-ico"><i class="fas fa-coins"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($stats.payments)}"></span></span>
      <span class="rt-kpi-label">Total Payments</span>
    </span>
  </a>
</div>
