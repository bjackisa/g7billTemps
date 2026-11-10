{* ROTARY — contact profile (legacy hs=contact view) *}
{FF::Note(['value'=>'<p>Here\'s where you can view and update personal information, such as but not limited to mailing address, email address, phone number, or currency. Need more help on updating your profile? Please contact us through the <a href="?dad=info&jc=support">help desk.</a></p>'])}

{FF::Form(['hidden'=>['dad'=>'account','jc'=>'profile','hs'=>'ci','a'=>'save','id'=>{$smarty.request.id|default:'0'},'G7BILL_SECURITY'=>'FALSE'],'icon'=>'fas fa-user-edit','title'=>'Managing Contact Information'])}
{FF::Text(['name'=>'email','title'=>'Email Address','value'=>$smarty.post.email,'required'=>1,'icon'=>'fas fa-envelope','desc'=>'Email Address Eg jchrist@jolis.net'])}
{FF::Text(['name'=>'phone','value'=>$smarty.post.phone,'icon'=>'fas fa-phone','title'=>'Phone Number','required'=>1,'desc'=>'Phone Number (International Format) Eg +256.752567374'])}
{FF::Box(['_BOX_'=>'open','title'=>'Address, City &amp; ZIP','icon'=>'fas fa-map','class'=>'yellow','status'=>"closed"])}
{FF::Text(['name'=>'add1','value'=>$smarty.post.add1,'title'=>'Address #1','icon'=>'fas fa-map'])}
{FF::Text(['name'=>'add2','value'=>$smarty.post.add2,'title'=>'Address #2','icon'=>'fas fa-map'])}
{FF::Text(['name'=>'city','value'=>$smarty.post.city,'title'=>'City/Town','icon'=>'fas fa-map-signs'])}
{FF::Text(['name'=>'zip','value'=>$smarty.post.zip,'title'=>'Postal/ZIP Code','icon'=>'fas fa-location-arrow'])}
{FF::Box(['_BOX_'=>'close'])}
{FF::Form(['___'=>'close'])}

<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-id-card"></i></span><span>Profile &amp; preferences</span></h2>
  </header>
  <div class="rt-list-body">
    <form action="{$securebase}/welcome.php" class="rt-form" id="form_sample_1" method="post">
      <input type="hidden" name="dad" value="account" />
      <input type="hidden" name="jc" value="profile" />
      <input type="hidden" name="a" value="save" />

      <h3 class="rt-card-label"><i class="fas fa-user"></i> Personal info</h3>
      <div class="rt-field-grid">
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label" for="rt-c-fname">First name <span class="required">*</span></label>
          <div class="input-icon rt-input"><i class="fas fa-user"></i><input id="rt-c-fname" type="text" name="fname" class="form-control" placeholder="First Name" value="{$G7BILL_USERS.fname}" disabled="disabled"></div>
        </div>
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label" for="rt-c-lname">Last name <span class="required">*</span></label>
          <div class="input-icon rt-input"><i class="fas fa-user"></i><input id="rt-c-lname" type="text" name="lname" class="form-control" placeholder="Last Name" value="{$G7BILL_USERS.lname}" disabled="disabled"></div>
        </div>
      </div>

      <h3 class="rt-card-label"><i class="fas fa-map-marker-alt"></i> Address</h3>
      <div class="rt-field-grid">
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label" for="rt-c-add1">Address 1 <span class="required">*</span></label>
          <div class="input-icon rt-input"><i class="fas fa-map"></i><input id="rt-c-add1" type="text" name="add1" class="form-control" placeholder="Address 1" required="required" value="{$G7BILL_USERS.add1}"></div>
        </div>
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label" for="rt-c-add2">Address 2</label>
          <div class="input-icon rt-input"><i class="fas fa-map"></i><input id="rt-c-add2" type="text" name="add2" class="form-control" placeholder="Address 2" value="{$G7BILL_USERS.add2}"></div>
        </div>
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label" for="rt-c-city">City / town <span class="required">*</span></label>
          <div class="input-icon rt-input"><i class="fas fa-map-signs"></i><input id="rt-c-city" type="text" name="city" class="form-control" placeholder="City/Town" required="required" value="{$G7BILL_USERS.city}"></div>
        </div>
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label" for="rt-c-state">US state</label>
          <select id="rt-c-state" class="form-control" name="state">{Vars::States($G7BILL_USERS.state)}</select>
        </div>
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label" for="rt-c-zip">Postal / ZIP code <span class="required">*</span></label>
          <div class="input-icon rt-input"><i class="fas fa-location-arrow"></i><input id="rt-c-zip" type="text" name="zip" class="form-control" placeholder="Postal/ZIP Code" required="required" value="{$G7BILL_USERS.zip}"></div>
        </div>
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label" for="rt-c-country">Country <span class="required">*</span></label>
          <select id="rt-c-country" class="form-control" name="country" disabled="disabled">{Vars::Countries($G7BILL_USERS.country)}</select>
        </div>
      </div>

      <h3 class="rt-card-label"><i class="fas fa-sliders-h"></i> Other settings</h3>
      <div class="rt-field-grid">
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label" for="rt-c-cur">Currency <span class="required">*</span></label>
          <select id="rt-c-cur" class="form-control" name="currency" required="required">{Vars::Currencies($G7BILL_USERS.currency)}</select>
        </div>
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label" for="rt-c-low">Low balance alert</label>
          <div class="input-group rt-input-group">
            <span class="input-group-addon"><label class="rt-check"><input type="checkbox" value="1" name="refill_notify" {if $G7BILL_USERS.refill_notify}checked="checked"{/if}> <span>Notify me below <b class="rt-tone-cardinal">{$G7BILL_USERS.currency}</b></span></label></span>
            <input id="rt-c-low" type="text" name="low_notice" class="form-control" placeholder="100" required="required" value="{Cur::D($accounts.low_notice)}">
          </div>
        </div>
        <div class="form-group rt-ff-stack is-wide">
          <label class="rt-check"><input type="checkbox" id="checkbox9" name="maillist" value="1" {if $G7BILL_USERS.maillist}checked="checked"{/if} /> <span>Stay up to date with our mailing list subscription</span></label>
        </div>
      </div>

      <div class="rt-form-actions">
        <button type="submit" class="btn rt-btn-primary"><i class="far fa-save"></i> Save profile</button>
        <button type="button" class="btn btn-default ignore" onclick="location.href='?welcome.php';">Cancel</button>
      </div>
    </form>
  </div>
</section>
