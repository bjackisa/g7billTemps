{* ROTARY — payment success *}
<section class="rt-result rt-result-success">
  <div class="rt-result-ico"><i class="fas fa-check"></i></div>
  <div class="rt-result-body">
    <span class="rt-eyebrow">Thank you!</span>
    <h1>Payment received</h1>
    <dl class="rt-kv rt-kv-boxed">
      <div><dt>Total payment amount</dt><dd>{Cur::XE($amount_paid)}</dd></div>
      <div><dt>Transaction ID</dt><dd><code>{$auth_code}</code></dd></div>
      <div><dt>Payment description</dt><dd>{$description}</dd></div>
    </dl>
    <p>Your order will be processed automatically upon receiving notification of payment.</p>
    <p class="rt-muted">*If you paid via echeck, your order will be processed once the echeck clears (this usually takes up to 4 days). If you have any questions regarding your payment, please contact our support department.</p>
    <p class="rt-result-sign">Thank you!<br><strong>[[CN]]</strong></p>
  </div>
</section>
