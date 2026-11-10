{* ROTARY — list page header (RR::Header). Opens 4 wrappers closed by rr.footer.php *}
<div class="rt-list">
<div class="rt-list-inner">
<section class="rt-list-card">
{if !empty($R.title)}
<header class="rt-list-head">
  <h2 class="rt-list-title"><span class="rt-list-ico"><i class="#ICON#"></i></span><span>#TITLE#</span></h2>
  <div class="rt-list-actions">
    {if (!empty($smarty.request._ACTIONS_))}
    {assign var='_ACTIONS_' value=$smarty.request._ACTIONS_}
    <div class="rt-segment" role="group">
      {section name=results loop=$_ACTIONS_}
      {assign var='R' value=V::D($_ACTIONS_[results])}
      <button type="button" class="rt-segment-btn {$R.class|default:''}" onclick="location.href='{$R.link}';">{$R.title}</button>
      {/section}
    </div>
    {/if}
  </div>
</header>
{/if}
<div class="rt-list-body">
{if (!$TAB.tools or $TAB.tools eq 'on')}
<div class="rt-list-toolbar table-toolbar">
  <div class="rt-list-toolbar-left">
  {if (!$TAB.add or $TAB.add eq 'on')}
    <button class="btn rt-btn-primary" onclick="location.href='?dad={$smarty.request.dad}&jc={$smarty.request.jc}{if !empty($smarty.request.hs)}&hs={$smarty.request.hs}{/if}&a=form';"><i class="fas fa-plus"></i> {$LANG.T000025}</button>
    {if !empty($_G7BILL_.buttons)}{$_G7BILL_.buttons.orders.manage}{/if}
  {/if}
  </div>
  <div class="rt-list-toolbar-right hidden-xs">
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-toolbox"></i> Tools <i class="fa fa-angle-down"></i></button>
      <ul class="dropdown-menu dropdown-menu-right">
        <li class="hide"><a href="?dad={$smarty.request.dad}&jc={$smarty.request.jc}&a=print"><i class="fas fa-print"></i> Print</a></li>
        <li class="hide"><a href="?dad={$smarty.request.dad}&jc={$smarty.request.jc}&a=pdf"><i class="far fa-file-pdf"></i> Save as PDF</a></li>
        <li><a href="?dad={$smarty.request.dad}&jc={$smarty.request.jc}&hs={$smarty.request.hs}&a=csv"><i class="far fa-file-excel"></i> Export to CSV</a></li>
      </ul>
    </div>
  </div>
</div>
{/if}
