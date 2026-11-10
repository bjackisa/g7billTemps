{* ROTARY — account · profile · api · form *}
{include file='account.profile.header.php'}
{FF::Note(['value'=>'<p>In order to withdraw or deposit money on your GWallet by using our API, you\'ll simply need to copy your api access key which is provided for you.</p>'])}
{FF::Form(['hidden'=>['dad'=>'account','jc'=>'profile','hs'=>'api','a'=>'save','id'=>{$smarty.request.id|default:'0'},'G7BILL_SECURITY'=>'FALSE'],'icon'=>'fas fa-exchange-alt','title'=>'API Settings'])}

{FF::Box(['_BOX_'=>'open','title'=>'API Key Regeneration &amp; Status','icon'=>'fas fa-key','class'=>"red"])}
{FF::OO(['name'=>'status','value'=>$smarty.post.status])}
{FF::OO(['name'=>'regen','title'=>'API Key','desc'=>'Toggle Enabled to <strong>Regenerate</strong> your API Key'])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Text(['name'=>'ipn','title'=>'IPN','value'=>$smarty.post.ipn,'icon'=>'fas fa-globe','desc'=>'Type a Qualified URL'])}
{FF::Textarea(['name'=>'ips','title'=>'IPs','value'=>$smarty.post.ips,'icon'=>'fas fa-key','desc'=>'Enter the IPs that can be allowed through the firewall. One per line','type'=>'plain'])}

{FF::Box(['_BOX_'=>'open','title'=>'Header, Footer &amp; Colors','icon'=>'fas fa-paint-brush','class'=>'blue'])}
{FF::File(['name'=>'header','title'=>'Header','desc'=>"Payment payment customization header. (Max Width: 1200px & Max-Height: 54px)"])}
{FF::File(['name'=>'footer','title'=>'Footer','desc'=>"Payment payment customization footer."])}
{FF::Text(['name'=>'color1','title'=>'Color #1','value'=>$smarty.post.color1,'icon'=>'fa fa-paint'])}
{FF::Text(['name'=>'color2','title'=>'Color #2','value'=>$smarty.post.color2,'icon'=>'fa fa-paint'])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Form(['___'=>'close','save'=>'Save API Settings'])}
