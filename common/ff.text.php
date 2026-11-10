{if !empty($_MIN_)}<div class="input-icon right rt-input"><i class="#ICON#"></i>
	<input type="text" name="#NAME#" class="form-control #CLASS#" id="#ID#" placeholder="#PLACEHOLDER#" data-toggle="m-tooltip" title="#TITLE#" #REQUIRED# value="{$smarty.request._VALUE_|default:""}" #OTHER#></div>{else}
<div class="form-group rt-ff">
  <label class="control-label rt-ff-label" for="form_control_1">#TITLE# <span class="required">#MARK#</span></label>
  <div class="rt-ff-control">
    <div class="input-icon right rt-input"><i class="#ICON#"></i>
      <input type="#TYPE#" name="#NAME#" class="form-control #CLASS#" id="#ID#" placeholder="#PLACEHOLDER#" data-toggle="m-tooltip" title="#TITLE#" #REQUIRED# value="{$smarty.request._VALUE_|default:""}" #OTHER#>
    </div>
    <span class="help-block rt-ff-help"> #DESC# </span>
  </div>
</div>
{/if}
