{* ROTARY — account · profile · kin · form *}
{include file='account.profile.header.php'}
{FF::Note(['value'=>"<p>In Practice, you can set up an unlimited number of Next of Kins.</p>"])}
{FF::Form(['hidden'=>['dad'=>'account','jc'=>'profile','hs'=>'kin','a'=>'save','id'=>{$smarty.request.id|default:'0'}],'icon'=>'fas fa-address-book','title'=>$LANG.NEXT_OF_KIN])}

{FF::Box(['_BOX_'=>'open','title'=>'Status','icon'=>'fas fa-low-vision','class'=>"green"])}
{FF::OO(['name'=>'status','value'=>$smarty.post.status|default:'on'])}
{FF::Select(['name'=>'priority','value'=>$smarty.post.priority,'options'=>range(1,100),'desc'=>'Assign contact priority aka order by which they shall be contacted'])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Text(['name'=>'fname','title'=>'First Name','value'=>$smarty.post.fname,'icon'=>'fas fa-user','required'=>1,'desc'=>'First Name Example <strong>Joseph, Abishag, Olivia, Simon</strong>'])}
{FF::Text(['name'=>'mname','title'=>'Middle Name','value'=>$smarty.post.mname,'icon'=>'fas fa-user','desc'=>'Middle Name Example <strong>Abdi, Waibale, Mbabazi, Nabwire</strong>'])}
{FF::Text(['name'=>'lname','title'=>'Last Name','value'=>$smarty.post.lname,'icon'=>'fas fa-user','required'=>1,'desc'=>'Last Name Example <strong>Abdi, Waibale, Mbabazi, Nabwire</strong>'])}
{FF::Text(['name'=>'email','value'=>$smarty.post.email,'icon'=>'fas fa-envelope','desc'=>'Email Address <strong>info@jpesa.com</strong>'])}
{FF::Text(['name'=>'phone','value'=>$smarty.post.phone,'icon'=>'fas fa-phone','desc'=>'Phone / Mobile Number. Example <strong>256752567374</strong>'])}

{FF::Box(['_BOX_'=>'open','title'=>'Company, Address, City, ZIP &amp; Country','icon'=>'fas fa-building','class'=>"blue"])}
{FF::Text(['name'=>'company','value'=>$smarty.post.company,'icon'=>'fas fa-building','desc'=>'Company. Example <strong>[[CNS]]</strong>'])}
{FF::Text(['name'=>'add1','value'=>$smarty.post.add1,'title'=>'Address #1','icon'=>'fas fa-map'])}
{FF::Text(['name'=>'add2','value'=>$smarty.post.add2,'title'=>'Address #2','icon'=>'fas fa-map'])}
{FF::Text(['name'=>'city','value'=>$smarty.post.city,'title'=>'City/Town','icon'=>'fas fa-map-signs'])}
{FF::Text(['name'=>'zip','value'=>$smarty.post.zip,'title'=>'Postal/ZIP Code','icon'=>'fas fa-location-arrow'])}
{FF::Select(['name'=>'country','value'=>$smarty.post.country,'table'=>'countries','column'=>'short_name','icon'=>'fas fa-flag','key'=>'iso2'])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Form(['___'=>'close'])}
