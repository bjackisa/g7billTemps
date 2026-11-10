{* ROTARY — agents · sales *}
{Stats::Mini()}
{FrontWidgets::AdvancedTools()}
{RR::Header(['title'=>$LANG.MY_SALES,'icon'=>'fas fa-money-bill-wave'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Client</th>
      <th class="all">Item Name</th>
      <th class="all text-center">Expiry</th>
      <th class="all text-center">Status</th>
      <th class="none">A/C Number</th>
      <th class="none">Seed</th>
      <th class="none">Package Cost</th>
      <th class="none">Last Receipt Amount</th>
      <th class="none">Last Receipt Date</th>
      <th class="none">Timestamp</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  {if $rows[results].renew_date<$now}{assign var='color' value='font-red-thunderbird'}{else}{assign var='color' value='font-green-jungle'}{/if}
  <tr class="{if $R.status neq 'on'}{RR::Color($R.status)}{/if}">
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong text-primary">{$R.ownerid}</td>
    <td>{$R.item_name}</td>
    <td class="rt-strong {$color}" align="center">{if !empty($rows[results].renew_date)}{U::D($rows[results].renew_date,1)}{else}N/A{/if}</td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td><span class="rt-strong text-primary">{$R.act}</span></td>
   <td>{$R.seed}</td>
   <td>{$R.package.cost|number_format}</td>
   <td>{$R.credit_note.cur}{U::TTZ($R.credit_note.amount_paid|number_format:3)}</td>
   <td>{U::D($R.credit_note.date_paid)}</td>
   <td>{$R.timestamp}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
