{if !empty($_MIN_)}<label class="rt-file input-icon right"><i class="#ICON#"></i><span class="rt-file-cta"><i class="fas fa-cloud-upload-alt"></i> Choose file</span>
  <input type="file" name="#NAME#" class="form-control #CLASS#" id="#ID#" placeholder="#PLACEHOLDER#" data-toggle="m-tooltip" title="#TITLE#" #REQUIRED# value="{$smarty.request._VALUE_|default:""}" #OTHER#>
</label>{else}
<div class="form-group rt-ff">
  <label class="control-label rt-ff-label" for="form_control_1">#TITLE# <span class="required">#MARK#</span></label>
  <div class="rt-ff-control">
    <label class="rt-file input-icon right"><i class="#ICON#"></i><span class="rt-file-cta"><i class="fas fa-cloud-upload-alt"></i> Choose file</span>
      <input type="file" name="#NAME#" class="form-control #CLASS#" id="#ID#" placeholder="#PLACEHOLDER#" data-toggle="m-tooltip" title="#TITLE#" #REQUIRED# value="{$smarty.request._VALUE_|default:""}" #OTHER#>
    </label>
    <span class="help-block rt-ff-help"> #DESC# </span>
  </div>
</div>
{/if}
