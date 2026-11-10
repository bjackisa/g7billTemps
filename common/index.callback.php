{* ROTARY — "call me back" modal (opened by the floating Call chip via #responsive) *}
<script src="https://www.google.com/recaptcha/api.js?render={Extended::Value(['name'=>'google_recaptcha_site'])}"></script>
{literal}
<script>
 grecaptcha.ready(function () {
    grecaptcha.execute('{/literal}{Extended::Value(['name'=>'google_recaptcha_site'])}{literal}', { action: 'login' }).then(function (token) {
     var recaptchaResponse = document.getElementById('recaptchaResponse');
     if (recaptchaResponse) recaptchaResponse.value = token;
   });
 });
</script>
{/literal}
<div id="responsive" class="modal fade rt-modal" tabindex="-1" data-width="480" role="dialog" aria-labelledby="rt-cb-title">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
    <span class="rt-card-icon"><i class="fas fa-phone-volume"></i></span>
    <h3 class="modal-title" id="rt-cb-title">We can call you back</h3>
    <p class="rt-muted">Leave your number and a friendly [[CN]] representative will call you shortly.</p>
  </div>
  <div class="modal-body">
    <form action="/" id="callback" method="post" class="rt-form">
      <input type="hidden" name="dad" value="index" />
      <input type="hidden" name="jc" value="callback" />
      <input type="hidden" name="a" value="save" />
      <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label" for="rt-cb-phone">Contact number <span class="required">*</span></label>
        <div class="input-icon rt-input"><i class="fas fa-mobile-alt"></i><input id="rt-cb-phone" type="text" name="phone" required="required" class="form-control" autocomplete="tel" placeholder="We'd prefer your mobile"></div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label" for="rt-cb-email">Email address <span class="rt-muted">(optional)</span></label>
        <div class="input-icon rt-input"><i class="far fa-envelope"></i><input id="rt-cb-email" type="email" name="email" class="form-control" autocomplete="email"></div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label" for="rt-cb-name">Your name <span class="rt-muted">(optional)</span></label>
        <div class="input-icon rt-input"><i class="far fa-user"></i><input id="rt-cb-name" type="text" name="name" class="form-control" autocomplete="name"></div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label" for="rt-cb-cap">Captcha <span class="required">*</span></label>
        <div class="input-icon rt-input"><i class="fas fa-shield-alt"></i><input id="rt-cb-cap" type="text" name="CAPTCHA" required="required" class="form-control" placeholder="Enter captcha"></div>
      </div>
      <p class="rt-muted" style="font-size:12px">We collect your information only to contact you about [[CN]] services. See our <a href="/pp/" target="_blank" rel="nofollow noopener noreferrer">Privacy Policy</a>.</p>
    </form>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
    <button type="button" class="btn rt-btn-primary" name="submit" onclick="cb()" value="Request a Callback"><i class="fas fa-phone-alt"></i> Request a callback</button>
  </div>
</div>
<script type="text/javascript">
  function cb() {
    document.getElementById("callback").submit();
  }
</script>
