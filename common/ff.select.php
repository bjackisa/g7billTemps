{if !empty($_MIN_)}
<select class="bs-select form-control select2 #CLASS#" style="#STYLE#" data-live-search="true" data-size="8" name="#NAME#" #MULTIPLE# #REQUIRED# #OTHER# >
	{if !empty($_TITLE_)}<option disabled selected value>#TITLE#</option>{/if}
    <option></option>
    #OPTIONS#
</select>
{else}
<div class="form-group rt-ff">
  <label class="control-label rt-ff-label" for="form_control_1">#TITLE# <span class="required">#MARK#</span></label>
  <div class="rt-ff-control">
    <select class="bs-select form-control select2 #CLASS#" style="#STYLE#" data-live-search="true" data-size="8" name="#NAME#" #MULTIPLE# #REQUIRED# #OTHER# >
      <option disabled selected value>Select #TITLE#</option>
      #OPTIONS#
    </select>
    <span class="help-block rt-ff-help"> #DESC# </span>
  </div>
</div>
{/if}
