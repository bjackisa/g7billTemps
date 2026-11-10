{* ROTARY — agents · users *}
{Stats::Mini()}
{RR::Header(['title'=>$LANG.MY_CLIENTS,'icon'=>'fas fa-users'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Name</th>
      <th class="all">Email</th>
      <th class="all">Signup Date</th>
      <th class="all text-center">Status</th>
      <th class="none">Username</th>
      <th class="none">Phone</th>
      <th class="none">Investments</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong rt-tone-royal">{$R.fname} {$R.mname} {$R.lname}</td>
    <td class="rt-strong">{$R.email}</td>
    <td><b>{$R.signup_date}</b></td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td><span class="rt-strong">{$R.username}</span></td>
    <td>{$R.phone}</td>
    <td>
    {if !empty($R.inv)}
    <ol>
 	{assign var='x' value=1}
    {section name=xresults loop=$R.inv}
    {assign var='xR' value=V::D($R.inv[xresults])}
    <li>{$xR.account.number} - {U::RP("{$xR.account.number} - ","",$xR.name)}</li>
    {assign var='x' value=$x+1}
    {/section}
    </ol>{else}N/A{/if}
    </td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
