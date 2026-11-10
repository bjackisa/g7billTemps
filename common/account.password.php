{* ROTARY — password & security question *}
<section class="portlet box rt-panel rt-formcard">
  <div class="portlet-title rt-panel-head">
    <div class="caption"><i class="fas fa-key"></i> Credential reset</div>
    <div class="tools"><a href="javascript:;" class="collapse" aria-label="Toggle"></a></div>
  </div>
  <div class="portlet-body form rt-panel-body">
    <form action="{$securebase}/welcome.php" class="form-horizontal rt-form" id="form_sample_1" method="post">
      <input type="hidden" name="dad" value="account" />
      <input type="hidden" name="jc" value="password" />
      <input type="hidden" name="a" value="save" />
      <input type="hidden" name="igr" value="1" />
      <div class="form-body">
        <div class="rt-ff-section"><span class="rt-ff-section-title">Password</span><p>Use a long, unique password you don't use anywhere else.</p></div>
        <div class="form-group rt-ff">
          <label class="control-label rt-ff-label" for="rt-pw-cur">Current password <span class="required">*</span></label>
          <div class="rt-ff-control"><div class="input-icon right rt-input"><i class="fas fa-lock"></i><input id="rt-pw-cur" type="password" name="current_password" class="form-control" placeholder="Current password" required="required" value="" autocomplete="current-password"></div><span class="help-block rt-ff-help">Your current password to this portal</span></div>
        </div>
        <div class="form-group rt-ff last password-strength">
          <label class="control-label rt-ff-label" for="password_strength">New password <span class="required">*</span></label>
          <div class="rt-ff-control"><div class="input-icon right rt-input"><i class="fas fa-key"></i><input type="password" name="password" class="form-control" placeholder="New password" required="required" value="" id="password_strength" autocomplete="new-password"></div><span class="help-block rt-ff-help">Enter your new password</span></div>
        </div>
        <div class="form-group rt-ff">
          <label class="control-label rt-ff-label" for="rt-pw-2">Confirm new password <span class="required">*</span></label>
          <div class="rt-ff-control"><div class="input-icon right rt-input"><i class="fas fa-key"></i><input id="rt-pw-2" type="password" name="password2" class="form-control" placeholder="Confirm password" required="required" value="" autocomplete="new-password"></div><span class="help-block rt-ff-help">Type the new password again</span></div>
        </div>
        <div class="rt-ff-section"><span class="rt-ff-section-title">Security question &amp; answer</span><p>A shared secret used as an extra check, usually during telephone support.</p></div>
        <div class="form-group rt-ff">
          <label class="control-label rt-ff-label" for="rt-pw-q">Security question <span class="required">*</span></label>
          <div class="rt-ff-control"><div class="input-icon right rt-input"><i class="far fa-question-circle"></i><input id="rt-pw-q" type="text" name="lpquestion" class="form-control" placeholder="Security question" required="required" value="{$G7BILL_USERS.lpquestion}"></div></div>
        </div>
        <div class="form-group rt-ff">
          <label class="control-label rt-ff-label" for="rt-pw-a">Security answer</label>
          <div class="rt-ff-control"><div class="input-icon right rt-input"><i class="fas fa-unlock"></i><input id="rt-pw-a" type="text" name="lpanswer" class="form-control" placeholder="Security answer" value="{$G7BILL_USERS.lpanswer}"></div><span class="help-block rt-ff-help">The answer to the question above</span></div>
        </div>
      </div>
      <div class="form-actions rt-form-actions">
        <button type="button" class="btn btn-default" onclick="location.href='?welcome.php';">Cancel</button>
        <button type="submit" class="btn rt-btn-primary"><i class="far fa-save"></i> Save credentials</button>
      </div>
    </form>
  </div>
</section>
