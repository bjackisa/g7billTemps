{if !empty($P.open)}
<div class="portlet-body rt-tabs">
  <ul class="nav nav-tabs rt-tabs-nav" role="tablist">
    {foreach from=$P.menu key=k item=v}
    <li class="{if !empty($v.active)}active{/if}"><a href="#{$k}" data-toggle="tab" role="tab"><i class="{$v.icon|default:'far fa-folder'}"></i> {if !empty($v.title)}{$v.title}{else}{$k|ucwords}{/if}</a></li>
    {/foreach}
  </ul>
  <div class="tab-content rt-tabs-body">
{/if}
    {if !empty($P.popen)}
    <div class="tab-pane fade {if !empty($P.active)}active in{/if}" id="{$P.popen}" role="tabpanel">
    {/if}
    {if !empty($P.pclose)}</div>{/if}
{if !empty($P.close)} </div>
</div>
{/if}
