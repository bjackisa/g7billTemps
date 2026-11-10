<!DOCTYPE html>
<!--
  ROTARY — G7Bill template · public <head>
  Plugin styles are kept for functionality; the visual layer is
  assets/css/rotary.css (+ assets/custom.css for per-club tweaks).
-->
<html lang="{$smarty.session.lang|default:'en'}" class="no-js">
<head>
<meta charset="utf-8" />
<title>{$config.pagetitle}</title>
<meta name="description" content="{$config.pagedesc}" />
<meta name="keywords" content="{$config.pagekeywords}" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
<meta http-equiv="Content-Language" content="{$smarty.session.lang|default:'en'}" />
<meta http-equiv="X-Content-Type-Options" content="nosniff">
<meta http-equiv="X-Frame-Options" content="sameorigin">
<meta http-equiv="Referrer-Policy" content="same-origin">
<meta name="author" content="ABDI Joseph" />
<meta name="application-name" content="G7Bill">
<meta name="theme-color" content="#17458F" />
<meta property="og:type" content="website" />
<meta property="og:image" content="{Pic::Get('1.jpg')}" />
<meta property="og:title" content="{$config.pagetitle}" />
<meta property="og:description" content="{$config.pagedesc}" />
<meta name="twitter:card" content="summary_large_image" />
<link rel="shortcut icon" href="{Pic::Get('favicon.ico')}" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet" type="text/css" />

<!-- Icons + Bootstrap grid -->
<link href="{U::File(['file'=>'global/plugins/font-awesome/css/font-awesome.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/simple-line-icons/simple-line-icons.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap/css/bootstrap.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-switch/css/bootstrap-switch.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />

<!-- Plugins (functional) -->
{if $smarty.request.jc!='index'}
<link href="{U::File(['file'=>'global/plugins/bootstrap-daterangepicker/daterangepicker.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/morris/morris.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/fullcalendar/fullcalendar.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/jqvmap/jqvmap/jqvmap.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/datatables/datatables.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'pages/css/faq.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'pages/css/contact.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-select/css/bootstrap-select.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/fancybox/source/jquery.fancybox.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-touchspin/bootstrap.touchspin.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/cubeportfolio/css/cubeportfolio.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'pages/css/portfolio.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
{/if}
<link href="{U::File(['file'=>'pages/css/pricing.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'pages/css/blog.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'pages/css/about.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'pages/css/search.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
{if $smarty.request.jc eq 'kb'}
<link href="{U::File(['file'=>'global/plugins/jstree/dist/themes/default/style.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
{/if}
<link href="{U::File(['file'=>'global/plugins/select2/css/select2.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/select2/css/select2-bootstrap.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/ladda/ladda-themeless.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-modal/css/bootstrap-modal.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-summernote/summernote.css','a'=>'path'])}" rel="stylesheet" type="text/css" />

<!-- Component structure (checkbox/radio mechanics, input icons, helpers) -->
<link href="{U::File(['file'=>'global/css/components-rounded.min.css','a'=>'path'])}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{U::File(['file'=>'global/css/plugins.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="/plugins/flags/css/flag-icon.css" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'fa/css/all.css','a'=>'path'])}" rel="stylesheet" type="text/css" />

<!-- ROTARY design system -->
<link href="{U::File(['file'=>'css/rotary.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'css/rotary-pages.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'custom.css','a'=>'path'])}" rel="stylesheet" type="text/css" />

<!--Google API-->
<script src="https://www.google.com/recaptcha/api.js?render={Extended::Value(['name'=>'google_recaptcha_site'])}"></script>
{literal}
<script>
 grecaptcha.ready(function () {
    grecaptcha.execute('{/literal}{E::V(['name'=>'google_recaptcha_site'])}{literal}', { action: 'login' }).then(function (token) {
     var recaptchaResponse = document.getElementById('recaptchaResponse');
     if (recaptchaResponse) recaptchaResponse.value = token;
   });
 });
</script>
{/literal}
<!--/END Google API-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src="{Extended::Value(['name'=>'tawk_url'])}";
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id={E::V(['name'=>'google_analytics'])}"></script>
{literal}
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', "{/literal}{E::V(['name'=>'google_analytics'])}{literal}");
</script>{/literal}
<!--/Google Analytics-->
{T::G("cheader.php")}
</head>
