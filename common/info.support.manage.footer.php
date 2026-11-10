{* ROTARY — help desk: reply composer *}
<section class="rt-summary-card rt-composer">
  <header class="rt-card-headline"><h2><i class="fas fa-reply"></i> Reply</h2></header>
  <form action="{$securebase}/welcome.php" class="form-horizontal rt-form" id="form_sample_1" method="post" enctype="multipart/form-data">
    <input type="hidden" name="dad" value="info" />
    <input type="hidden" name="jc" value="support" />
    <input type="hidden" name="a" value="save" />
    <input type="hidden" name="id" value="{$smarty.request.id|default:'0'}" />
    <input type="hidden" name="G7BILL_SECURITY" value="FALSE" />
    <input type="hidden" name="csrf" value="{CSRF::Token()}" />
    <div class="form-group rt-ff-stack">
      <label class="sr-only" for="rt-reply">Your reply</label>
      <textarea id="rt-reply" class="wysihtml5 form-control" rows="6" name="description" data-error-container="#editor1_error" placeholder="Write your reply…">{$smarty.post.description}</textarea>
      <div id="editor1_error"></div>
    </div>
    <div class="rt-composer-files">
      {for $f=1 to 2}
      <div class="fileinput fileinput-new rt-fileinput-inline" data-provides="fileinput">
        <span class="btn btn-sm rt-btn-soft btn-file"><span class="fileinput-new"><i class="fas fa-paperclip"></i> Attach file</span><span class="fileinput-exists"><i class="fas fa-sync-alt"></i> Change</span><input type="file" name="a_file[]"></span>
        <span class="fileinput-filename rt-muted"></span>
        <a href="javascript:;" class="rt-icon-action rt-icon-sm is-danger fileinput-exists" data-dismiss="fileinput" aria-label="Remove file"><i class="fas fa-times"></i></a>
      </div>
      {/for}
    </div>
    <div class="rt-form-actions rt-composer-actions">
      <button type="button" class="btn btn-default" onclick="location.href='?welcome.php';">Cancel</button>
      <button type="submit" class="btn rt-btn-primary"><i class="far fa-paper-plane"></i> Send reply</button>
    </div>
  </form>
</section>
