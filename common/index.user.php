{* ROTARY — account lookup / continue *}
{assign var='utype' value=E::V('user:utype')}
<section class="rt-verify-card rt-verify-wide">
  <div class="rt-result-ico"><i class="far fa-user"></i></div>
  <span class="rt-eyebrow">My account</span>
  <h1>Let's find your account</h1>
  <p class="rt-muted">New here? Enter your email address. Existing members can use their email address or account number.</p>
  <form action="/" method="post" class="rt-form">
    <input type="hidden" name="dad" value="index" />
    <input type="hidden" name="jc" value="user" />
    <input type="hidden" name="a" value="s1" />
    <input type="hidden" name="go" value="{$smarty.request.go|default:'_'}" />
    <input type="hidden" name="sa" value="{$smarty.request.sa|default:''}" />
    {if $utype}
    <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label" for="rt-utype">Username type *</label>
      <select class="form-control" name="utype" id="rt-utype">
        <option value="email">Email address</option>
        <option value="account">Account number</option>
        <option value="phone">Phone number</option>
        <option value="memo">Invoice number</option>
        <option value="ownerid">OwnerID</option>
      </select>
    </div>
    {/if}
    <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label" for="rt-uname">Your username *</label>
      <div class="input-icon rt-input"><i class="far fa-user"></i><input id="rt-uname" class="form-control" type="text" value="{$smarty.post.username|default:''}" placeholder="abc@domain.com or 123456" name="username" required="required" autocomplete="username" /></div>
    </div>
    {if !Cookie::Get('newuid')&&E::V(['name'=>'recaptcha_signin'])}
    <div class="form-group rt-ff-stack rt-captcha">
      <img src="{$securebase}/plugins/captcha/index.php" alt="captcha" />
      <div class="input-icon rt-input"><i class="fas fa-shield-alt"></i><input class="form-control" type="text" autocomplete="off" placeholder="Enter captcha as seen above" name="CAPTCHA" required aria-label="Captcha" /></div>
    </div>
    {/if}
    <button type="submit" class="btn btn-lg btn-block rt-btn-primary">Continue <i class="fas fa-arrow-right"></i></button>
    {if E::V('user:oauth:google')}
    <div class="rt-or">or</div>
    <a href="?dad=user&jc=auth&a=oauth&provider=google" class="btn btn-block rt-btn-google"><i class="fab fa-google"></i> Continue with Google</a>
    {/if}
  </form>
</section>
