{* ROTARY — pay to an account (no login) *}
<section class="rt-event-gate">
  <div class="rt-event-gate-art">
    <span class="rt-card-icon"><i class="fas fa-paper-plane"></i></span>
    <span class="rt-eyebrow">Quick pay</span>
    <h1>Pay to a [[CNS]] account</h1>
    <p>Pay without logging in or registering. Payments with [[CN]] are free of charge for the payer; the person or business receiving the money pays any transaction fees.</p>
  </div>
  <form action="https://my.jpesa.com/?dad=xp" method="get" name="jpesa" class="rt-event-gate-form rt-form">
    <input type="hidden" name="dad" value="xp" />
    <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label" for="rt-xp-biz">[[CNS]] account <span class="required">*</span></label>
      <div class="input-icon rt-input"><i class="far fa-user"></i><input id="rt-xp-biz" type="email" name="business" value="{$smarty.request.business|default:''}" class="form-control" placeholder="e.g. info@jolis.net" required="required"></div>
      <span class="help-block rt-ff-help">Email address of the account you want to pay</span>
    </div>
    <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label" for="rt-xp-amt">Amount <span class="required">*</span></label>
      <div class="rt-inline-form" style="flex-wrap:nowrap">
        <select class="form-control" name="cur" style="flex:0 0 96px" aria-label="Currency"><option>UGX</option><option>KES</option><option>USD</option></select>
        <input id="rt-xp-amt" type="text" class="form-control money" name="amount" value="{$smarty.request.amount|default:''}" placeholder="e.g. 12,000" required="required">
      </div>
    </div>
    <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label" for="rt-xp-ref">Reference</label>
      <div class="input-icon rt-input"><i class="fas fa-hashtag"></i><input id="rt-xp-ref" type="text" name="ref" class="form-control" placeholder="e.g. Invoice 3725" value="{$smarty.request.ref|default:''}"></div>
    </div>
    <button type="submit" class="btn btn-lg btn-block rt-btn-gold"><i class="fas fa-lock"></i> Make payment</button>
  </form>
</section>
