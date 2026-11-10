{* ROTARY — account · profile · cc · form *}
{include file='account.profile.header.php'}
{FF::Note(['value'=>'<p>Flexible billing is one of the things that separate good hosting companies from mediocre ones, so we do our best to make your payment preferences acceptable on our site. Major Credit Cards, Visa, MasterCard and Maestro are accepted directly without the need of visiting Payment Processor website.</p>'])}
{FF::Form(['hidden'=>['dad'=>'account','jc'=>'profile','hs'=>'cc','a'=>'save','G7BILL_SECURITY'=>'FALSE'],'icon'=>'fas fa-credit-card','title'=>'Auto-pay with a credit card'])}
{Msgs::Warning('After you click <strong>Save & Charge Card</strong>, we\'ll charge the card an amount between $0.01 to $1.99 (USD) to make sure it\'s functional and yours.')}

{*FF::Text(['name'=>'name','title'=>'Name on Card','value'=>"{$users.fname} {$users.mname} {$users.lname}",'required'=>1,'icon'=>'fas fa-user','desc'=>'The name that appears on the card','other'=>"disabled='disabled'"])*}
{FF::Text(['name'=>'number','title'=>'Card Number','value'=>$smarty.post.number,'required'=>1,'icon'=>'fas fa-credit-card','desc'=>'The number that appears on the card','other'=>'maxlength="16"'])}
{FF::Text(['name'=>'expiry','title'=>'Expiry Date','value'=>$smarty.post.expiry,'required'=>1,'icon'=>'fas fa-calendar-alt','desc'=>'The expiry date that appears on the card. (MM/YYYY)','other'=>'data-mask="00/0000"'])}
{FF::Text(['name'=>'cvc','title'=>'CVC','value'=>$smarty.post.cvc,'required'=>1,'icon'=>'fas fa-calendar-alt','desc'=>'The last 3 digits behind your card','other'=>'data-mask="000"'])}

{Msgs::Warning('By saving a credit card, you agree to our <a href="/terms/" target="_blank" rel="nofollow noopener noreferrer"><strong>Terms of Service</strong></a>, and if you use it to pay for a subscription or plan, you authorize your credit card to be charged on a recurring basis until you cancel, which you can do at any time. You understand how your subscription works and how to cancel.')}

{FF::Form(['___'=>'close','save'=>'Save & Charge Card'])}
