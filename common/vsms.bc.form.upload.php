{* ROTARY — vsms · bc · form · upload *}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-upload"></i></span><span>Upload Messages</span></h2>
  </header>
  <div class="rt-list-body">
      <form action="{$securebase}/welcome.php" class="rt-form" id="form_sample_1" method="post" enctype="multipart/form-data">
      <input type="hidden" name="dad" value="vsms" />
      <input type="hidden" name="jc" value="bc" />
      <input type="hidden" name="a" value="upload" />
      <input type="hidden" name="G7BILL_SECURITY" value="FALSE" />
      <div class="rt-field-grid">
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Schedule <span class="required">*</span></label>
        <div class="input-group date form_datetime bs-datetime" data-date-format="dd MM yyyy - HH:ii p">
        <input class="form-control" size="16" type="text" name="start" value="">
        <span class="input-group-addon">
        <button class="btn default date-reset" type="button"> <i class="fas fa-times"></i> </button>
        </span> <span class="input-group-addon">
        <button class="btn default date-set" type="button"> <i class="fas fa-calendar-alt"></i> </button>
        </span> </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Browse File <span class="required">*</span></label>
        <div class="fileinput fileinput-new" data-provides="fileinput">
        <div class="input-group input-large">
        <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput"> <i class="fas fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename"> </span> </div>
        <span class="input-group-addon btn default btn-file"> <span class="fileinput-new"> Select file </span> <span class="fileinput-exists"> Change </span>
        <input type="file" name="messages" required="required">
        </span> <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a> </div>
        </div>
      </div>
      </div>
      <div class="rt-form-actions">
        <button type="submit" class="btn rt-btn-primary"><i class="far fa-save"></i> Upload Messages</button>
        <button type="button" class="btn btn-default ignore" onclick="location.href='?welcome.php';">Cancel</button>
      </div>
      </form>
  </div>
</section>

