{* ROTARY — accounts · invoices · form *}
{assign var='_state_' value="{if $country=='UG'}open{else}closed{/if}"}
{assign var='state' value="{if $country=='UG'}closed{else}open{/if}"}

{FF::Note(['value'=>'<p>Here in you can be able to add Invoices</p>'])}

{FF::Form(['hidden'=>['dad'=>'accounts','jc'=>'invoices','a'=>'save','G7BILL_SECURITY'=>'FALSE'],'icon'=>'fas fa-money-bill-wave','title'=>'Add your own Invoices'])}
{Msgs::Warning('After you click <strong>Save Invoice</strong>, your invoice will go into a state called <strong>pending</strong> until it is approved before the funds can be paid.')}

{FF::Text(['name'=>'amount_total','value'=>$smarty.post.amount_total,'icon'=>'fas fa-dollar-sign','title'=>'Amount','desc'=>'Enter amount','class'=>'money'])}
{FF::Textarea(['name'=>'comments','value'=>$smarty.post.comments,'desc'=>'Credit Note description &amp; or comments','type'=>'plain'])}

{FF::Box(['_BOX_'=>'open','title'=>'Mobile Money','icon'=>'fas fa-money-bill-wave','class'=>'green','status'=>"$_state_"])}
{FF::Text(['name'=>'_pp_id_','title'=>'Number','value'=>$smarty.post.pp_id,'icon'=>'fas fa-university','desc'=>'Enter mobile number'])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Box(['_BOX_'=>'open','title'=>'Credit/Debit Card','icon'=>'fas fa-credit-card','status'=>"$state"])}
{FF::Select(['name'=>'name','value'=>$smarty.post.name,'table'=>'cc','column'=>'name','where'=>"`status`='on'",'icon'=>'fas fa-university','desc'=>'Choose CARD'])}
{*FF::Text(['name'=>'name','title'=>'Name on Card','value'=>"{$users.fname} {$users.mname} {$users.lname}",'icon'=>'fas fa-user','desc'=>'The name that appears on the card','other'=>"disabled='disabled'"])*}
{FF::Text(['name'=>'expiry','title'=>'Expiry Date','value'=>$smarty.post.expiry,'icon'=>'fas fa-calendar-alt','desc'=>'The expiry date that appears on the card. (MM/YYYY)','other'=>'data-mask="00/0000"'])}
{FF::Text(['name'=>'cvc','title'=>'CVC','value'=>$smarty.post.cvc,'icon'=>'fas fa-calendar-alt','desc'=>'The last 3 digits behind your card','other'=>'data-mask="000"'])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Box(['_BOX_'=>'open','title'=>'Bank','icon'=>'fas fa-university','status'=>"closed",'class'=>'$state'])}
{FF::Text(['name'=>'number','title'=>'Bank','value'=>$smarty.post.act_to,'icon'=>'fas fa-university','desc'=>'Enter your bank account account to be credited'])}
{FF::Box(['_BOX_'=>'close'])}

{Msgs::Warning('By saving the Invoice, you agree to our <a href="/terms/" target="_blank" rel="nofollow noopener noreferrer"><strong>Terms of Service</strong></a>, and if you use it make deposits, you authorize your Mobile Number to be charged on a recurring basis until you cancel, which you can do at any time. You understand how your deposits work and how to cancel.')}
{FF::Form(['___'=>'close','save'=>'Save Invoice'])}
