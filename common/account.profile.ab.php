{* ROTARY — account · profile · ab *}
{include file='account.profile.header.php'}
{RR::Header(['title'=>$LANG.ADDRESS_BOOK,'icon'=>'fas fa-address-book'])}
{Msgs::Warning($INFO|default:'')}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Name</th>
      <th class="all">Company</th>
      <th class="all">Email</th>
      <th class="all text-center">Status</th>
      <th class="none"></th>
      <th class="none">Mobile</th>
      <th class="none">Country</th>
      <th class="none">Category</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong rt-tone-royal">{$R.fname} {$R.mname} {$R.lname}</td>
    <td class="rt-strong">{$R.company|default:'N/A'}</td>
    <td class="rt-strong rt-tone-royal">{if !empty($R.email)}<a href="mailto:{$R.email}">{$R.email}</a>{else}N/A{/if}</td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td align="center">{RR::Buttons(['id'=>$R.id])}</td>
    <td>{$R.phone|default:'N/A'}</td>
    <td>{$R.country|ucwords}</td>
    <td>{$R._cat_.name|default:'N/A'}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
