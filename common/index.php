{if $TAB and $TAB.wrap eq 'no'}{Content::Show()}{else}
{include file="{Vars::LoadTemp('header.php')}"}
{assign var='rt_home' value=0}{if (empty($smarty.request.dad) or $smarty.request.dad eq 'index') and (empty($smarty.request.jc) or $smarty.request.jc eq 'index')}{assign var='rt_home' value=1}{/if}
<body class="rt-site{if $rt_home} rt-home{/if}">
{if file_exists("templates/$template/common/cbody.php")}{include file="templates/$template/common/cbody.php"}{/if}
<a class="rt-skip" href="#rt-main">Skip to content</a>

{if $TAB.wrap neq 'min'}
{if !empty($TAB.page.header)}{$TAB.page.header}{else}
<!-- ============ UTILITY BAR ============ -->
<div class="rt-utility">
  <div class="container">
    <div class="rt-utility-left">
      <span class="rt-motto">Service Above Self</span>
      {if E::V("system:configs:design:header:phone") and (!empty($config.toll_free_phone) or !empty($config.companyphone))}
      <span>{if !empty($config.toll_free_phone)}<i class="fas fa-phone-alt"></i>{$LANG.TOLL_FREE}: <a href="tel:[[CTF]]">[[CTF]]</a>{else}<i class="fas fa-phone-alt"></i>{$LANG.HOTLINE}: <a href="tel:[[CP]]">[[CP]]</a>{/if}</span>
      {/if}
      {if !empty($config.salesmail)}<span class="rt-hide-sm"><i class="far fa-envelope"></i><a href="mailto:{$config.salesmail}">{$config.salesmail}</a></span>{/if}
    </div>
    <div class="rt-utility-right">
      {assign var='Currencies' value=Cur::Info()}
      {if !empty($Currencies)}
      <div class="dropdown">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-coins"></i>{$smarty.session.currencies.code|default:$config.default_currency} <i class="fa fa-angle-down" style="margin:0 0 0 4px"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="rt-dd-head"><strong>Currency</strong><small>Rated from the base currency {$config.default_currency|default:''}</small></div>
          <ul class="rt-dd-list">
            {section name=results loop=$Currencies}
            {if $Currencies[results].code eq 'EUR'}{assign var='country' value='eu'}{else}{assign var='country' value=$Currencies[results].country|strtolower}{/if}
            <li><a href="?cur={$Currencies[results].code}"><span><i class="fa fa-check {if $Currencies[results].code eq $smarty.session.currencies.code}font-green-jungle{else}font-grey-cascade{/if}"></i> <i class="flag-icon flag-icon-{$country}"></i> {$Currencies[results].from} &rarr; {$Currencies[results].to}</span><span class="rt-dd-meta">{Cur::D($Currencies[results].rate)}</span></a></li>
            {/section}
          </ul>
        </div>
      </div>
      {/if}
      <span class="rt-social">
        {if E::V('facebook_page')}<a href="{E::V('facebook_page')}" target="_blank" rel="nofollow noopener noreferrer" class="ignore" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>{/if}
        {if E::V('twitter_page')}<a href="{E::V('twitter_page')}" target="_blank" rel="nofollow noopener noreferrer" class="ignore" aria-label="X / Twitter"><i class="fab fa-twitter"></i></a>{/if}
        {if E::V('instagram_page')}<a href="{E::V('instagram_page')}" target="_blank" rel="nofollow noopener noreferrer" class="ignore" aria-label="Instagram"><i class="fab fa-instagram"></i></a>{/if}
        {if E::V('linkedin_page')}<a href="{E::V('linkedin_page')}" target="_blank" rel="nofollow noopener noreferrer" class="ignore" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>{/if}
        {if E::V('youtube_page')}<a href="{E::V('youtube_page')}" target="_blank" rel="nofollow noopener noreferrer" class="ignore" aria-label="YouTube"><i class="fab fa-youtube"></i></a>{/if}
        {if E::V('tiktok')}<a href="{E::V('tiktok')}" target="_blank" rel="nofollow noopener noreferrer" class="ignore" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>{/if}
      </span>
    </div>
  </div>
</div>

