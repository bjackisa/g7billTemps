{if $smarty.request.dad!='xp'}
{assign var='whatsapp' value="{E::V('whatsapp')}"}
{assign var='telegram' value="{E::V('telegram')}"}
{assign var='url' value="{if IS::NUM($whatsapp)}https://api.whatsapp.com/send?phone={$whatsapp}&text=Hi+{$config.short_name|urlencode}+I+need+some+help{else}{$whatsapp}{/if}"}
{if !empty($whatsapp) or !empty($telegram) or E::V(['name'=>'callback'])}
<div class="rt-chips">
  {if !empty($whatsapp)}<a href="{$url}" class="rt-chip rt-chip-wa ignore" rel="nofollow noopener noreferrer"><span class="rt-chip-ico"><i class="fab fa-whatsapp"></i></span> {$LANG.T000029}</a>{/if}
  {if E::V(['name'=>'callback'])}<a data-toggle="modal" href="#responsive" class="rt-chip rt-chip-call ignore" rel="nofollow noopener noreferrer"><span class="rt-chip-ico"><i class="fa fa-phone"></i></span> {$LANG.T000036}</a>{/if}
  {if !empty($telegram)}<a href="https://t.me/{$telegram}" class="rt-chip rt-chip-tg ignore" rel="nofollow noopener noreferrer"><span class="rt-chip-ico"><i class="fab fa-telegram-plane"></i></span> {$LANG.T000037}</a>{/if}
</div>
{/if}
{/if}
