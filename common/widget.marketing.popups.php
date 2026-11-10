{* ROTARY — home page promo pop-up *}
{if !empty($row)&&!IS::Mobile()}
{if $smarty.request.dad eq 'index' and $smarty.request.jc eq 'index'}
{if !empty($row.header)}{$row.header}{else}
<div class="hidden">
  <button type="button" id="popup" data-target="#static" data-toggle="modal"></button>
</div>
{literal}<script type="application/javascript">window.addEventListener('load', function(){ var b = document.getElementById('popup'); if (b) { b.click(); } });</script>{/literal}
<div id="static" class="modal fade rt-modal rt-promo" tabindex="-1" data-width="760">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
    <span class="rt-eyebrow">Featured</span>
    <h4 class="modal-title">{$row.item_name|default:''}</h4>
  </div>
  <div class="modal-body rt-promo-body">
    {if !empty($row.url)}<a href="{$row.url}" onclick="window.open('{$row.url}' + location.search)" data-dismiss="modal" target="_blank" rel="nofollow noopener noreferrer" title="{$row.description|default:''}">{/if}
    {if !empty($row.file.url)}<img src="{$row.file.url}" title="{$row.description|default:''}" alt="{$row.description|default:''}" />
    {else if !empty($row.thumbnail)}<img src="{$row.thumbnail}" title="{$row.description|default:''}" alt="{$row.description|default:''}" />
    {else if !empty($row.video)}
    <div class="rt-promo-video"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="443" src="{$row.video}?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0" title="{$row.item_name|default:''}"></iframe></div>
    {else}
    <div class="rt-promo-note"><i class="fas fa-bullhorn"></i><p>{$row.description|default:''}</p></div>
    {/if}
    {if !empty($row.url)}</a>{/if}
  </div>
</div>
{/if}
{/if}
{/if}
