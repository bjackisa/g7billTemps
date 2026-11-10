{* ROTARY — firewall KPI strip *}
<div class="rt-kpis rt-kpis-3">
  <a class="rt-kpi is-royal" href="?dad=firewall&jc=whitelists">
    <span class="rt-kpi-ico"><i class="fas fa-shield-alt"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{$total.whitelists}">{$total.whitelists}</span></span>
      <span class="rt-kpi-label">Total Whitelists</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-cardinal" href="?dad=firewall&jc=whitelists">
    <span class="rt-kpi-ico"><i class="fas fa-ban"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{$total.blacklists}">{$total.blacklists}</span></span>
      <span class="rt-kpi-label">Total Blacklists</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-gold" href="?dad=firewall&jc=whitelists">
    <span class="rt-kpi-ico"><i class="fas fa-hourglass-half"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><span data-counter="counterup" data-value="{$pending.whitelists}">{$pending.whitelists}</span></span>
      <span class="rt-kpi-label">Pending Whitelists</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
</div>
