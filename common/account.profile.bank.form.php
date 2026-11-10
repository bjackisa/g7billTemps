{* ROTARY — account · profile · bank · form *}
{include file='account.profile.header.php'}
{FF::Note(['value'=>'<p>In order to withdraw or deposit money on your GWallet by bank payment method, you\'ll simply need to link a bank account to your account.</p>'])}
{FF::Form(['hidden'=>['dad'=>'account','jc'=>'profile','hs'=>'bank','a'=>'save','status'=>'approved'],'icon'=>'fas fa-university','title'=>'Withdraw or deposit by bank'])}
{Msgs::Warning('For security reasons, the bank account name will be preset to your [[CN]] profile name')}

{FF::Text(['name'=>'number','title'=>'A/C Number','value'=>$smarty.post.number,'required'=>1,'icon'=>'fas fa-university','desc'=>'The bank account number that appears on your bank statement','other'=>'maxlength="16"'])}
{FF::Select(['name'=>'bank','value'=>$smarty.post.bank,'options'=>$banks,'required'=>1,'icon'=>'fas fa-university','desc'=>'Bank Name','assoc'=>1])}
{FF::Text(['name'=>'branch','title'=>'Bank Branch','value'=>$smarty.post.branch|default:'Main Branch','icon'=>'fas fa-university','desc'=>'The bank branch that holds your account number as it appears on your bank statement'])}

{FF::Box(['_BOX_'=>'open','title'=>'Currency, IBAN &amp; Special Instructions','icon'=>'fas fa-money-bill-wave','status'=>"closed"])}
{FF::Select(['name'=>'currency','value'=>$smarty.post.currency|default:$config.default_currency,'required'=>1,'table'=>'currencies','column'=>'code','key'=>'code','where'=>"`status`='1'",'icon'=>'fas fa-flag','desc'=>'Choose your bank currency'])}
{FF::Text(['name'=>'iban','title'=>'IBAN','value'=>$smarty.post.iban,'icon'=>'fas fa-university','desc'=>'International Bank Account Number (IBAN)'])}
{FF::Textarea(['name'=>'comments','value'=>$smarty.post.comments,'desc'=>'Bank account description &amp; or comments'])}
{FF::Box(['_BOX_'=>'close'])}

{Msgs::Warning('By saving a bank account, you agree to our <a href="/terms/" target="_blank" rel="nofollow noopener noreferrer"><strong>Terms of Service</strong></a>, and if you use it to withdraw funds from your GWallet, you authorize us to send funds there until you cancel, which you can do at any time. You understand how withdraws work and how to cancel.')}
{FF::Form(['___'=>'close','save'=>'Save Bank Account'])}
