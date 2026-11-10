{* ROTARY — bulk upload into cart (collapsed panel above the cart) *}
<section class="portlet box rt-panel rt-formcard">
  <div class="portlet-title rt-panel-head">
    <div class="caption"><i class="fas fa-cloud-upload-alt"></i> Bulk upload</div>
    <div class="tools"><a href="javascript:;" class="expand" aria-label="Toggle bulk upload"></a></div>
  </div>
  <div class="portlet-body form rt-panel-body" style="display: none;">
    <div class="note note-warning"><p><i class="far fa-life-ring"></i> Bulk upload packages into your cart. <a href="?dad=index&jc=packages&a=temps" target="_blank" rel="nofollow noopener noreferrer"><i class="fas fa-download"></i> Download the package templates.</a></p></div>
    <form action="/" method="post" class="horizontal-form rt-form" enctype="multipart/form-data">
      <input type="hidden" name="dad" value="index" />
      <input type="hidden" name="jc" value="cart" />
      <input type="hidden" name="a" value="upload" />
      <div class="form-body">
        <div class="rt-field-grid">
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label"><i class="fas fa-list"></i> Package <span class="required">*</span></label>{FF::Select(['name'=>'package','options'=>$packages,'required'=>1,'_min_'=>1,'assoc'=>1])}<span class="help-block rt-ff-help">Choose the package for the upload</span></div>
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label"><i class="fas fa-file-csv"></i> CSV file <span class="required">*</span></label>{FF::File(['name'=>'file','icon'=>'fa fa-file','required'=>1,'_min_'=>1])}<span class="help-block rt-ff-help">Browse for the CSV file</span></div>
        </div>
      </div>
      <div class="form-actions rt-form-actions">
        <button type="button" class="btn btn-default" onclick="location.href='?dad=index&jc=packages&a=temps';"><i class="fas fa-download"></i> Templates</button>
        <button type="submit" name="submit" class="btn rt-btn-primary"><i class="fas fa-upload"></i> Upload</button>
      </div>
    </form>
  </div>
</section>
