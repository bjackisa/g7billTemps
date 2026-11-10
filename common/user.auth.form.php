<!DOCTYPE html>
<html lang="{$smarty.session.lang|default:'en'}" class="no-js">
<head>
<title>{$config.pagetitle} :: {$LANG.USER_LOGIN}</title>
<meta charset="utf-8" />
<meta name="description" content="{$config.pagedesc}" />
<meta name="keywords" content="{$config.pagekeywords}" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
<meta http-equiv="Content-Language" content="{$smarty.session.lang|default:'en'}" />
<meta http-equiv="X-Content-Type-Options" content="nosniff">
<meta http-equiv="X-Frame-Options" content="sameorigin">
<meta name="author" content="ABDI Joseph" />
<meta name="theme-color" content="#17458F" />
<link rel="shortcut icon" href="{Pic::Get('favicon.ico')}" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/font-awesome/css/font-awesome.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/simple-line-icons/simple-line-icons.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap/css/bootstrap.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-switch/css/bootstrap-switch.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/select2/css/select2.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/select2/css/select2-bootstrap.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/css/components-rounded.min.css','a'=>'path'])}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{U::File(['file'=>'global/css/plugins.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'fa/css/all.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'css/rotary.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'css/rotary-pages.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'custom.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<script src="https://www.google.com/recaptcha/api.js?render={Extended::Value(['name'=>'google_recaptcha_site'])}"></script>
{literal}
<script>
 grecaptcha.ready(function () {
    grecaptcha.execute('{/literal}{Extended::Value(['name'=>'google_recaptcha_site'])}{literal}', { action: 'login' }).then(function (token) {
     var r1 = document.getElementById('recaptchaResponse');
     var r2 = document.getElementById('recaptchaResponse2');
     if (r1) r1.value = token;
     if (r2) r2.value = token;
   });
 });
