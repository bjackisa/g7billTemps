{* ROTARY — continue to payment *}
<div class="rt-page-title">
  <div><span class="rt-eyebrow">Checkout</span><h1>Payment</h1></div>
  <ol class="rt-steps" aria-label="Checkout progress">
    <li class="is-done"><span><i class="fas fa-check"></i></span> Cart</li>
    <li class="is-done"><span><i class="fas fa-check"></i></span> Details</li>
    <li class="is-active"><span>3</span> Payment</li>
  </ol>
</div>
<section class="rt-result">
  <div class="rt-result-ico"><i class="far fa-credit-card"></i></div>
  <div class="rt-result-body">
    <p class="rt-result-label">Your account will be charged</p>
    <div class="rt-result-amount">{Cur::XE(['amount'=>$total_charge,'from'=>$inv.cur])}</div>
    <p>Click the <strong>Continue to Payment</strong> button below. After completing your payment, click <strong>continue</strong>. Depending on internet traffic the process may take some time. Please be patient. Thank you!</p>
    {if !empty($total_charge)}<div class="rt-gateway">{$GATEWAY|replace:'formfield':'btn btn-lg rt-btn-gold'|replace:'formfield':'btn btn-lg rt-btn-gold'}</div>{/if}
    <p class="rt-result-foot"><a href="{$securebase}/welcome.php?dad=money&jc=invoices"><i class="far fa-file-alt"></i> My invoices</a></p>
  </div>
</section>