<!-- ============ HEADER ============ -->
<header class="rt-header" id="rt-header">
  <div class="container rt-header-inner">
    <a class="rt-brand" href="{$base}/" title="{$companyname}">
      <img src="{Pic::Get(['flogo'=>1])}" alt="{$companyname}" class="logo-default">
      {if !empty($G7BILL_IP2LOCATION.country)}<sup><i title="We offer services to {$G7BILL_IP2LOCATION.country_name}" class="flag-icon flag-icon-{$G7BILL_IP2LOCATION.country|strtolower}"></i></sup>{/if}
    </a>

    <nav class="rt-nav" id="rt-nav" aria-label="Main navigation">
      <div class="rt-drawer-head">
        <span class="rt-motto">Service Above Self</span>
        <button type="button" class="rt-drawer-close" data-rt-nav-close aria-label="Close menu"><i class="fas fa-times"></i></button>
      </div>
      {$menu}
      <ul class="hide"><li class="hide"><a href="http://www.g7bill.com/" rel="nofollow noopener noreferrer">G7Bill</a></li></ul>
      <div class="rt-drawer-foot">
        {if !empty($newuid)}
        <a href="/dashboard/" class="btn rt-btn-gold"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="/logout/" class="btn rt-btn-ghost"><i class="fas fa-sign-out-alt"></i> Log Out</a>
        {elseif E::V(['name'=>'user_signup','group'=>'user'])}
        <a href="/account/?sa=signup" class="btn rt-btn-gold"><i class="fa fa-user-plus"></i> Join / Sign Up</a>
        <a href="/dashboard/" class="btn rt-btn-ghost"><i class="fas fa-sign-in-alt"></i> Member Log In</a>
        {/if}
      </div>
    </nav>

    <div class="rt-actions">
      {if E::V(['name'=>'system:ecommerce','group'=>'system'])}
      {assign var='CartInfo' value=Vars::Cart()}
      <div class="dropdown">
        <button type="button" class="rt-icon-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Cart">
          <i class="fas fa-shopping-bag"></i>{if $CartInfo|count>0}<span class="rt-count">{$CartInfo|count}</span>{/if}
        </button>
        <div class="dropdown-menu dropdown-menu-right" style="min-width:300px">
          <div class="rt-dd-head"><strong>You have {$CartInfo|count} item{if $CartInfo|count neq 1}s{/if} in cart</strong>{if $CartInfo|count>0}<a href="?dad=index&jc=cart&a=trash">Empty Cart</a>{/if}</div>
          <ul class="rt-dd-list">
            {section name=results loop=$CartInfo}
            <li><a href="/?dad=index&jc=cart"><span>{$CartInfo[results].item_name|strip_tags}</span><span class="rt-dd-meta">{Cur::XE(['from'=>$CartInfo[results].cur,'amount'=>$CartInfo[results].amount])}</span></a></li>
            {/section}
          </ul>
          <div style="padding:8px 4px 2px"><a href="?dad=index&jc=cart&a=cart" class="btn rt-btn-primary btn-block">View Cart</a></div>
        </div>
      </div>
      {/if}

      {if !empty($newuid)}
      <div class="dropdown">
        <button type="button" class="rt-user-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img alt="" src="{$users.avatar}"><span class="rt-user-name">{$users.name}</span> <i class="fa fa-angle-down"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="/dashboard/"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
          {if E::V(['name'=>'support_helpdesk','group'=>'general'])}
          <li><a href="welcome.php?dad=info&jc=support"><i class="far fa-envelope-open"></i> My Tickets <span class="badge badge-danger pull-right">{Vars::Stats("helpdesk")}</span></a></li>
          {/if}
          <li><a href="/cart/"><i class="fa fa-shopping-cart"></i> My Cart <span class="badge badge-success pull-right">{Cart::Stats(['action'=>'items'])|count}</span></a></li>
          <li class="divider"></li>
          {if $smarty.session.adminuser}<li><a href="/_admin_/"><i class="fas fa-users-cog"></i> Admin</a></li>{/if}
          <li><a href="/logout/"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
        </ul>
      </div>
      {elseif E::V(['name'=>'user_signup','group'=>'user'])}
      <span class="rt-auth-btns">
        <a href="/dashboard/" class="btn rt-btn-soft"><i class="fas fa-sign-in-alt"></i> Log In</a>
        <a href="/account/?sa=signup" class="btn rt-btn-gold"><i class="fa fa-user-plus"></i> Join Us</a>
      </span>
      {/if}
      <button type="button" class="rt-burger" data-rt-nav-toggle aria-controls="rt-nav" aria-expanded="false" aria-label="Open menu"><span></span></button>
    </div>
  </div>
  <div class="rt-ribbon"></div>
