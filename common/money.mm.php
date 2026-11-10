{* ROTARY — pay with mobile money *}
<section class="rt-event-gate">
  <div class="rt-event-gate-art">
    <span class="rt-card-icon"><i class="fas fa-mobile-alt"></i></span>
    <span class="rt-eyebrow">Mobile money</span>
    <h1>Pay with mobile money</h1>
    <p>Your mobile money account will be charged</p>
    <div class="rt-result-amount" style="color:#fff">{$smarty.post.cur}{Cur::D($smarty.post.amount)}</div>
    <ul class="rt-checklist rt-checklist-light">
      <li>We'll send a prompt to your handset. Enter your PIN to confirm.</li>
      <li>Keep a balance slightly greater than the amount so your provider can process it.</li>
    </ul>
  </div>
  <form action="{$securebase}/welcome.php" class="rt-event-gate-form rt-form" id="form_sample_1" method="post">
    <input type="hidden" name="dad" value="money" />
    <input type="hidden" name="jc" value="mm" />
    <input type="hidden" name="a" value="pay" />
    <input type="hidden" name="invoice" value="{$smarty.post.invoice}" />
    <input type="hidden" name="gateway" value="{$smarty.post.gateway}" />
    <input type="hidden" name="cur" value="{$smarty.post.cur}" />
    <input type="hidden" name="amount" value="{$smarty.post.amount}" />
    <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label" for="rt-mm-num">Mobile money number <span class="required">*</span></label>
      <div class="input-icon rt-input"><i class="fas fa-mobile-alt"></i><input id="rt-mm-num" type="text" class="form-control" placeholder="e.g. 256752123456" name="number" required="required" maxlength="12" inputmode="numeric" autocomplete="tel"></div>
      <span class="help-block rt-ff-help">Country code first, without the plus sign</span>
    </div>
    <button type="submit" class="btn btn-lg btn-block rt-btn-gold"><i class="fas fa-paper-plane"></i> Initiate payment</button>
    <button type="button" class="btn btn-block rt-btn-text" onclick="location.href='{$securebase}/welcome.php?dad=money&jc=invoices';">Cancel</button>
  </form>
</section>
