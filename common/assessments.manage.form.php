{* ROTARY — assessments · manage · form *}
{Stats::Mini()}
{FF::Note(['value'=>"<p>{$smarty.post.body|default:'This assessment helps paint a picture of who you are and what you need. By utilizing these assessments, we can make better informed decisions for serving you.'}</p>"])}
{FF::Form(['hidden'=>['dad'=>'assessments','jc'=>'manage','a'=>'save','id'=>{$smarty.request.id|default:'0'}],'icon'=>'fas fa-object-group','title'=>$LANG.CLIENT_ASSESSMENT])}

{foreach from=$cats key=k item=v}
{assign var='info' value=V::R("select * from `kb` where `id`='$k'")}
{FF::Box(['_BOX_'=>'open','title'=>"{$info.title}",'icon'=>'fas fa-folder','class'=>'yellow','note'=>"{$info.body}"])}

{assign var='i' value=1}
{section name=results loop=$v}
{assign var='R' value=V::D($v[results])}
{if V::G("id","assessment_results","`question`='{$R.id}' and `assessment`='{$smarty.request.id}'")}{continue}{/if}
{FF::Select(['name'=>"qn[{$R.id}]",'title'=>$R.title,'table'=>'kb','column'=>'title','where'=>"`type`='answer' and `question`='{$R.id}' and `status`='on'",'icon'=>'fas fa-university'])}
{assign var='i' value=$i+1} {/section}

{FF::Box(['_BOX_'=>'close'])}
{/foreach}

{FF::Form(['___'=>'close'])}
