{* ROTARY — accounts · dnotes · form *}
{assign var='_state_' value="{if $country=='UG'}open{else}closed{/if}"}
{assign var='state' value="{if $country=='UG'}closed{else}open{/if}"}

{FF::Note(['value'=>'<p>Here in you can be able to add Debit Notes</p>'])}

{FF::Form(['hidden'=>['dad'=>'accounts','jc'=>'dnotes','a'=>'save','G7BILL_SECURITY'=>'FALSE'],'icon'=>'fas fa-money-bill-wave','title'=>'Add your own Debit Notes','csrf'=>{CSRF::Token()}])}

{FF::Text(['name'=>'amount_total','value'=>$smarty.post.amount_total,'icon'=>'fas fa-dollar-sign','title'=>'Amount','desc'=>'Enter amount to credit account','required'=>1,'id'=>'money'])}

{assign var='i' value=1}
{section name=results loop=$gateways}
{assign var='R' value=V::D($gateways[results])}

{if $R.config1 eq 'mm'}
{FF::Text(['name'=>'mobile','value'=>$smarty.post.mobile,'icon'=>'fas fa-phone','title'=>'Mobile','desc'=>'Enter mobile number to debit','id'=>'number'])}
{/if}
{if $R.config1 eq 'cc'}
{FF::Box(['_BOX_'=>'open','title'=>$R.description,'icon'=>'fas fa-money-bill-wave','class'=>'green'])}
{FF::Select(['name'=>'_number_','value'=>$smarty.post.number,'title'=>'Choose Card','options'=>$ucc,'icon'=>'fas fa-credit-card','desc'=>'Select your Credit Card','assoc'=>1])}
{FF::Text(['name'=>'number','title'=>'Card Number','value'=>$smarty.post.number,'icon'=>'fas fa-credit-card','desc'=>'The number that appears on the card','other'=>'maxlength="16"'])}
{FF::Text(['name'=>'expiry','title'=>'Expiry Date','value'=>$smarty.post.expiry,'icon'=>'fas fa-calendar-alt','desc'=>'The expiry date that appears on the card. (MM/YYYY)','other'=>'data-mask="00/0000"'])}
{FF::Text(['name'=>'cvc','title'=>'CVC','value'=>$smarty.post.cvc,'icon'=>'fas fa-calendar-alt','desc'=>'The last 3 digits behind your card','other'=>'data-mask="000"'])}
{FF::Box(['_BOX_'=>'close'])}
{/if}

{assign var='i' value=$i+1} {/section}

{FF::Box(['_BOX_'=>'open','title'=>'Special Instructions','icon'=>'fas fa-money-bill-wave'])}
{FF::Textarea(['name'=>'comments','value'=>$smarty.post.comments,'desc'=>'Credit Note description &amp; or comments','type'=>'plain'])}
{FF::Box(['_BOX_'=>'close'])}

{Msgs::Warning('By saving the Debit Note, you agree to our <a href="/terms/" target="_blank" rel="nofollow noopener noreferrer"><strong>Terms of Service</strong></a> and that you authorise us to charge you a transaction fee on your withdraw. You understand how your deposits work and how to cancel.')}
{FF::Form(['___'=>'close','save'=>'Save Debit Note'])}
