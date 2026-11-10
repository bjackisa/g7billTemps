{* ROTARY — cart configuration (funeral) *}
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
    <div class="caption"> <i class="fas fa-hand-holding-usd"></i> {$cart.item_name} Configurations</div>
    <div class="tools"><a href="javascript:;" class="collapse" aria-label="Toggle"></a></div>
  </div>
  <div class="portlet-body form rt-panel-body">
    <div class="note note-info">
      <p>Losing a loved one is one of the hardest things many of us will ever face. Dealing with death is difficult, and grief can sometimes be overwhelming. ((CN)) will organize the transport and contact the relevant authorities to obtain all required authorizations for transportation of remains.</p>
    </div>
    <form action="/" method="post" class="horizontal-form rt-form" enctype="multipart/form-data">
      <input type="hidden" name="dad" value="index" />
      <input type="hidden" name="jc" value="cart" />
      <input type="hidden" name="a" value="save" />
      <input type="hidden" name="id" value="{$cart.id|default:'0'}" />
      <input type="hidden" name="G7BILL_SECURITY" value="TRUE" />
      <div class="form-body">
        <div class="rt-field-grid">
        <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label"><i class="fas fa-user"></i> Deceased</label>{FF::Text(['name'=>'deceased','value'=>$cart.item_configs.deceased,'icon'=>'fas fa-user','_min_'=>1,'required'=>1])}
              <span class="help-block rt-ff-help"><em>Please enter the name of the deceased</em> </span> </div>
          </div>
        <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label"><i class="fas fa-calendar"></i> Date of Death</label>{FF::Date(['name'=>'dod','value'=>$cart.item_configs.dod,'icon'=>'fas fa-calendar-alt','_min_'=>1,'required'=>1])}
              <span class="help-block rt-ff-help"><em>Please enter the date of death</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
        <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label"><i class="fas fa-map-signs"></i> Deceased Location</label>{FF::Text(['name'=>'deceased_location','value'=>$cart.item_configs.deceased_location,'icon'=>'fas fa-map-signs','_min_'=>1,'required'=>1])}
              <span class="help-block rt-ff-help"><em>Please enter the location of the deceased</em> </span> </div>
          </div>
        <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label"><i class="fas fa-notes-medical"></i> Cause of Death</label>{FF::Text(['name'=>'death_cause','value'=>$cart.item_configs.death_cause,'icon'=>'fas fa-notes-medical','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Please enter the cause of death</em> </span> </div>
          </div>
        </div>

        <div class="rt-field-grid">
          <div class="rt-field is-wide">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label"><i class="fas fa-edit"></i> More Information</label>{FF::Textarea(['name'=>'comments','value'=>$cart.comments,'type'=>'plain','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Enter any special instructions or details you would like us to take note</em> </span> </div>
          </div>

        </div>
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
