{* ROTARY — affiliate · sales *}
{include file='affiliate.index.1.php'}
{FrontWidgets::AdvancedTools()}
{RR::Header(['title'=>'Affiliate Sales','icon'=>'fas fa-clone'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Product/Service</th>
      <th class="all">Sale Amount</th>
      <th class="all">Commission</th>
      <th class="all">Date</th>
      <th class="none"></th>
      <th class="none">Paid</th>
      <th class="none">Maturity</th>
      <th class="none">Invoice #</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  {if $R.paid neq 'yes'}{assign var='color' value='font-red-thunderbird'}{else}{assign var='color' value='font-green-jungle'}{/if}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong rt-tone-royal">{$R.description}</td>
    <td class="rt-strong rt-tone-royal">{$R.currency}{U::TTZ($R.principle|number_format:3)}</td>
    <td class="rt-strong {$color}">{$R.currency}{U::TTZ($rows[results].amount|number_format:3)}</td>
    <td>{$R.timestamp}</td>
    <td align="center"></td>
    <td>{RR::Status($R.paid)}</td>
    <td>{U::D($R.maturity)}</td>
    <td>{$R.invoice}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
