{* ROTARY — info · logs *}
{Stats::Mini()}
{FrontWidgets::AdvancedTools()}
{RR::Header(['title'=>$LANG.API_LOGS,'icon'=>'fas fa-history'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Type</th>
      <th class="all">Action</th>
      <th class="all">Date</th>
      <th class="all text-center">Status</th>
      <th class="none">RID</th>
      <th class="none">Content</th>
      <th class="none">Dump</th>
      <th class="none">Expires</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong">{$R.type}</td>
    <td>{$R.action}</td>
    <td class="rt-strong">{$R.timestamp}</td>
    <td align="center"><a href="?dad=info&jc=logs&a=delete&id={$R.id}" class="btn btn-xs btn-danger confirm"><i class="fas fa-trash-alt"></i> Delete</a></td>
    <td class="rt-cell-muted">{$R.id}</td>
    <td><span class="rt-strong rt-tone-cardinal">{$R.content|strip_tags|default:'N/A'}</span></td>
    <td><br />
    {foreach from=$R.dump key=k item=v}
    [{$k}] => {$v|strip_tags}<br />
    {/foreach}

    {*V::P($R.dump|default:'N/A')*}</td>
    <td>{$R.expires|default:'N/A'}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}





