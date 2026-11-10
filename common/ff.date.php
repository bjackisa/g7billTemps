{if !empty($_MIN_)}
<div class="input-icon right rt-input"><i class="far fa-calendar-alt"></i><input type="text" name="#NAME#" class="form-control date-picker #CLASS#" placeholder="#PLACEHOLDER#" data-toggle="m-tooltip" title="#TITLE#" #REQUIRED# value="{$smarty.request._VALUE_|default:""}" data-date-format="dd-mm-yyyy" autocomplete="off"></div>{else}
<div class="form-group rt-ff">
  <label class="control-label rt-ff-label" for="form_control_1">#TITLE# <span class="required">#MARK#</span></label>
  <div class="rt-ff-control">
    <div class="input-icon right rt-input"><i class="far fa-calendar-alt"></i>
      <input type="text" name="#NAME#" class="form-control date-picker #CLASS#" placeholder="#PLACEHOLDER#" data-toggle="m-tooltip" title="#TITLE#" #REQUIRED# value="{$smarty.request._VALUE_|default:""}" data-date-format="dd-mm-yyyy" autocomplete="off">
    </div>
    <span class="help-block rt-ff-help"> #DESC# </span>
  </div>
</div>
{/if}
