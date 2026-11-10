{* ROTARY — agent payment terms, QR + link *}
{Stats::Mini()}
{assign var='url' value="{$config.url|default:$securebase}/?agid={$row.code}"}
<section class="rt-list-card rt-aff">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-hand-holding-usd"></i></span><span>Payment terms</span></h2>
  </header>
  <div class="rt-list-body rt-aff-body">
    <div class="rt-aff-rate">
      <span class="rt-eyebrow"><i class="fas fa-calculator"></i> Commission rate</span>
      <strong>{if $row.type eq 'rate'}{$row.amount*100}%{else}{Cur::XE($row.amount)}{/if}</strong>
      <span class="rt-muted">per sale</span>
    </div>
    <div class="rt-aff-link">
      <label class="rt-ff-label" for="mt-target-1">Direct link URL <span class="rt-muted">— great for emails and online marketing</span></label>
      <div class="rt-copy-field">
        <div class="input-icon rt-input"><i class="fas fa-link"></i><input type="text" id="mt-target-1" class="form-control rt-mono" value="{$url}" readonly /></div>
        <a href="javascript:;" class="btn rt-btn-gold mt-clipboard ignore" data-clipboard-action="copy" data-clipboard-target="#mt-target-1"><i class="far fa-copy"></i> Copy link</a>
      </div>
    </div>
  </div>
</section>
<section class="rt-2fa-card rt-aff-qr">
  <header class="rt-2fa-head"><span class="rt-list-ico"><i class="fas fa-qrcode"></i></span><div><span class="rt-eyebrow">Share</span><h3>Direct link QR code</h3></div></header>
  <div class="rt-aff-qr-body">
    <div class="rt-2fa-code"><img src="{$securebase}/libs/qr.php?url={$url|base64_encode}" width="200" height="200" alt="Direct link QR code" /></div>
    <div class="rt-prose"><p>QR stands for "Quick Response". While they look simple, QR codes can store lots of data — and when scanned, they give access to that information instantly.</p><p>Print it, add it to flyers or share it in chats: anyone who scans it lands on your direct link.</p></div>
  </div>
</section>
