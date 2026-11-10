{* ROTARY — orders · beneficiaries · form *}
{FF::Note(['value'=>"
<p>By naming your beneficiaries, you ensure that your money goes where you intend for it to go. That could be to a relative who really needs the financial assistance, a charity that's close to your heart or whomever you want the money directed to. Without clear directions as to your wishes, executors or the state will follow only what the law says in distributing your assets.</p>
"])}
{FF::Form(['hidden'=>['dad'=>'orders','jc'=>'beneficiaries','a'=>'save','id'=>{$smarty.request.id|default:'0'}],'icon'=>'fas fa-object-group','title'=>$LANG.BENEFICIARIES])}

{*{FF::Box(['_BOX_'=>'open','title'=>'Status, Phone &amp; Mobile','icon'=>'fas fa-low-vision','class'=>"green"])}{FF::Box(['_BOX_'=>'close'])}*}
<div class="rt-fields">
  <div class="rt-field-grid">
    {*<div class="rt-field"> {FF::Select(['name'=>'relationship','value'=>$smarty.post.relationship|default:'father','options'=>$_RELATIONSHIPS_,'required'=>1,'desc'=>'Your relationship with the beneficiary'])} </div>*}
    <div class="rt-field"> {FF::Select(['name'=>'order','value'=>$smarty.post.order,'options'=>$orders,'desc'=>"Assign beneficiary to this {$LANG.T000010}",'assoc'=>1,'required'=>1,'title'=>$LANG.T000010])} </div>
  </div>
  <div class="rt-field-grid">
    <div class="rt-field"> {FF::Text(['name'=>'fname','title'=>'First Name','value'=>$smarty.post.fname,'icon'=>'fas fa-user','required'=>1,'desc'=>'First Name Example <strong>Joseph, Abishag, Olivia, Simon</strong>'])} </div>
    <div class="rt-field"> {FF::Text(['name'=>'lname','title'=>'Last Name','value'=>$smarty.post.lname,'icon'=>'fas fa-user','required'=>1,'desc'=>'Last Name Example <strong>Abdi, Waibale, Mbabazi, Nabwire</strong>'])}  </div>
  </div>
  <div class="rt-field-grid">
    <div class="rt-field"> {FF::Text(['name'=>'email','value'=>$smarty.post.email,'icon'=>'fas fa-envelope','desc'=>'Email Address <strong>info@jpesa.com</strong>'])} </div>
    <div class="rt-field"> {FF::Text(['name'=>'phone','value'=>$smarty.post.phone,'icon'=>'fas fa-phone','desc'=>'Phone / Mobile Number. Example <strong>256752567374</strong>'])} </div>
  </div>
</div>

{FF::Form(['___'=>'close'])}
