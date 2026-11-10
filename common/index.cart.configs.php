{* ROTARY — item configuration (after add to cart) *}
{if !empty($cart.comments)}{Msgs::Error($cart.comments)}{/if}
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
    <div class="caption"><i class="fas fa-sliders-h"></i> {$cart.item_name} configurations</div>
    <div class="tools"><a href="javascript:;" class="collapse" aria-label="Toggle"></a></div>
  </div>
  <div class="portlet-body form rt-panel-body">
    <div class="note note-info"><p>{$form.desc|default:'This product requires and requests for additional information.'}</p></div>
    <form action="/" method="post" class="horizontal-form rt-form" enctype="multipart/form-data">
      <input type="hidden" name="dad" value="index" />
      <input type="hidden" name="jc" value="cart" />
      <input type="hidden" name="a" value="save" />
      <input type="hidden" name="id" value="{$cart.id|default:'0'}" />
      <input type="hidden" name="G7BILL_SECURITY" value="TRUE" />
      <div class="form-body">
        <div class="rt-field-grid {if $configs|count<=1}is-single{/if}">
          {section name=results loop=$configs}
          {assign var='R' value=V::D($configs[results])}
          {if $R.type eq 'hidden'}{FF::Hidden(['name'=>"{$R.name}",'value'=>{$R.default}])}{continue}{/if}
          {if $R.type eq 'break'}<div class="rt-field-break"></div>{continue}{/if}
          <div class="form-group rt-ff-stack {if $R.type eq 'textarea'}is-wide{/if}">
            <label class="control-label rt-ff-label"><i class="{$R.icon|default:'fas fa-edit'}"></i> {$R.title}{if $R.required} <span class="required">*</span>{/if}</label>
            {if $R.type eq 'text'}
            {FF::Text(['name'=>"{$R.name}",'value'=>$cart.item_configs.{$R.name}|default:{$R.default},'title'=>{$R.title},'required'=>{$R.required},'id'=>"{$R.iid}",'class'=>"{$R.class}",'icon'=>"{$R.icon|default:'fas fa-edit'}",'_min_'=>1])}
            {elseif $R.type eq 'select'}
            {if !empty($R._options_)}
            {FF::Select(['name'=>"{$R.name}",'value'=>"{$cart.item_configs.{$R.name}|default:{$R.default}}",'options'=>$R._options_,'_min_'=>1,'required'=>{$R.required}])}
            {else}
            {assign var='where' value="{if $R.where eq '_ownerid_'}`ownerid`='{$cart.ownerid}'{else}{$R.where}{/if}"}
            {FF::Select(['name'=>"{$R.name}",'value'=>"{$cart.item_configs.{$R.name}|default:{$R.default}}",'table'=>"{$R.table}",'column'=>"{$R.column}",'key'=>"{$R.key}",'where'=>"{$where}",'_min_'=>1,'required'=>{$R.required}])}
            {/if}
            {elseif $R.type eq 'date'}
            {FF::Date(['name'=>"{$R.name}",'value'=>$cart.item_configs.{$R.name}|default:'','title'=>{$R.title},'required'=>{$R.required},'id'=>{$R.iid},'icon'=>"{$R.icon}",'_min_'=>1])}
            {elseif $R.type eq 'checkbox'}
            {FF::OO(['name'=>"{$R.name}",'value'=>$cart.item_configs.{$R.name}|default:{$R.default},'id'=>{$R.iid},'icon'=>"{$R.icon}",'_min_'=>1,'_value_'=>{$R.value}])}
            {elseif $R.type eq 'textarea'}
            {FF::Textarea(['name'=>"{$R.name}",'value'=>$cart.item_configs.{$R.name}|default:'','title'=>{$R.title},'required'=>{$R.required},'id'=>{$R.iid},'icon'=>"{$R.icon}",'_min_'=>1,'class'=>"{$R.class}"])}
            {elseif $R.type eq 'file'}
            {FF::File(['name'=>"{$R.name}",'value'=>$cart.item_configs.{$R.name}|default:'','required'=>{$R.required},'id'=>{$R.iid},'icon'=>"{$R.icon}",'_min_'=>1])}
            {/if}
            {if !empty($R.desc)}<span class="help-block rt-ff-help">{$R.desc}</span>{/if}
          </div>
          {/section}
        </div>
        <!-- Admin Configurations-->
        {include file="index.cart.configs.admin.php"}
        <!-- Admin Configurations/-->
      </div>
      <div class="form-actions rt-form-actions">
        <button type="reset" class="btn rt-btn-text is-danger confirm" onclick="location.href='?dad=index&jc=cart&a=trash';"><i class="far fa-trash-alt"></i> Empty cart</button>
        {if !empty($cart.principle)}<button type="reset" class="btn btn-default" onclick="location.href='?dad=index&jc=cart&a=del&id={$cart.id|default:'0'}';"><i class="fas fa-forward"></i> Skip</button>{/if}
        <button type="reset" class="btn btn-default"><i class="fas fa-redo"></i> Reset</button>
        <button type="submit" name="submit" value="Save Configuration" class="btn rt-btn-primary">Save &amp; continue <i class="fas fa-arrow-right"></i></button>
      </div>
    </form>
  </div>
</section>
