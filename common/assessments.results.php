{* ROTARY — assessments · results *}
{Stats::Mini()}
{RR::Header(['title'=>$LANG.ASSESSMENT_RESULTS,'icon'=>'fas fa-check-double'])}
{Msgs::Warning($INFO|default:'')}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">    <thead>
      <tr>
        <th>ID</th>
        <th>Question</th>
        <th>Answer</th>
        <th class="text-center">Score</th>
        <th class="text-center">Status</th>
        <th class="none">RID</th>
        <th class="none">Date</th>
        <th class="none">Category</th>
        <th class="none">Comments</th>
      </tr>
    </thead>
    <tbody>
    {assign var='i' value=1}
    {section name=results loop=$rows}
    {assign var='R' value=V::D($rows[results])}
    <tr>
      <td>{RR::BC($R.id)}</td>
      <td>{$R._question_.title}</td>
      <td class="rt-strong rt-tone-royal">{$R._answer_.title}</td>
      <td class="rt-strong rt-tone-grass" align="center">{$R.score}</td>
      <td class="rt-cell-status" align="center">{$R.status}</td>
      <td class="rt-cell-muted">{$R.id}</td>
      <td><span class="rt-strong">{$R.timestamp}</span></td>
      <td>{$R._cat_.title|default:"N/A"}</td>
      <td><span class="rt-strong"><em>{$R.comments|default:"N/A"}</em></span></td>
    </tr>
    {assign var='i' value=$i+1} {/section}
  </tbody>
  </table>
{RR::Footer()}
