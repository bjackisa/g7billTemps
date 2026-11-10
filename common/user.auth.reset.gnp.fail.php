{* ROTARY — reset token invalid *}
<section class="rt-result rt-result-error">
  <div class="rt-result-ico"><i class="fas fa-unlink"></i></div>
  <div class="rt-result-body">
    <span class="rt-eyebrow">Link expired</span>
    <h1>Reset password failed</h1>
    <p>The reset password token you provided is invalid or has expired.</p>
    <div class="rt-secure-note"><i class="fas fa-user-shield"></i><span>For security reasons, we do <strong>not</strong> tell you if the login ID you entered is not found in our system.</span></div>
    {if !empty($row.email)}<p><a href="/?dad=user&jc=auth&a=reset&email={$row.email}" class="btn rt-btn-gold"><i class="fas fa-redo"></i> Get a new reset link</a></p>{/if}
    <p class="rt-hero-cta"><a href="/dashboard/" class="btn rt-btn-primary">Reset password</a> <a href="/dashboard/" class="btn btn-default">Sign up</a></p>
  </div>
</section>
