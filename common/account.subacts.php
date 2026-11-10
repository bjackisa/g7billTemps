{* ROTARY — account · subacts *}
{Stats::Mini()}
{RR::Header(['title'=>$LANG.SUB_ACCOUNTS,'icon'=>'fas fa-user-plus'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Name</th>
      <th class="all">Phone</th>
      <th class="all">Email</th>
      <th class="all">Last Login</th>
      <th class="all text-center">Status</th>
      <th class="none"></th>
      <th class="none">Permissions</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr class="{if $R.status neq 'on'}{RR::Color($R.status)}{/if}">
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong">{$R.fname} {$R.mname} {$R.lname}</td>
    <td>{$R.phone}</td>
    <td>{$R.email}</td>
    <td>{Vars::Date($R.lastlogin,true)}</td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td>{RR::Buttons(['id'=>$R.id])}</td>
    <td>{Vars::Array_To_List($R.perms)}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
