{* ROTARY — help desk: new ticket *}
<section class="portlet box rt-panel rt-formcard">
  <div class="portlet-title rt-panel-head">
    <div class="caption"><i class="far fa-life-ring"></i> Submit a ticket</div>
    <div class="tools"><a href="javascript:;" class="collapse" aria-label="Toggle"></a></div>
  </div>
  <div class="portlet-body form rt-panel-body">
    <form action="{$securebase}/welcome.php" class="form-horizontal rt-form" id="form_sample_1" method="post" enctype="multipart/form-data">
      <input type="hidden" name="dad" value="info" />
      <input type="hidden" name="jc" value="support" />
      <input type="hidden" name="a" value="save" />
      <input type="hidden" name="id" value="{$smarty.request.id|default:'0'}" />
      <input type="hidden" name="G7BILL_SECURITY" value="FALSE" />
      <input type="hidden" name="csrf" value="{CSRF::Token()}" />
      <div class="form-body">
        <div class="rt-ff-section"><span class="rt-ff-section-title">Ticket information</span><p>Tell us which service this is about so the right team picks it up.</p></div>
        <div class="rt-field-grid">
          <div class="form-group rt-ff-stack">
            <label class="control-label rt-ff-label" for="rt-t-service">Associated service <span class="required">*</span></label>
            <select id="rt-t-service" class="form-control select2" name="service">{$services}</select>
          </div>
          <div class="form-group rt-ff-stack">
            <label class="control-label rt-ff-label" for="rt-t-cat">Ticket category <span class="required">*</span></label>
            <select id="rt-t-cat" class="form-control select2" name="cat">{Vars::Selector("helpdesk_categories")}</select>
          </div>
        </div>
        <div class="rt-ff-section"><span class="rt-ff-section-title">Describe the issue</span><p>Be as precise as possible so we can handle your request quickly.</p></div>
        <div class="form-group rt-ff-stack">
          <label class="sr-only" for="rt-t-desc">Description</label>
          <textarea id="rt-t-desc" class="form-control" rows="7" name="description" data-error-container="#editor1_error" placeholder="What happened, what did you expect, and any reference numbers…">{$smarty.post.description}</textarea>
          <div id="editor1_error"></div>
        </div>
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label">Attach a file <span class="rt-muted">(optional)</span></label>
          <div class="fileinput fileinput-new rt-fileinput" data-provides="fileinput">
            <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
            <div class="rt-fileinput-actions">
              <span class="btn rt-btn-soft btn-file"><span class="fileinput-new"><i class="fas fa-paperclip"></i> Select file</span><span class="fileinput-exists"><i class="fas fa-sync-alt"></i> Change</span><input type="file" name="a_file[]"></span>
              <a href="javascript:;" class="btn rt-btn-text is-danger fileinput-exists" data-dismiss="fileinput"><i class="far fa-trash-alt"></i> Remove</a>
            </div>
          </div>
        </div>
      </div>
      <div class="form-actions rt-form-actions">
        <button type="button" class="btn btn-default" onclick="location.href='?welcome.php';">Cancel</button>
        <button type="submit" class="btn rt-btn-primary"><i class="far fa-paper-plane"></i> Submit ticket</button>
      </div>
    </form>
  </div>
</section>
