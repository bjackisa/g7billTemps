{* ROTARY — payment buttons list *}
{include file='info.api.header.php'}
{RR::Header(['title'=>'Payment Buttons','icon'=>'fas fa-shopping-cart'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Name</th>
      <th class="all">Amount</th>
      <th class="all">Date</th>
      <th class="all text-center">Status</th>
      <th class="none"></th>
      <th class="none">Return</th>
      <th class="none">Cancel</th>
      <th class="none">URL</th>
      <th class="none">HTML</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td><strong>{$R.name}</strong></td>
    <td><span class="rt-amt">{$R.currency}{Cur::D($rows[results].amount)}</span></td>
    <td>{$R.timestamp}</td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td>{RR::Buttons(['id'=>$R.id])}</td>
    <td>{$R.return|default:''}</td>
    <td>{$R.cancel|default:''}</td>
    <td><a href="{$R.button}" target="_blank" rel="nofollow noopener noreferrer" class="rt-doc-link ignore">{$R.button} <i class="fas fa-external-link-alt"></i></a></td>
    <td><textarea class="form-control rt-codebox-area rt-codebox-sm" rows="3" readonly spellcheck="false"><button type="button" onclick="location.href='{$R.button}';">{$R.name}</button></textarea></td>
  </tr>
  {assign var='i' value=$i+1}
  {/section}
  </tbody>
</table>
{RR::Footer()}
