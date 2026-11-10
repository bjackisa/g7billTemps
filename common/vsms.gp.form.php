{* ROTARY — vsms · gp · form *}
{Stats::Mini()}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-users"></i></span><span>Manage Group</span></h2>
  </header>
  <div class="rt-list-body">
      <form action="{$securebase}/welcome.php" class="rt-form" id="form_sample_1" method="post">
      <input type="hidden" name="dad" value="vsms" />
      <input type="hidden" name="jc" value="gp" />
      <input type="hidden" name="a" value="save" />
      <input type="hidden" name="id" value="{$smarty.request.id|default:'0'}" />
      <h3 class="rt-card-label">Group Information</h3>
      <div class="rt-field-grid">
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Group Name <span class="required">*</span></label>
        <div class="input-icon rt-input"><i class="fas fa-users"></i>
        <input type="text" name="name" class="form-control" placeholder="Group Name" required="required" value="{$smarty.post.name}">
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Status <span class="required">*</span></label>
        <select class="form-control" name="status" required="required">
        {Vars::Statuses($smarty.post.status,"onoff_mini","options")}
        </select>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Group Description</label>
        <textarea class="form-control" rows="6" name="description" placeholder="Group Description">{$smarty.post.description}</textarea>
      </div>
      </div>
      <div class="rt-form-actions">
        <button type="submit" class="btn rt-btn-primary"><i class="far fa-save"></i> Save Group</button>
        <button type="button" class="btn btn-default ignore" onclick="location.href='?welcome.php';">Cancel</button>
      </div>
      </form>
  </div>
</section>

