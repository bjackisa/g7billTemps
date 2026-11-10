{* ROTARY — accounts documents KPI strip *}
<div class="rt-kpis rt-kpis-4">
  <a class="rt-kpi is-royal" href="?dad=accounts&jc=invoices">
    <span class="rt-kpi-ico"><i class="fas fa-file-invoice"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>{$accounts.cur}</sup><span data-counter="counterup" data-value="{Cur::D($accounts.invoices)}">0.0</span></span>
      <span class="rt-kpi-label">Total Invoices</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-turquoise" href="?dad=accounts&jc=cnotes">
    <span class="rt-kpi-ico"><i class="fas fa-arrow-down"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>{$accounts.cur}</sup><span data-counter="counterup" data-value="{Cur::D($accounts.credits)}">0.0</span></span>
      <span class="rt-kpi-label">Total Credits</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-cardinal" href="?dad=accounts&jc=dnotes">
    <span class="rt-kpi-ico"><i class="fas fa-arrow-up"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>{$accounts.cur}</sup><span data-counter="counterup" data-value="{Cur::D($accounts.debits)}">0.0</span></span>
      <span class="rt-kpi-label">Total Debits</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-sky" href="?dad=accounts&jc=quotations">
    <span class="rt-kpi-ico"><i class="fas fa-file-signature"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>{$accounts.cur}</sup><span data-counter="counterup" data-value="{Cur::D($accounts.quotes)}">0.0</span></span>
      <span class="rt-kpi-label">Total Quotations</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
</div>
