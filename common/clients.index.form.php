{* ROTARY — clients · index · form *}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-address-card"></i></span><span>Contact Profile</span></h2>
  </header>
  <div class="rt-list-body">
      <form action="{$securebase}/welcome.php" class="rt-form" id="form_sample_1" method="post">
      <input type="hidden" name="dad" value="clients" />
      <input type="hidden" name="jc" value="index" />
      <input type="hidden" name="a" value="save" />
      <input type="hidden" name="id" value="{$smarty.request.id|default:'0'}" />
      <input type="hidden" name="G7BILL_SECURITY" value="FALSE" />
      <input type="hidden" name="sub" value="{$smarty.request.sub|default:''}" />
      <h3 class="rt-card-label">Personal Info</h3>
      <div class="rt-field-grid">
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">First Name <span class="required">*</span></label>
        <div class="input-icon rt-input"><i class="fas fa-user"></i>
        <input type="text" name="fname" class="form-control" placeholder="First Name" required="required" value="{$smarty.post.fname}">
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Last Name <span class="required">*</span></label>
        <div class="input-icon rt-input"><i class="fas fa-user"></i>
        <input type="text" name="lname" class="form-control" placeholder="Last Name" required="required" value="{$smarty.post.lname}">
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Email Address <span class="required">*</span></label>
        <div class="input-icon rt-input"><i class="fas fa-envelope"></i>
        <input type="email" name="email" class="form-control" placeholder="Email Address" required="required" value="{$smarty.post.email}">
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Date of Birth</label>
        <div class="input-icon rt-input"><i class="fas fa-calendar-alt"></i>
        <div class="date date-picker bs-datetime" data-date-format="dd-mm-yyyy">
        <input class="form-control" type="text" value="{$smarty.post.dob|default:''}" name="dob">
        <button class="btn default date-set hide" type="button"> <i class="fas fa-calendar-alt"></i> </button>
        </div>
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Phone Number <span class="required">*</span></label>
        <div class="input-icon rt-input"><i class="fas fa-phone"></i>
        <input type="phone" name="phone" class="form-control" placeholder="+256.752567374" required="required" value="{$smarty.post.phone}">
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Gender</label>
        <select class="form-control select2" name="gender">
        {Vars::Genders($smarty.post.gender)}
        </select>
      </div>
      </div>
      <h3 class="rt-card-label">Address</h3>
      <div class="rt-field-grid">
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Address 1</label>
        <div class="input-icon rt-input"><i class="fas fa-map"></i>
        <input type="text" name="add1" class="form-control" placeholder="Address 1" value="{$smarty.post.add1}">
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Address 2</label>
        <div class="input-icon rt-input"><i class="fas fa-map"></i>
        <input type="text" name="add2" class="form-control" placeholder="Address 2" value="{$smarty.post.add2}">
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">City/Town</label>
        <div class="input-icon rt-input"><i class="fas fa-map-signs"></i>
        <input type="text" name="city" class="form-control" placeholder="City/Town" value="{$smarty.post.city}">
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">State / Province</label>
        <div class="input-icon rt-input"><i class="fas fa-briefcase"></i>
        <input type="text" name="state" class="form-control" placeholder="State / Province" value="{$smarty.post.state}">
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Postal/ZIP Code</label>
        <div class="input-icon rt-input"><i class="fas fa-location-arrow"></i>
        <input type="text" name="zip" class="form-control" placeholder="Postal/ZIP Code" value="{$smarty.post.zip}">
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Country</label>
        <select class="form-control select2" name="country">
        {Vars::Countries($smarty.post.country)}
        </select>
      </div>
      </div>
      <h3 class="rt-card-label">Other Settings</h3>
      <div class="rt-field-grid">
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Company</label>
        <div class="input-icon rt-input"><i class="fas fa-briefcase"></i>
        <input type="text" name="company" class="form-control" placeholder="Company / Organization Name" value="{$smarty.post.company}">
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Nationality</label>
        <select class="form-control select2" name="nationality">
        {Vars::Countries($smarty.post.nationality)}
        </select>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">TIN</label>
        <div class="input-icon rt-input"><i class="fas fa-user-secret"></i>
        <input type="text" name="tin" class="form-control" placeholder="Tax Identification Number" value="{$smarty.post.tin}">
        </div>
      </div>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label">Passport Number</label>
        <div class="input-icon rt-input"><i class="fas fa-flag"></i>
        <input type="text" name="id_passport" class="form-control" placeholder="Passport Number" value="{$smarty.post.id_passport}">
        </div>
      </div>
      </div>
      <h3 class="rt-card-label rt-tone-cardinal">Advanced Settings</h3>
      <div class="rt-field-grid">
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label rt-tone-cardinal">Turn into System User</label>
        <input type="checkbox" class="make-switch" checked data-on-color="danger" data-off-color="default" name="sys">
  
      </div>
      <div class="rt-field is-wide">{Msgs::Error('This setting turns this contact into a full system user if it meets the minimum requirements')}</div>
      </div>
      <div class="rt-form-actions">
        <button type="submit" class="btn rt-btn-primary"><i class="far fa-save"></i> Save Record</button>
        <button type="button" class="btn btn-default ignore" onclick="location.href='?welcome.php';">Cancel</button>
      </div>
      </form>
  </div>
</section>
