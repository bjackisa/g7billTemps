{* ROTARY — mobile money declined *}
<section class="rt-result rt-result-error">
  <div class="rt-result-ico"><i class="fas fa-times"></i></div>
  <div class="rt-result-body">
    <span class="rt-eyebrow">Payment failed</span>
    <h1>Mobile money payment declined</h1>
    <p class="rt-result-label">Total payment amount</p>
    <div class="rt-result-amount">{$smarty.post.cur}{Cur::D($smarty.post.amount)}</div>
    <p>Your mobile money payment was declined by your provider.</p>
    <p><button type="button" class="btn rt-btn-primary" onclick="location.href='{$securebase}/welcome.php?dad=money&jc=invoices';"><i class="fas fa-arrow-left"></i> Back to invoices</button></p>
  </div>
</section>
