{* ROTARY — API endpoint doc card: transfer *}
<details class="rt-api is-cardinal">
  <summary class="rt-api-head"><span class="rt-api-ico"><i class="fas fa-wallet"></i></span><span class="rt-api-title"><strong>Internal Transfers</strong><small>Use this command to transfer funds from own to another [[CNS]] GWallet. One other way to put it is internal funds transfer between [[CNS]] accounts</small></span><span class="rt-api-chev" aria-hidden="true"></span></summary>
  <div class="rt-api-body">
          <div class="rt-api-section">
            <div class="rt-api-section">
            <div class="rt-codebox"><div class="rt-codebox-bar"><span class="rt-codebox-dots"><i></i><i></i><i></i></span><span class="rt-codebox-title">PHP Post Example</span><button type="button" class="rt-codebox-copy ignore" onclick="var a=this.parentNode.parentNode.querySelector('textarea');a.focus();a.select();document.execCommand('copy');this.classList.add('is-done');this.innerHTML='&#10003; Copied';"><i class="far fa-copy"></i> Copy</button></div><textarea rows="14" class="form-control rt-codebox-area" spellcheck="false"><?php
$DATA   =   '<?xml version="1.0" encoding="ISO-8859-1"?>
                     <g7bill>
                       <_key_>{$Key|default:"2AFFFBB594XXXXXXXXXX33DD3B6EEBB77"}</_key_>
                       <cmd>account</cmd>
                       <action>debit</action>
                       <pt>gwallet</pt>
                       <business>abdi@jolis.net</business>
                       <cur>UGX</cur>
					   <amount>500</amount>
                       <callback>http://url.com/order.php</callback>
					   <tx>12345</tx>
					   <description>Invoice# 12345</description>
                     </g7bill>';
$ch 	= 	curl_init();		
curl_setopt($ch, CURLOPT_URL,"{$securebase}/api/");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$DATA);
curl_setopt($ch, CURLOPT_HTTPHEADER,array("Content-Type: text/xml")); 
curl_setopt($ch, CURLOPT_HEADER,false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,0);
curl_setopt($ch, CURLOPT_TIMEOUT,400);
$return 	= 	curl_exec($ch);		
curl_close($ch);
print_r(json_decode($return,true));
?></textarea></div>
            <div class="table-responsive rt-api-table">
                  <table class="table rt-table rt-api-params">
                    <thead>
                      <tr>
                        <th> Parameters </th>
                        <th> Description </th>
                        <th> Example </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><code class="rt-param">_key_</code></td>
                        <td> Your API Key </td>
                        <td> XYZ123QWE </td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">business</code></td>
                        <td>The beneficiary email address</td>
                        <td>abdi@jolis.net</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">amount</code></td>
                        <td>The amount of money to be transfered away from your GWallet to the Recepient</td>
                        <td>1000</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">cur</code></td>
                        <td><strong>The currency of the amount to be transfered</strong></td>
                        <td>UGX</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">callback</code></td>
                        <td><span class="rt-opt">optional</span> This URL will be automatically called once the payment is complete. When called, the return variables will be attached to it in the format <code class="rt-chip-code ">http://url.com/order.php?tid=BCEA96C43987D3&status=approved&amp;memo=101&amp;ref=1234</code></td>
                        <td> http:/url.com/order.php</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">tx</code></td>
                        <td><span class="rt-opt">optional</span> This is your own defined transaction id. It will be passed back to your callback URL or return URL. When defined, we will also use it to check against API based duplicate transactions</b></td>
                        <td>12345</td>
                      </tr>
                      <tr class="rt-api-sec">
                        <td colspan="3">Return Variables</td>
                      </tr>
                      <tr class="rt-api-eg">
                        <td colspan="3"><strong>Typical Example</strong></td>
                      </tr>
                      <tr class="rt-api-eg">
                        <td colspan="3">{literal}{"tid":"BCEA96C43987D303705DF48C1A058067","memo":"351","msg":"[[S000103]] MM transaction initiated","_api_log_":"1596587","api_status":"success"}{/literal}</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">APIStatus</code></td>
                        <td colspan="2"><p>Status of the transaction query.</p>
                          <ul>
                            <li><strong>SUCCESS</strong> - Transaction is successful</li>
                            <li><strong>ERROR</strong> - Transaction failed and or something went wrong</li>
                        </ul></td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">tid</code></td>
                        <td colspan="2">Transaction ID. A unique number that corresponds to the transaction request. Use this to monitor the status of Memo</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">memo</code></td>
                        <td colspan="2">Memo or debit note number. A unique number that corresponds to the credit request.</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">message</code></td>
                        <td colspan="2">A textual response. Will also have the reason if transaction fails.</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
          </div>
          </div>
        </div>
</details>
