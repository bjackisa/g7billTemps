{* ROTARY — account · profile · ab · form *}
{include file='account.profile.header.php'}
{FF::Note(['value'=>"<p>In Practice, you can set up an unlimited number of address book contacts.</p>"])}
{FF::Form(['hidden'=>['dad'=>'account','jc'=>'profile','hs'=>'ab','a'=>'save','id'=>{$smarty.request.id|default:'0'},'sub'=>{$smarty.request.sub|default:''}],'icon'=>'fas fa-address-book','title'=>$LANG.ADDRESS_BOOK])}

{FF::Box(['_BOX_'=>'open','title'=>'Status','icon'=>'fas fa-low-vision','class'=>"green"])}
{FF::OO(['name'=>'status','value'=>$smarty.post.status|default:'on'])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Select(['name'=>'cat','value'=>$smarty.post.cat,'title'=>'Category','table'=>'directory_cats','column'=>'name','where'=>"`status`='on' and `ownerid`='$newuid' and `cid`='{$config.id}'",'array'=>1])}
{FF::Text(['name'=>'fname','title'=>'First Name','value'=>$smarty.post.fname,'icon'=>'fas fa-user','required'=>1,'desc'=>'First Name Example <strong>Joseph, Abishag, Olivia, Simon</strong>'])}
{FF::Text(['name'=>'mname','title'=>'Middle Name','value'=>$smarty.post.mname,'icon'=>'fas fa-user','desc'=>'Middle Name Example <strong>Abdi, Waibale, Mbabazi, Nabwire</strong>'])}
{FF::Text(['name'=>'lname','title'=>'Last Name','value'=>$smarty.post.lname,'icon'=>'fas fa-user','required'=>1,'desc'=>'Last Name Example <strong>Abdi, Waibale, Mbabazi, Nabwire</strong>'])}
{FF::Text(['name'=>'email','value'=>$smarty.post.email,'required'=>1,'icon'=>'fas fa-envelope','desc'=>'Email Address <strong>info@jpesa.com</strong>'])}
{FF::Text(['name'=>'phone','value'=>$smarty.post.phone,'icon'=>'fas fa-phone','desc'=>'Phone / Mobile Number. Example <strong>256752567374</strong>'])}

{FF::Box(['_BOX_'=>'open','title'=>'Company, Address, City, ZIP &amp; Country','icon'=>'fas fa-building','class'=>"blue"])}
{FF::Text(['name'=>'company','value'=>$smarty.post.company,'icon'=>'fas fa-building','desc'=>'Company. Example <strong>[[CNS]]</strong>'])}
{FF::Text(['name'=>'add1','value'=>$smarty.post.add1,'title'=>'Address #1','icon'=>'fas fa-map'])}
{FF::Text(['name'=>'add2','value'=>$smarty.post.add2,'title'=>'Address #2','icon'=>'fas fa-map'])}
{FF::Text(['name'=>'city','value'=>$smarty.post.city,'title'=>'City/Town','icon'=>'fas fa-map-signs'])}
{FF::Text(['name'=>'zip','value'=>$smarty.post.zip,'title'=>'Postal/ZIP Code','icon'=>'fas fa-location-arrow'])}
{FF::Select(['name'=>'country','value'=>$smarty.post.country,'table'=>'countries','column'=>'short_name','icon'=>'fas fa-flag','key'=>'iso2'])}
{FF::Box(['_BOX_'=>'close'])}

{if !empty($smarty.session.adminuser)}
{FF::Box(['_BOX_'=>'open','title'=>'[ADMINS] PPT','icon'=>'fas fa-user-cog','class'=>"red"])}
{FF::Select(['name'=>'ppt','title'=>'PPT','value'=>$smarty.post.ppt|default:'email','options'=>['email','mobile'],'icon'=>'fa fa-network'])}
{FF::Box(['_BOX_'=>'close'])}
{/if}

{FF::Form(['___'=>'close'])}
