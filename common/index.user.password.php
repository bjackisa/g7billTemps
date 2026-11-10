{* ROTARY — account authentication step (password / OTP) *}
<section class="rt-verify-card rt-verify-wide">
  <div class="rt-result-ico"><i class="fas fa-key"></i></div>
  <span class="rt-eyebrow">Account security</span>
  <h1>{if E::V('user:otp')}Verify it's you{else}Enter your password{/if}</h1>
  {if !empty($smarty.request.email)}<p class="rt-muted"><i class="far fa-envelope"></i> Signing in as <strong>{U::Mask($smarty.request.email)|default:''}</strong></p>{/if}
  <form action="/" method="post" class="rt-form">
    <input type="hidden" name="dad" value="index" />
    <input type="hidden" name="jc" value="user" />
    <input type="hidden" name="a" value="auth" />
    <input type="hidden" name="go" value="{$smarty.request.go|default:'_'}" />
    <input type="hidden" name="username" value="{$smarty.request.username}" />
    <input type="hidden" name="utype" value="{$smarty.request.utype|default:'email'}" />
    {if E::V('user:otp')}
    <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label" for="rt-otp2">One-time password</label>
      <input id="rt-otp2" type="text" class="form-control rt-otp-input" placeholder="A71D5" name="otp" autocomplete="one-time-code" required="required" />
      <span class="help-block rt-ff-help"><i class="fas fa-info-circle"></i> We sent it to your email and/or SMS. The OTP is case sensitive.</span>
    </div>
    {/if}
    {if !E::V('user:auth:otp')}
    <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label" for="password">Password</label>
      <div class="rt-field"><i class="fas fa-lock"></i><input type="password" class="form-control" name="password" id="password" autocomplete="current-password" style="padding-left:44px" /><button type="button" class="rt-eye" onclick="Visible()" aria-label="Show password"><i class="far fa-eye"></i></button></div>
      <span class="help-block rt-ff-help"><i class="fas fa-info-circle"></i> The password is case sensitive.</span>
    </div>
    {/if}
    <label class="mt-checkbox mt-checkbox-outline rt-terms"><input type="checkbox" id="checkbox1" name="remember" value="90"> Remember this device for 90 days <span></span></label>
    <button type="submit" class="btn btn-lg btn-block rt-btn-primary">Authenticate <i class="fas fa-arrow-right"></i></button>
    <div class="rt-or">need help?</div>
    {if E::V('user:otp')}<button type="button" id="email" value="otp:{$smarty.request.username}" class="btn btn-block rt-btn-soft email"><i class="far fa-paper-plane"></i> Resend OTP</button>{/if}
    {if !E::V('user:auth:otp')}<button type="button" id="email" value="{$smarty.request.username}" class="btn btn-block rt-btn-soft email"><i class="far fa-paper-plane"></i> Email me a password reset link</button>{/if}
    <div id="response" style="margin-top:12px"></div>
  </form>
</section>
