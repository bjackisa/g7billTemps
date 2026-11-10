<!--
  ___ _   _          _    _ _      _    _                 _         _                     _ 
 |_ _| |_( )___     / \  | | |    / \  | |__   ___  _   _| |_      | | ___  ___ _   _ ___| |
  | || __|// __|   / _ \ | | |   / _ \ | '_ \ / _ \| | | | __|  _  | |/ _ \/ __| | | / __| |
  | || |_  \__ \  / ___ \| | |  / ___ \| |_) | (_) | |_| | |_  | |_| |  __/\__ \ |_| \__ \_|
 |___|\__| |___/ /_/   \_\_|_| /_/   \_\_.__/ \___/ \__,_|\__|  \___/ \___||___/\__,_|___(_)
-->
{if $TAB and $TAB.wrap eq 'no' or !empty($smarty.request._wrap_)}{Content::Show()}{else}
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8" />
<title>{$config.pagetitle}</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, viewport-fit=cover" name="viewport" />
<meta name="theme-color" content="#17458F" />
<meta content="G7Bill - By The Great Seven" name="author" />
<meta content="{$config.pagedesc}" name="description" />
<meta name="keywords" content="{$config.pagekeywords}" />
<meta http-equiv="Content-Language" content="{$smarty.const.CONTENTLANG}" />
<meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<link rel="shortcut icon" href="{Pic::Get('favicon.ico')}" />
{if empty($smarty.session.adminflag)}
<meta http-equiv="X-Frame-Options" content="deny">
{/if}
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/font-awesome/css/font-awesome.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/simple-line-icons/simple-line-icons.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap/css/bootstrap.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-switch/css/bootstrap-switch.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{U::File(['file'=>'global/plugins/bootstrap-daterangepicker/daterangepicker.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/morris/morris.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/fullcalendar/fullcalendar.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/jqvmap/jqvmap/jqvmap.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/datatables/datatables.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'pages/css/about.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'pages/css/faq.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-fileinput/bootstrap-fileinput.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-toastr/toastr.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'pages/css/pricing.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/select2/css/select2.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/select2/css/select2-bootstrap.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-daterangepicker/daterangepicker.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{U::File(['file'=>'global/css/components-rounded.min.css','a'=>'path'])}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{U::File(['file'=>'global/css/plugins.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES (rotary: Metronic layout replaced by css/rotary.css) -->
<link href="/plugins/flags/css/flag-icon.css" rel="stylesheet" type="text/css" />
<!-- Upgraded FontAwesom -->
<link href="{U::File(['file'=>'fa/css/all.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<!-- /Upgraded FontAwesom -->
<!-- CUSTOM CSS -->
<link href="{U::File(['file'=>'dashboard.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<!-- ROTARY design system -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'css/rotary.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'css/rotary-pages.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'custom.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<!-- /CUSTOM CSS -->
<!--Google API-->
<script src='https://www.google.com/recaptcha/api.js'></script>
<!--/END Google API-->
</head>
<body class="rt-app {if !empty($smarty.cookies.umenu) and $smarty.cookies.umenu eq 'OPEN'}{else}rt-side-collapsed{/if}">
<a class="rt-skip" href="#rt-app-content">Skip to content</a>
<div class="rt-app-shell">
  <!-- ============ SIDEBAR ============ -->
  <aside class="rt-side" id="rt-side" aria-label="Member menu">
    <div class="rt-side-brand">
      <a href="/" title="{$companyname}">
        <img src="{U::File(['file'=>'images/dlogo.png','a'=>'path'])}" alt="{$companyname}" class="rt-side-logo" />
        <span class="rt-side-mark">{$companyname|default:'R'|truncate:1:''|upper}</span>
      </a>
      <button type="button" class="rt-side-collapse" data-rt-side-collapse aria-label="Collapse menu"><i class="fas fa-angle-double-left"></i></button>
    </div>
    <nav class="rt-side-nav">
      <ul class="page-sidebar-menu rt-menu">
        {$umenu}
      </ul>
    </nav>
    <div class="rt-side-foot">
      <span class="rt-motto">Service Above Self</span>
      <small>{$companyname}</small>
    </div>
  </aside>
  <div class="rt-side-overlay" data-rt-side-close></div>

  <div class="rt-app-main">
    <!-- ============ APP BAR ============ -->
    <header class="rt-appbar">
      <button type="button" class="rt-appbar-menu" data-rt-side-open aria-controls="rt-side" aria-label="Open menu"><i class="fas fa-bars"></i></button>
      <div class="rt-appbar-crumbs">{$breadcrumbs}</div>
      <div class="rt-appbar-right">
        <span class="rt-verify theme-panel"><i class="fas fa-user-check" style="color:#F7A81B"></i> <a href="?dad=account&jc=profile&hs=docs" class="popovers" data-container="body" data-trigger="hover" data-content="{$LANG.VERIFICATION_STATUS}" data-original-title="Verification Status" data-placement="bottom">{$users.rate}</a><sup><a href="/?dad=index&jc=kb&a=article&code=profile:rate" target="_blank" rel="nofollow noopener noreferrer"><i class="fa fa-question-circle"></i> INFO</a></sup></span>
        {if !empty($users.joint)}
        <div class="dropdown">
          <button type="button" class="rt-icon-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Switch Account"><i class="fas fa-exchange-alt"></i></button>
          <ul class="dropdown-menu dropdown-menu-right">
            <li class="dropdown-header">Switch Account</li>
            {foreach from=$users.joint key=k item=v}
            <li><a href="?dad=account&jc=subacts&a=sudo&t=dashboard&uid={U::EN($k)}"><i class="icon-user"></i> {$v}</a></li>
            {/foreach}
          </ul>
        </div>
        {/if}
        <div class="dropdown">
          <button type="button" class="rt-user-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img alt="" src="{$users.avatar}" /><span class="rt-user-name">{$users.name}</span> <i class="fa fa-angle-down"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="{$securebase}/welcome.php?dad=account&jc=profile"><i class="icon-user"></i> My Profile</a></li>
            <li><a href="{$base}/"><i class="fas fa-globe-africa"></i> Visit Website</a></li>
            {if $smarty.session.adminflag}
            <li class="divider"></li>
            <li><a href="/_admin_/"><i class="fa fa-cogs"></i> Admin Home</a></li>
            {/if}
            <li class="divider"></li>
            <li><a href="{S::G(['def'=>"?dad=index&jc=user&a=logout",'value'=>"logout"])}"><i class="fa fa-power-off"></i> Log Out</a></li>
          </ul>
        </div>
      </div>
    </header>

    <!-- ============ CONTENT ============ -->
    <main class="rt-app-content page-content" id="rt-app-content">
      <div class="rt-pagehead">
        <h1 class="page-title">{$PAGE_TITLE|ucwords}<small>{$PAGE_DESC}</small></h1>
        <div class="page-toolbar">{Vars::Smarty(Vars::LoadTemp("widget.toolbar"))}</div>
      </div>
      {RR::Info()}
      <!-- START OF NOTICES -->
      {V::N()}
      {U::I(['_v_'=>1])}
      <!--END OF NOTICES-->
      {$CREDIT_LIMIT.msg|default:''}
      {$MSG}
      {include file='../common/helper.php' assign=helper}
      {if !empty($helper)}
      <div class="row">
        <div class="col-md-9">{Content::Show()}</div>
        <div class="col-md-3">{$helper}</div>
      </div>
      {else}{Content::Show()}{/if}
    </main>
    <footer class="rt-app-footer">
      <span>{$version->COPYRIGHT} Licensed to {$companyname}</span>
      <span class="rt-motto" style="color:#17458F">Service Above Self</span>
    </footer>
  </div>
</div>
<button type="button" class="rt-totop" data-rt-top aria-label="Back to top"><i class="fas fa-arrow-up"></i></button>
<!--[if lt IE 9]>
<script src="{U::File(['file'=>'global/plugins/respond.min.js','a'=>'path'])}"></script>
<script src="{U::File(['file'=>'global/plugins/excanvas.min.js','a'=>'path'])}"></script> 
<script src="{U::File(['file'=>'global/plugins/ie8.fix.min.js','a'=>'path'])}"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS --> 
<!--<script src="{U::File(['file'=>'global/plugins/jquery.min.js','a'=>'path'])}" type="text/javascript"></script>--> 
<!--ABDI Inclusions for thousand separator, disabled the below--> 
<script src="{U::File(['file'=>'jquery.min.js','a'=>'path'])}" type="text/javascript"></script> 

<!--End By ABDI--> 
<script src="{U::File(['file'=>'global/plugins/bootstrap/js/bootstrap.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/js.cookie.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/jquery.blockui.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js','a'=>'path'])}" type="text/javascript"></script> 
<!-- END CORE PLUGINS --> 
<!-- ROTARY behaviour (sidebar, Layout shim) -->
<script src="{U::File(['file'=>'js/rotary.js','a'=>'path'])}" type="text/javascript"></script>

<!--CHARTS BY CANVAS.JS--> 
<script src="{U::File(['file'=>'jquery.canvasjs.min.js','a'=>'path'])}"></script> 
<!--/CHARTS BY CANVAS.JS--> 

<!-- BEGIN PAGE LEVEL PLUGINS --> 
<script src="{U::File(['file'=>'global/plugins/moment.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-daterangepicker/daterangepicker.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/morris/morris.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/morris/raphael-min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/counterup/jquery.waypoints.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/counterup/jquery.counterup.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/fullcalendar/fullcalendar.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/horizontal-timeline/horizontal-timeline.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/jquery-easypiechart/jquery.easypiechart.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/jquery.sparkline.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/scripts/datatable.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/datatables/datatables.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-fileinput/bootstrap-fileinput.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-markdown/lib/markdown.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-markdown/js/bootstrap-markdown.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-summernote/summernote.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-toastr/toastr.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/select2/js/select2.full.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-daterangepicker/daterangepicker.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/jquery-repeater/jquery.repeater.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/clipboardjs/clipboard.min.js','a'=>'path'])}" type="text/javascript"></script> 

<!---Added Sept, 2018-->
<script src="{U::File(['file'=>'global/plugins/jquery-validation/js/jquery.validate.min.js','a'=>'path'])}" type="text/javascript"></script>
<!--/Sept 2018---> 

<!--ABDI Inclusions for thousand separator, disabled the below--> 
<script src="{U::File(['file'=>'jquery.mask.min.js','a'=>'path'])}"></script> 
<!--End By ABDI--> 
<!-- END PAGE LEVEL PLUGINS --> 
<!-- BEGIN THEME GLOBAL SCRIPTS --> 
<script src="{U::File(['file'=>'global/scripts/app.min.js','a'=>'path'])}" type="text/javascript"></script> 
<!-- END THEME GLOBAL SCRIPTS --> 
<!-- BEGIN PAGE LEVEL SCRIPTS --> 
<!---Added Sept, 2018-->
<script src="{U::File(['file'=>'form-validation.js','a'=>'path'])}" type="text/javascript"></script>
<!--/Sept 2018---> 

<script src="{U::File(['file'=>'pages/scripts/dashboard.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'pages/scripts/table-datatables-managed.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'pages/scripts/components-editors.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'pages/scripts/ui-toastr.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'pages/scripts/components-select2.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'pages/scripts/components-bootstrap-maxlength.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'pages/scripts/components-date-time-pickers.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'pages/scripts/form-repeater.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'pages/scripts/components-clipboard.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'pages/scripts/components-form-tools.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootbox/bootbox.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'confirm.js','a'=>'path'])}" type="text/javascript"></script> 
<!-- END PAGE LEVEL SCRIPTS --> 
<!-- BEGIN THEME LAYOUT SCRIPTS --> 
<!-- END THEME LAYOUT SCRIPTS --> 

<script src="{U::File(['file'=>'datatables.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'custom.js','a'=>'path'])}" type="text/javascript"></script> 
<script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script> 
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
{literal} 
<script src="plugins/autoNumeric.min.js" type="text/javascript"></script> 
<script>
new AutoNumeric('.money',   {currencySymbol : '',allowDecimalPadding: false, decimalPlaces: 10});
new AutoNumeric('.money1',  {currencySymbol : '',allowDecimalPadding: false, decimalPlaces: 10});
new AutoNumeric('.money2',  {currencySymbol : '',allowDecimalPadding: false, decimalPlaces: 10});
new AutoNumeric('.money3',  {currencySymbol : '',allowDecimalPadding: false, decimalPlaces: 10});
new AutoNumeric('.money4',  {currencySymbol : '',allowDecimalPadding: false, decimalPlaces: 10});
new AutoNumeric('.money5',  {currencySymbol : '',allowDecimalPadding: false, decimalPlaces: 10});
new AutoNumeric('#money5',  {currencySymbol : '',allowDecimalPadding: false, decimalPlaces: 10});
</script> 
{/literal} 
<!--ABDI & UN-Invested Inclusions--> 
{include file='rt.session.helpers.php'} 
<!--Preloader-->{U::Player()}<!--Preloader--> 
<!--Preloader-->{U::Preloader()}<!--Preloader--> 
<!--Notices-->{RR::Notices()}<!--Notices--> 
<!--Ajax-->{T::G('widget.ajax.php')}<!--Ajax-->
</body>
</html>
{/if}