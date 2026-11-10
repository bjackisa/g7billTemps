{* ROTARY — payment button editor *}
{include file='info.api.header.php'}
{FF::Note(['value'=>'<p>Payment Buttons allow you to seamlessly and securely accept payments on your website with a small snippet of HTML code. When the Payment Button is clicked, the customer is presented with a payment form overlay, where they can securely enter their payment details.</p>'])}
{FF::Form(['hidden'=>['dad'=>'info','jc'=>'api','hs'=>'pb','a'=>'save','G7BILL_SECURITY'=>'FALSE','id'=>{$smarty.request.id|default:'0'}],'icon'=>'fas fa-shopping-cart','title'=>'Payment Button'])}
{FF::Text(['name'=>'name','title'=>'Button Name','value'=>$smarty.post.name,'icon'=>'fas fa-edit','required'=>1])}
{FF::Select(['name'=>'currency','value'=>$smarty.post.currency|default:$config.default_currency,'table'=>'currencies','column'=>'code','key'=>'code','where'=>"`status`='1'",'required'=>1])}
{FF::Text(['name'=>'amount','value'=>$smarty.post.amount,'icon'=>'fas fa-money-check','class'=>'money','required'=>1])}

{FF::Box(['_BOX_'=>'open','title'=>'Additional Settings','icon'=>'fas fa-cogs','status'=>"closed"])}
{FF::Text(['name'=>'return','title'=>'Return URL','value'=>$smarty.post.return,'icon'=>'fas fa-external-link-square-alt'])}
{FF::Text(['name'=>'cancel','title'=>'Cancel URL','value'=>$smarty.post.cancel,'icon'=>'fas fa-external-link-square-alt'])}
{FF::Textarea(['name'=>'description','value'=>$smarty.post.description])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Form(['___'=>'close'])}
