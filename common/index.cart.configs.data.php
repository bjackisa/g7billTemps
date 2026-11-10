{* ROTARY — cart configuration (data) *}
{assign var='amount' value="{if $cart.amount<1}100000{else}{$cart.amount}{/if}"}
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
      <p>Thank you for your order. Please customize your order by filling in the form below. Click the <strong class="rt-tone-royal">[Save &amp; Continue]</strong> button when ready.</p>
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
              <label class="control-label rt-ff-label"><i class="fas fa-flag"></i> Currency</label>{FF::Select(['name'=>'cur','value'=>$cart.cur|default:$config.default_currency,'table'=>'currencies','column'=>'code','key'=>'code','where'=>"`status`='1'",'_min_'=>1])}
<span class="help-block rt-ff-help"><em>Please choose currency</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label"><i class="fas fa-money-check"></i> Amount</label>{FF::Text(['name'=>'amount','value'=>$amount,'icon'=>'fas fa-money-check','class'=>'money','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Please enter the support amount</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field is-wide">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label"><i class="fas fa-edit"></i> Special Message</label>{FF::Textarea(['name'=>'comments','value'=>$cart.comments,'type'=>'plain','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Enter any special instructions or message you would like us to relay</em> </span> </div>
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
