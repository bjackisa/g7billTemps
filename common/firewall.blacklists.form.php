{* ROTARY — firewall · blacklists · form *}
{FF::Note(['value'=>"<p>{$LANG.BLACKLISTS_DESC}</p>"])}
{FF::Form(['hidden'=>['dad'=>'mail','jc'=>'blacklists','a'=>'save','id'=>{$smarty.request.id|default:'0'},'G7BILL_SECURITY'=>'FALSE','csrf'=>{CSRF::Token()}],'icon'=>'fas fa-object-group','title'=>'Managing Blacklists'])}
{FF::Box(['_BOX_'=>'open','title'=>'Status &amp; Priority'])}
{FF::OO(['name'=>'status','value'=>$smarty.post.status|default:1])}
{FF::Select(['name'=>'priority','value'=>$smarty.post.priority|default:'5','options'=>$smarty.post.priorities,'assoc'=>1])}
{FF::Box(['_BOX_'=>'close'])}
{FF::Select(['name'=>'mid','value'=>$smarty.post.mid|default:'','required'=>1,'table'=>'ed_webhosting_mail_box','column'=>'email','where'=>"`status`='on' and `email` like '%@{$smarty.session.s.hosting}' and `ownerid`='{$newuid}'",'icon'=>'fas fa-envelope','title'=>'Email Address','desc'=>'Email address to attach the Blacklist rule'])}
{FF::Text(['name'=>'_email_','title'=>'Blacklist','value'=>$smarty.post._email_|default:'','icon'=>'fas fa-user','required'=>1,'desc'=>'Email to be Blacklisted. For blacklisting the entire domain name, type @domain.com. Replacing domain.com with the actual domain name you wish to Blacklist'])}
{FF::Form(['___'=>'close'])}
