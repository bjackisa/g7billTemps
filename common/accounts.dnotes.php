{* ROTARY — debit notes *}
{Stats::Mini(['t'=>'debit_note'])}
{FrontWidgets::AdvancedTools()}
{RR::Header(['title'=>$LANG.MY_DEBIT_NOTES,'icon'=>'fas fa-file-invoice'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Debit note</th>
      <th class="all">Due</th>
      <th class="all">Date</th>
      <th class="all">Status</th>
      <th class="none">Actions</th>
      <th class="none">TID</th>
      <th class="none">Seed</th>
      <th class="none">Paid</th>
      <th class="none">Items</th>
      <th class="none">History</th>
      <th class="none">PT</th>
      <th class="none">PPID</th>
    </tr>
  </thead>
  <tbody>
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td><a href="?dad=accounts&jc=dnotes&a=pdf&id={V::EN($R.id)}" class="rt-doc-link ignore" target="_blank" rel="nofollow noopener noreferrer"><i class="far fa-file-pdf"></i> {$R.number}</a></td>
    <td><span class="rt-amt {if $rows[results].amount_due>0}is-due{else}is-paid{/if}">{$R.cur}{Cur::D($rows[results].amount_due)}</span></td>
    <td>{$R.timestamp}</td>
    <td class="rt-cell-status">{$R.status}</td>
    <td>{RR::Buttons(["Resend:fa fa-envelope:btn-info confirm"=>"?dad=accounts&jc=dnotes&a=email&id={V::EN($R.id)}"])}</td>
    <td><code class="rt-code">{$R.tid}</code></td>
    <td>{$R.seed|default:'N/A'}</td>
    <td><span class="rt-amt is-paid">{$R.cur}{Cur::D($rows[results].amount_paid)}</span></td>
    <td>
      <ul class="rt-items">
        {section name=ii loop=$R.items}
        {assign var='Y' value=V::D($R.items[ii])}
        <li><span>{$Y.description|strip_tags}</span><strong>{Cur::D($R.items[ii].amount_total+$R.items[ii].amount_tax+$R.items[ii].amount_other-$R.items[ii].amount_discount)}</strong></li>
        {/section}
      </ul>
    </td>
    <td>{$R.pay_history|default:'N/A'}</td>
    <td>{$R.pt|strtoupper}</td>
    <td>{if !empty($R.pp_id)}{$R.pp_id}{else}N/A{/if}</td>
  </tr>
  {/section}
  </tbody>
</table>
{RR::Footer()}
