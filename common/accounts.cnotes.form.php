{* ROTARY — accounts · cnotes · form *}
{FF::Note(['value'=>'<p>Here in you can be able to add Credit Notes</p>'])}
{FF::Form(['hidden'=>['dad'=>'accounts','jc'=>'cnotes','a'=>'save','G7BILL_SECURITY'=>'FALSE'],'icon'=>'fas fa-money-bill-wave','title'=>'Add your own Credit Notes','csrf'=>{CSRF::Token()}])}

{FF::Select(['name'=>'act_to','value'=>$smarty.post.act_to,'title'=>'Credit A/C','required'=>1,'options'=>$uaccounts,'icon'=>'fas fa-clipboard-list','desc'=>'User A/C to credit','assoc'=>1])}
{FF::Text(['name'=>'amount','value'=>$smarty.post.amount,'icon'=>'fas fa-money-bill-wave','title'=>'Amount','desc'=>'Enter amount to credit account','required'=>1,'class'=>'money'])}

{Msgs::Warning('By saving the Credit Note, you agree to our <a href="/terms/" target="_blank" rel="nofollow noopener noreferrer"><strong>Terms of Service</strong></a>. You understand how your deposits work and how to cancel.')}
{FF::Form(['___'=>'close','save'=>'Save Credit Note'])}
