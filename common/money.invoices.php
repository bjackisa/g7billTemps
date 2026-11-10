{* ROTARY — invoices (legacy money module) *}
{include file='widget.stats.mini.invoices.php'}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-file-invoice-dollar"></i></span><span>My invoices</span></h2>
    <button id="sample_editable_1_new" class="btn rt-btn-primary" onclick="location.href='/';"><i class="fas fa-plus"></i> New order</button>
  </header>
  <div class="rt-list-body">
    <table class="table table-hover dt-responsive rt-table" width="100%" id="sample_1">
      <thead>
        <tr>
          <th class="all"></th>
          <th class="all">Invoice</th>
          <th class="all">Amount due</th>
          <th class="all">Invoice date</th>
          <th class="all">Status</th>
          <th class="all"></th>
          <th class="none">Invoice amount</th>
          <th class="none">Amount paid</th>
          <th class="none">Due date</th>
          <th class="none">Invoice items</th>
        </tr>
      </thead>
      <tbody>
      {section name=results loop=$rows}
      {assign var='xstatus' value=Vars::Statuses($rows[results].status,'invoice')}
      {assign var='R' value=V::D($rows[results])}
      {if $rows[results].status eq '0'}{assign var='st' value='debit'}{elseif $rows[results].status eq '3'}{assign var='st' value='hold'}{else}{assign var='st' value='open'}{/if}
        <tr>
          <td><span class="rt-dot rt-dot-{$st}" aria-hidden="true"></span></td>
          <td><span class="rt-doc-link"><i class="far fa-file-alt"></i> #{$rows[results].id}</span>{if $newuid eq 'abdi'} <a href="?dad=money&jc=invoices&a=download&id={$R.id}" class="rt-icon-action rt-icon-sm" aria-label="Download"><i class="fas fa-download"></i></a>{/if}</td>
          <td><span class="rt-amt {if $rows[results].amount_due>0 and $rows[results].status eq '0'}is-due{/if}">{Cur::XE(['amount'=>$rows[results].amount_due,'from'=>$rows[results].cur])}</span></td>
          <td>{U::D($rows[results].invoice_date)}</td>
          <td><span class="rt-pill rt-pill-{$st}">{$xstatus.text}</span></td>
          <td class="text-right"><span class="rt-row-actions">{if $rows[results].status eq 0}<a href="?dad=money&jc=pay&id={$rows[results].id}" class="btn btn-sm rt-btn-gold"><i class="fas fa-lock"></i> Pay</a>{/if} <a href="viewitem.php?action=invoice&pdf=1&uid={$R.uid}" target="_blank" rel="nofollow noopener noreferrer" class="btn btn-sm rt-btn-soft ignore"><i class="far fa-file-pdf"></i> PDF</a></span></td>
          <td>{Cur::XE(['amount'=>$rows[results].amount,'from'=>$rows[results].cur])}</td>
          <td><span class="rt-amt is-paid">{Cur::XE(['amount'=>$rows[results].amount_paid,'from'=>$rows[results].cur])}</span></td>
          <td><span class="{if $rows[results].invoice_date<=$smarty.now and $rows[results].status eq 0}rt-amt is-due{/if}">{U::D($rows[results].invoice_date)}</span></td>
          <td>{Vars::Array_To_List($rows[results].items)}</td>
        </tr>
      {/section}
      </tbody>
    </table>
  </div>
</section>
{include file='pagination.php'}
