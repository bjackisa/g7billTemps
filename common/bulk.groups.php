{* ROTARY — bulk · groups *}
{Stats::Mini()}
{RR::Header(['title'=>$LANG.BULK_GROUPS,'icon'=>'fas fa-layer-group'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Name</th>
      <th class="all">Credit Limit</th>
      <th class="all">Package</th>
      <th class="all text-center">Status</th>
      <th class="none"></th>
      <th class="none">Date</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr class="{if $R.status neq 'on'}{RR::Color($R.status)}{/if}">
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong rt-tone-grass">{$R.name}</td>
    <td>{$R.credit_limit|default:'N/A'}</td>
    <td>{$R._package_.name|default:'N/A'}</td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td align="center">{RR::Buttons(['id'=>$R.id])}</td>
    <td>{$R.timestamp}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
