{* ROTARY — orders · dependants · form *}
{FF::Note(['value'=>"<p>By naming a dependant , you ensure that  in the event that they pass, you will have some peace knowing that the last expense benefit will assist you give them a decent send off.</p>"])}
{FF::Form(['hidden'=>['dad'=>'orders','jc'=>'dependants','a'=>'save','id'=>{$smarty.request.id|default:'0'}],'icon'=>'fas fa-object-group','title'=>$LANG.DEPENDANTS])}
<div class="rt-fields">
  <div class="rt-field-grid">
    <div class="rt-field"> {FF::Select(['name'=>'order','title'=>$LANG.T000010,'value'=>$smarty.post.order,'required'=>1,'options'=>$orders,'other'=>'onchange="window.location = \'?dad=orders&jc=dependants&a=form&order=\' + this.value;"','desc'=>"Attach dependant to this {$LANG.T000010}","assoc"=>1])}
    </div>
    <div class="rt-field"> {FF::Select(['name'=>'relationship','value'=>$smarty.post.relationship|default:'','options'=>$relationships,'required'=>1,'desc'=>'Your relationship with the dependant'])}</div>
  </div>
  <div class="rt-field-grid">
    <div class="rt-field"> {FF::Text(['name'=>'fname','title'=>'First Name','value'=>$smarty.post.fname,'icon'=>'fas fa-user','required'=>1,'desc'=>'First Name Example <strong>Joseph, Abishag, Olivia, Simon</strong>'])} </div>
    <div class="rt-field"> {FF::Text(['name'=>'lname','title'=>'Last Name','value'=>$smarty.post.lname,'icon'=>'fas fa-user','required'=>1,'desc'=>'Last Name Example <strong>Abdi, Waibale, Mbabazi, Nabwire</strong>'])}  </div>
  </div>
  <div class="rt-field-grid">
    <div class="rt-field"> {FF::Text(['name'=>'email','value'=>$smarty.post.email,'icon'=>'fas fa-envelope','desc'=>'Email Address <strong>abishag@jpesa.com</strong>'])} </div>
    <div class="rt-field"> {FF::Text(['name'=>'phone','value'=>$smarty.post.phone,'icon'=>'fas fa-phone','desc'=>'Phone / Mobile Number. Example <strong>256752567374</strong>'])} </div>
  </div>
</div>
{FF::Form(['___'=>'close'])}
