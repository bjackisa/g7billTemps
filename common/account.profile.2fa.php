{* ROTARY — 2FA & own QR code *}
{include file='account.profile.header.php'}
{RR::Header(['title'=>'2FA &amp; Own QR Code','icon'=>'fas fa-key'])}
<div class="rt-grid-2 rt-2fa">
  <article class="rt-2fa-card">
    <header class="rt-2fa-head"><span class="rt-list-ico"><i class="fas fa-qrcode"></i></span><div><span class="rt-eyebrow">Identity</span><h3>Own QR code</h3></div></header>
    <div class="rt-2fa-code"><img src="{$securebase}/plugins/qr/?text={$newuid}" width="300" height="300" alt="Your QR code" /></div>
    <div class="rt-prose">
      <p>QR stands for "Quick Response". While they look simple, QR codes can store lots of data — and when scanned, they give access to that information instantly.</p>
      <ol class="rt-2fa-steps">
        <li>Open the QR reader application or the camera on your smartphone.</li>
        <li>Point it at the QR code — any angle will work.</li>
        <li>The data is shown on screen instantly; contact details, for example, download straight to your phone.</li>
      </ol>
    </div>
  </article>
  <article class="rt-2fa-card">
    <header class="rt-2fa-head"><span class="rt-list-ico"><i class="fas fa-passport"></i></span><div><span class="rt-eyebrow">Security</span><h3>Standard 2FA setup</h3></div></header>
    <div class="rt-2fa-code">{$R.qr}</div>
    <div class="rt-prose">
      <p>Download and install a time-based one-time password (TOTP) generator. Here's a good article from <a href="https://gizmodo.com/the-best-authenticator-apps-for-protecting-your-account-1840711013" target="_blank" rel="nofollow noopener noreferrer" class="ignore">Gizmodo</a> covering favourite options. Popular choices around the office:</p>
      <div class="rt-specs"><span class="rt-spec"><i class="fas fa-shield-alt"></i> Authy</span><span class="rt-spec"><i class="fas fa-lock"></i> 1Password</span><span class="rt-spec"><i class="fab fa-google"></i> Google Authenticator</span></div>
      <p>When prompted by the app, scan or drag and drop this screen's QR code into your authenticator.</p>
    </div>
  </article>
</div>
{RR::Footer()}
