{* ROTARY — account · profile · cc *}
{include file='account.profile.header.php'}
{RR::Header(['title'=>'Credit Cards','icon'=>'fas fa-credit-card'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Card Name</th>
      <th class="all text-center">Number</th>
      <th class="all text-center">Expires</th>
      <th class="all text-center">Status</th>
      <th class="none"></th>
      <th class="none">Card Holder</th>
      <th class="none">Last Update</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  {assign var='icon' value={U::File(['file'=>"images/{$R.brand}.png",'a'=>'path'])}}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong">{FF::Def(['id'=>$R.id,'value'=>$R.default])} {$R.name}</td>

    <td align="center" class="rt-tone-royal rt-strong"><img src="{$icon}" alt="{$R.brand}" {U::iSize(['i'=>$icon,'t'=>40])} /> **** {$R.l4}</td>
    <td align="center"><span class="rt-strong">{$rows[results].expiry}</span></td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td>{RR::Buttons(['delete'=>$R.id])}</td>
    <td>{$R.brand|strtoupper}</td>
    <td>{$R.timestamp}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
