{* ROTARY — orders · claims · form *}
{FF::Note(['value'=>'<p>We will process the claims received according to your benefits and policy conditions. Payment is subject to the correct information being supplied and meeting submission cut-off times. There is a weekly payment cycle for members. However, payment into your bank account may only reflect after a few days, depending on which bank you use.</p>'])}
{FF::Form(['hidden'=>['dad'=>'orders','jc'=>'claims','a'=>'save','id'=>{$smarty.request.id|default:'0'},'G7BILL_SECURITY'=>'FALSE'],'icon'=>'fas fa-object-group','title'=>'Submit a claim'])}
{FF::Select(['name'=>'order','value'=>$smarty.request.order,'options'=>$orders,'icon'=>'flaticon-refresh','assoc'=>1,'required'=>1,'title'=>'Policy','other'=>'onchange="window.location = \'?dad=orders&jc=claims&a=form&order=\' + this.value;"'])}

{FF::Select(['name'=>'dependant','value'=>$smarty.post.dependant,'options'=>$dependants,'icon'=>'fas fa-users','assoc'=>1,'required'=>1,'desc'=>'Claim beneficiary and or dependant'])}
{FF::Date(['name'=>'start','value'=>$smarty.post.start,'title'=>'Start','required'=>1,'desc'=>'Event Start Date'])}
{FF::Date(['name'=>'end','value'=>$smarty.post.end,'title'=>'End','desc'=>'Event End Date'])}
{FF::Text(['name'=>'value','value'=>$smarty.post.value|default:'','icon'=>'fas fa-calendar-alt','title'=>'Value','desc'=>'Please enter the claim value and or amount','class'=>'money'])}
{FF::File(['name'=>'file[]','title'=>'Document','icon'=>'fas fa-file','desc'=>"Find and upload the respective claim supporting document."])}
{FF::Textarea(['name'=>'description','value'=>$smarty.post.description,'icon'=>'fas fa-key','desc'=>'Provide More Information About This Claim'])}

{FF::Box(['_BOX_'=>'open','title'=>'[Optional] Place, DOB &amp; Supporting Documents','icon'=>'fas fa-upload','class'=>'red'])}
{FF::Text(['name'=>'place','value'=>$smarty.post.place|default:'','icon'=>'fas fa-map','title'=>'Place','desc'=>'This could be a clinic or hospital name. Eg Mulago hospital'])}
{FF::Date(['name'=>'dod','value'=>$smarty.post.dod,'title'=>'DOD','desc'=>'Date of Death'])}
{FF::File(['name'=>'file[]','title'=>'Document#1','icon'=>'fas fa-file','desc'=>"Find and upload the respective document."])}
{FF::File(['name'=>'file[]','title'=>'Document#2','icon'=>'fas fa-file','desc'=>"Find and upload the respective document."])}
{FF::File(['name'=>'file[]','title'=>'Document#3','icon'=>'fas fa-file','desc'=>"Find and upload the respective document."])}
{FF::Box(['_BOX_'=>'close'])}
{Msgs::Warning('By submitting this claim, you certify that the above information submitted is to the best of your belief and knowledge both true and correct and further confirm that you have not withheld, concealed or misstated any information.')}
{FF::Form(['___'=>'close'])}