</script>
{/literal}
</head>
<body class="rt-auth-body {$_G7BILL_.theme.login.body.class|default:'login'}">
<div class="rt-auth">
  <!-- Brand panel -->
  <aside class="rt-auth-art" id="rt-auth-art">
    <div class="rt-auth-logo" title="{$config.companyname}" onClick="location.href='{$base}';"><img src="{U::File(['file'=>'images/slogo.png','a'=>'path'])}" alt="{$config.companyname}" /></div>
    <div class="rt-auth-copy">
      <span class="rt-eyebrow">Service Above Self</span>
      <h2>Welcome back to {$config.companyname|default:'your club'}.</h2>
      <p>Your member portal for dues, projects, events and fellowship, all in one place.</p>
      <ul class="rt-auth-test">
        <li>Is it the truth?</li>
        <li>Is it fair to all concerned?</li>
        <li>Will it build goodwill and better friendships?</li>
        <li>Will it be beneficial to all concerned?</li>
      </ul>
      {if !empty($_DESIGN_.user_auth_form.6)}<div class="rt-auth-note">{$_DESIGN_.user_auth_form.6}</div>{/if}
    </div>
  </aside>

  <!-- Form panel -->
  <main class="rt-auth-pane">
    <a href="{$base}/" class="rt-auth-back"><i class="fas fa-arrow-left"></i> Back to website</a>
    <div class="rt-auth-card">
      {include file="{Vars::LoadTemp('widget.whatsapp')}"}

      <div id="rt-login">
        <span class="rt-eyebrow">Members</span>
        <h1>Member Login</h1>
        <p class="rt-auth-lead">By logging in you agree to the <a href="/terms/" target="_blank" rel="nofollow noopener noreferrer" class="ignore">Terms of Service</a>.{if E::V(['name'=>'user_signup','group'=>'user'])}<br>Don't have an account? <a href="/?dad=user&jc=activate&a=form&subaction={$subaction|urlencode}">Register free</a>{/if}</p>
        {$NOTE|default:''}
        {if !empty($MSG)}{$MSG}{/if}
        <form action="/" method="post" class="form-validate" onkeydown="return event.key != 'Enter';">
          <input type="hidden" name="dad" value="user" />
          <input type="hidden" name="jc" value="auth">
          <input type="hidden" name="a" value="web">
          <input type="hidden" name="subaction" value="{$subaction}" />
          <input type="hidden" name="md5" value="true" />
          <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
          <div class="alert alert-danger display-hide"><button class="close" data-close="alert"></button><span>Enter any username and password.</span></div>
          {if E::V(['name'=>'user:utype','group'=>'user'])}
          <div class="form-group">
            <label class="control-label">Username type</label>
            <div class="rt-field"><i class="fa fa-cogs"></i>{FF::Select(['name'=>'utype','value'=>$smarty.post.utype|default:'email','options'=>['username','email','mobile_number','account_number'],'_min_'=>1])}</div>
          </div>
          {/if}
          <div class="form-group">
            <label class="control-label" for="rt-username">Username</label>
            <div class="rt-field"><i class="far fa-user"></i><input id="rt-username" class="form-control placeholder-no-fix" type="text" value="{$smarty.post.username|default:''}" autocomplete="username" placeholder="Email, username or phone" name="username" required/></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="pwd">Password</label>
            <div class="rt-field"><i class="fas fa-lock"></i><input class="form-control placeholder-no-fix" type="password" autocomplete="current-password" id="pwd" placeholder="Your password" name="password" required /><button type="button" class="rt-eye" data-rt-eye="pwd" aria-label="Show password"><i class="far fa-eye"></i></button></div>
          </div>
          {if !Cookie::Get('newuid')&&E::V(['name'=>'recaptcha_signin'])}
          <div class="form-group">
            <label class="control-label"><img src="{$securebase}/plugins/captcha/index.php" alt="captcha" style="border-radius:10px" /></label>
            <div class="rt-field"><i class="fa fa-shield-alt"></i><input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Enter captcha as seen above" name="CAPTCHA" required /></div>
          </div>
          {/if}
          <div class="rt-auth-row">
            <label class="rememberme mt-checkbox mt-checkbox-outline"><input type="checkbox" name="rememberme" value="1" checked /> Remember me <span></span></label>
            <a href="javascript:;" id="forget-password" class="forget-password" data-rt-swap="#rt-forgot" data-rt-swap-hide="#rt-login">Forgot password?</a>
          </div>
          <button class="btn rt-btn-primary btn-block ignore" type="submit" onclick="MD5(this)">Sign in <i class="fas fa-arrow-right"></i></button>
          {if E::V(['name'=>'user:oauth:google','group'=>'user'])}
          <div class="rt-or">or</div>
          <a href="?dad=user&jc=auth&a=oauth&provider=google" class="btn btn-block rt-btn-google"><i class="fab fa-google"></i> Continue with Google</a>
          {/if}
        </form>
      </div>

      <!-- Forgot password -->
      <div id="rt-forgot" style="display:none">
        <form action="/" method="post" class="form-validate forget-form" style="display:block">
          <input type="hidden" name="dad" value="user" />
          <input type="hidden" name="jc" value="auth">
          <input type="hidden" name="a" value="reset">
          <input type="hidden" name="recaptcha_response" id="recaptchaResponse2">
          <span class="rt-eyebrow">Account recovery</span>
          <h1>Forgot password?</h1>
          <p class="rt-auth-lead">Enter your e-mail address below and we'll send you a reset link.</p>
          <div class="form-group">
            <div class="rt-field"><i class="far fa-envelope"></i><input class="form-control placeholder-no-fix" type="text" autocomplete="email" placeholder="Email" name="email" required /></div>
          </div>
          <button type="submit" class="btn rt-btn-primary btn-block">Send reset link</button>
          <p style="text-align:center;margin-top:18px"><a href="javascript:;" id="back-btn" data-rt-swap="#rt-login" data-rt-swap-hide="#rt-forgot"><i class="fas fa-arrow-left"></i> Back to login</a></p>
        </form>
      </div>

      {if !empty($_DESIGN_.user_auth_form.3)}<div style="margin-top:22px">{$_DESIGN_.user_auth_form.3}</div>{/if}
      <div class="rt-auth-foot login-copyright">
        {if !empty($_DESIGN_.user_auth_form.4)}{$_DESIGN_.user_auth_form.4}{/if}
        <p>{V::RP('reserved.','reserved.<br>',$_version_long)}</p>
      </div>
    </div>
  </main>
</div>
<script type="text/javascript">
var bgColorArray = ["{U::File(['file'=>'images/login/1.jpg','a'=>'path'])}","{U::File(['file'=>'images/login/2.jpg','a'=>'path'])}","{U::File(['file'=>'images/login/3.jpg','a'=>'path'])}","{U::File(['file'=>'images/login/4.jpg','a'=>'path'])}","{U::File(['file'=>'images/login/5.jpg','a'=>'path'])}"],
    selectBG = bgColorArray[Math.floor(Math.random() * bgColorArray.length)];
document.getElementById('rt-auth-art').style.backgroundImage = 'url(' + selectBG + ')';
</script>
<!-- CORE PLUGINS -->
<script src="{U::File(['file'=>'global/plugins/jquery.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/plugins/bootstrap/js/bootstrap.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/plugins/js.cookie.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/plugins/jquery.blockui.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/plugins/jquery-validation/js/jquery.validate.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/plugins/jquery-validation/js/additional-methods.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/plugins/select2/js/select2.full.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/scripts/app.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'js/rotary.js','a'=>'path'])}" type="text/javascript"></script>
<script src="/libs/md5.js" type="text/javascript"></script>
<script type="text/javascript">
function MD5(obj) {
  var pwdObj = document.getElementById('pwd');
  if (pwdObj.type !== 'password') pwdObj.type = 'password';
  var hash = calcMD5(pwdObj.value);
  pwdObj.value = hash;
}
</script>
<!--Preloader-->{U::Preloader()}<!--Preloader-->
{if file_exists("templates/$template/common/cfooter.php")}{include file="templates/$template/common/cfooter.php"}{/if}
</body>
</html>
