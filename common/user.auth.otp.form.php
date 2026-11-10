{* ROTARY — one-time password verification *}
<section class="rt-verify-card">
  <div class="rt-result-ico"><i class="fas fa-shield-alt"></i></div>
  <span class="rt-eyebrow">Two-step verification</span>
  <h1>Enter your code</h1>
  <p class="rt-muted">We sent a one-time password (OTP) to you by email and/or SMS.</p>
  <form action="/" method="post" class="rt-form">
    <input type="hidden" name="dad" value="user" />
    <input type="hidden" name="jc" value="auth" />
    <input type="hidden" name="a" value="otp" />
    <input type="hidden" name="to" value="{$smarty.request.to|default:''|urlencode}" />
    {foreach from=$smarty.request key=k item=v}
    {if $k=='action'||$k=='_P_'||$k=='link'||$k=='_DEBUG_'||$k=='send'}{continue}{/if}
    <input type="hidden" name="{$k}" value="{$v}" />
    {/foreach}
    <div class="form-group">
      <label class="sr-only" for="rt-otp">One-time password</label>
      <input id="rt-otp" class="form-control rt-otp-input placeholder-no-fix" type="text" inputmode="numeric" autocomplete="one-time-code" placeholder="• • • • • •" name="otp" required />
    </div>
    <label class="mt-checkbox mt-checkbox-outline rt-terms"><input type="checkbox" name="remember" value="90 days" /> Remember this device for 90 days <span></span></label>
    <button type="submit" class="btn btn-lg btn-block rt-btn-primary">Verify &amp; continue <i class="fas fa-arrow-right"></i></button>
    <button type="button" class="btn btn-block rt-btn-text" onclick="location.href='?dad=user&jc=auth&a=otp&send=1&to={$smarty.request.to|default:''|urlencode}';"><i class="far fa-paper-plane"></i> Resend code</button>
  </form>
</section>
