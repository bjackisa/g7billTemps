{if !empty($_MIN_)}<textarea class="form-control #CLASS#" rows="6" name="#NAME#" title="#TITLE#" #PLACEHOLDER# #REQUIRED#>{$smarty.request._VALUE_|default:""}</textarea>{else}
<div class="form-group rt-ff rt-ff-wide">
  <label class="control-label rt-ff-label" for="form_control_1">#TITLE# <span class="required">#MARK#</span></label>
  <div class="rt-ff-control">
    <textarea class="form-control #CLASS#" rows="6" name="#NAME#" title="#TITLE#" #PLACEHOLDER# #REQUIRED#>{$smarty.request._VALUE_|default:""}</textarea>
    <span class="help-block rt-ff-help"> #DESC# </span>
  </div>
</div>
{/if}
