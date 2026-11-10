{* ROTARY — captcha gate *}
<section class="rt-verify-card">
  <div class="rt-result-ico"><i class="fas fa-shield-alt"></i></div>
  <span class="rt-eyebrow">Security check</span>
  <h1>Quick verification</h1>
  <div class="rt-muted">{Msgs::Info('Captcha Verification')}</div>
  <form action="/" method="post" class="rt-form">
    {foreach from=$smarty.request key=k item=v}
    {if $k=='action'||$k=='_P_'||$k=='link'}{continue}{/if}
    <input type="hidden" name="{$k}" value="{$v}" />
    {/foreach}
    <div class="form-group rt-ff-stack rt-captcha">
      <img src="{$securebase}/plugins/captcha/index.php" alt="captcha" />
      <div class="input-icon rt-input"><i class="fas fa-lock"></i><input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Enter captcha as seen above" name="CAPTCHA" required aria-label="Captcha" /></div>
    </div>
    <button type="submit" class="btn btn-lg btn-block rt-btn-primary">Verify &amp; Continue <i class="fas fa-arrow-right"></i></button>
  </form>
</section>
