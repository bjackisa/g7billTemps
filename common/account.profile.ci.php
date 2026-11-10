{* ROTARY — account · profile · ci *}
{include file='account.profile.header.php'}
{FF::Note(['value'=>'<p>Here\'s where you can view and update personal information, such as but not limited to mailing address, email address, phone number, or billing currency. Need more help on updating your profile? Please contact us through the <a href="?dad=info&jc=support" target="_blank" rel="nofollow noopener noreferrer">help desk.</a></p>'])}

{FF::Form(['hidden'=>['dad'=>'account','jc'=>'profile','hs'=>'ci','a'=>'save','id'=>{$smarty.post.id|default:'0'},'G7BILL_SECURITY'=>'FALSE'],'icon'=>'fas fa-edit','title'=>'Managing Contact Information'])}

{if E::V(['name'=>'user:email:verification','group'=>'user']) and !$smarty.post.verified_email}{Msgs::Error('<strong>Your email address requires verification.</strong> <button type="button" class="btn btn-danger ignore" onclick="location.href=\'?dad=account&jc=profile&hs=ci&a=aemail\';"><i class="fas fa-envelope"></i> Resend Verification Email</button>')}{/if}

{FF::Box(['_BOX_'=>'open','title'=>'Marital, PEP &amp; Crime Conviction Status, Family Size','icon'=>'fas fa-low-vision','class'=>"green"])}
{FF::Select(['name'=>'marital_status','value'=>$smarty.post.marital_status|default:'','options'=>['married','widowed','separated','divorced','single','other'],'icon'=>'fas fa-ring'])}
{FF::Text(['name'=>'family_size','value'=>$smarty.post.family_size,'icon'=>'fas fa-child'])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Text(['name'=>'email','title'=>'Email Address','value'=>$smarty.post.email,'required'=>1,'icon'=>'fas fa-envelope','desc'=>'Email Address Eg jchrist@jolis.net'])}
{FF::Text(['name'=>'phone','value'=>$smarty.post.phone,'icon'=>'fas fa-phone','title'=>'Phone Number','required'=>"{if !empty($smarty.session.adminuser)}0{else}1{/if}",'desc'=>'Phone Number (International Format) Eg +256.752567374'])}
{FF::Date(['name'=>'dob','value'=>$smarty.post.dob,'title'=>'Date of Birth','required'=>"{if !empty($smarty.session.adminuser)}0{else}1{/if}",'desc'=>'Please enter your date of birth'])}

{FF::File(['name'=>'avatar','title'=>"<div align='right'><img src='{$user.avatar}' class='img-responsive img-circle' alt='{$user.name}' {U::iSize(['i'=>$user.avatar,'t'=>60])}></div>",'icon'=>'fas fa-user-circle','desc'=>"Find and upload your profile picture",'clean'=>'false'])}

{FF::Box(['_BOX_'=>'open','title'=>'Name, Organization, Country &amp; State','icon'=>'fas fa-user','class'=>'red','status'=>"closed"])}
{FF::Text(['name'=>'fname','value'=>$smarty.post.fname,'title'=>'First Name','icon'=>'fas fa-user','other'=>"disabled='disabled'"])}
{FF::Text(['name'=>'mname','value'=>$smarty.post.mname,'title'=>'Middle Name','icon'=>'fas fa-user','other'=>"disabled='disabled'"])}
{FF::Text(['name'=>'lname','value'=>$smarty.post.lname,'title'=>'Last Name','icon'=>'fas fa-user','other'=>"disabled='disabled'"])}
{FF::Text(['name'=>'org','value'=>$smarty.post.org,'title'=>'Organization','icon'=>'fas fa-briefcase','other'=>"{if !empty($smarty.post.org)}disabled='disabled'{/if}"])}
{FF::Text(['name'=>'country','value'=>$smarty.post.country,'title'=>'Country','icon'=>'fas fa-flag','other'=>"disabled='disabled'"])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Box(['_BOX_'=>'open','title'=>'Address, City &amp; ZIP','icon'=>'fas fa-map','class'=>'yellow','status'=>"closed"])}
{FF::Text(['name'=>'add1','value'=>$smarty.post.add1,'title'=>'Address #1','icon'=>'fas fa-map'])}
{FF::Text(['name'=>'add2','value'=>$smarty.post.add2,'title'=>'Address #2','icon'=>'fas fa-map'])}
{FF::Text(['name'=>'city','value'=>$smarty.post.city,'title'=>'City/Town','icon'=>'fas fa-map-signs'])}
{FF::Text(['name'=>'zip','value'=>$smarty.post.zip,'title'=>'Postal/ZIP Code','icon'=>'fas fa-location-arrow'])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Box(['_BOX_'=>'open','title'=>'Billing Currency, Income &amp; Source of Income','icon'=>'fas fa-money-bill-wave','status'=>"closed"])}
{FF::Select(['name'=>'currency','value'=>$smarty.post.currency|default:$config.default_currency,'required'=>1,'table'=>'currencies','column'=>'code','key'=>'code','where'=>"`status`='1'",'icon'=>'fas fa-flag','desc'=>'Choose your billing currency'])}
{FF::Select(['name'=>'designation','value'=>$smarty.post.designation|default:'none','options'=>['Salary','Business','Foreign Entity','Other'],'icon'=>'fas fa-money-check-alt','desc'=>'Source of Income'])}
{FF::Text(['name'=>'income_range','value'=>$smarty.post.income_range,'title'=>'Average Annual Income','icon'=>'fas fa-money-check-alt'])}
{FF::Box(['_BOX_'=>'close'])}

{if E::V(['name'=>'user:gwallet:crypto','group'=>'user'])}
{FF::Box(['_BOX_'=>'open','title'=>'Crypto Settings','icon'=>'fas fa-bold','status'=>"closed",'class'=>'blue'])}
{FF::Select(['name'=>'crypto_wallet','value'=>$smarty.post.crypto_wallet|default:'none','options'=>['Tron'],'icon'=>'fas fa-bold'])}
{FF::Text(['name'=>'crypto_address','value'=>$smarty.post.crypto_address,'icon'=>'fas fa-bold'])}
{FF::Box(['_BOX_'=>'close'])}
{/if}

{FF::Form(['___'=>'close'])}

{* lifecycle_status | aml_category *}
