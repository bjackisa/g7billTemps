{* ROTARY — account · profile · tax *}
{include file='account.profile.header.php'}
{RR::Header(['title'=>$LANG.TAX_SETTINGS,'icon'=>'fas fa-flag'])}
{Msgs::Warning($INFO|default:'')}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">TIN</th>
      <th class="all">VAT</th>
      <th class="all">Date</th>
      <th class="all text-center">Status</th>
      <th class="none"></th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong rt-tone-royal">{$R.tin|default:'N/A'}</td>
    <td class="rt-strong rt-tone-royal">{$R.vat|default:'N/A'}</td>
    <td>{$R.timestamp}</td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td align="center">{RR::Buttons(['id'=>$R.id])}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
