{* ROTARY — receipts *}
{Stats::Mini(['t'=>'receipt'])}
{FrontWidgets::AdvancedTools()}
{RR::Header(['title'=>$LANG.MY_RECEIPTS,'icon'=>'fas fa-receipt'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Receipt</th>
      <th class="all">Amount</th>
      <th class="all">Due</th>
      <th class="all">Date</th>
      <th class="all">Status</th>
      <th class="none">TID</th>
      <th class="none">History</th>
      <th class="none">Currency</th>
      <th class="none">Mobile</th>
      <th class="none">Paid</th>
      <th class="none">Amount paid</th>
      <th class="none">Date paid</th>
    </tr>
  </thead>
  <tbody>
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td><span class="rt-doc-link"><i class="fas fa-receipt"></i> {$R.number}</span></td>
    <td><span class="rt-amt">{Cur::Calc(['amount'=>$R.amount_total,'F'=>1,'D'=>3])}</span></td>
    <td><span class="rt-amt {if $rows[results].amount_total-$rows[results].amount_paid>0}is-due{else}is-paid{/if}">{Cur::Calc(['amount'=>$rows[results].amount_total-$rows[results].amount_paid,'F'=>1,'D'=>3])}</span></td>
    <td>{$R.timestamp}</td>
    <td class="rt-cell-status">{$R.status}</td>
    <td><code class="rt-code">{$R.tid}</code></td>
    <td>{$R.pay_history|default:'N/A'}</td>
    <td>{$R.cur|default:'N/A'}</td>
    <td>{$R.pp_id|default:'N/A'}</td>
    <td>{RR::Status(['value'=>$R.paid])}</td>
    <td><span class="rt-amt is-paid">{Cur::Calc(['amount'=>$R.amount_paid,'F'=>1,'D'=>3])}</span></td>
    <td>{$R.date_paid|default:'N/A'}</td>
  </tr>
  {/section}
  </tbody>
</table>
{RR::Footer()}
