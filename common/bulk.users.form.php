{* ROTARY — bulk · users · form *}
{Stats::Mini()}
{FF::Note(['value'=>"<p>Upload ONLY a CSV file to enroll your users</p>"])}
{FF::Form(['hidden'=>['dad'=>'bulk','jc'=>'users','a'=>'save','id'=>{$smarty.request.id|default:'0'},'G7BILL_SECURITY'=>'FALSE'],'icon'=>'fas fa-users','title'=>$LANG.MY_USERS])}
{*FF::Select(['name'=>'group','required'=>1,'table'=>'bulk_groups','column'=>'name','where'=>"`status`='on' and `ownerid`='{$newuid}'",'icon'=>'fas fa-users','title'=>'User Group'])*}
{FF::File(['name'=>'file','required'=>1,'title'=>'CSV File','desc'=>"Find and upload the respective users CSV file"])}
{FF::Form(['___'=>'close'])}
