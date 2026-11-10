{* ROTARY — account · profile · docs *}
{include file='account.profile.header.php'}
{RR::Header(['title'=>$LANG.MY_DOCUMENTS,'icon'=>'far fa-copy'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Name</th>
      <th class="all">Type</th>
      <th class="all">Date</th>
      <th class="all text-center">Status</th>
      <th class="none">Number</th>
      <th class="none">Expiry</th>
      <th class="none">Size</th>
      <th class="none">Remarks</th>
      <th class="none"></th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong">{FF::Def(['id'=>$R.id,'value'=>$R.default])} {$R.name}</td>
    <td class="rt-tone-royal rt-strong">{$R._subcat_.name|default:'N/A'}</td>
    <td>{$R.timestamp|default:'N/A'}</td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td><span class="rt-tone-royal rt-strong">{$R.number|default:'N/A'}</span></td>
    <td><span class="{if $rows[results].expiry<$now}rt-tone-cardinal{else}rt-tone-grass{/if} rt-strong">{$R.expiry|default:'N/A'}</span></td>
    <td><span class="rt-strong">{U::Units($R.size)|default:'N/A'}</span></td>
    <td><span class="rt-strong rt-tone-violet">{$R.admin_comments|strip_tags|default:'N/A'}</span></td>
    <td>{if !empty($smarty.session.adminuser)}{RR::Buttons(['delete'=>$R.id])}{/if}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
