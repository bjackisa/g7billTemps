{* ROTARY — quotations *}
{Stats::Mini()}
{FrontWidgets::AdvancedTools()}
{RR::Header(['title'=>$LANG.MY_QUOTATIONS,'icon'=>'fas fa-file-signature'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Quotation</th>
      <th class="all">Amount</th>
      <th class="all">Date</th>
      <th class="all">Valid until</th>
      <th class="none">Actions</th>
      <th class="none">Seed</th>
      <th class="none">Items</th>
    </tr>
  </thead>
  <tbody>
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td><a href="?dad=accounts&jc=quotations&a=pdf&id={V::EN($R.id)}" class="rt-doc-link ignore" target="_blank" rel="nofollow noopener noreferrer"><i class="far fa-file-pdf"></i> {$R.number}</a></td>
    <td><span class="rt-amt">{$R.cur}{Cur::D($rows[results].amount_due)}</span></td>
    <td>{$R.timestamp}</td>
    <td><span class="rt-pill {if $rows[results].date_due<$now}rt-pill-debit{else}rt-pill-new{/if}">{$R.date_due}</span></td>
    <td>{RR::Buttons([
            "Resend:fa fa-envelope:btn-info confirm"=>"?dad=accounts&jc=quotations&a=email&id={V::EN($R.id)}",
            "Convert to Invoice:fa fa-mail-forward:btn-success confirm"=>"{if empty($R.converted_to)}?dad=accounts&jc=quotations&a=convert&id={V::EN($R.id)}{/if}"
        ])}</td>
    <td>{$R.seed}</td>
    <td>
      <ul class="rt-items">
        {section name=ii loop=$R.items}
        {assign var='Y' value=V::D($R.items[ii])}
        <li><span>{$Y.description|strip_tags}</span><strong>{Cur::D($R.items[ii].amount_total+$R.items[ii].amount_tax+$R.items[ii].amount_other-$R.items[ii].amount_discount)}</strong></li>
        {/section}
      </ul>
    </td>
  </tr>
  {/section}
  </tbody>
</table>
{RR::Footer()}
