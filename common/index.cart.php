{* ROTARY — shopping cart *}
{include file="index.cart.configs.uploads.php"}
<div class="rt-page-title">
  <div>
    <span class="rt-eyebrow">Checkout</span>
    <h1>Your cart</h1>
  </div>
  <ol class="rt-steps" aria-label="Checkout progress">
    <li class="is-active"><span>1</span> Cart</li>
    <li><span>2</span> Details</li>
    <li><span>3</span> Payment</li>
  </ol>
</div>

<div class="rt-cart">
  <section class="rt-cart-items" aria-label="Cart items">
    <header class="rt-cart-head">
      <h2><i class="fas fa-shopping-bag"></i> {$rows|@count} item{if $rows|@count neq 1}s{/if}</h2>
      {if $rows|@count gt 0}<a href="/empty/" class="btn btn-sm rt-btn-text"><i class="far fa-trash-alt"></i> Empty cart</a>{/if}
    </header>

    {if $rows|@count gt 0}
    {section name=results loop=$rows}
    {assign var='R' value=V::D($rows[results])}
    {assign var='item_configs' value=Cart::Display($R.item_configs|array_filter)}
    <article class="rt-cart-item">
      <div class="rt-cart-thumb" aria-hidden="true"><i class="fas fa-hand-holding-heart"></i></div>
      <div class="rt-cart-main">
        <div class="rt-cart-title">
          <h3>{$R.item_name}</h3>
          {if $R.package.cart_configs_status eq 'on'}<a href="/?dad=index&jc=cart&a=configs&package={$R.item_id}&id={$R.id}" class="rt-chip-link tooltips" data-container="body" data-placement="top" title="Modify or change item configurations"><i class="fas fa-sliders-h"></i> Configure</a>{/if}
        </div>
        <div class="rt-cart-controls">
          <label class="rt-mini-field"><span>Quantity</span>
            {FF::Select(['name'=>'quantity','value'=>$R.quantity,'options'=>range($R.package.min,$R.package.max),'_min_'=>1,'other'=>"onchange=\"window.location = '?dad=index&jc=cart&a=save&id={$R.id}&quantity=' + this.value;\""])}
          </label>
          <label class="rt-mini-field"><span>Billing cycle</span>
            {FF::Select(['name'=>'billing_cycle','value'=>$R.billing_cycle,'options'=>$R.package.term,'_min_'=>1,'other'=>"onchange=\"window.location = '?dad=index&jc=cart&a=save&id={$R.id}&billing_cycle=' + this.value;\""])}
          </label>
        </div>
        {if !empty($item_configs) or !empty($R.agent) or !empty($R.affiliate)}
        <details class="rt-cart-details">
          <summary>Item details</summary>
          <ul>
            {foreach from=$item_configs key=k item=v}
            {assign var='cur' value=$item_configs.cur|default:$R.cur}
            {if $k=="value"}{assign var='v' value="{Cur::XE(['from'=>$cur,'amount'=>$v])}"}{/if}
            <li><span>{V::RP('_',' ',V::RP('_discount_',' (Discount)',$k))|ucwords}</span><strong>{$v}</strong></li>
            {/foreach}
            {if !empty($R.agent)||!empty($R.affiliate)}<li><span>Intermediary</span><strong>{Users::Get(['username'=>$R.agent|default:$R.affiliate,'field'=>'name'])}</strong></li>{/if}
          </ul>
        </details>
        {/if}
        {if !empty($R.comments)}<div class="rt-cart-note"><i class="far fa-comment-dots"></i> {$R.comments}</div>{/if}
      </div>
      <div class="rt-cart-side">
        <div class="rt-cart-price">{Cur::XE(['from'=>$R.cur,'amount'=>$rows[results].amount*$R.quantity])}</div>
        {if empty($R.locked)}
        <div class="rt-cart-actions">
          {if $R.package.quantity=='0'||$R.package.quantity>1}<a href="/?dad=index&jc=cart&a=dup&id={$R.id}" class="rt-icon-action confirm" title="Duplicate" aria-label="Duplicate"><i class="far fa-clone"></i></a>{/if}
          <a href="/?dad=index&jc=cart&a=del&id={$R.id}" class="rt-icon-action is-danger confirm" title="Remove" aria-label="Remove"><i class="far fa-trash-alt"></i></a>
        </div>
        {else}<span class="rt-badge-soft"><i class="fas fa-lock"></i> Locked</span>{/if}
      </div>
    </article>
    {/section}
    {else}
    <div class="rt-empty">
      <div class="rt-empty-ico"><i class="fas fa-shopping-bag"></i></div>
      <h3>{$LANG.CART_EMPTY}</h3>
      <p>Explore memberships, projects and causes you can support.</p>
      <a href="/?dad=index&jc=packages" class="btn rt-btn-primary">Browse packages <i class="fas fa-arrow-right"></i></a>
    </div>
    {/if}
  </section>

  <aside class="rt-cart-summary" aria-label="{$LANG.ORDER_SUMMARY|ucwords}">
    <div class="rt-summary-card">
      <h2>{$LANG.ORDER_SUMMARY|ucwords}</h2>
      <dl class="rt-summary-lines">
        <div><dt>Sub total</dt><dd>{Cur::XE(['from'=>$R.cur,'amount'=>$summary.amount])}</dd></div>
        {if !empty($summary.amount_other)}<div><dt>Other fees</dt><dd>{Cur::XE(['from'=>$R.cur,'amount'=>$summary.amount_other])}</dd></div>{/if}
        {if !empty($summary.discount)}<div class="{if $summary.discount<0}is-up{else}is-save{/if}"><dt>{if $summary.discount<0}Mark up{else}Discounts{/if}</dt><dd>{if $summary.discount>0}&minus; {/if}{Cur::XE(['from'=>$R.cur,'amount'=>V::RP('-','',$summary.discount)])}</dd></div>{/if}
        {if !empty($summary.amount_tax)}
        <div><dt>Tax <a class="popovers" data-html="true" data-container="body" data-trigger="hover" data-placement="left" data-content="<table style='min-width:250px'>{foreach from=$tax key=k item=v}<tr><td>{$v.name}</td><td><b>{Cur::XE(['from'=>$R.cur,'amount'=>$v.amount])}</b></td></tr>{/foreach}</table>" data-original-title="Tax breakdown"><i class="fas fa-info-circle"></i></a></dt><dd>{Cur::XE(['from'=>$R.cur,'amount'=>$summary.amount_tax])}</dd></div>
        {/if}
        <div class="rt-summary-total"><dt>Total due</dt><dd>{Cur::XE(['from'=>$R.cur,'amount'=>$summary.due])}</dd></div>
      </dl>
      <form action="/" method="post" name="order">
        <input type="hidden" name="dad" value="index" />
        <input type="hidden" name="jc" value="checkout" />
        <button type="submit" class="btn btn-lg btn-block rt-btn-gold" {if $rows|@count eq 0}disabled{/if}>{$LANG.PROCEED_TO_CHECKOUT|ucwords} <i class="fas fa-lock"></i></button>
      </form>
      <p class="rt-summary-secure"><i class="fas fa-shield-alt"></i> Secure checkout</p>
    </div>

    {if Extended::Value(['name'=>'stores_discount_coupons','group'=>'stores'])}
    <div class="rt-summary-card rt-coupon">
      <h3><i class="fas fa-ticket-alt"></i> {$LANG.COUPON_TITLE|ucwords}</h3>
      <p>{$LANG.COUPON_BLURB}</p>
      <form action="/" method="post" name="order" class="rt-inline-form">
        <input type="hidden" name="dad" value="index" />
        <input type="hidden" name="jc" value="cart" />
        <input type="hidden" name="a" value="code" />
        <input type="text" name="coupon" class="form-control" placeholder="Enter coupon code" required="required" aria-label="Coupon code">
        <button type="submit" class="btn rt-btn-primary">{$LANG.SET_COUPON|ucwords}</button>
      </form>
    </div>
    {/if}
  </aside>
</div>
