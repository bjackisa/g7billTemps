{* ROTARY — account · profile · cc · helper *}
<div class="rt-prose rt-helper-copy">
{assign var='visa' value={U::File(['file'=>"images/visa.png",'a'=>'path'])}}
{assign var='master' value={U::File(['file'=>"images/master.png",'a'=>'path'])}}
{assign var='amex' value={U::File(['file'=>"images/amex.png",'a'=>'path'])}}
<p><strong>Pay With Credit/Debit Card</strong></p>
<p><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="row"><img src="{$visa}" alt="Visa Card" {U::iSize(['i'=>$visa,'t'=>90])} /></th>
    <td><img src="{$master}" alt="Master Card" {U::iSize(['i'=>$master,'t'=>90])} /></td>
    <td><img src="{$amex}" alt="American Express Card" {U::iSize(['i'=>$amex,'t'=>90])} /></td>
  </tr>
</table></p>
<p>Debit cards allow bank customers to spend money that they have by drawing on funds that they deposited with the card provider. Credit cards allow consumers to borrow money from the card issuer up to a certain limit in order to purchase items or withdraw cash.</p>
<P>[[CN]] is successfully accepting credit/debit cards and you can use credit/debit cards for payment of Domains, Shared Hosting, Reseller Hosting, VPS Hosting, Dedicated Servers & SSL.</p>
<p>The most recent credit card used to pay for the account is automatically saved as the default payment method for any future purchase or renewal.</p>
<p>From here, you can add or remove a credit card on file for your account. Adding a Credit Card on file will take place immediately. If you find you need further assistance please feel free to <a href="?dad=info&jc=support" target="_blank" rel="nofollow noopener noreferrer">ask a question on our support center help desk</a>.</p>
</div>
