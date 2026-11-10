{* ROTARY — multi-currency wallet KPI strip *}
<div class="rt-kpis rt-kpis-3">
  <a class="rt-kpi {if $account.UGX.balance<0}is-cardinal{else}is-grass{/if}" href="?dad=account&jc=accounts">
    <span class="rt-kpi-ico"><i class="fas fa-wallet"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>UGX</sup><span data-counter="counterup" data-value="{Cur::D($account.UGX.balance)}">{Cur::D($account.UGX.balance)}</span></span>
      <span class="rt-kpi-label">UGX GWallet Balance</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi {if $account.KES.balance<0}is-cardinal{else}is-gold{/if}" href="?dad=account&jc=accounts">
    <span class="rt-kpi-ico"><i class="fas fa-wallet"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>KES</sup><span data-counter="counterup" data-value="{Cur::D($account.KES.balance)}">{Cur::D($account.KES.balance)}</span></span>
      <span class="rt-kpi-label">KES GWallet Balance</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi {if $account.USD.balance<0}is-cardinal{else}is-royal{/if}" href="?dad=account&jc=accounts">
    <span class="rt-kpi-ico"><i class="fas fa-wallet"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value"><sup>USD</sup><span data-counter="counterup" data-value="{Cur::D($account.USD.balance)}">{Cur::D($account.USD.balance)}</span></span>
      <span class="rt-kpi-label">USD GWallet Balance</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
</div>
