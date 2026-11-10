{if !empty($P._min_)}<div class="input-icon right rt-input"><i class="{$P.icon|default:'fas fa-hashtag'}"></i>
	<input type="number" name="{$P.name}" class="form-control {$P.class|default:''}" id="{$P.id|default:''}" placeholder="{$P.placeholder|default:"Enter {$P.title}"}" data-toggle="m-tooltip" title="{$P.title|default:''}" {if $P.required}required="required"{/if} value="{$P.value}" {$P.other|default:''}></div>{else}
<div class="form-group rt-ff">
  <label class="control-label rt-ff-label" for="form_control_1">{$P.title} <span class="required">{if $P.required}*{/if}</span></label>
  <div class="rt-ff-control">
    <div class="input-icon right rt-input"><i class="{$P.icon|default:'fas fa-hashtag'}"></i>
      <input type="number" name="{$P.name}" class="form-control {$P.class|default:''}" id="{$P.id|default:''}" placeholder="{$P.placeholder|default:"Enter {$P.title}"}" data-toggle="m-tooltip" title="{$P.title|default:''}" {if $P.required}required="required"{/if} value="{$P.value}" {$P.other|default:''}>
    </div>
    <span class="help-block rt-ff-help">{$P.desc|default:''}</span>
  </div>
</div>
{/if}