</header>
<div class="rt-overlay" data-rt-nav-close></div>
{/if}
{/if}

{if E::V('system:configs:design:header:images') and !$rt_home}
<div class="rt-banner hidden-xs" style="background-image:url({Pic::Dynamic()})">
  {if E::V(['name'=>'system:configs:design:holiday','group'=>'system'])}{if date("n") eq 12}<div class="rt-xmas" style="background-image:url({Pic::Get('xmas.gif')})"></div>{/if}{/if}
</div>
{/if}

<!-- ============ MAIN ============ -->
<main class="rt-main" id="rt-main">
  <div class="container">
    <div class="page-content-inner rt-content">{$MSG|default:''}
      {include file="{Vars::LoadTemp('widget.whatsapp')}"}
      {V::N()}
      {Content::Show()}
      {if !empty($_G7BILL_.theme.body.after)}{$_G7BILL_.theme.body.after}{/if}
    </div>
  </div>
</main>

{if $TAB.wrap neq 'min'}
<!-- ============ FOOTER ============ -->
<footer class="rt-footer">
  <div class="rt-ribbon"></div>
  {if E::V(['name'=>'system:configs:design:footer:2','group'=>'system'])}
  <div class="rt-footer-main {if !empty($_G7BILL_.theme.footer.about)}hide{/if}">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12 rt-footer-col rt-footer-brand">
          <a href="{$base}/"><img src="{U::File(['file'=>'images/slogo.png','a'=>'path'])}" alt="{$companyname}" class="rt-footer-logo"></a>
          <p><a href="/about/"><img src="{U::File(['file'=>'images/about-footer.jpg','a'=>'path'])}" class="rt-about-img" alt="About {$companyname}" title="About {$companyname}"></a>{U::L(['str'=>$config.pagedesc,limit=>165])} <a href="/about/"><em>Read more</em></a></p>
          <span class="rt-footer-motto"><i class="fas fa-hands-helping"></i> Service Above Self</span>
          {if E::V(['name'=>'system:configs:design:footer:1','group'=>'system'])}
          <div><a href="http://godblessuganda.com/" class="rt-footer-badge" title="God Bless Uganda" target="_blank" rel="nofollow noopener noreferrer"><img src="{Pic::Get('footer.png')}" alt="God Bless Uganda"></a></div>
          {/if}
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 rt-footer-col">
          <h5>Explore</h5>
          <ul class="rt-links">
            <li><a href="/about/">About Us</a></li>
            <li><a href="/?dad=index&jc=contact">Contact</a></li>
            <li><a href="/terms/">Terms of Service</a></li>
            {if E::V(['name'=>'ppolicy','group'=>'umenu'])}<li><a href="/pp/">Privacy Policy</a></li>{/if}
            {if E::V(['name'=>'affiliate','group'=>'umenu'])}<li><a href="/affiliate/">Affiliate Program</a></li>{/if}
            {if E::V(['name'=>'bounty','group'=>'umenu'])}<li><a href="/bounty/">Bounty Program</a></li>{/if}
          </ul>
        </div>
        <div class="col-md-4 col-sm-8 col-xs-12 rt-footer-col">
          <h5>Get in touch</h5>
          <ul class="rt-contact-list">
            <li><i class="fas fa-phone-alt"></i><span>{$config.companyphone|default:'(256) 752 567374'}</span></li>
            {if !empty($config.salesmail)}<li><i class="far fa-envelope"></i><a href="mailto:{$config.salesmail}">{$config.salesmail}</a></li>{/if}
            <li><i class="fas fa-map-marker-alt"></i><span>{$config.companyaddress1}{if !empty($config.companyaddress2)}, {$config.companyaddress2}{/if}{if !empty($config.companycity)}, {$config.companycity}{/if}{if !empty($config.companystate)}, {$config.companystate|default:''}{/if}.</span></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-12 rt-footer-col">
          {if E::V('facebook_page')}
          <h5>Follow us</h5>
          <ul class="rt-socials">
            {if E::V('rss_page')}<li><a href="{E::V('rss_page')}" class="ignore" aria-label="RSS"><i class="fas fa-rss"></i></a></li>{/if}
            {if E::V('facebook_page')}<li><a href="{E::V('facebook_page')}" target="_blank" rel="nofollow noopener noreferrer" class="ignore" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>{/if}
            {if E::V('twitter_page')}<li><a href="{E::V('twitter_page')}" target="_blank" rel="nofollow noopener noreferrer" class="ignore" aria-label="X / Twitter"><i class="fab fa-twitter"></i></a></li>{/if}
            {if E::V('instagram_page')}<li><a href="{E::V('instagram_page')}" target="_blank" rel="nofollow noopener noreferrer" class="ignore" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>{/if}
            {if E::V('googleplus_page')}<li><a href="{E::V('googleplus_page')}" target="_blank" rel="nofollow noopener noreferrer" class="ignore" aria-label="Google"><i class="fab fa-google"></i></a></li>{/if}
            {if E::V('linkedin_page')}<li><a href="{E::V('linkedin_page')}" target="_blank" rel="nofollow noopener noreferrer" class="ignore" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>{/if}
            {if E::V('youtube_page')}<li><a href="{E::V('youtube_page')}" target="_blank" rel="nofollow noopener noreferrer" class="ignore" aria-label="YouTube"><i class="fab fa-youtube"></i></a></li>{/if}
            {if E::V('vimeo_page')}<li><a href="{E::V('vimeo_page')}" target="_blank" rel="nofollow noopener noreferrer" class="ignore" aria-label="Vimeo"><i class="fab fa-vimeo-v"></i></a></li>{/if}
            {if E::V('tiktok')}<li><a href="{E::V('tiktok')}" target="_blank" rel="nofollow noopener noreferrer" class="ignore" aria-label="TikTok"><i class="fab fa-tiktok"></i></a></li>{/if}
          </ul>
          {else}
          <h5>Payments</h5>
          <a href="http://www.jpesa.com/" target="_blank" rel="nofollow noopener noreferrer" title="Payments by JPesa"><img src="{U::File(['file'=>'images/1-footer.png','a'=>'path'])}" alt="Payments by JPesa" style="max-width:150px"></a>
          {/if}
        </div>
      </div>
    </div>
  </div>
  {/if}
  <div class="rt-footer-bar">
    <div class="container">
      <span>{$version->COPYRIGHT} Licensed to {$companyname}</span>
      <nav aria-label="Footer">
        <a href="/about/" title="About {$companyname}">About Us</a>
        <a href="/terms/" title="Terms of Service">Terms</a>
        {if E::V(['name'=>'ppolicy','group'=>'umenu'])}<a href="/pp/" title="Privacy Policy">Privacy</a>{/if}
        {if E::V(['name'=>'affiliate','group'=>'umenu'])}<a href="/affiliate/" title="Affiliate Program">Affiliates</a>{/if}
        {if E::V(['name'=>'bounty','group'=>'umenu'])}<a href="/bounty/" title="Bounty Program">Bounty</a>{/if}
        {if !empty($smarty.session.adminuser)}<a href="{$securebase}/_admin_/" title="Admin Dashboard">Admin Dashboard</a>{/if}
        {if !empty($_G7BILL_.theme.footer.menu)}{$_G7BILL_.theme.footer.menu}{/if}
      </nav>
    </div>
  </div>
</footer>
{/if}
<button type="button" class="rt-totop" data-rt-top aria-label="Back to top"><i class="fas fa-arrow-up"></i></button>
{include file="{Vars::LoadTemp('widget.floating.php')}"}
{include file="{Vars::LoadTemp('footer.php')}"}
{/if}
