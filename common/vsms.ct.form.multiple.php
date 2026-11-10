{* ROTARY — vsms · ct · form · multiple *}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-list"></i></span><span>Multiple Contacts</span></h2>
  </header>
  <div class="rt-list-body">
      <form action="{$securebase}/welcome.php" class="rt-form" id="form_sample_1" method="post">
      <input type="hidden" name="dad" value="vsms" />
      <input type="hidden" name="jc" value="ct" />
      <input type="hidden" name="a" value="multiple" />
      <div class="rt-field-grid">
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Group</label>
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
      <div class="form-group rt-ff-stack is-wide">
        <label class="control-label rt-ff-label">Phone numbers <span class="rt-muted">— one per line</span></label>
        <textarea class="form-control" rows="6" name="numbers" placeholder="256752567374&#10;256712567374&#10;256776567374"></textarea>
      </div>
      </div>
      <div class="rt-form-actions">
        <button type="submit" class="btn rt-btn-primary"><i class="far fa-save"></i> Save Multiple Contacts</button>
        <button type="button" class="btn btn-default ignore" onclick="location.href='?welcome.php';">Cancel</button>
      </div>
      </form>
  </div>
</section>

