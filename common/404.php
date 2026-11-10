<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>{$config.pagetitle} | 404 Page Not Found</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="robots" content="noindex" />
<meta name="theme-color" content="#071833" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap/css/bootstrap.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'fa/css/all.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'css/rotary.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'custom.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="{Pic::Get('favicon.ico')}" />
</head>
<body>
<main class="rt-error error-404">
  <div class="rt-error-box">
    <a href="{$securebase}"><img src="{U::File(['file'=>'images/slogo.png','a'=>'path'])}" alt="{$config.companyname}" class="rt-error-logo"></a>
    <div class="rt-error-code">404</div>
    <h2>{$users.fname|default:'Friend'}, we couldn't find that page.</h2>
    <p>The page you are looking for doesn't exist or may have moved.</p>
    <div class="rt-actions-row">
      <a href="{$securebase}" class="btn btn-lg rt-btn-gold"><i class="fas fa-home"></i> Return home</a>
      {if !empty($newuid)}<a href="{S::G(['def'=>"?dad=index&jc=user&a=logout",'value'=>"logout"])}" class="btn btn-lg rt-btn-ghost"><i class="fas fa-sign-out-alt"></i> Log out</a>{/if}
    </div>
  </div>
</main>
</body>
</html>
