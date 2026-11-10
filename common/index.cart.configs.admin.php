{* ROTARY — cart configuration (admin) *}
{if !empty($smarty.session.adminuser)}
        {FF::Box(['_BOX_'=>'open','title'=>'[ADMINS] Advanced Settings','icon'=>'fas fa-user-cog','class'=>'red'])}
        <div class="rt-field-grid">
  <div class="rt-field">
            <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label"><i class="fas fa-money-bill-wave"></i> Cost</label>
      {FF::Text(['name'=>'cost','value'=>$cart.item_configs.cost|default:'','_min_'=>1,'class'=>'money'])} <span class="help-block rt-ff-help"><em>Cost modification on the fly</em> </span> </div>
          </div>
  <div class="rt-field">
            <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label"><i class="fas fa-money-bill-wave"></i> Other Amount</label>
      {FF::Text(['name'=>'amount_other','value'=>$cart.item_configs.amount_other|default:'','_min_'=>1,'class'=>'money1'])} <span class="help-block rt-ff-help"><em>Other amount modification on the fly</em> </span> </div>
          </div>
  <div class="rt-field">
            <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label"><i class="fas fa-folder-open"></i> New Order?</label>{FF::Select(['name'=>'new','value'=>$cart.new|default:'yes','options'=>['yes','no'],'_min_'=>1])} <span class="help-block rt-ff-help"><em>Choose NO for an Order Renewal</em> </span> </div>
          </div>
  <div class="rt-field">
            <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label"><i class="fas fa-money-bill-wave"></i> Auto Payments</label>{FF::Select(['name'=>'ap','value'=>$cart.item_configs.ap|default:"{if $smarty.request.ap}{$smarty.request.ap}{/if}",'options'=>['DEF','AIC','AI','AC'],'_min_'=>1])} <span class="help-block rt-ff-help"><em>Choose option for ONLY auto payments</em> </span> </div>
          </div>
</div>
        <div class="rt-field-grid">
  <div class="rt-field">
            <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label"><i class="fas fa-calendar-alt"></i> Start Date</label><div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                <div ondblclick="document.getElementById('start').disabled=false;">
          <input type="text" id="start" class="form-control" name="start" placeholder="dd-mm-yyyy" value="{$cart.item_configs.start|default:''}" disabled="disabled">
        </div>
                <span class="input-group-btn">
        <button class="btn btn-default ignore" type="button"> <i class="fas fa-calendar-alt"></i> </button>
        </span> </div>
      <span class="help-block rt-ff-help"><em>Date of travel aka start of policy enforcement (dd-mm-yyyy).</em> </span> </div>
          </div>
  <div class="rt-field">
            <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label"><i class="fas fa-calendar-alt"></i> End Date</label><div class="input-group date date-picker" data-date-format="dd-mm-yyyy"  data-date-start-date="+0d">
                <div ondblclick="document.getElementById('end').disabled=false;">
          <input type="text" id="end" class="form-control" name="end" placeholder="dd-mm-yyyy" value="{$cart.item_configs.end|default:''}" disabled="disabled">
        </div>
                <span class="input-group-btn">
        <button class="btn btn-default ignore" type="button"> <i class="fas fa-calendar-alt"></i> </button>
        </span> </div>
      <span class="help-block rt-ff-help"><em>Return date aka end of policy enforcement (dd-mm-yyyy).</em> </span> </div>
          </div>
</div>
        <div class="rt-field-grid">
  <div class="rt-field">
            <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label"><i class="fas fa-lock"></i> Lock</label>
      {FF::OO(['name'=>'locked','value'=>$cart.locked,'_min_'=>1])} <span class="help-block rt-ff-help"><em>Lock (My Cart) to avoid an automatic rebuild of the respective item</em> </span> </div>
          </div>
  <div class="rt-field">
            <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label"><i class="fas fa-map-marker-alt"></i> Use For ALL</label>{FF::Select(['name'=>'use_for_all','value'=>$cart.use_for_all|default:'','options'=>['item_desc'],'_min_'=>1])} <span class="help-block rt-ff-help"><em>Use this defined parameter here for all</em> </span> </div>
          </div>
</div>
        <div class="rt-field-grid">
  <div class="rt-field">
            <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label"><i class="fas fa-user"></i> Name</label>
      {FF::Text(['name'=>'name','_min_'=>1])} <span class="help-block rt-ff-help"><em>User name incase of creating new account</em> </span> </div>
          </div>
  <div class="rt-field">
            <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label"><i class="fas fa-calendar-alt"></i> Transaction Date</label>
      {FF::Date(['name'=>'date_created','value'=>$smarty.post.date_created|default:'','_min_'=>1])} <span class="help-block rt-ff-help"><em>This replaces the invoice date</em> </span> </div>
          </div>
</div>
<div class="rt-field-grid">
  <div class="rt-field">
            <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label"><i class="fas fa-university"></i> External Account</label>{FF::Select(['name'=>'act_from','value'=>$smarty.post.act_from|default:'','_min_'=>1,'options'=>CO::Accounts(['d2'=>1]),'assoc'=>1])}
      <span class="help-block rt-ff-help"><em>User name incase of creating new account</em> </span>
      </div>
          </div>
  <div class="rt-field">
  <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label"><i class="fas fa-university"></i> PP</label>{FF::Select(['name'=>'pp','value'=>$smarty.post.pp|default:'','options'=>['cash','bank'],'_min_'=>1])} <span class="help-block rt-ff-help"><em>Choose payment provider</em> </span> </div>
  </div>
</div>
        <div class="rt-field-grid">
  <div class="rt-field is-wide">
            <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label"><i class="fas fa-comments"></i> Description</label>
      {FF::Textarea(['name'=>'item_desc','value'=>$cart.item_desc,'_min_'=>1,'class'=>'summernote'])} <span class="help-block rt-ff-help"><em>Modify to change the default</em> </span> </div>
          </div>
</div>
{FF::Box(['_BOX_'=>'close'])}
    	{/if}
