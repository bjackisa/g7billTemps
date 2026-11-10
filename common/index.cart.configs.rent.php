{* ROTARY — cart configuration (rent) *}
<div class="rt-page-title">
  <div><span class="rt-eyebrow">Configure item</span><h1>{$cart.item_name}</h1></div>
  <ol class="rt-steps" aria-label="Checkout progress">
    <li class="is-active"><span>1</span> Cart</li>
    <li><span>2</span> Details</li>
    <li><span>3</span> Payment</li>
  </ol>
</div>
<section class="portlet box rt-panel rt-formcard">
  <div class="portlet-title rt-panel-head">
    <div class="caption"> <i class="fas fa-plane-departure"></i> {$cart.item_name} Configurations</div>
    <div class="tools"><a href="javascript:;" class="collapse" aria-label="Toggle"></a></div>
  </div>
  <div class="portlet-body form rt-panel-body">
    <div class="note note-info">
      <p>Property Rental.</p>
    </div>
    <form action="/" method="post" class="horizontal-form rt-form">
      <input type="hidden" name="dad" value="index" />
      <input type="hidden" name="jc" value="cart" />
      <input type="hidden" name="a" value="save" />
      <input type="hidden" name="id" value="{$cart.id|default:'0'}" />
      <input type="hidden" name="G7BILL_SECURITY" value="TRUE" />
      <div class="form-body">
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label"><i class="fas fa-calendar-alt"></i> Check-In Date</label><div class="input-group date date-picker" data-date-format="dd-mm-yyyy"  data-date-start-date="+0d">
                <input type="text" class="form-control" name="start" required="required" placeholder="dd-mm-yyyy" value="{$cart.item_configs.start|default:''}">
                <span class="input-group-btn">
                <button class="btn btn-default ignore" type="button"> <i class="fas fa-calendar-alt"></i> </button>
                </span> </div>
              <span class="help-block rt-ff-help"><em>Date of entry aka start of billing (dd-mm-yyyy).</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label"><i class="fas fa-calendar-alt"></i> Check-Out Date</label><div class="input-group date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                <input type="text" class="form-control" name="end" placeholder="dd-mm-yyyy" value="{$cart.item_configs.end|default:''}">
                <span class="input-group-btn">
                <button class="btn btn-default ignore" type="button"> <i class="fas fa-calendar-alt"></i> </button>
                </span> </div>
              <span class="help-block rt-ff-help"><em>End date aka end of billing enforcement (dd-mm-yyyy).</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label"><i class="fas fa-user"></i> Adults</label>
              {FF::Select(['name'=>'adults','value'=>$cart.item_configs.adults|default:'1','options'=>[1,2,3],'_min_'=>1,'required'=>1])} <span class="help-block rt-ff-help"><em>Number of Adult guests or occupants</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label"><i class="fas fa-child"></i> Children</label>
              {FF::Select(['name'=>'children','value'=>$cart.item_configs.children|default:'0','options'=>[0,1,2,3],'_min_'=>1])} <span class="help-block rt-ff-help"><em>Number of Children guests or occupants</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field is-wide">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label"><i class="fas fa-edit"></i> Special Instructions</label>{FF::Textarea(['name'=>'comments','value'=>$cart.comments,'_min_'=>1,'class'=>'summernote'])}
              <span class="help-block rt-ff-help"><em>Enter any special instructions or details you would like us to take note</em> </span> </div>
          </div>

        </div>
        <!-- Admin Configurations-->{include file="index.cart.configs.admin.php"}<!-- Admin Configurations/-->
      </div>
      <div class="form-actions rt-form-actions">
        <button type="reset" class="btn rt-btn-text is-danger" onclick="location.href='?dad=index&jc=cart&a=trash';"><i class="far fa-trash-alt"></i> Empty cart</button>
        <button type="reset" class="btn btn-default" onclick="location.href='?dad=index&jc=cart&a=del&id={$cart.id|default:'0'}';"><i class="fas fa-forward"></i> Skip</button>
        <button type="reset" class="btn btn-default"><i class="fas fa-redo"></i> Reset</button>
        <button type="submit" name="submit" value="Save Configuration" class="btn rt-btn-primary">Save &amp; continue <i class="fas fa-arrow-right"></i></button>
      </div>
    </form>
  </div>
</section>
