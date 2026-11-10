{* ROTARY — order documents *}
{Stats::Mini()}
{FrontWidgets::AdvancedTools()}
{RR::Header(['title'=>$LANG.ORDERS_DOCS_DESC,'icon'=>'far fa-folder-open'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th></th>
      <th>Document</th>
      <th>Order</th>
      <th>Date</th>
      <th>Status</th>
      <th class="none">Actions</th>
      <th class="none">Size</th>
      <th class="none">Subcategory</th>
      <th class="none">Description</th>
      <th class="none">Response</th>
    </tr>
  </thead>
  <tbody>
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td><a href="?dad=orders&jc=files&a=download&id={$R.id}" class="rt-file-row"><span class="rt-file-ico"><i class="far fa-file"></i></span><span class="rt-file-meta"><strong>{$R.name}</strong><small>{U::Units($R.size)|default:''}</small></span></a></td>
    <td><code class="rt-code">#{$R.order.id}</code></td>
    <td>{$R.timestamp}</td>
    <td class="rt-cell-status">{$R.status}</td>
    <td>{RR::Buttons(['delete'=>$R.id])}</td>
    <td>{U::Units($R.size)|default:'N/A'}</td>
    <td>{_Array_::Lists($R._subcat_)|default:'N/A'}</td>
    <td>{$R.description|default:'N/A'}</td>
    <td>{$R.admin_comments|strip_tags|default:'N/A'}</td>
  </tr>
  {/section}
  </tbody>
</table>
{RR::Footer()}
