{* ROTARY — vsms · out *}
{Stats::Mini()}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">To</th>
      <th class="all">Message</th>
      <th class="all text-center">Date</th>
      <th class="all text-center">Status</th>
      <th class="none"></th>
      <th class="none">FROM</th>
      <th class="none">SID</th>
      <th class="none">COST</th>
      <th class="none">C#2</th>
      <th class="none">SMS</th>
    </tr>
  </thead>
  <tbody>

  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  {if $R.status eq 'on'}{assign var='status' value='ok'}{elseif $R.status eq 'off'}{assign var='status' value='fail'}{else}{assign var='status' value=$R.status}{/if}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong">{$R.to}</td>
    <td>{U::L($R.message)}</td>
    <td align="center" class="rt-strong">{$R.timestamp}</td>
    <td align="center">{$status}</span></td>
    <td>{RR::Buttons(['delete'=>$R.id])}</td>
    <td>{U::L($R.from)}</td>
    <td>{U::L($R.sid)}</td>
    <td><span class="rt-tone-grass rt-strong">{$R.cost}</span></td>
    <td>{$R.config2|default:'N/A'}</td>
    <td><span class="rt-tone-royal">{$R.message}</span></td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()} 
