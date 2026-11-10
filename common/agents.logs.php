{* ROTARY — agents · logs *}
{Stats::Mini()}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">IP Address</th>
      <th class="all">Country</th>
      <th class="all">Referrer</th>
      <th class="all">Date</th>
      <th class="none"></th>
      <th class="none">Landing Page</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong rt-tone-royal">{$R.ip}</td>
    <td class="rt-strong rt-tone-royal"><i class="flag-icon flag-icon-{$R._ip_.country_code|strtolower}"></i> {$R._ip_.country}</td>
    <td class="rt-strong">{if !empty($R.referrer)}<a href="{$R.referrer}" target="_blank" rel="nofollow noopener noreferrer">{$R.referrer}</a>{else}N/A{/if}</td>
    <td>{$R.timestamp}</td>
    <td align="center"></td>
    <td><a href="{$R.landing}" target="_blank" rel="nofollow noopener noreferrer">{$R.landing}</a></td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
