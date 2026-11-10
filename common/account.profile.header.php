{* ROTARY — profile section navigation *}
{$_I_}
<nav class="rt-subnav" aria-label="Profile sections">
  <a href="?dad=account&jc=profile&hs=ci" class="rt-subnav-item {if $smarty.request.hs eq 'ci'}is-active{/if}"><i class="fas fa-user-cog"></i> Contact information</a>
  <a href="?dad=account&jc=profile&hs=mobile" class="rt-subnav-item {if $smarty.request.hs eq 'mobile'}is-active{/if} {if !E::V(['name'=>'account:profile:mobile','group'=>'umenu'])}hide{/if}"><i class="fas fa-mobile-alt"></i> Mobile numbers</a>
  <a href="?dad=account&jc=profile&hs=docs" class="rt-subnav-item {if $smarty.request.hs eq 'docs'}is-active{/if} {if !E::V(['name'=>'account:profile:docs','group'=>'umenu'])}hide{/if}"><i class="far fa-folder-open"></i> My documents</a>
  <a href="?dad=account&jc=profile&hs=credentials" class="rt-subnav-item {if $smarty.request.hs eq 'credentials'}is-active{/if}"><i class="fas fa-key"></i> My credentials</a>
  {if E::V(['name'=>'account:profile:as','group'=>'umenu'])}
  <div class="dropdown rt-subnav-more">
    <a class="rt-subnav-item {if $smarty.request.hs eq 'act' or $smarty.request.hs eq 'cc' or $smarty.request.hs eq 'bank' or $smarty.request.hs eq 'ac' or $smarty.request.hs eq 'ab' or $smarty.request.hs eq 'kin' or $smarty.request.hs eq 'tax' or $smarty.request.hs eq 'api' or $smarty.request.hs eq '2fa'}is-active{/if}" href="javascript:;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sliders-h"></i> Additional settings <i class="fa fa-angle-down"></i></a>
    <ul class="dropdown-menu">
      <li class="{if !E::V(['name'=>'account:profile:act','group'=>'umenu'])}hide{/if}"><a href="?dad=account&jc=profile&hs=act"><i class="fas fa-wallet"></i> My accounts</a></li>
      <li class="{if !E::V(['name'=>'account:profile:cc','group'=>'umenu'])}hide{/if}"><a href="?dad=account&jc=profile&hs=cc"><i class="far fa-credit-card"></i> Credit cards</a></li>
      <li class="{if !Bank::Perms()}hide{/if}"><a href="?dad=account&jc=profile&hs=bank"><i class="fas fa-university"></i> Bank accounts</a></li>
      <li class="{if !E::V(['name'=>'account:profile:ac','group'=>'umenu'])}hide{/if}"><a href="?dad=account&jc=profile&hs=ac"><i class="fas fa-users"></i> {$LANG.ADDITIONAL_CONTACTS}</a></li>
      <li class="{if !E::V(['name'=>'account:profile:ab','group'=>'umenu'])}hide{/if}"><a href="?dad=account&jc=profile&hs=ab"><i class="far fa-address-book"></i> {$LANG.ADDRESS_BOOK}</a></li>
      <li class="{if !E::V(['name'=>'account:profile:kin','group'=>'umenu'])}hide{/if}"><a href="?dad=account&jc=profile&hs=kin"><i class="fas fa-house-user"></i> Next of kin</a></li>
      <li class="{if !E::V(['name'=>'account:profile:tax','group'=>'umenu'])}hide{/if}"><a href="?dad=account&jc=profile&hs=tax"><i class="fas fa-flag"></i> Tax settings</a></li>
      <li class="{if !E::V(['name'=>'account:profile:api','group'=>'umenu'])}hide{/if}"><a href="?dad=account&jc=profile&hs=api"><i class="fas fa-link"></i> API settings</a></li>
      <li class="{if !E::V(['name'=>'account:profile:2fa','group'=>'umenu'])}hide{/if}"><a href="?dad=account&jc=profile&hs=2fa"><i class="fas fa-qrcode"></i> 2FA setup &amp; QR code</a></li>
    </ul>
  </div>
  {/if}
</nav>
