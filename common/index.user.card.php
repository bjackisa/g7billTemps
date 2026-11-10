<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Identity Card · {$user.name|strip_tags}</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Plus+Jakarta+Sans:wght@700;800&display=swap" rel="stylesheet" />
{literal}
<style>
*{box-sizing:border-box}
body{margin:0;min-height:100vh;display:flex;align-items:center;justify-content:center;font-family:Inter,Arial,sans-serif;background:#0A2148;background-image:radial-gradient(600px 300px at 80% 0%,rgba(247,168,27,.2),transparent 60%),radial-gradient(600px 400px at 0% 100%,rgba(0,162,224,.25),transparent 60%)}
.rt-idcard{width:300px;border-radius:22px;overflow:hidden;background:#fff;box-shadow:0 30px 70px -20px rgba(0,0,0,.55);position:relative}
.rt-idcard-top{position:relative;height:118px;background:linear-gradient(135deg,#0A2148,#17458F 65%,#0067C8);padding:16px 18px;color:#fff}
.rt-idcard-top::after{content:"";position:absolute;left:0;right:0;bottom:0;height:5px;background:linear-gradient(90deg,#17458F 0 34%,#F7A81B 34% 56%,#0067C8 56% 68%,#00ADBB 68% 78%,#D41367 78% 88%,#901F93 88% 100%)}
.rt-idcard-top img{height:30px;filter:brightness(0) invert(1)}
.rt-idcard-tag{position:absolute;right:16px;top:18px;font:800 10px/1 "Plus Jakarta Sans",sans-serif;letter-spacing:.16em;text-transform:uppercase;color:#F7A81B}
.rt-idcard-photo{width:108px;height:108px;margin:-58px auto 10px;border-radius:50%;padding:4px;background:#fff;box-shadow:0 0 0 4px #F7A81B;position:relative;z-index:1}
.rt-idcard-photo img{width:100%;height:100%;border-radius:50%;object-fit:cover}
.rt-idcard-body{padding:0 20px 18px;text-align:center;background-repeat:no-repeat;background-position:center 40%;background-size:70%}
.rt-idcard-body h2{margin:6px 0 2px;font:800 19px/1.2 "Plus Jakarta Sans",sans-serif;color:#121A2B}
.rt-idcard-role{margin:0 0 12px;font-size:11px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:#17458F}
.rt-idcard-qr{display:inline-block;padding:8px;border-radius:14px;border:1px solid #E4E9F2;background:#fff}
.rt-idcard-qr img{display:block;width:96px;height:96px}
.rt-idcard-foot{margin-top:14px;padding-top:12px;border-top:1px dashed #D3DBE8;font-size:11px;color:#66728A;line-height:1.6}
.rt-idcard-foot strong{color:#121A2B;font-size:12px}
.rt-idcard-motto{display:block;margin-top:8px;font:800 9px/1 "Plus Jakarta Sans",sans-serif;letter-spacing:.2em;text-transform:uppercase;color:#F7A81B}
@media print{body{background:#fff}.rt-idcard{box-shadow:none;border:1px solid #ddd}}
</style>
{/literal}
</head>
<body>
<article class="rt-idcard">
  <div class="rt-idcard-top"><img src="{Pic::Get('slogo.png')}" alt="[[CN]]"><span class="rt-idcard-tag">Member</span></div>
  <div class="rt-idcard-photo"><img src="{$user.avatar}" alt="{$user.name}"></div>
  <div class="rt-idcard-body" style="background-image:url('{Pic::Get('watermark.png')}')">
    <h2>{$user.name}</h2>
    <p class="rt-idcard-role">Identity card</p>
    <div class="rt-idcard-qr"><img src="{$securebase}/libs/qr.php?text={$user.username}" alt="QR Code"></div>
    <div class="rt-idcard-foot">
      <strong>[[CN]]</strong><br>[[CA1]]<br>Phone: [[CP]]
      <span class="rt-idcard-motto">Service Above Self</span>
    </div>
  </div>
</article>
</body>
</html>
