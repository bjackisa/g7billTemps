{* ROTARY — wallet statement panel *}
<section class="rt-list-card rt-chart-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-receipt"></i></span><span>Statement</span></h2>
    <div class="rt-list-actions">
      <span class="rt-legend hidden-xs">
        <span class="rt-legend-item is-credit">CREDIT</span>
        <span class="rt-legend-item is-fee">FEES</span>
        <span class="rt-legend-item is-debit">DEBIT</span>
      </span>
      <a href="?dad=accounts&jc=statement&a=download" class="btn btn-default btn-sm ignore"><i class="fas fa-download"></i> Download</a>
    </div>
  </header>
  <div class="rt-list-body">
    <div class="rt-scroll-y">
      <table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
        <thead>
          <tr>
            <th class="all"></th>
            <th class="all">Amount</th>
            <th class="all">Action</th>
            <th class="all">Date</th>
            <th class="all text-center">Status</th>
            <th class="none">TID</th>
            <th class="none">MEMO</th>
            <th class="none">PT</th>
            <th class="none">NUM</th>
            <th class="none">COM</th>
            <th class="none">TT</th>
            <th class="none">BB</th>
            <th class="none">BA</th>
            <th class="none">A/C</th>
            <th class="none">RID</th>
          </tr>
        </thead>
        <tbody>
        {assign var='i' value=1}
        {section name=results loop=$statement.rows}
        {assign var='R' value=V::D($statement.rows[results])}
        {assign var='tone' value="{if $R.action eq 'credit'}is-credit{elseif V::FD('Fees ',$R.comments)}is-fee{else}is-debit{/if}"}
          <tr>
            <td class="rt-cell-muted">{$R.id}</td>
            <td><span class="rt-amt {$tone}">{if $R.action eq 'credit'}{$R.currency}{Cur::D($statement.rows[results].amount)}{else}({$R.currency}{Cur::D($statement.rows[results].amount)}){/if}</span></td>
            <td><span class="rt-amt {$tone}">{$R.action|ucwords}</span></td>
            <td>{$R.timestamp}</td>
            <td class="rt-cell-status" align="center">{$R.status}</td>
            <td><span class="rt-code">{$R.tid|default:'N/A'}</span></td>
            <td>{if !empty($R.memo)}<a href="?dad=accounts&jc=statement&a=memo&id={V::EN($R.memo)}" target="_blank" rel="nofollow noopener noreferrer" class="rt-doc-link">{$R.memo} <i class="fas fa-external-link-alt"></i></a>{else}N/A{/if}</td>
            <td>{$R.pt|strtoupper|default:'N/A'}</td>
            <td>{$R.pp_id|default:'N/A'}</td>
            <td>{U::L(['str'=>$R.comments|default:'N/A'|strip_tags,'limit'=>100])}</td>
            <td>{if $R.action eq 'credit'}{$R.credit_type|ucwords|default:'N/A'}{else}{$R.debit_type|ucwords|default:'N/A'}{/if}</td>
            <td>{$R.currency}{Cur::D($R.pbal)}</td>
            <td>{$R.currency}{Cur::D($R.cbal)}</td>
            <td>{$R.act}</td>
            <td>{$R.id}</td>
          </tr>
        {assign var='i' value=$i+1}
        {/section}
        </tbody>
      </table>
    </div>
  </div>
</section>
