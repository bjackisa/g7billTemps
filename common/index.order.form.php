{* ROTARY — quick online payment form *}
{if !empty($order)}
<div class="rt-result rt-result-success"><div class="rt-result-ico"><i class="fas fa-check"></i></div><div><span class="rt-eyebrow">Order placed</span><h2>Your order number is {$order.number}</h2></div></div>
{/if}
<section class="portlet box rt-panel rt-formcard rt-narrow">
  <div class="portlet-title rt-panel-head">
    <div class="caption"><i class="far fa-credit-card"></i> Online payments</div>
    <div class="tools"><a href="javascript:;" class="collapse" aria-label="Toggle"></a></div>
  </div>
  <div class="portlet-body form rt-panel-body">
    <form action="/" method="post" class="horizontal-form rt-form" enctype="multipart/form-data">
      <input type="hidden" name="dad" value="index" />
      <input type="hidden" name="jc" value="order" />
      <input type="hidden" name="a" value="save" />
      <div class="form-body">
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label"><i class="fas fa-flag"></i> Package</label>
          {FF::Select(['name'=>'pack[id]','value'=>$package,'options'=>$packages,'_min_'=>1,'assoc'=>1])}
          <span class="help-block rt-ff-help">Please choose a package</span>
        </div>
        {if $package_info.type!='fixed'}
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label"><i class="fas fa-money-check"></i> Amount</label>
          {FF::Text(['name'=>'pack[amount]','value'=>$smarty.get.amount|default:'','title'=>'Amount','icon'=>'fas fa-money-check','class'=>'money','_min_'=>1])}
          <span class="help-block rt-ff-help">Please enter the amount</span>
        </div>
        {/if}
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label"><i class="fas fa-mobile-alt"></i> Mobile number</label>
          {FF::Text(['name'=>'mobile','value'=>$smarty.get.mobile,'icon'=>'fas fa-mobile','_min_'=>1,'class'=>'mobile'])}
          <span class="help-block rt-ff-help"><div id="response" class="note note-warning bold"></div></span>
        </div>
        <div class="form-group rt-ff-stack hide">
          <label class="control-label rt-ff-label"><i class="far fa-envelope"></i> [Optional] Email address</label>
          {FF::Text(['name'=>'email','value'=>$smarty.request.email,'icon'=>'fas fa-envelope','_min_'=>1])}
          <span class="help-block rt-ff-help">Please enter your email address</span>
        </div>
        <!-- Admin Configurations-->
        {include file="index.cart.configs.admin.php"}
        <!-- Admin Configurations/-->
      </div>
      <div class="form-actions rt-form-actions">
        <button type="reset" class="btn btn-default"><i class="fas fa-redo"></i> Reset</button>
        <button type="submit" name="submit" value="Save Configuration" class="btn rt-btn-gold"><i class="fas fa-lock"></i> Make payment</button>
      </div>
    </form>
  </div>
</section>
