{* ROTARY — accounts · ppdocs · form *}
{FF::Note(['value'=>"<p>{$LANG.PASSWORD_PROTECTED_DOCUMENTS_DESC}</p>"])}
{FF::Form(['hidden'=>['dad'=>'accounts','jc'=>'ppdocs','a'=>'save','id'=>{$smarty.request.id|default:'0'},'G7BILL_SECURITY'=>'FALSE'],'icon'=>'fas fa-object-group','title'=>'Managing a Password Protected Document'])}
{FF::Text(['name'=>'file','title'=>'Document Name','value'=>$smarty.post.file,'required'=>1,'icon'=>'fas fa-user','desc'=>'Document Name or Document Path Eg admin/file.pdf','other'=>"{if $smarty.request.id}disabled='disabled'{/if}"])}
{FF::Text(['name'=>'username','title'=>'Username','value'=>$smarty.post.username,'required'=>1,'icon'=>'fas fa-user','desc'=>'Username to access the document','other'=>"{if $smarty.request.id}disabled='disabled'{/if}"])}
{FF::Text(['name'=>'password','required'=>"{if empty($smarty.request.id)}1{else}0{/if}",'id'=>'password_strength','icon'=>'fas fa-key','desc'=>"{if empty($smarty.request.id)}Password to access the folder Eg Jesus@1900{else}Double Click to Change Password{/if}",'other'=>"{if !empty($smarty.request.id)}readonly='true' ondblclick=\"this.readOnly='';\"{/if}"])}
{FF::Form(['___'=>'close'])}

