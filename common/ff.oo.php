{if !empty($_MIN_)}
<div class="rt-switch"><input type="checkbox" name="#NAME#" value="#_VALUE_#" class="make-switch" data-switch="true" #CHECKED# data-on-text="#_ON_#" data-off-text="#_OFF_#" data-on-color="success" data-off-color="default"></div>
{else}
<div class="form-group rt-ff">
  <label class="control-label rt-ff-label" for="form_control_1">#TITLE# <span class="required">#MARK#</span></label>
  <div class="rt-ff-control">
    <div class="rt-switch"><input type="checkbox" name="#NAME#" value="#_VALUE_#" class="make-switch" data-switch="true" #CHECKED# data-on-text="#_ON_#" data-off-text="#_OFF_#" data-on-color="success" data-off-color="default"></div>
    <span class="help-block rt-ff-help">#DESC#</span>
  </div>
</div>
{/if}
