{* ROTARY — assessments KPI strip *}
<div class="rt-kpis rt-kpis-3">
  <a class="rt-kpi is-royal" href="?dad=assessments&jc=manage">
    <span class="rt-kpi-ico"><i class="fas fa-diagnoses"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($assessments.total)}">{Cur::D($assessments.total)}</span></span>
      <span class="rt-kpi-label">Total</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-gold" href="?dad=assessments&jc=manage">
    <span class="rt-kpi-ico"><i class="fas fa-folder-open"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($assessments.pending)}">{Cur::D($assessments.pending)}</span></span>
      <span class="rt-kpi-label">Pending</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-grass" href="?dad=assessments&jc=manage">
    <span class="rt-kpi-ico"><i class="fas fa-check-double"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{Cur::D($assessments.completed)}">{Cur::D($assessments.completed)}</span></span>
      <span class="rt-kpi-label">Completed</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
</div>
