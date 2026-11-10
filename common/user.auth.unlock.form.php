{* ROTARY — session lock screen (opens as a modal over the page) *}
<button type="button" id="unlock" data-target="#static" data-toggle="modal" class="hide" aria-hidden="true"></button>
{literal}<script type="application/javascript">window.addEventListener('load', function(){ var b = document.getElementById('unlock'); if (b) b.click(); });</script>{/literal}
<div id="static" class="modal fade rt-lock" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="520" role="dialog" aria-labelledby="rt-lock-name">
  <div class="modal-body rt-lock-body">
    <div class="rt-lock-top"><a href="/"><img src="{U::File(['file'=>'images/ulogo.png','a'=>'path'])}" alt="{$companyname}" title="{$companyname}" /></a><span class="rt-badge-soft"><i class="fas fa-lock"></i> Session locked</span></div>
    <div class="rt-lock-user">
      <img class="rt-lock-avatar" src="{$user.avatar}" alt="{$user.name}" title="{$user.name}">
      <h1 id="rt-lock-name">{$user.name}</h1>
      <span class="rt-muted">{$user.email}</span>
    </div>
    <form action="/" method="post" class="form-validate login-form rt-form" onkeydown="return event.key!='Enter';">
      <input type="hidden" name="dad" value="user" />
      <input type="hidden" name="jc" value="auth">
      <input type="hidden" name="a" value="web">
      <input type="hidden" name="subaction" value="{$subaction}" />
      <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
      <input type="hidden" name="username" value="{$user.username}">
      <input type="hidden" name="md5" value="true" />
      <label class="rt-ff-label" for="pwd">Enter your password to continue</label>
      <div class="rt-inline-form">
        <div class="input-icon rt-input rt-grow"><i class="fas fa-lock"></i><input type="password" class="form-control" name="password" id="pwd" placeholder="Password" required="required" autocomplete="current-password"></div>
        <button type="submit" class="btn rt-btn-primary ignore" onclick="MD5(this)" aria-label="Unlock"><i class="fas fa-arrow-right"></i></button>
      </div>
      <p class="rt-lock-foot"><a href="{S::G(['def'=>"?dad=index&jc=user&a=logout",'value'=>"logout"])}">Not {$user.name}? Log out</a></p>
    </form>
    <div class="rt-lock-copy">{$version->COPYRIGHT}</div>
  </div>
</div>
