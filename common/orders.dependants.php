{* ROTARY — dependants *}
{Stats::Mini()}
{RR::Header(['title'=>$LANG.DEPENDANTS,'icon'=>'fas fa-child'])}
{if !empty($INFO)}<div class="rt-secure-note"><i class="fas fa-info-circle"></i><span>{$INFO}</span></div>{/if}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Name</th>
      <th class="all">{$LANG.T000010}</th>
      <th class="all">Relationship</th>
      <th class="all">Status</th>
      <th class="none">Actions</th>
      <th class="none">Mobile</th>
      <th class="none">Email</th>
    </tr>
  </thead>
  <tbody>
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td><span class="rt-person"><span class="rt-avatar">{$R.fname|truncate:1:''|upper}</span><strong>{$R.fname} {$R.mname} {$R.lname}</strong></span></td>
    <td>{$R._order_.item_name} <code class="rt-code">{$R._order_.number}</code></td>
    <td><span class="rt-pill">{$R.relationship|ucwords}</span></td>
    <td class="rt-cell-status">{$R.status}</td>
    <td>{RR::Buttons(['id'=>$R.id])}</td>
    <td>{$R.phone|default:'N/A'}</td>
    <td>{$R.email|default:'N/A'}</td>
  </tr>
  {/section}
  </tbody>
</table>
{RR::Footer()}
