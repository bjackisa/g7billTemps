{* ROTARY — bulk · groups · form *}
{FF::Note(['value'=>"<p>In Practice, you can set up an unlimited number of address book contacts.</p>"])}
{FF::Form(['hidden'=>['dad'=>'bulk','jc'=>'groups','a'=>'save','id'=>{$smarty.request.id|default:'0'}],'icon'=>'fas fa-layer-group','title'=>$LANG.BULK_GROUPS])}

{FF::Box(['_BOX_'=>'open','title'=>'Status','icon'=>'fas fa-low-vision','class'=>"green"])}
{FF::OO(['name'=>'status','value'=>$smarty.post.status|default:'on'])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Text(['name'=>'name','title'=>'Name','value'=>$smarty.post.name,'icon'=>'fas fa-edit','required'=>1,'desc'=>'Group Name Example <strong>Jolis</strong>'])}
{FF::Select(['name'=>'package','value'=>$smarty.post.package,'required'=>1,'table'=>'package','column'=>'name','where'=>"`status`='on'",'icon'=>'fas fa-clipboard-list','desc'=>'Package Name'])}
{FF::Textarea(['name'=>'description','value'=>$smarty.post.description,'desc'=>'Group description &amp; or comments'])}

{FF::Box(['_BOX_'=>'open','title'=>'Group Configs','icon'=>'fas fa-cogs','class'=>"blue"])}
{FF::Text(['name'=>'config1','title'=>'Config #1','value'=>$smarty.post.config1,'icon'=>'fas fa-cogs','desc'=>'Group Configuration #1'])}
{FF::Text(['name'=>'config2','title'=>'Config #2','value'=>$smarty.post.config2,'icon'=>'fas fa-cogs','desc'=>'Group Configuration #2'])}
{FF::Text(['name'=>'config3','title'=>'Config #3','value'=>$smarty.post.config3,'icon'=>'fas fa-cogs','desc'=>'Group Configuration #3'])}
{FF::Text(['name'=>'config4','title'=>'Config #4','value'=>$smarty.post.config4,'icon'=>'fas fa-cogs','desc'=>'Group Configuration #4'])}
{FF::Text(['name'=>'config5','title'=>'Config #5','value'=>$smarty.post.config5,'icon'=>'fas fa-cogs','desc'=>'Group Configuration #5'])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Form(['___'=>'close'])}
