{* ROTARY — bulk · users *}
{Stats::Mini()}
{FrontWidgets::AdvancedTools()}
{RR::Header(['title'=>$LANG.MY_USERS,'icon'=>'fas fa-users'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Name</th>
      <th class="all">Phone</th>
      <th class="all">Email</th>
      <th class="all text-center">Status</th>
      <th class="none">UID</th>
      <th class="none">Start</th>
      <th class="none">End</th>
      <th class="none">Date</th>
      <th class="none">Dump</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  {if $R._order_.end_date<$now}{assign var='color' value='font-red-thunderbird'}{else}{assign var='color' value='font-green-jungle'}{/if}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong {$color}">{$R.fname} {$R.mname} {$R.lname}</td>
    <td>{$R.phone|default:'N/A'}</td>
    <td><a href="mailt:{$R.email}">{$R.email}</a></td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td><span class="rt-strong rt-tone-royal">{$R.ownerid|default:'N/A'|strip_tags}</span></td>
    <td><span class="rt-strong rt-tone-royal">{if !empty($R._order_.start_date)}{U::D($R._order_.start_date)}{else}Processing...{/if}</span></td>
    <td><span class="rt-strong {$color}">{if !empty($R._order_.end_date)}{U::D($R._order_.end_date)}{else}Processing...{/if}</span></td>
    <td>{$R.timestamp}</td>
    <td>{V::P($R.dump)}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
