{* ROTARY — agent sales KPI strip (stray debug print from the original removed) *}
<div class="rt-kpis {if $agents.stats.maturing>0}rt-kpis-4{else}rt-kpis-3{/if}">
{if !empty($agents.stats.sum)}
  <a class="rt-kpi is-turquoise" href="#">
    <span class="rt-kpi-ico"><i class="fas fa-hand-holding-usd"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>{Cur::Code()}</sup><span data-counter="counterup" data-value="{$agents.stats.sum|number_format}">{$agents.stats.sum|number_format}</span></span>
      <span class="rt-kpi-label">Sales Portfolio</span>
    </span>
  </a>
{else}
  <a class="rt-kpi is-turquoise" href="?dad=agents&jc=payments&field=status&item=matured">
    <span class="rt-kpi-ico"><i class="fas fa-hand-holding-usd"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>{Cur::Code()}</sup><span data-counter="counterup" data-value="{$agents.stats.matured|number_format}">{$agents.stats.matured|number_format}</span></span>
      <span class="rt-kpi-label">Matured Payments <small>as of {U::D($agents.last)}</small></span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
{/if}
{if $agents.stats.maturing>0}
  <a class="rt-kpi is-gold" href="?dad=agents&jc=payments&field=status&item=maturing">
    <span class="rt-kpi-ico"><i class="far fa-calendar-alt"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>{Cur::Code()}</sup><span data-counter="counterup" data-value="{$agents.stats.maturing|number_format}">{$agents.stats.maturing|number_format}</span></span>
      <span class="rt-kpi-label">Pending Maturity <small>as of {U::D($agents.last)}</small></span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
{/if}
  <a class="rt-kpi is-violet" href="?dad=agents&jc=payments&field=status&item=all">
    <span class="rt-kpi-ico"><i class="fas fa-university"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>{Cur::Code()}</sup><span data-counter="counterup" data-value="{($agents.stats.matured+$agents.stats.maturing)|number_format}">{($agents.stats.matured+$agents.stats.maturing)|number_format}</span></span>
      <span class="rt-kpi-label">Total Payments <small>as of {U::D($agents.last)}</small></span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-royal" href="{if Extended::Value(['name'=>'accounts_refill','group'=>'accounts'])}?dad=accounts&jc=cnotes{else}{/if}">
    <span class="rt-kpi-ico"><i class="fas fa-wallet"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>{Cur::Code()}</sup><span data-counter="counterup" data-value="{$account.balance|number_format}">{$account.balance|number_format}</span></span>
      <span class="rt-kpi-label">GWallet Balance <small>as of {U::D()}</small></span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
</div>
