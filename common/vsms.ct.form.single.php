{* ROTARY — vsms · ct · form · single *}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-user-plus"></i></span><span>Single Contact</span></h2>
  </header>
  <div class="rt-list-body">
      <form action="{$securebase}/welcome.php" class="rt-form" id="form_sample_1" method="post">
      <input type="hidden" name="dad" value="vsms" />
      <input type="hidden" name="jc" value="ct" />
      <input type="hidden" name="a" value="save" />
      <input type="hidden" name="id" value="{$smarty.request.id|default:'0'}" />
      <div class="rt-field-grid">
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Phone Number <span class="required">*</span></label>
        <div class="input-icon rt-input"><i class="fas fa-phone"></i>
        <input type="text" name="phone" class="form-control" placeholder="256752567374" value="{$smarty.post.phone}" required="required">
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">First Name</label>
        <div class="input-icon rt-input"><i class="fas fa-user"></i>
        <input type="text" name="fname" class="form-control" placeholder="Abishai" value="{$smarty.post.fname}">
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Last Name</label>
        <div class="input-icon rt-input"><i class="fas fa-user"></i>
        <input type="text" name="lname" class="form-control" placeholder="Abdi" value="{$smarty.post.lname}">
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Email</label>
        <div class="input-icon rt-input"><i class="fas fa-envelope"></i>
        <input type="text" name="email" class="form-control" placeholder="some@domain.com" value="{$smarty.post.email}">
        </div>
      </div>
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
      </div>
      <div class="rt-form-actions">
        <button type="submit" class="btn rt-btn-primary"><i class="far fa-save"></i> Save Contact</button>
        <button type="button" class="btn btn-default ignore" onclick="location.href='?welcome.php';">Cancel</button>
      </div>
      </form>
  </div>
</section>

