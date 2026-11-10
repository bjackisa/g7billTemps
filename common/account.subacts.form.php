{* ROTARY — account · subacts · form *}
{FF::Note(['value'=>'<p>You can set up sub-accounts to delegate account administration tasks to other people. When you create a sub-account, you define the specific areas of the Customer Portal that the sub-account is allowed to access.</p>'])}

{FF::Form(['hidden'=>['dad'=>'account','jc'=>'subacts','a'=>'save','id'=>{$smarty.request.id|default:'0'},'G7BILL_SECURITY'=>'FALSE'],'icon'=>'fas fa-object-group','title'=>'Managing a Sub Account'])}
{FF::Text(['name'=>'email','title'=>'Email Address','value'=>$smarty.post.email,'required'=>1,'icon'=>'fas fa-envelope','desc'=>'Email Address Eg jchrist'])}
{FF::Text(['name'=>'phone','value'=>$smarty.post.phone,'title'=>'Phone Number','required'=>1,'icon'=>'fas fa-phone'])}
{FF::Text(['name'=>'password','required'=>"{if empty($smarty.request.id)}1{else}0{/if}",'id'=>'password_strength','icon'=>'fas fa-key','desc'=>"{if empty($smarty.request.id)}Password to access sub account{else}Double Click to Change Password{/if}",'other'=>"{if !empty($smarty.request.id)}readonly='true' ondblclick=\"this.readOnly='';\"{/if}"])}

{FF::Box(['_BOX_'=>'open','title'=>'Other User Details','icon'=>'fas fa-user','class'=>'yellow','note'=>'More details and information about the sub account user'])}
{FF::OO(['name'=>'status','value'=>$smarty.post.status|default:'on'])}
{FF::Text(['name'=>'fname','value'=>$smarty.post.fname,'title'=>'First Name','icon'=>'fas fa-user'])}
{FF::Text(['name'=>'lname','value'=>$smarty.post.lname,'title'=>'Last Name','icon'=>'fas fa-user'])}
{FF::Box(['_BOX_'=>'close'])}

<!--edition based perms-->{include file="editions/{$config.edition}/templates/common/account.subacts.perms.php"}<!--/edition based perms-->
{FF::Form(['___'=>'close'])}
