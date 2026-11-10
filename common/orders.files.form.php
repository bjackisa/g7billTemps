{* ROTARY — orders · files · form *}
{Stats::Mini()}
{FF::Note(['value'=>"<p>To ensure that we have everything we need to process your order without delay, please upload the necessary documents below. </p>"])}
{FF::Form(['hidden'=>['dad'=>'orders','jc'=>'files','a'=>'save','id'=>{$smarty.request.id|default:'0'},'G7BILL_SECURITY'=>'FALSE'],'icon'=>'fas fa-upload','title'=>$LANG.ORDERS_DOCS_DESC])}
{FF::Select(['name'=>'subcat','value'=>$smarty.post.subcat|default:'','title'=>'Category','required'=>1,'options'=>$subcats,'assoc'=>1,'desc'=>'Choose file category'])}
{FF::Select(['name'=>'_id_','value'=>$smarty.post._id_|default:'','title'=>'Order','required'=>1,'options'=>$orders,'assoc'=>1,'desc'=>'Attach to order'])}
{FF::File(['name'=>'file','required'=>1,'title'=>'Document','desc'=>"Find and upload the respective claim document or file"])}
{FF::Textarea(['name'=>'description','value'=>$smarty.post.description,'desc'=>'File and or document description'])}
{FF::Form(['___'=>'close'])}
