{* ROTARY — quick registration step *}
<section class="rt-verify-card rt-verify-wide">
  <div class="rt-result-ico"><i class="fas fa-user-plus"></i></div>
  <span class="rt-eyebrow">New member</span>
  <h1>Let's get you registered</h1>
  <p class="rt-muted">Signing up as <strong>{$smarty.request.email|default:''}</strong>. Your password will be emailed to you.</p>
  <form action="/" method="post" class="rt-form">
    <input type="hidden" name="dad" value="index" />
    <input type="hidden" name="jc" value="user" />
    <input type="hidden" name="a" value="s2" />
    <input type="hidden" name="email" value="{$smarty.request.email|default:''}" />
    <input type="hidden" name="go" value="{$smarty.request.go|default:'_'}" />
    <input type="hidden" name="csrf" value="{CSRF::Token()}" />
    <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label" for="rt-su-name">Your name *</label>
      <div class="input-icon rt-input"><i class="far fa-id-badge"></i><input id="rt-su-name" class="form-control" type="text" value="{$smarty.post.name|default:''}" placeholder="Abishag Abdi" name="name" required="required" autocomplete="name" /></div>
      <span class="help-block rt-ff-help">Exactly as it appears on your legal documents.</span>
    </div>
    <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label" for="rt-su-phone">Your phone *</label>
      <div class="input-icon rt-input"><i class="fas fa-mobile-alt"></i><input id="rt-su-phone" class="form-control" type="number" value="{$smarty.post.phone|default:''}" placeholder="256752123456" name="phone" required="required" autocomplete="tel" /></div>
      <span class="help-block rt-ff-help">Start with the country code and leave out the plus sign.</span>
    </div>
    {if E::V(['name'=>'recaptcha_signup'])}
    <div class="form-group rt-ff-stack rt-captcha">
      <img src="{$securebase}/plugins/captcha/index.php" alt="captcha" />
      <div class="input-icon rt-input"><i class="fas fa-shield-alt"></i><input class="form-control" type="text" placeholder="Enter captcha as seen above *" name="CAPTCHA" required="required" aria-label="Captcha" /></div>
    </div>
    {/if}
    <label class="mt-checkbox mt-checkbox-outline rt-terms"><input type="checkbox" id="checkbox1" name="terms" required="required"> I agree to the <a href="/terms/" target="_blank" rel="nofollow noopener noreferrer" class="ignore">Terms of Service</a> &amp; <a href="/pp/" target="_blank" rel="nofollow noopener noreferrer" class="ignore">Privacy Policy</a> <span></span></label>
    <button type="submit" class="btn btn-lg btn-block rt-btn-primary">Continue <i class="fas fa-arrow-right"></i></button>
    {if E::V('user:oauth:google')}
    <div class="rt-or">or</div>
    <a href="?dad=user&jc=auth&a=oauth&provider=google" class="btn btn-block rt-btn-google"><i class="fab fa-google"></i> Continue with Google</a>
    {/if}
  </form>
</section>
