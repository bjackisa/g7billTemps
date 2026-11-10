{* ROTARY — firewall · whitelists · form *}
{FF::Note(['value'=>"<p>{$LANG.IP_WHITELIST_DESC}</p>"])}
{FF::Form(['hidden'=>['dad'=>'firewall','jc'=>'whitelists','a'=>'save','id'=>{$smarty.request.id|default:'0'},'G7BILL_SECURITY'=>'FALSE','csrf'=>{CSRF::Token()}],'icon'=>'fas fa-object-group','title'=>'Managing IP Whitelisting'])}
{FF::OO(['name'=>'status','value'=>$smarty.post.status|default:1])}
{FF::Text(['name'=>'src_ip','title'=>'IP Address','value'=>$smarty.post.src_ip|default:'','icon'=>'fas fa-sitemap','required'=>1,'desc'=>'IP Address (Network) to be Whitelisted'])}
{FF::Form(['___'=>'close'])}
