{* ROTARY — bulk · orders *}
{Stats::Mini()}
{FrontWidgets::AdvancedTools()}
{RR::Header(['title'=>$LANG.MY_ORDERS,'icon'=>'fas fa-database'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">OwnerID</th>
      <th class="all">Package</th>
      <th class="all">End</th>
      <th class="all text-center">Status</th>
      <th class="none"></th>
      <th class="none">Start</th>
      <th class="none">End</th>
      <th class="none">Number</th>
      <th class="none">Invoice</th>
      <th class="none">Benefits</th>
      <th class="none">A/C</th>
      <th class="none">Bulk</th>
      <th class="none">Date</th>
      <th class="none">IP</th>
      <th class="none">Dump</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  {if $rows[results].end_date<$now}{assign var='color' value='font-red-thunderbird'}{else}{assign var='color' value='font-green-jungle'}{/if}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong {$color}">{$R.ownerid}</td>
    <td>{$R.package.name}</td>
    <td class="rt-strong {$color}">{$R.end_date}</td>
    <td class="rt-cell-status" align="center">{$R.status|strtolower}</td>
    <td align="center">{if $R.claims eq 'on'}{RR::Buttons(["Submit Claim:fas fa-bed:btn-info confirm"=>"?dad=claims&jc=index&a=form&orderid={$R.id}"])}{/if}</td>
    <td><span class="rt-strong rt-tone-royal">{$R.start_date}</span></td>
    <td><span class="rt-strong {$color}">{$R.end_date}</span></td>
    <td><span class="rt-strong rt-tone-royal">{$R.number|default:'N/A'}</span></td>
    <td><span class="rt-strong"><a href="?dad=accounts&jc=invoices&a=PDF&id={V::EN($R.memo_id)}" target="_blank" rel="nofollow noopener noreferrer">{$R.memo_id} <i class="fas fa-external-link-alt"></i></a></span></td>
    <td><span class="rt-strong rt-tone-grass">{$R.benefits}</span></td>
    <td>{$R.act}</td>
    <td>{$R.bulk}</td>
    <td>{$R.timestamp}</td>
    <td>{$R.ip}</td>
    <td>{V::P($R.queue_array)}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
