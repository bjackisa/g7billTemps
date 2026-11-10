{* ROTARY — account · profile · credentials *}
{include file='account.profile.header.php'}
{FF::Note(['value'=>'<p>Here\'s where you can change your account credentials such as account <strong>Password</strong>, security <strong>Question</strong> and <strong>Answer</strong>. Need more help on updating your credentials? Please contact us through the <a href="?dad=info&jc=support" target="_blank" rel="nofollow noopener noreferrer">help desk.</a></p>'])}

{FF::Form(['hidden'=>['dad'=>'account','jc'=>'profile','hs'=>'credentials','a'=>'save','id'=>{$smarty.post.id|default:'0'},'G7BILL_SECURITY'=>'FALSE'],'icon'=>'fas fa-key','title'=>'Managing Credentials Information'])}
{FF::Text(['name'=>'current_password','title'=>'Current Password','type'=>'password','icon'=>'fas fa-key','desc'=>'Please enter your current password'])}
{FF::Text(['name'=>'password1','title'=>'New Password','type'=>'password','icon'=>'fas fa-key','desc'=>'Please enter your new password'])}
{FF::Text(['name'=>'password2','title'=>'Confirm New Password','type'=>'password','icon'=>'fas fa-key','desc'=>'Please confirm your new password entered above'])}

{FF::Box(['_BOX_'=>'open','title'=>'Security Question &amp; Answer','icon'=>'fas fa-question','class'=>'red','status'=>"closed"])}
{FF::Text(['name'=>'lpquestion','value'=>$users.lpquestion,'title'=>'Security Question','icon'=>'fas fa-question'])}
{FF::Text(['name'=>'lpanswer','value'=>$users.lpanswer,'title'=>'Security Answer','icon'=>'fas fa-edit'])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Form(['___'=>'close'])}
