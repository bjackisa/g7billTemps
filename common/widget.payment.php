{* ROTARY — checkout / order placement *}
<form method="post" name="order" action="welcome.php" role="form" class="rt-checkout-form">
  <input type="hidden" name="dad" value="index" />
  <input type="hidden" name="jc" value="order" />
  {if !empty($i.info.type)}<input type="hidden" name="type" value="{$i.info.type}" />{/if}
  {if !empty($i.id)}<input type="hidden" name="id" value="{$i.id}" />{/if}

  <div class="rt-page-title">
    <div>
      <span class="rt-eyebrow">Checkout</span>
      <h1>{if !empty($i.id)}Invoice #{$i.id}{else}Review &amp; pay{/if}</h1>
    </div>
    <ol class="rt-steps" aria-label="Checkout progress">
      <li class="is-done"><span><i class="fas fa-check"></i></span> Cart</li>
      <li class="is-active"><span>2</span> Details</li>
      <li><span>3</span> Payment</li>
    </ol>
  </div>

  <div class="rt-secure-note"><i class="fas fa-shield-alt"></i><span>This order form is provided in a secure environment. To help protect against fraud your current IP address (<b>{IP::Get()}</b>) is being logged.</span></div>

  <div class="rt-cart">
    <div class="rt-cart-items">
      <section class="rt-summary-card">
        <header class="rt-card-headline">
          <h2><i class="fas fa-receipt"></i> Order items</h2>
          <a href="/" class="btn btn-sm rt-btn-text"><i class="fas fa-plus"></i> Keep shopping</a>
        </header>
        <ul class="rt-line-items">
          {section name=results loop=$i.items}
          {if $i.items[results].visible eq 0}{continue}{/if}
          <li><span class="rt-line-ico"><i class="fas fa-hand-holding-heart"></i></span><span class="rt-line-name">{$i.items[results].item_name}</span><strong>{Cur::XE(['from'=>$i.items[results].cur,'amount'=>$i.items[results].amount*$i.items[results].quantity])}</strong></li>
          {/section}
        </ul>
      </section>

      {if E::V(['name'=>'stores_ordering_assign_directory','group'=>'stores']) and empty($i.memo)}
      <div class="rt-stack">{include file="index.checkout.configs.directory.php"}</div>
      {if !empty($agents)&&E::V(['name'=>'stores_ordering_assign_agent','group'=>'stores'])}
      <div class="rt-stack">{include file="index.checkout.configs.agent.php"}</div>
      {/if}
      {/if}

      {if !empty($pp)}
      {if empty($i.due)}<input type="hidden" name="gateway" value="bank" />{elseif count($pp) eq 1}<input type="hidden" name="{$pp.0.name}" value="1" />{else}
      <section class="rt-summary-card">
        <header class="rt-card-headline"><h2><i class="far fa-credit-card"></i> Payment method</h2></header>
        <div class="rt-pay-options" role="radiogroup" aria-label="Payment method">
          {section name=results loop=$pp}
          {assign var='R' value=V::D($pp[results])}
          <label class="rt-pay-option">
            <input type="radio" value="{$R.name}" name="gateway" {if $R.default eq 'on'}checked="checked"{/if} />
            <span class="rt-pay-body"><span class="rt-pay-ico {$R._class_}">{$R.icon}</span><span class="rt-pay-text">{$R.description}</span><span class="rt-pay-check"><i class="fas fa-check"></i></span></span>
          </label>
          {/section}
        </div>
      </section>
      {/if}
      {/if}

      <section class="rt-summary-card">
        <header class="rt-card-headline"><h2><i class="far fa-check-square"></i> Terms &amp; order placement</h2></header>
        <div class="form-group">
          <label class="mt-checkbox mt-checkbox-outline rt-terms">
            <input type="checkbox" name="terms" />
            I agree to the <a href="/terms/">Terms of Service</a> &amp; <a href="/pp/" target="_blank" rel="nofollow noopener noreferrer">Privacy Policy</a> <span></span>
          </label>
          <div id="register_tnc_error"></div>
        </div>
        <button type="submit" class="btn btn-lg rt-btn-gold rt-place-order"><i class="fas fa-lock"></i> Place order</button>
      </section>
    </div>

    <aside class="rt-cart-summary">
      <div class="rt-summary-card">
        <h2>{if !empty($i.id)}Invoice #{$i.id}{else}Order{/if} summary</h2>
        <dl class="rt-summary-lines">
          <div><dt>{if !empty($i.id)}Invoice{else}Order{/if} date</dt><dd>{U::D($i.date|default:'0')}</dd></div>
          <div><dt>Sub total</dt><dd>{Cur::XE(['from'=>$i.cur,'amount'=>$i.sub])}</dd></div>
          <div class="{if $i.discount<0}is-up{else}is-save{/if}"><dt>{if $i.discount<0}Mark up{else}Discounts{/if}</dt><dd>{Cur::XE(['from'=>$i.cur,'amount'=>V::RP('-','',$i.discount)])}</dd></div>
          <div><dt>Tax due</dt><dd>{Cur::XE(['from'=>$i.cur,'amount'=>$i.tax])}</dd></div>
          <div class="rt-summary-total"><dt>Total due</dt><dd>{Cur::XE(['from'=>$i.cur,'amount'=>$i.due])}</dd></div>
        </dl>
      </div>
      <div class="rt-summary-card">
        <header class="rt-card-headline">
          <h3><i class="far fa-user"></i> Billing information</h3>
          <a href="welcome.php?dad=account&jc=profile&hs=ci" class="btn btn-sm rt-btn-text ignore" target="_blank" rel="nofollow noopener noreferrer"><i class="far fa-edit"></i> Edit</a>
        </header>
        <dl class="rt-kv">
          <div><dt>Name</dt><dd>{$users.fname} {$users.mname} {$users.lname}</dd></div>
          <div><dt>Company</dt><dd>{$users.org|default:'N/A'}</dd></div>
          <div><dt>Email</dt><dd>{$users.email}</dd></div>
          <div><dt>City, Country</dt><dd>{if !empty($users.city)}{$users.city}, {/if}{$users._country_.short_name}</dd></div>
          <div><dt>Phone</dt><dd>{$users.phone}</dd></div>
        </dl>
      </div>
    </aside>
  </div>
</form>
