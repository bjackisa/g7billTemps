{if $smarty.request.___ eq 'open'}<div class="clearfix"><div class="rt-row-actions btn-group btn-group-sm">{/if}
{if $smarty.request.___ eq 'in'}<a class="btn tooltips rt-row-action #CLASS#" href="#LINK#" title="#TITLE#" target="#TARGET#" data-container="body" data-placement="top" data-original-title="#TITLE#" #OTHER# readonly><i class="#ICON#"></i> <span class="rt-row-action-label">#TITLE#</span></a>{/if}
{if $smarty.request.___ eq 'close'}</div></div>{/if}
