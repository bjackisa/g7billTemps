{* ROTARY — invoice KPI strip *}
{assign var="bill" value=Vars::Stats('bill')}
<div class="rt-kpis rt-kpis-3">
  <a class="rt-kpi {if $bill>0}is-cardinal{else}is-turquoise{/if}" href="{$securebase}/welcome.php?dad=money&jc=invoices&field=status&item=0">
    <span class="rt-kpi-ico"><i class="fas fa-file-invoice-dollar"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value">{Cur::XE(['amount'=>$bill|default:0.00,'F'=>1])}</span>
      <span class="rt-kpi-label">Open Balance</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi is-royal hide" href="{$securebase}/welcome.php?dad=money&jc=invoices&field=status&item=1">
    <span class="rt-kpi-ico"><i class="fas fa-university"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value">{Cur::Calc(['amount'=>Vars::Stats('paid')|default:0.00,'F'=>1])}</span>
      <span class="rt-kpi-label">Total Payments</span>
    </span>
  </a>
  <a class="rt-kpi is-violet" href="{$securebase}/welcome.php?dad=money&jc=invoices&field=status&item=3">
    <span class="rt-kpi-ico"><i class="fas fa-ban"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value">{Cur::XE(['amount'=>Vars::Stats('void')|default:0.00,'F'=>1])}</span>
      <span class="rt-kpi-label">Total Voided</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
  <a class="rt-kpi {if $account.balance<0}is-cardinal{else}is-gold{/if}" href="{if Extended::Value(['name'=>'accounts_refill','group'=>'accounts'])}?dad=accounts&jc=cnotes{else}{/if}">
    <span class="rt-kpi-ico"><i class="fas fa-wallet"></i></span>
    <span class="rt-kpi-body">
      <span class="rt-kpi-value">{Cur::XE(['amount'=>$account.balance|default:0.00,'F'=>1])}</span>
      <span class="rt-kpi-label">GWallet</span>
    </span>
    <span class="rt-kpi-go"><i class="fas fa-arrow-right"></i></span>
  </a>
</div>
