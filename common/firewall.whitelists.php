{* ROTARY — firewall · whitelists *}
{Stats::Mini()}
{FrontWidgets::AdvancedTools()}
{RR::Header(['title'=>'Whitelists','icon'=>'fas fa-shield-alt'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Name</th>
      <th class="all">IP Address</th>
      <th class="all">Date</th>
      <th class="all text-center">Status</th>
      <th class="none"></th>
      <th class="none">Protocol</th>
      <th class="none">Action State</th>
      <th class="none">Inbound Policy</th>
      <th class="none">Outbound Policy</th>
      <th class="none">Response</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  {assign var='IP' value=IP::I($R.src_ip)}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong">{$R.name}</td>
    <td class="rt-strong rt-tone-grass"><i title="{$IP.country_short_name}" class="flag-icon flag-icon-{$IP.country|strtolower}" style="height:15px; width:50px;"></i> {$R.src_ip}</td>
    <td>{$R.timestamp}</td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td>{RR::Buttons(['id'=>$R.id])}</td>
    <td><span class="label label-primary">{$R.protocol|strtoupper}</span></td>
    <td><span class="label label-primary">{$R.action_state|strtoupper}</span></td>
    <td><span class="label label-primary">{$R.inbound_policy|strtoupper}</span></td>
    <td><span class="label label-primary">{$R.outbound_policy|strtoupper}</span></td>
    <td><pre class="rt-tone-cardinal">{$R.response}</pre></td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
