{* ROTARY — Advanced button docs *}
{include file='info.api.header.php'}
<div class="rt-api-list">
<details class="rt-api is-grass" open>
  <summary class="rt-api-head"><span class="rt-api-ico"><i class="fas fa-wallet"></i></span><span class="rt-api-title"><strong>Advanced Button</strong><small>Use this code on your website to credit (add money) to your [[CNS]] GWallet.</small></span><span class="rt-api-chev" aria-hidden="true"></span></summary>
  <div class="rt-api-body">
          <div class="rt-api-section">
          <div class="rt-api-section">
            <div class="rt-codebox"><div class="rt-codebox-bar"><span class="rt-codebox-dots"><i></i><i></i><i></i></span><span class="rt-codebox-title">Typical HTML Example</span><button type="button" class="rt-codebox-copy ignore" onclick="var a=this.parentNode.parentNode.querySelector('textarea');a.focus();a.select();document.execCommand('copy');this.classList.add('is-done');this.innerHTML='&#10003; Copied';"><i class="far fa-copy"></i> Copy</button></div><textarea rows="14" class="form-control rt-codebox-area" spellcheck="false">
<form name="JPesa" method="post" action="{$securebase}/?dad=xp">
<input type="hidden" name="ownerid" value="{$newuid}"  />
<input type="hidden" name="description" value="Credit Note" />
<input type="hidden" name="return" value="{$securebase}" />
<input type="hidden" name="cancel" value="{$securebase}" />
<select name="cur">
  <option value="UGX">UGX</option>
  <option value="KES">KES</option>
  <option value="USD">USD</option>
</select>
<input name="amount" type="text" size="15" />
<input type="submit" name="pay" value="Make Payment" />
</form>
</textarea></div>
            <div class="table-responsive rt-api-table">
                  <table width="100%" class="table">
                    <thead>
                      <tr>
                        <th width="13%"> Parameters </th>
                        <th width="67%"> Description </th>
                        <th width="20%"> Example </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><code class="rt-param">ownerid</code></td>
                        <td> Your system ownerid/uid/username</td>
                        <td> abdi </td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">amount</code></td>
                        <td> The amount of money to be paid  and credited to your account</td>
                        <td> 1000 </td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">act_to</code></td>
                        <td><span class="rt-opt">optional</span> The account to credit </td>
                        <td> 323432</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">cur</code></td>
                        <td><span class="rt-opt">optional</span> The amount currency. Defaults to <strong>act_to</strong> currency.</td>
                        <td> UGX</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">description</code></td>
                        <td> <span class="rt-opt">optional</span> The description or purpose of payment </td>
                        <td> Credit Note </td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">return</code></td>
                        <td> <span class="rt-opt">optional</span> Return URL when the payment is complete </td>
                        <td> http://url.com/thankyou.php</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">cancel</code></td>
                        <td><span class="rt-opt">optional</span> Cancel URL, the page that shows up incase a buyer cancels to continue making payment.</td>
                        <td> http://url.com/cancelled.php</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">callback</code></td>
                        <td> <span class="rt-opt">optional</span> This URL will be automatically called once the payment is complete. When called, the return variables will be attached to it in the format <code class="rt-chip-code ">http://url.com/callback.php?tid=970B0B51E3333&memo=123&status=closed&cur=UGX&ref=543&amount=1000</code></td>
                        <td> http:/url.com/order.php</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">ref</code></td>
                        <td><span class="rt-opt">optional</span> This is your own defined variable. It will be passed back to your callback  or return URL when payment is complete </td>
                        <td>828 (or same as order id)</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">note</code></td>
                        <td><span class="rt-opt">optional</span> This is your own defined message / notification to the payee. It will be displayed on the payment page as informational.</td>
                        <td>Enter your pin to confirm payment</td>
                      </tr>
                      <tr class="rt-api-sec">
                        <td colspan="3">Return Variables</td>
                      </tr>
                      <tr class="rt-api-eg">
                        <td><strong>Typical Example</strong></td>
                        <td colspan="2">http://url.com/thankyou.php?status=approved&memo=101&ref=1234</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">status</code></td>
                        <td colspan="2">Status of the transaction
                          <ul>
                            <li><code class="rt-chip-code is-ok">approved</code> - Payment is complete<br /><br />
                            </li>
                            <li><code class="rt-chip-code is-warn">pending</code> -  Payment pending completion</li><br />
                            <li><code class="rt-chip-code is-err">error</code> - Payment failed, something went wrong</li>
                        </ul></td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">memo</code></td>
                        <td colspan="2">Memo or credit note number. A unique number that corresponds to the credit request.</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">ref</code></td>
                        <td colspan="2">Your own defined variable</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
          </div>
          </div>
        </div>
</details>
</div>
