{* ROTARY — account · profile · ac · form *}
{include file='account.profile.header.php'}
{FF::Note(['value'=>"<p>In Practice, you can set up an unlimited number of additional contacts for email, sms, support department, accounts department and or all depatments. To enter additional contact information, choose Type and then Department depending on the Type of additional contact you want to add.</p>"])}
{FF::Form(['hidden'=>['dad'=>'account','jc'=>'profile','hs'=>'ac','a'=>'save','id'=>{$smarty.request.id|default:'0'}],'icon'=>'fas fa-object-group','title'=>$LANG.ADDITIONAL_CONTACTS])}

{FF::Box(['_BOX_'=>'open','title'=>'Status &amp; Department','icon'=>'fas fa-briefcase','class'=>"yellow"])}
{FF::OO(['name'=>'status','value'=>$smarty.post.status|default:'on'])}
{FF::Select(['name'=>'ac','title'=>'Department','value'=>$smarty.post.ac|default:'all','options'=>U::Enum(['table'=>'directory','field'=>'ac']),'required'=>1,'icon'=>'fas fa-briefcase'])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Text(['name'=>'fname','title'=>'First Name','value'=>$smarty.post.fname,'icon'=>'fas fa-user','required'=>1,'desc'=>'First Name Example <strong>Joseph, Abishag, Olivia, Simon</strong>'])}
{FF::Text(['name'=>'lname','title'=>'Last Name','value'=>$smarty.post.lname,'icon'=>'fas fa-user','required'=>1,'desc'=>'Last Name Example <strong>Abdi, Waibale, Mbabazi, Nabwire</strong>'])}
{FF::Text(['name'=>'email','title'=>'Email Address','value'=>$smarty.post.email,'required'=>1,'icon'=>'fas fa-envelope','desc'=>'Email Address <strong>info@jpesa.com</strong>'])}
{FF::Text(['name'=>'phone','title'=>'Phone','value'=>$smarty.post.phone,'icon'=>'fas fa-phone','desc'=>'Phone / Mobile Number. Example <strong>256752567374</strong>'])}

{FF::Form(['___'=>'close'])}
