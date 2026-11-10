{* ROTARY — bulk · payments *}
{Stats::Mini()}
{FrontWidgets::AdvancedTools()}
{RR::Header(['title'=>$LANG.BULK_PAYMENTS,'icon'=>'fas fa-dollar-sign'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">OwnerID</th>
      <th class="all">Order</th>
      <th class="all">Amount</th>
      <th class="all text-center">Status</th>
      <th class="none"></th>
      <th class="none">UID</th>
      <th class="none">Start</th>
      <th class="none">End</th>
      <th class="none">Date</th>
      <th class="none">Dump</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  {if $R._order_.end_date<$now}{assign var='color' value='font-red-thunderbird'}{else}{assign var='color' value='font-blue'}{/if}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong {$color}">{$R.ownerid|default:'N/A'}</td>
    <td class="rt-strong">{$R.order|default:'N/A'}</td>
    <td class="rt-strong rt-tone-grass">{$R.amount}</td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td align="center">{if !empty($R._order_) and $R._order_.end_date>$now}{RR::Buttons(["Submit Claim:fas fa-bed:btn-info confirm"=>"{if !empty($R.order)}?dad=claims&jc=index&a=form&orderid={$R.order}{/if}"])}{/if}</td>
    <td><span class="rt-strong rt-tone-royal">{$R.ownerid|default:'N/A'|strip_tags}</span></td>
    <td><span class="rt-strong rt-tone-royal">{if !empty($R._order_.start_date)}{U::D($R._order_.start_date)}{else}Processing...{/if}</span></td>
    <td><span class="rt-strong {$color}">{if !empty($R._order_.end_date)}{U::D($R._order_.end_date)}{else}Processing...{/if}</span></td>
    <td>{$R.timestamp}</td>
    <td>{V::P($R.dump)}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
