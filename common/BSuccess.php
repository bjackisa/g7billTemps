{$header}
{$top}
{$boxtop}
<section class="rt-result" id="mainData">
  <div class="rt-result-ico"><i class="fas fa-university"></i></div>
  <div class="rt-result-body" id="mainTD">
    <span class="rt-eyebrow">{$smarty.const.QSTITLE}</span>
    <p class="rt-result-label">{$smarty.const.QSTOTAL}</p>
    <div class="rt-result-amount">{$vars->GetPrice($total_charge)}</div>
    <div class="rt-bank-card"><h3>{$smarty.const.BANKTO}</h3><p>{Vars::Clean(Vars::Get("cvalue","config_data","`cname`='bankinfo'"))}</p></div>
    <dl class="rt-kv rt-kv-boxed">
      <div><dt>{$smarty.const.QINVOICEID}</dt><dd>{$invoice_id}</dd></div>
      <div><dt>{$smarty.const.QORDERID}</dt><dd>{$order_id}</dd></div>
    </dl>
    <p><a href="#" class="btn rt-btn-soft" onclick='window.open("{$securebase}/viewitem.php?action=invoice&uid={U::EN($invoice_id)}&pdf=1","viewer","width=545,height=570,status=yes,scrollbars=1,resizable=1");return false;'><i class="far fa-file-pdf"></i> {$smarty.const.VIEWPRINTINV}</a></p>
    <p>{$smarty.const.UPONRECEIPT}</p>
    <p class="rt-muted">{$smarty.const.CONTACTSUPPORT}</p>
    <p class="rt-result-sign">{$smarty.const.THANKYOU}<br><strong>{$smarty.config.companyname}</strong></p>
    <p class="rt-muted">{$smarty.const.QSBLURB1}</p>
    <p class="rt-muted">{$smarty.const.THANKYOUAD}</p>
  </div>
</section>
{$boxbottom}
{$bottom}
