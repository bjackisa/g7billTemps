{* ROTARY — pay by credit / debit card *}
<div class="rt-page-title"><div><span class="rt-eyebrow">Card payment</span><h1>Pay by credit / debit card</h1></div></div>
<div class="rt-secure-note"><i class="fas fa-info-circle"></i><span>Credit / debit card transfers carry an additional processing fee of 3%.</span></div>
<section class="portlet box rt-panel rt-formcard">
  <div class="portlet-title rt-panel-head">
    <div class="caption"><i class="far fa-credit-card"></i> Payment information</div>
    <div class="tools"><a href="javascript:;" class="collapse" aria-label="Toggle"></a></div>
  </div>
  <div class="portlet-body form rt-panel-body">
    <form action="{$securebase}/welcome.php" class="form-horizontal rt-form" id="form_sample_1" method="post">
      <input type="hidden" name="dad" value="money" />
      <input type="hidden" name="jc" value="cc" />
      <input type="hidden" name="a" value="pay" />
      <input type="hidden" name="invoice" value="{$smarty.post.invoice}" />
      <input type="hidden" name="gateway" value="{$smarty.post.gateway}" />
      <div class="form-body">
        <div class="rt-ff-section"><span class="rt-ff-section-title">Billing address</span><p>As it appears on your card statement.</p></div>
        <div class="rt-field-grid">
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label" for="rt-cc-fn">First name <span class="required">*</span></label><input id="rt-cc-fn" type="text" name="fname" class="form-control" placeholder="First name" required="required" value="{$G7BILL_USERS.fname}" autocomplete="given-name"></div>
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label" for="rt-cc-ln">Last name <span class="required">*</span></label><input id="rt-cc-ln" type="text" name="lname" class="form-control" placeholder="Last name" required="required" value="{$G7BILL_USERS.lname}" autocomplete="family-name"></div>
          <div class="form-group rt-ff-stack is-wide"><label class="control-label rt-ff-label" for="rt-cc-a1">Address <span class="required">*</span></label><input id="rt-cc-a1" type="text" name="add1" class="form-control" placeholder="Street address" required="required" value="{$G7BILL_USERS.add1}" autocomplete="address-line1"></div>
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label" for="rt-cc-city">City / town <span class="required">*</span></label><input id="rt-cc-city" type="text" name="city" class="form-control" placeholder="City / town" required="required" value="{$G7BILL_USERS.city}" autocomplete="address-level2"></div>
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label" for="rt-cc-zip">Postal / ZIP code <span class="required">*</span></label><input id="rt-cc-zip" type="text" name="zip" class="form-control" placeholder="Postal / ZIP code" required="required" value="{$G7BILL_USERS.zip}" autocomplete="postal-code"></div>
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label" for="rt-cc-state">US state</label><select id="rt-cc-state" class="form-control" name="state">{Vars::States($G7BILL_USERS.state)}</select></div>
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label" for="rt-cc-country">Country <span class="required">*</span></label><select id="rt-cc-country" class="form-control" name="country" required="required">{Vars::Countries($G7BILL_USERS.country)}</select></div>
        </div>
        <div class="rt-ff-section"><span class="rt-ff-section-title">Card details</span><p><i class="fas fa-lock"></i> Sent over an encrypted connection.</p></div>
        <div class="rt-card-fields">
          <div class="form-group rt-ff-stack rt-card-number"><label class="control-label rt-ff-label" for="rt-cc-num">Card number <span class="required">*</span></label><div class="input-icon right rt-input"><i class="far fa-credit-card"></i><input id="rt-cc-num" type="text" class="form-control" placeholder="0000-0000-0000-0000" name="number" required="required" data-mask="9999-9999-9999-9999" maxlength="19" inputmode="numeric" autocomplete="cc-number"></div></div>
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label" for="rt-cc-exp">Expiry <span class="required">*</span></label><div class="input-icon right rt-input"><i class="far fa-calendar-alt"></i><input id="rt-cc-exp" type="text" class="form-control" data-mask="99/9999" placeholder="MM/YYYY" required="required" name="expiry" maxlength="7" inputmode="numeric" autocomplete="cc-exp"></div></div>
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label" for="rt-cc-cvv">CVV2 <span class="required">*</span></label><div class="input-icon right rt-input"><i class="fas fa-key"></i><input id="rt-cc-cvv" type="text" name="cvv2" class="form-control" placeholder="123" required="required" maxlength="3" inputmode="numeric" autocomplete="cc-csc"></div></div>
        </div>
      </div>
      <div class="form-actions rt-form-actions">
        <button type="button" class="btn btn-default" onclick="location.href='?welcome.php?dad=money&jc=invoices';">Cancel</button>
        <button type="submit" class="btn rt-btn-gold"><i class="fas fa-lock"></i> Make payment</button>
      </div>
    </form>
  </div>
</section>
