{* ROTARY — shares · manage *}
{Stats::Mini()}
{RR::Header(['title'=>$LANG.T000014,'icon'=>'fas fa-briefcase'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Units</th>
      <th class="all">Value</th>
      <th class="all text-center">Date</th>
      <th class="all text-center">Status</th>
      <th class="none"></th>
      <th class="none">Last Trade</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong rt-tone-royal">{U::TTZ($R.units|number_format:3)}</td>
    <td class="rt-strong rt-tone-grass">{$R.currency}{U::TTZ($R.value|number_format:3)}</td>
    <td class="rt-strong" align="center">{$R.start_date}</td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td align="center">{RR::Buttons(["Download Certificate:fas fa-download:btn-primary ignore::target='_blank'"=>"?dad=shares&jc=manage&a=download&id={$R.id}"])}</td>
    <td><span class="rt-strong">{U::D($R.last_trade)}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
