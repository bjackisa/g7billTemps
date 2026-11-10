{* ROTARY — transactions *}
{include file='widget.stats.mini.invoices.php'}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-exchange-alt"></i></span><span>Transactions</span></h2>
    <button id="sample_editable_1_new" class="btn rt-btn-primary" onclick="location.href='/';"><i class="fas fa-plus"></i> Add new</button>
  </header>
  <div class="rt-list-body">
    <table class="table table-hover dt-responsive rt-table" width="100%" id="sample_1">
      <thead>
        <tr>
          <th class="all">Invoice</th>
          <th class="all">Amount</th>
          <th class="all">Date</th>
          <th class="all">Transaction type</th>
          <th class="all">Pay type</th>
          <th class="none">Transaction ID</th>
          <th class="none">Description</th>
        </tr>
      </thead>
      <tbody>
      {section name=results loop=$rows}
        <tr>
          <td><a href="viewitem.php?action=invoice&pdf=1&uid={U::EN($rows[results].seed)}" target="_blank" rel="nofollow noopener noreferrer" class="rt-doc-link tooltips" {Vars::Tip($smarty.const.DOWNLOAD)}><i class="far fa-file-pdf"></i> {$rows[results].seed}</a></td>
          <td><span class="rt-amt {if $rows[results].debcred eq 'Credit'}is-debit{else}is-credit{/if}">{if $rows[results].debcred eq 'Credit'}&minus;{else}+{/if} {Cur::XE($rows[results].amount)}</span></td>
          <td>{Vars::Date($rows[results].date,TRUE)}</td>
          <td>{$rows[results].type}</td>
          <td><span class="rt-pill">{$rows[results].processor|ucwords}</span></td>
          <td><code class="rt-code">{$rows[results].trans_id}</code></td>
          <td>{$rows[results].descrip}</td>
        </tr>
      {/section}
      </tbody>
    </table>
  </div>
</section>
{include file='pagination.php'}
