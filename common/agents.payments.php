{* ROTARY — agents · payments *}
{Stats::Mini()}
{*FrontWidgets::AdvancedTools()*}
{RR::Header()}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Client</th>
      <th class="all">Amount</th>
      <th class="all">Date</th>
      <th class="all text-center">Status</th>
      <th class="none">Comments</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td>{$R.client.name}</td>
    <td class="rt-strong rt-tone-grass">{$R.currency}{Cur::D($rows[results].amount)}</td>
    <td><b>{$R.timestamp}</b></td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td>{$R.comments}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
