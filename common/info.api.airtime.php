{* ROTARY — API endpoint doc card: airtime *}
<details class="rt-api is-cardinal">
  <summary class="rt-api-head"><span class="rt-api-ico"><i class="fa fa-cart-plus"></i></span><span class="rt-api-title"><strong>Buy Airtime</strong><small>Use this command to buy airtime using your GWallet credit</small></span><span class="rt-api-chev" aria-hidden="true"></span></summary>
  <div class="rt-api-body">
          <div class="rt-api-section">
            <div class="rt-api-section">
            <div class="rt-codebox"><div class="rt-codebox-bar"><span class="rt-codebox-dots"><i></i><i></i><i></i></span><span class="rt-codebox-title">PHP Post Example</span><button type="button" class="rt-codebox-copy ignore" onclick="var a=this.parentNode.parentNode.querySelector('textarea');a.focus();a.select();document.execCommand('copy');this.classList.add('is-done');this.innerHTML='&#10003; Copied';"><i class="far fa-copy"></i> Copy</button></div><textarea rows="14" class="form-control rt-codebox-area" spellcheck="false"><?php

$DATA   =   '<?xml version="1.0" encoding="ISO-8859-1"?>
                     <g7bill>
                       <_key_>{$Key|default:"2AFFFBB594XXXXXXXXXX33DD3B6EEBB77"}</_key_>
                       <cmd>stores</cmd>
                       <jc>orders</jc>
                       <package>
                           <code>airtime</code>
                           <amount>500</amount>
                       </package>
                       <mobile>256752567374</mobile>
                       <callback>http://url.com/order.php</callback>
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
                        <td><code class="rt-param">mobile</code></td>
                        <td> The MSISDN Number to receive the airtime </td>
                        <td> 256752567374 </td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">amount</code></td>
                        <td> The amount of airtime purchasing</td>
                        <td> 1000 </td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">act_from</code></td>
                        <td><span class="rt-opt">optional</span> The account to debit from </td>
                        <td> 323432</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">callback</code></td>
                        <td><span class="rt-opt">optional</span> This URL will be automatically called once the payment is complete. When called, the return variables will be attached to it in the format <code class="rt-chip-code ">http://url.com/order.php?tid=BCEA96C43987D3&status=approved&amp;memo=101&amp;ref=1234</code></td>
                        <td> http:/url.com/order.php</td>
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
                        <td colspan="2">Memo or invoice number. A unique number that corresponds to the purchase request.</td>
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
