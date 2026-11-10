<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
<title>{$config.pagetitle} :: {$LANG.CREATE_ACCOUNT}</title>
<meta charset="utf-8" />
<meta name="description" content="{$config.pagedesc}" />
<meta name="keywords" content="{$config.pagekeywords}" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta http-equiv="Content-Language" content="{$smarty.session.lang|default:'en'}" />
<link rel="shortcut icon" href="{Pic::Get('favicon.ico')}" />
<meta http-equiv="X-Content-Type-Options" content="nosniff">
<meta http-equiv="X-Frame-Options" content="sameorigin">
<meta content="ABDI Joseph" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/font-awesome/css/font-awesome.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/simple-line-icons/simple-line-icons.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap/css/bootstrap.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/bootstrap-switch/css/bootstrap-switch.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{U::File(['file'=>'global/plugins/select2/css/select2.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'global/plugins/select2/css/select2-bootstrap.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{U::File(['file'=>'global/css/components-rounded.min.css','a'=>'path'])}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{U::File(['file'=>'global/css/plugins.min.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN THEME LAYOUT STYLES -->
<!-- END THEME LAYOUT STYLES -->

<link rel="shortcut icon" href="{U::File(['file'=>'favicon.ico','a'=>'path'])}" />

<!-- ROTARY design system -->
<meta name="theme-color" content="#17458F" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'fa/css/all.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'css/rotary.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'css/rotary-pages.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<link href="{U::File(['file'=>'custom.css','a'=>'path'])}" rel="stylesheet" type="text/css" />
<!--/Additional-->
{if E::V(['name'=>'recaptcha_signup']) and E::V(['name'=>'google_recaptcha_site'])}
<script src="https://www.google.com/recaptcha/api.js?render={E::V(['name'=>'google_recaptcha_site'])}"></script>
{literal}
<script>
 grecaptcha.ready(function () {
    grecaptcha.execute('{/literal}{Extended::Value(['name'=>'google_recaptcha_site'])}{literal}', { action: 'login' }).then(function (token) {
     var recaptchaResponse = document.getElementById('recaptchaResponse');
     recaptchaResponse.value = token;
   });
 });
</script>
{/literal}
{/if}
<!-- /theme JS files -->
</head>
<!-- END HEAD -->

<body class="rt-auth-body {$_G7BILL_.theme.signup.body.class|default:'login'}">
<div class="rt-auth">
  <aside class="rt-auth-art" id="rt-auth-art">
    <div class="rt-auth-logo" title="{$config.companyname}" onClick="location.href='{$base}';"><img src="{U::File(['file'=>'images/slogo.png','a'=>'path'])}" alt="{$config.companyname}" /></div>
    <div class="rt-auth-copy">
      <span class="rt-eyebrow">Join us</span>
      <h2>Become part of something bigger.</h2>
      <p>Create your account to join {$config.companyname|default:'the club'}, take part in projects and events, and connect with neighbours, friends and leaders who take action.</p>
      <ul class="rt-auth-test">
        <li>Fellowship</li>
        <li>Integrity</li>
        <li>Diversity</li>
        <li>Service &amp; leadership</li>
      </ul>
    </div>
  </aside>
  <main class="rt-auth-pane">
    <a href="{$base}/" class="rt-auth-back"><i class="fas fa-arrow-left"></i> Back to website</a>
    <div class="rt-auth-card rt-wide rt-signup">
      {include file="{Vars::LoadTemp('widget.whatsapp')}"}
      <span class="rt-eyebrow">New member</span>
      <h1>{$smarty.const.CREATE_ACCOUNT|ucwords}</h1>
      <p class="rt-auth-lead">Already have an account? <a href="/dashboard/">Log in</a></p>
      {$MSG}
      <!-- BEGIN REGISTRATION FORM -->
        <form action="/" method="post" class="register-form" enctype="multipart/form-data">
          <input type="hidden" name="dad" value="user" />
          <input type="hidden" name="jc" value="activate">
          <input type="hidden" name="a" value="web" />
          <input type="hidden" name="subaction" value="{$subaction}" />
          <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
          <input type="hidden" name="md5" value="false">
          <div class="form-body">
          {FF::Line(['value'=>'Personal Details'])}
            <div class="row"> 
            {if Users::Form('fname')}            
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">
                  <h5 class="font-white bold">
                  <i class="icon-user"></i> First Name
                  </h5>
                  </label>
                  <input class="form-control placeholder-no-fix" type="text" placeholder="First Name" name="fname" value="{$smarty.post.fname|default:''}" required />
                </div>
              </div>
              {/if}
              {if Users::Form('lname')}
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">
                  <h5 class="font-white bold">
                  <i class="icon-user"></i> Last Name
                  </h5>
                  </label>
                  <input class="form-control placeholder-no-fix" type="text" placeholder="Last Name" name="lname" value="{$smarty.post.lname|default:''}" required />
                </div>
              </div>
              {/if}
              {assign var='ef' 	value=Users::Form('email')}
              {if $ef}
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">
                  <h5 class="font-white bold">
                  <i class="fa fa-envelope"></i> Email
                  </h5>
                  </label>
                  <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" value="{$smarty.post.email|default:''}" {if $ef.required}required required{/if} />
                </div>
              </div>
              {else if Users::Form('username')}
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">
                  <h5 class="font-white bold">
                  <i class="fa fa-user"></i> Username
                  </h5>
                  </label>
                  <input class="form-control placeholder-no-fix" type="text" placeholder="Username" name="username" value="{$smarty.post.username|default:''}" required />
                </div>
              </div>
              {/if}
              {if Users::Form('phone')}
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">
                  <h5 class="font-white bold">
                  <i class="fa fa-phone"></i> Phone
                  </h5>
                  </label>
                  <input class="form-control placeholder-no-fix" type="text" placeholder="Phone" name="phone" value="{$smarty.post.phone|default:''}" required  />
                </div>
              </div>
              {/if}
            </div>
            <div class="row"> 
            {if Users::Form('password')}
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">
                  <h5 class="font-white bold">
                  <i class="fa fa-lock"></i> Password
                  </h5>
                  </label>
                  <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" value="{$smarty.post.password|default:''}" required />
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">
                  <h5 class="font-white bold">
                  <i class="fa fa-lock"></i> Re-type Your Password
                  </h5>
                  </label>
                  <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password2" value="{$smarty.post.password2|default:''}" required />
                </div>
              </div>
            {/if} 
            </div>
            <div class="row"> {if Users::Form('agentid')}
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">
                  <h5 class="font-white bold">
                  <i class="fa fa-users"></i> {$LANG.T000030}
                  </h5>
                  </label>
                  <input class="form-control placeholder-no-fix" type="text" placeholder="{$LANG.T000030}" name="agentid" value="{$smarty.post.agentid|default:''}" />
                  </div>
              </div>
              
              {/if} </div>
             
           {if Users::Form('id_type')}
           {FF::Line(['value'=>'Identification Details'])}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label"><h5 class="font-white bold"><i class="icon-badge"></i> ID Type</h5></label>                  
                  {FF::Select(['name'=>'identity[code]','title'=>'ID Type','value'=>$smarty.post.identity.code|default:'legal:id:national_id','required'=>1,'assoc'=>1,'_min_'=>1,'options'=>[
                  	'legal:id:national_id'		=>'National ID',
                    'legal:id:passport'			=>'Passport',
                    'legal:id:driving_license'	=>'Driving Permit']])}
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label"><h5 class="font-white bold"><i class="icon-badge"></i> ID Number</h5></label>
                  {FF::Text(['name'=>'identity[number]','value'=>$smarty.post.identity.number,'title'=>'ID Number','icon'=>'fa fa-user','_min_'=>1,'required'=>1])}
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label"><h5 class="font-white bold"><i class="icon-badge"></i> ID Document (Document should have both the front &amp; back side of the ID)</h5></label>
                  {FF::File(['name'=>'identity[]','title'=>'ID Image','required'=>1,'icon'=>'fa fa-upload','desc'=>"Find and upload the respective document.",'_min_'=>1])}
                </div>
              </div>
            </div>
           {/if}
           {if Users::Form('bank')}
           {FF::Line(['value'=>'Bank Details'])}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label"><h5 class="font-white bold"><i class="fa fa-bank"></i> Bank Name</h5></label>  
                  {*FF::Select(['name'=>"bank[bank]",'value'=>$smarty.post.bank.bank,'options'=>Bank::Banks(),'_min_'=>'1','assoc'=>1])*}
                  {FF::Text(['name'=>"bank[bank_name]",'value'=>$smarty.post.bank.bank_name,'icon'=>'fa fa-bank','_min_'=>1,'title'=>'Bank Name'])}
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label"><h5 class="font-white bold"><i class="fa fa-bank"></i> Account Number</h5></label>
                  {FF::Text(['name'=>"bank[number]",'value'=>$smarty.post.bank.number,'icon'=>'fa fa-bank','_min_'=>1,'title'=>'Account Number'])}
                </div>
              </div>
            </div>            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label"><h5 class="font-white bold"><i class="fa fa-bank"></i> Account Name</h5></label>
                  {FF::Text(['name'=>"bank[name]",'value'=>$smarty.post.bank.name,'icon'=>'fa fa-user','_min_'=>1,'title'=>'Account Name'])}
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  
                </div>
              </div>
            </div>
           {/if}
           <!-- Next of Kin -->
           {if Users::Form('kin')}
           {FF::Line(['value'=>'Next of Kin Details'])}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label"><h5 class="font-white bold"><i class="fa fa-user"></i> Next of Kin Name</h5> </label>  
                  {FF::Text(['name'=>"kin[name]",'value'=>$smarty.post.kin.name,'icon'=>'fa fa-user','_min_'=>1])}
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label"><h5 class="font-white bold"><i class="fa fa-phone"></i> Next of Kin Phone</h5></label>
                  {FF::Text(['name'=>"kin[phone]",'value'=>$smarty.post.kin.phone,'icon'=>'fa fa-phone','_min_'=>1])}
                </div>
              </div>
            </div>
           {/if}
           <!-- /Next of Kin -->
            {if E::V(['name'=>'recaptcha_signup'])}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group"><img src="{$securebase}/plugins/captcha/index.php" /></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Enter captcha as seen above" name="CAPTCHA" required />
                </div>
              </div>
            </div>
            {/if}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group font-white">
                  <label class="mt-checkbox">
                    <input type="checkbox" name="terms" {if !empty($smarty.post.terms)}checked{/if} required />
                    I agree to the <a href="/terms/" target="_blank" rel="nofollow noopener noreferrer" class="font-green-jungle ignore">Terms of Service </a> & <a href="/pp/" target="_blank" rel="nofollow noopener noreferrer" class="font-green-jungle">Privacy Policy </a> <span></span> </label>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="row font-white">
            	<div class="col-sm-4 text-left">
                <button type="button" class="btn default btn-outline pull-left" onclick="location.href='/dashboard/';"> Signed Up Already? CLick Here To Login </button>
               </div>
                <div class="col-sm-2 text-left">
                {if E::V(['name'=>'user:oauth:google','group'=>'user'])}<a href="?dad=user&jc=auth&a=oauth&provider=google" class="btn ntn-circle red"><i class="fa fa-google-plus"></i> Login with Google</a>{/if}
               </div>
            <div class="col-sm-6 text-right">
              <button type="submit" id="register-submit-btn pull-right" class="btn green"> Sign Up </button>
            </div>
          </div>
        </form>
        <!-- END REGISTRATION FORM -->
      {if !empty($_DESIGN_.user_activate_form.3)}<div style="margin-top:22px">{$_DESIGN_.user_activate_form.3}</div>{/if}
      <div class="rt-auth-foot login-copyright"><p>{$_version_long}</p></div>
    </div>
  </main>
</div>
<script type="text/javascript">
var bgColorArray = ["{U::File(['file'=>'images/login/1.jpg','a'=>'path'])}","{U::File(['file'=>'images/login/2.jpg','a'=>'path'])}","{U::File(['file'=>'images/login/3.jpg','a'=>'path'])}","{U::File(['file'=>'images/login/4.jpg','a'=>'path'])}","{U::File(['file'=>'images/login/5.jpg','a'=>'path'])}"],
    selectBG = bgColorArray[Math.floor(Math.random() * bgColorArray.length)];
document.getElementById('rt-auth-art').style.backgroundImage = 'url(' + selectBG + ')';
</script>
<script src="{U::File(['file'=>'js/rotary.js','a'=>'path'])}" type="text/javascript"></script>
<!--Preloader-->{U::Preloader()}<!--Preloader--> 
{if file_exists("templates/$template/common/cfooter.php")}{include file="templates/$template/common/cfooter.php"}{/if}
</body>
</html>