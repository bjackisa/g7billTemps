{* ROTARY — vsms · ct · form · upload *}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-upload"></i></span><span>Upload Contacts</span></h2>
  </header>
  <div class="rt-list-body">
      <form action="{$securebase}/welcome.php" class="rt-form" id="form_sample_1" method="post" enctype="multipart/form-data">
      <input type="hidden" name="dad" value="vsms" />
      <input type="hidden" name="jc" value="ct" />
      <input type="hidden" name="a" value="upload" />
      <div class="rt-field-grid">
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Group <span class="required">*</span></label>
        <select class="form-control" name="group">
        {Vars::Array_To_Options($groups,$smarty.post.group)}
        </select>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Status <span class="required">*</span></label>
        <select class="form-control" name="status" required="required">
        {Vars::Statuses($smarty.post.status,"onoff_mini","options")}
        </select>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Browse File <span class="required">*</span></label>
        <div class="fileinput fileinput-new" data-provides="fileinput">
        <div class="input-group input-large">
        <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput"> <i class="fas fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename"> </span> </div>
        <span class="input-group-addon btn default btn-file"> <span class="fileinput-new"> Select file </span> <span class="fileinput-exists"> Change </span>
        <input type="file" name="numbers" required="required">
        </span> <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a> </div>
        </div>
      </div>
      </div>
      <div class="rt-form-actions">
        <button type="submit" class="btn rt-btn-primary"><i class="far fa-save"></i> Upload Contacts</button>
        <button type="button" class="btn btn-default ignore" onclick="location.href='?welcome.php';">Cancel</button>
      </div>
      </form>
  </div>
</section>

