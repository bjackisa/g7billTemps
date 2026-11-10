{* ROTARY — loan calculator *}
<div class="rt-page-title"><div><span class="rt-eyebrow">Tools</span><h1>[[CNS]] {$LANG.LOAN_CALCULATOR}</h1><p class="rt-muted">A guide to the payments you will make on your loan. Enter the amount, the repayment period and cycle (daily by default), then compute.</p></div></div>
<div class="rt-calc">
  <form action="?dad=index&jc=loancalculator&a=save" method="POST" class="rt-prose-card rt-form">
    <div class="rt-field-grid">
      <div class="form-group rt-ff-stack is-wide">
        <label class="control-label rt-ff-label" for="rt-amt">Loan amount <span class="required">*</span></label>
        <div class="input-icon rt-input"><i class="fas fa-coins"></i><input id="rt-amt" type="text" class="form-control" name="amount" placeholder="e.g. 12000" required="required"></div>
        <span class="help-block rt-ff-help">Enter the loan amount</span>
      </div>
      <div class="form-group rt-ff-stack is-wide">
        <label class="control-label rt-ff-label" for="rt-rate">Rate (%) <span class="required">*</span></label>
        <div class="input-icon rt-input"><i class="fas fa-percent"></i><input id="rt-rate" type="number" step="0.001" class="form-control" name="rate" required="required" placeholder="0.50"></div>
        <span class="help-block rt-ff-help">The rate given to you by the business. Unless otherwise stated use 0.50%.</span>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label" for="rt-period">Loan period <span class="required">*</span></label>
        <input id="rt-period" type="number" min="1" class="form-control" name="period" required="required" placeholder="30">
        <span class="help-block rt-ff-help">Period in which you will pay back</span>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label" for="rt-cycle">Loan cycle <span class="required">*</span></label>
        <select id="rt-cycle" class="form-control" name="cycle">
          <option value="1" selected="selected">Days</option>
          <option value="2">Months</option>
          <option value="3">Years</option>
        </select>
      </div>
    </div>
    <div class="rt-secure-note"><i class="fas fa-info-circle"></i><span>There is a withdraw fee of UGX 1,000 when withdrawing money from your account; the computed interest includes it.</span></div>
    <div class="rt-form-actions" style="margin:0 calc(clamp(20px,3vw,34px) * -1) calc(clamp(20px,3vw,34px) * -1)">
      <button name="reset" type="reset" class="btn btn-default"><i class="fas fa-redo"></i> Reset</button>
      <button name="compute" type="submit" class="btn rt-btn-primary"><i class="fas fa-calculator"></i> Compute</button>
    </div>
  </form>
</div>
