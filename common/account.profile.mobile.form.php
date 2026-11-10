{* ROTARY — account · profile · mobile · form *}
{include file='account.profile.header.php'}
{FF::Note(['value'=>'<p>We recommend adding at least one mobile phone number to your account as a way to establish two-step verification for your account. When you add your first mobile number, we\'ll automatically enable it for this purpose.</p>'])}
{FF::Form(['hidden'=>['dad'=>'account','jc'=>'profile','hs'=>'mobile','a'=>'save','G7BILL_SECURITY'=>'FALSE','csrf'=>{CSRF::Token()}],'icon'=>'fas fa-mobile-alt','title'=>'Withdraw or deposit by mobile money'])}
{Msgs::Warning('After you click <strong>Save & Send PIN</strong>, we\'ll send you a 4 digit PIN to make sure this Mobile Number is functional and yours.')}

{FF::Text(['name'=>'number','title'=>'Mobile Number','value'=>$smarty.post.number,'required'=>1,'icon'=>'fas fa-mobile-alt','desc'=>'The mobile number that appears with your registered names','other'=>'maxlength="12"'])}

{FF::Box(['_BOX_'=>'open','title'=>'Special Instructions','icon'=>'fas fa-money-bill-wave','status'=>"closed"])}
{FF::Textarea(['name'=>'comments','value'=>$smarty.post.comments,'desc'=>'Mobile number description &amp; or comments'])}
{FF::Box(['_BOX_'=>'close'])}

{Msgs::Warning('By saving a Mobile Number, you agree to our <a href="/terms/" target="_blank" rel="nofollow noopener noreferrer"><strong>Terms of Service</strong></a>, and if you use it make withdraws or deposits, you authorize your Mobile Number to be charged on a recurring basis until you cancel, which you can do at any time. You understand how your withdraws and deposits work and how to cancel.')}
{FF::Form(['___'=>'close','save'=>'Save & Send PIN'])}
