{* ROTARY — bulk enrolment KPI strip *}
<div class="rt-kpis rt-kpis-3">
  <a class="rt-kpi is-grass" href="?dad=bulk&jc=users">
    <span class="rt-kpi-ico"><i class="fas fa-users"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($bulk.users)}">{Cur::D($bulk.users)}</span></span>
      <span class="rt-kpi-label">Users</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-gold" href="?dad=bulk&jc=enrollments">
    <span class="rt-kpi-ico"><i class="fas fa-shopping-basket"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($bulk.enrollments)}">{Cur::D($bulk.enrollments)}</span><span class="rt-kpi-share">{Cur::D(($bulk.enrollments/$bulk.users)*100)}%</span></span>
      <span class="rt-kpi-label">Enrollments</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-royal" href="?dad=bulk&jc=payments">
    <span class="rt-kpi-ico"><i class="fas fa-coins"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($bulk.payments)}">{Cur::D($bulk.payments)}</span></span>
      <span class="rt-kpi-label">Payments</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
</div>
