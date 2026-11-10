{if $smarty.request._BOX_ eq 'open'}
<section class="portlet box rt-panel #CLASS#">
<div class="portlet-title rt-panel-head">
  <div class="caption"> <i class="#ICON#"></i>#TITLE#</div>
  <div class="tools"> <a href="javascript:;" class="{if $smarty.request._STATUS_ eq 'closed'}expand{else}collapse{/if}" aria-label="Toggle section"> </a> </div>
</div>
<div class="portlet-body rt-panel-body {if $smarty.request._STATUS_ eq 'closed'}portlet-collapsed{/if} {if !empty($smarty.request._NOTE_)}form{/if}">
{if !empty($smarty.request._NOTE_)}<div class="note note-info"><p>{$smarty.request._NOTE_}</p></div>{/if}
{if !empty($_B_.name)}<input type="hidden" name="_{$_B_.name}_" value="1" />{/if}
{/if} {if $smarty.request._BOX_ eq 'close'}</div>
</section>{/if}
