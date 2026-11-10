<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>{$config.pagetitle} | Maintenance Mode Enabled</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="{$base} is under Maintenance Mode" />
<meta name="theme-color" content="#071833" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap/css/bootstrap.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'fa/css/all.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'css/rotary.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'custom.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="{U::File(['file'=>'images/favicon.ico','a'=>'path'])}" />
</head>
<body>
<main class="rt-error error-404">
  <div class="rt-error-box">
    <img src="{U::File(['file'=>'images/slogo.png','a'=>'path'])}" alt="{$config.companyname}" class="rt-error-logo">
    <div class="rt-error-code" style="font-size:clamp(54px,10vw,96px)"><i class="fas fa-tools"></i></div>
    <h2>We'll be back soon.</h2>
    <p>We are busy updating the portal for you and will be back shortly.</p>
    <div class="rt-actions-row"><a href="{$base}/?dad=index&jc=contact" class="btn btn-lg rt-btn-gold"><i class="far fa-envelope"></i> Contact us</a></div>
  </div>
</main>
</body>
</html>
