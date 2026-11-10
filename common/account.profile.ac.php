{* ROTARY — account · profile · ac *}
{include file='account.profile.header.php'}
{RR::Header(['title'=>$LANG.ADDITIONAL_CONTACTS,'icon'=>'fas fa-comment-dots'])}
{Msgs::Warning($INFO|default:'')}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Name</th>
      <th class="all">Email</th>
      <th class="all">Date</th>
      <th class="all text-center">Status</th>
      <th class="none"></th>
      <th class="none">Mobile</th>
      <th class="none">Dept</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr class="{if $R.status neq 'on'}{RR::Color($R.status)}{/if}">
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong rt-tone-grass">{$R.fname} {$R.lname}</td>
    <td>{$R.email|default:'N/A'}</td>
    <td>{$R.timestamp}</td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td align="center">{RR::Buttons(['id'=>$R.id])}</td>
    <td>{$R.phone|default:'N/A'}</td>
    <td>{$R.ac|ucwords}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
