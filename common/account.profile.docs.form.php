{* ROTARY — account · profile · docs · form *}
{include file='account.profile.header.php'}
{FF::Note(['value'=>'<p>In order to avoid limitations on your account, you will need to provide [[CN]] proof of identity by submitting necessary documents</p>'])}
{FF::Form(['hidden'=>['dad'=>'account','jc'=>'profile','hs'=>'docs','a'=>'save','id'=>{$smarty.request.id|default:'0'},'csrf'=>CSRF::Token(),'G7BILL_SECURITY'=>'FALSE'],'icon'=>'far fa-copy','title'=>'Document Management'])}

{FF::Select(['name'=>'subcat','title'=>'Type','value'=>$smarty.post.subcat,'required'=>1,'table'=>'files_sub_cats','column'=>'name','where'=>"`status`='on' and `_dad_`='users' and `cid`='{$config.id}'",'icon'=>'far fa-copy','other'=>'onchange="window.location = \'?dad=account&jc=profile&hs=docs&a=form&subcat=\' + this.value;"','desc'=>'Select the document type such as but not limited to passport, national id, driving license and so on'])}

{if empty($smarty.request.id)}{FF::File(['name'=>'document','title'=>'Document','required'=>1,'icon'=>'fas fa-user','desc'=>"Find and upload the respective document."])}{/if}

{if $smarty.post._subcat_.number eq 'on'}
{FF::Text(['name'=>'_number_','value'=>$smarty.post.number,'title'=>'Number','icon'=>'fas fa-user','desc'=>'Enter the document number such as passport number for passports, NIN for the national id and etc'])}
{/if}
{if $smarty.post._subcat_.expiry eq 'on'}{FF::Date(['name'=>'expiry','value'=>$smarty.post.expiry,'desc'=>'Enter the document expiry date'])}{/if}

{FF::Box(['_BOX_'=>'open','title'=>'Special Instructions','icon'=>'fas fa-edit'])}
{FF::Textarea(['name'=>'comments','value'=>$smarty.post.comments,'desc'=>'Document description &amp; or comments'])}
{FF::Box(['_BOX_'=>'close'])}

{Msgs::Warning('By submitting your document, you agree to our <a href="/terms/" target="_blank" rel="nofollow noopener noreferrer"><strong>Terms of Service</strong></a> and you acknowledge that the documents you are submitting are correct and that they are true')}
{FF::Form(['___'=>'close','save'=>'Save Document'])}
