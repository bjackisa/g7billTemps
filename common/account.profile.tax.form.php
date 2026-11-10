{* ROTARY — account · profile · tax · form *}
{include file='account.profile.header.php'}
{FF::Note(['value'=>"<p>In Practice, you can set up an unlimited number of TAX settings.</p>"])}
{FF::Form(['hidden'=>['dad'=>'account','jc'=>'profile','hs'=>'tax','a'=>'save','id'=>{$smarty.request.id|default:'0'}],'icon'=>'fas fa-flag','title'=>$LANG.TAX_SETTINGS])}

{FF::Text(['name'=>'tin','title'=>'TIN','value'=>$smarty.post.tin,'icon'=>'fas fa-user','required'=>1,'desc'=>'Tax Identification Number (TIN)'])}
{FF::Text(['name'=>'vat','title'=>'VAT','value'=>$smarty.post.vat,'icon'=>'fas fa-flag','required'=>1,'desc'=>'Value Added Tax dentification number (VAT)'])}
{FF::OO(['name'=>'status','value'=>$smarty.post.status|default:'on'])}

{FF::Form(['___'=>'close'])}
