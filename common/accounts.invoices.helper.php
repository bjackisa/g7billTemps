{* ROTARY — accounts · invoices · helper *}
<div class="rt-prose rt-helper-copy">
{if $smarty.request.dad eq 'accounts' and $smarty.request.jc eq 'invoices' and $smarty.request.a eq '' }
<div align="justify">
This area allows you to manage all the invoices that have been generated in your account.<br /><br />

You will be able to view details such as the invoice number, the amount due to be paid, the date when the invoice was generated, the status of the invoice among many more other details.<br  /><br  />

{Msgs::Info('An <b class="rt-strong rt-tone-royal">Invoice</b> is a commercial document that is issued by a seller to a buyer, relating to a sale transaction and indicates the products or services, their quantities and the agreed prices the seller had provided the buyer.')}

<div align="center"><b class="rt-strong rt-tone-cardinal">MORE INFORMATION</b></div><br />
View more details such as the invoice items, the transaction ID, the amount paid, the seed which links your invoices with other documents as well as other useful buttons by clicking on <strong>More...</strong> next to the invoice number.<br />
The buttons are explained below:<br /><br />

<button class="btn-xs tooltips btn-success none"><i class="fas fa-share"></i> Pay Invoice </button> will prompt you if you would like to pay off the invoice. Upon your confirmation, you will be redirected to the payment page t complete the payment.<br  /><br  />

<button class="btn-xs tooltips btn-info none"><i class="fas fa-envelope"></i> Resend </button> will prompt you if you would like to email the invoice. If you agree, the invoice will be emailed.<br  /><br  />

<strong>NOTE</strong>: You can also be able to open and view the respective invoice by clicking on the invoice number itself which will be opened in a new tab.<br  /><br  />

{Msgs::Warning('For more information, please email us on <a rel="mailto:[[CE]]">[[CE]]</a> or call us on <b>[[CP]]</b>')}

{else}

This area presents you with details about your payment information. <br /><br />
The information includes order details, billing information, order items, payment options, terms and order placement among others which are explained in detail below.<br /><br />

<strong>Order Details:</strong> This information is specific to the order such as order date, sub total, tax due, discounts, total due to mention but a few.<br /><br />
<strong>Billing Information:</strong> This information is about the person who will be billed or who will be expected to make the payment.<br /><br />
<strong>Order Items:</strong> This shows the items that are on the order for which payment is to be done.<br /><br />
<strong>Payment Options:</strong> This shows the payment options available which can be used to process the order.<br /><br />
<ul>
<li><strong>Bank Transfer</strong> means the payment is to be done through the Bank by EFT or Wire Transfer</li>.<br />
<li><strong>GWallet</strong> which means the funds will be deducted off the client's wallet.</li><br />
</ul>
{Msgs::Info('The <strong>GWallet</strong> option will only be able to show if you have funds on your account otherwise it is hidden by default.')}
<strong>NOTE</strong>: Should you have funds on your account but you are unable to see the GWallet option among the payment options, please contact us through the contacts below.<br  /><br  />

<strong>Terms and Order Placement</strong> This is where you agree to our terms as well as proceed to place your order.<br /><br />

{Msgs::Warning('For more information, please email us on <a rel="mailto:[[CE]]">[[CE]]</a> or call us on <b>[[CP]]</b>')}
{/if}
</div>
</div>
