{* ROTARY — account · profile · bank *}
{include file='account.profile.header.php'}
{RR::Header(['title'=>'Bank Accounts','icon'=>'fas fa-university'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">A/C Name</th>
      <th class="all text-center">A/C Number</th>
      <th class="all">Bank Name</th>
      <th class="all text-center">Status</th>
      <th class="none"></th>
      <th class="none">Branch</th>
      <th class="none">Swift</th>
      <th class="none">Updated</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  {assign var='icon' value={U::File(['file'=>"images/bank.png",'a'=>'path'])}}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong">{FF::Def(['id'=>$R.id,'value'=>$R.default])} {$R.name}</td>
    <td align="center" class="rt-tone-royal rt-strong"><img src="{$icon}" alt="{$R.brand}" {U::iSize(['i'=>$icon,'t'=>40])} /> **** {$R.4}</td>
    <td>{$R._bank_.name}</td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td>{RR::Buttons(['delete'=>$R.id])}</td>
    <td><span class="rt-strong">{$R.branch|default:'Main Branch'}</span></td>
    <td><span class="rt-strong">{$R._bank_.swift|default:'N/A'}</span></td>
    <td>{$R.timestamp}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
