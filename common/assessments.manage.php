{* ROTARY — assessments · manage *}
{Stats::Mini()}
{RR::Header(['title'=>$LANG.CLIENT_ASSESSMENT,'icon'=>'fas fa-diagnoses'])}
{Msgs::Warning($INFO|default:'')}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Name</th>
      <th class="all text-center">Score</th>
      <th class="all text-center">Percentage</th>
      <th class="all text-center">Status</th>
      <th class="none"></th>
      <th class="none">Categories</th>
      <th class="none">Questions</th>
      <th class="none">Answers</th>
      <th class="none">Description</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr class="{if $R.status neq 'on'}{RR::Color($R.status)}{/if}">
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong rt-tone-royal"><a href="?dad=assessments&jc=manage&a=form&id={$R.id}" {$_TIP_} title="Take Assessment"><i class="fas fa-diagnoses"></i> {$R.title}</a></td>
    <td class="rt-strong rt-tone-royal" align="center">{Cur::D($R.score.weight)|default:'None'}</td>
    <td class="rt-strong rt-tone-royal" align="center">{Cur::D($R.score.percent)|default:'0'}%</td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td align="center">{if $R.status eq 'pending'}{RR::Buttons(["Take Assessment:fas fa-location-arrow:btn-info confirm"=>"?dad=assessments&jc=manage&a=form&id={$R.id}"])}{elseif $R.status eq 'completed'}
    {RR::Buttons(["Download Report:fas fa-download:btn-success ignore::_blank"=>"?dad=assessments&jc=manage&a=dr&id={$R.id}"])}{/if}
    </td>
    <td>{RR::Badge($R.cats|default:'0')}</td>
    <td>{RR::Badge($R.questions|default:'0')}</td>
    <td>{RR::Badge($R.answers|default:'0')}</td>
    <td>{$R.body|default:'N/A'}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
