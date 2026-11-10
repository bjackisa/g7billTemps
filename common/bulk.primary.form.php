{* ROTARY — bulk: define primary identifier *}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-key"></i></span><span>Define primary identifier</span></h2>
  </header>
  <div class="rt-list-body">
    <form action="{$securebase}/welcome.php" class="rt-form" id="form_sample_1" method="post" enctype="multipart/form-data">
      <input type="hidden" name="dad" value="bulk" />
      <input type="hidden" name="jc" value="primary" />
      <input type="hidden" name="a" value="save" />
      <input type="hidden" name="id" value="{$smarty.request.id|default:'0'}" />
      <input type="hidden" name="pg" value="{$smarty.request.pg|default:''}" />
      <h3 class="rt-card-label"><i class="far fa-file-alt"></i> File information</h3>
      <div class="rt-field-grid">
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label" for="rt-bp-file">File name <span class="required">*</span></label>
          <select id="rt-bp-file" class="form-control"><option>{Vars::Get("name","files","`id`='{$smarty.request.id}'")}</option></select>
        </div>
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label" for="rt-bp-key">File primary identifier <span class="required">*</span></label>
          <select id="rt-bp-key" class="form-control" name="config1" required="required">{Vars::Array_To_Options($headers,$smarty.post.config1,false)}</select>
          <span class="help-block">The column that uniquely identifies each record in your upload.</span>
        </div>
      </div>
      <div class="rt-form-actions">
        <button type="submit" class="btn rt-btn-primary"><i class="far fa-save"></i> Save form</button>
        <button type="button" class="btn btn-default ignore" onclick="location.href='?welcome.php';">Cancel</button>
      </div>
    </form>
  </div>
</section>
