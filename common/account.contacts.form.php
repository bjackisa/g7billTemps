{* ROTARY — account · contacts · form *}
{Stats::Mini()}
{FF::Note(['value'=>"<p>In Practice, you can set up an unlimited number of additional contacts for email, sms, support department, accounts department and or all depatments. To enter additional contact information, choose Type and then Department depending on the Type of additional contact you want to add.</p>"])}
{FF::Form(['hidden'=>['dad'=>'account','jc'=>'contacts','a'=>'save','id'=>{$smarty.request.id|default:'0'}],'icon'=>'fas fa-object-group','title'=>'Additional Contact'])}
{FF::OO(['name'=>'status','value'=>$smarty.post.status])}
{FF::Select(['name'=>'ac','title'=>'Department','value'=>$smarty.post.ac|default:'all','icon'=>'fas fa-briefcase','options'=>$_ADDITIONAL_CONACT_TYPES_,'required'=>1])}
{FF::Text(['name'=>'fname','title'=>'First Name','value'=>$smarty.post.fname,'icon'=>'fas fa-user','required'=>1,'desc'=>'First Name Example <strong>Joseph, Abishag, Olivia, Simon</strong>'])}
{FF::Text(['name'=>'lname','title'=>'Last Name','value'=>$smarty.post.lname,'icon'=>'fas fa-user','required'=>1,'desc'=>'Last Name Example <strong>Abdi, Waibale, Mbabazi, Nabwire</strong>'])}
{FF::Text(['name'=>'email','title'=>'Email Address','value'=>$smarty.post.email,'icon'=>'fas fa-envelope','desc'=>'Email Address <strong>info@jpesa.com</strong>'])}
{FF::Text(['name'=>'phone','title'=>'Phone','value'=>$smarty.post.phone,'icon'=>'fas fa-phone','desc'=>'Phone / Mobile Number. Example <strong>256752567374</strong>'])}

{FF::Form(['___'=>'close'])}
