{* ROTARY — pay an invoice *}
<div class="rt-page-title">
  <div><span class="rt-eyebrow">Invoice #{$inv.id}</span><h1>Pay invoice</h1></div>
  <a href="viewitem.php?action=invoice&pdf=1&uid={U::EN($inv.id)}" target="_blank" rel="nofollow noopener noreferrer" class="btn rt-btn-soft"><i class="far fa-file-pdf"></i> View invoice</a>
</div>
<div class="rt-cart">
  <div class="rt-cart-items">
    <section class="rt-summary-card">
      <header class="rt-card-headline"><h2><i class="fas fa-receipt"></i> Invoice items</h2><a href="/" class="btn btn-sm rt-btn-text"><i class="fas fa-plus"></i> Keep shopping</a></header>
      {if $items|@count gt 0}
      <div class="table-responsive rt-flat-table">
        <table class="table rt-table">
          <thead><tr><th>Description</th><th>Amount</th><th>Tax</th><th>Other</th><th class="text-right">Total</th></tr></thead>
          <tbody>
          {section name=results loop=$items}
            <tr>
              <td>{$items[results].description}</td>
              <td>{Cur::Calc(['amount'=>$items[results].amount,'F'=>1])}</td>
              <td>{Cur::Calc(['amount'=>$items[results].total_tax,'F'=>1])}</td>
              <td>{Cur::Calc(['amount'=>$items[results].amount_other,'F'=>1])}</td>
              <td class="text-right"><strong>{Cur::Calc(['amount'=>$items[results].total,'F'=>1])}</strong></td>
            </tr>
          {/section}
          </tbody>
        </table>
      </div>
      {else}
      <div class="rt-empty" style="border:0;padding:26px"><div class="rt-empty-ico"><i class="fas fa-receipt"></i></div><p>{$smarty.const.CARTDEMPTY}</p></div>
      {/if}
    </section>

    {if !empty($payment_options)}
    <form method="post" name="pay" action="{Vars::URL('page')}" role="form" class="rt-summary-card">
      <input type="hidden" name="dad" value="money" />
      <input type="hidden" name="jc" value="pay" />
      <input type="hidden" name="a" value="pay" />
      <input type="hidden" name="id" value="{$inv.id}" />
      <header class="rt-card-headline"><h2><i class="far fa-credit-card"></i> Payment method</h2></header>
      <div class="rt-pay-options" role="radiogroup" aria-label="Payment method">
        {foreach from=$payment_options key=k item=v}
        <label class="rt-pay-option">
          <input type="radio" value="{$v.name}" name="gateway" {$v.checked} />
          <span class="rt-pay-body"><span class="rt-pay-ico"><i class="fas fa-wallet"></i></span><span class="rt-pay-text">{$v.desc}</span><span class="rt-pay-check"><i class="fas fa-check"></i></span></span>
        </label>
        {/foreach}
      </div>
      <div class="form-group" style="margin-top:18px">
        <label class="mt-checkbox mt-checkbox-outline rt-terms"><input type="checkbox" name="terms" /> I agree to the <a href="/terms/">Terms of Service</a> &amp; <a href="/pp/" target="_blank" rel="nofollow noopener noreferrer">Privacy Policy</a> <span></span></label>
        <div id="register_tnc_error"></div>
      </div>
      <button type="submit" class="btn btn-lg rt-btn-gold rt-place-order"><i class="fas fa-lock"></i> {if !empty($inv.id)}Make payment{else}Place order{/if}</button>
    </form>
    {else}
    <div class="rt-secure-note"><i class="fas fa-ban"></i><span>Online payments are disabled for this invoice.</span></div>
    {/if}
  </div>

  <aside class="rt-cart-summary">
    <div class="rt-summary-card">
      <h2>Invoice summary</h2>
      <dl class="rt-summary-lines">
        <div><dt>Invoice date</dt><dd>{U::D($inv.invoice_date)}</dd></div>
        <div><dt>Invoice number</dt><dd><a href="viewitem.php?action=invoice&pdf=1&uid={U::EN($inv.id)}" target="_blank" rel="nofollow noopener noreferrer">{$inv.id} <i class="fas fa-external-link-alt"></i></a></dd></div>
        <div><dt>Sub total</dt><dd>{Cur::Calc(['amount'=>($inv.amount-$inv.amount_paid),'F'=>1])}</dd></div>
        <div><dt>Tax due</dt><dd>{Cur::Calc(['amount'=>$inv.tax,'F'=>1])}</dd></div>
        <div class="is-save"><dt>Discounts</dt><dd>{Cur::Calc(['amount'=>$inv.discount,'F'=>1])}</dd></div>
        <div class="rt-summary-total"><dt>Total due</dt><dd>{Cur::Calc(['amount'=>$inv.due,'F'=>1])}</dd></div>
      </dl>
    </div>
    <div class="rt-summary-card">
      <header class="rt-card-headline"><h3><i class="far fa-user"></i> Billing information</h3></header>
      <dl class="rt-kv">
        <div><dt>Name</dt><dd>{$inv.fname} {$inv.lname}</dd></div>
        <div><dt>Company</dt><dd>{$inv.org}</dd></div>
        <div><dt>Email</dt><dd>{$inv.email}</dd></div>
        <div><dt>City, Country</dt><dd>{$inv.city}, {$inv.country}</dd></div>
        <div><dt>Phone</dt><dd>{$inv.phone}</dd></div>
      </dl>
    </div>
  </aside>
</div>
