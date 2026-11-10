{* ROTARY — bulk · payments · form *}
{Stats::Mini()}
{FF::Note(['value'=>"<p>Upload ONLY a CSV file of your users payments</p>"])}
{FF::Form(['hidden'=>['dad'=>'bulk','jc'=>'payments','a'=>'save','id'=>{$smarty.request.id|default:'0'},'G7BILL_SECURITY'=>'FALSE'],'icon'=>'fas fa-dollar-sign','title'=>$LANG.BULK_PAYMENTS])}
{FF::File(['name'=>'file','required'=>1,'title'=>'CSV File','desc'=>"Find and upload the respective payments CSV file"])}
{FF::Form(['___'=>'close'])}
