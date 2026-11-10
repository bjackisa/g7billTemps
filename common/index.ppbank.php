{* ROTARY — bank / offline payment instructions *}
<section class="rt-result">
  <div class="rt-result-ico"><i class="fas fa-university"></i></div>
  <div class="rt-result-body">
    <span class="rt-eyebrow">Order process complete</span>
    <h1>Complete your payment</h1>
    <div class="rt-bank">
      <dl class="rt-kv rt-kv-boxed">
        <div class="rt-kv-strong"><dt>Amount due</dt><dd>{Cur::XE($amount_due)}</dd></div>
        <div><dt>Invoice number</dt><dd>{$invoice_id}</dd></div>
        <div><dt>Order ID</dt><dd>{$order_id}</dd></div>
        <div><dt>Payment description</dt><dd>{$description}</dd></div>
      </dl>
      {if !empty($bank)}
      <div class="rt-bank-card">
        {if !empty($bank.logo)}<img src="{$bank.logo}" alt="{$bank.name}" class="rt-bank-logo" />{/if}
        <h3>Bank details</h3>
        <dl class="rt-kv">
          <div><dt>A/C name</dt><dd>{$bank.account_name}</dd></div>
          <div><dt>A/C number</dt><dd><code>{$bank.account_number}</code></dd></div>
          <div><dt>Bank name</dt><dd>{$bank.name}</dd></div>
          <div><dt>Bank branch</dt><dd>{$bank.branch}</dd></div>
        </dl>
      </div>
      {/if}
    </div>
    <p><a href="#" class="btn rt-btn-soft" onclick='window.open("{$securebase}/viewitem.php?action=invoice&uid={U::EN($invoice_id)}&pdf=1","viewer","width=545,height=570,status=yes,scrollbars=1,resizable=1");return false;'><i class="far fa-file-pdf"></i> View / print invoice</a></p>
    <p>Your order will be processed automatically upon receiving notification of payment.</p>
    <p class="rt-muted">*If you paid via echeck, your order will be processed once the echeck clears (this usually takes up to 4 days). If you have any questions regarding your payment, please contact our support department.</p>
    <p class="rt-result-sign">Thank you!<br><strong>[[CN]]</strong></p>
  </div>
</section>
