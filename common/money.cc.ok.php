{* ROTARY — card charge accepted *}
<section class="rt-result rt-result-success">
  <div class="rt-result-ico"><i class="far fa-credit-card"></i></div>
  <div class="rt-result-body">
    <span class="rt-eyebrow">Thank you!</span>
    <h1>Card charge accepted</h1>
    <dl class="rt-kv rt-kv-boxed">
      <div class="rt-kv-strong"><dt>Total payment amount</dt><dd>{Cur::XE($amount_paid)}</dd></div>
      <div><dt>Transaction ID</dt><dd><code>{$auth_code}</code></dd></div>
    </dl>
    <p class="rt-muted">Your order will be processed automatically once our team completes its review.</p>
  </div>
</section>
