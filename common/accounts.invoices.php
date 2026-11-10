{* ROTARY — my invoices *}
{Stats::Mini(['t'=>'invoice'])}
{FrontWidgets::AdvancedTools()}
{RR::Header(['title'=>$LANG.MY_INVOICES,'icon'=>'fas fa-file-invoice-dollar'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Invoice</th>
      <th class="all">Due</th>
      <th class="all">Date</th>
      <th class="all">Status</th>
      <th class="none">Actions</th>
      <th class="none">TID</th>
      <th class="none">Paid</th>
      <th class="none">Debit account</th>
      <th class="none">Items</th>
      <th class="none">History</th>
      <th class="none">MM</th>
    </tr>
  </thead>
  <tbody>
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td><a href="?dad=accounts&jc=invoices&a=pdf&id={V::EN($R.id)}" class="rt-doc-link ignore" target="_blank" rel="nofollow noopener noreferrer"><i class="far fa-file-pdf"></i> {$R.number}</a></td>
    <td><span class="rt-amt {if $rows[results].amount_due>0}is-due{else}is-paid{/if}">{Cur::XE(['from'=>$R.cur,'amount'=>$rows[results].amount_due])}</span></td>
    <td>{$R.timestamp}</td>
    <td class="rt-cell-status">{$R.status}</td>
    <td>
    {if $R.status eq "pending"}{RR::Buttons([
      "Resend:fa fa-envelope:btn-info"=>"?dad=accounts&jc=invoices&a=email&id={V::EN($R.id)}",
      "Pay Invoice:fa fa-mail-forward:btn purple"=>"?dad=accounts&jc=invoices&a=pay&id={V::EN($R.id)}",
      "Pay with Balance:fa fa-money:btn green-meadow confirm"=>"{if $R.amount_due<=$R._act_from_.credit_limit}?dad=accounts&jc=invoices&a=approve&id={V::EN($R.id)}{/if}"
      ])}
    {/if}
    </td>
    <td><code class="rt-code">{$R.tid}</code></td>
    <td><span class="rt-amt is-paid">{Cur::XE(['from'=>$R.cur,'amount'=>$rows[results].amount_paid])}</span></td>
    <td>{$R.act_from|default:'N/A'}</td>
    <td>
      <ul class="rt-items">
        {section name=ii loop=$R.items}
        {assign var='Y' value=V::D($R.items[ii])}
        <li><span>{($Y.item_name|default:$Y.description)|strip_tags}</span><strong>{Cur::XE(['from'=>$R.cur,'amount'=>$R.items[ii].amount_total+$R.items[ii].amount_tax+$R.items[ii].amount_other-$R.items[ii].amount_discount])}</strong></li>
        {/section}
      </ul>
    </td>
    <td>{$R.pay_history|default:'N/A'}</td>
    <td>{if !empty($R.pp_id)}{$R.pp_id}{else}N/A{/if}</td>
  </tr>
  {/section}
  </tbody>
</table>
{RR::Footer()}
