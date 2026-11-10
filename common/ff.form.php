{if $smarty.request.___ eq 'open'}
<section class="portlet box rt-panel rt-formcard {$P.color}">
{if !empty($P.title)}
  <div class="portlet-title rt-panel-head">
    <div class="caption"> <i class="#ICON#"></i>{$P.title}</div>
    <div class="tools"> <a href="javascript:;" class="{if $_CLOSE_}expand{else}collapse{/if}" aria-label="Toggle form"> </a></div>
  </div>
{/if}
  <div class="portlet-body form rt-panel-body" {if $_CLOSE_}style="display: none;"{/if}>
    {if !empty($P.note)}<div class="note note-info">{$P.note}</div>{/if}
    <form action="#ACTION#" method="post" class="form-horizontal rt-form" id="form_sample_2" enctype="multipart/form-data" name="#NAME#">
      {foreach from=$smarty.request._HIDDEN_ key=k item=v}
      <input type="hidden" name="{$k}" value="{$v}" />
      {/foreach}
      <div class="form-body">
        <div class="alert alert-danger display-hide"><button class="close" data-close="alert"></button><i class="fas fa-exclamation-circle"></i> You have some form errors. Please check below.</div>
        <div class="alert alert-success display-hide"><button class="close" data-close="alert"></button><i class="fas fa-check-circle"></i> Your form validation is successful!</div>
        {/if}
        <!---CONTENT--->
        {if $smarty.request.___ eq 'close'} </div>
      <div class="form-actions rt-form-actions">
        {if $smarty.request._BUTTONS_}{$smarty.request._BUTTONS_}{else}
        <button type="button" class="btn rt-btn-text" onclick="location.href='{if !empty($smarty.session.cancel)}{$smarty.session.cancel}{else}?welcome.php{/if}';"><i class="fas fa-times"></i> Cancel</button>
        <button type="reset" class="btn btn-default"><i class="fas fa-redo"></i> Reset</button>
        <button type="submit" class="btn rt-btn-primary"><i class="#ICON#"></i> #SAVE#</button>
        {/if}
      </div>
    </form>
  </div>
</section>
{/if}
