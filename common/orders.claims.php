{* ROTARY — claims *}
{Stats::Mini()}
{FrontWidgets::AdvancedTools()}
{RR::Header(['title'=>'My Claims','icon'=>'fas fa-notes-medical'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th></th>
      <th>Name</th>
      <th>Claim</th>
      <th>Date</th>
      <th>Status</th>
      <th class="none">Actions</th>
      <th class="none">Value</th>
      <th class="none">Start</th>
      <th class="none">End</th>
      <th class="none">Policy</th>
      <th class="none">Order</th>
      <th class="none">Description</th>
      <th class="none">Response</th>
      <th class="none">Documents</th>
    </tr>
  </thead>
  <tbody>
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td><strong>{$R.user.name}</strong></td>
    <td><span class="rt-doc-link"><i class="fas fa-notes-medical"></i> {$R.number}</span></td>
    <td>{$R.timestamp}</td>
    <td class="rt-cell-status">{$R.status}</td>
    <td>{RR::Buttons(['id'=>$R.id])}</td>
    <td>{if !empty($R.value)}<span class="rt-amt">{Cur::D($R.value)}</span>{else}N/A{/if}</td>
    <td>{$R.start}</td>
    <td>{$R.end|default:'N/A'}</td>
    <td><code class="rt-code">{$R.order.number|default:'N/A'}</code></td>
    <td>{$R.order.item_name}</td>
    <td>{$R.description|default:'N/A'}</td>
    <td>{$R.admin_comments|default:'N/A'}</td>
    <td>{if !empty($R._attachments_)}<ul class="rt-items">{foreach from=$R._attachments_ key=k item=v}
       <li><a href="?dad=orders&jc=claims&a=file&id={V::EN($v)}" target="_blank" rel="nofollow noopener noreferrer"><i class="far fa-file"></i> {V::G("name","files","`id`='{$v}'")|default:'N/A'}</a></li>
    {/foreach}</ul>{else}N/A{/if}</td>
  </tr>
  {/section}
  </tbody>
</table>
{RR::Footer()}
