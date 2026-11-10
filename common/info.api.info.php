{* ROTARY — API endpoint doc card: info *}
<details class="rt-api is-royal">
  <summary class="rt-api-head"><span class="rt-api-ico"><i class="fa fa-list"></i></span><span class="rt-api-title"><strong>Transaction Information</strong><small>Use this command to get information about a particular transaction</small></span><span class="rt-api-chev" aria-hidden="true"></span></summary>
  <div class="rt-api-body">
          <div class="rt-api-section">
            <div class="rt-api-section">
            <div class="rt-codebox"><div class="rt-codebox-bar"><span class="rt-codebox-dots"><i></i><i></i><i></i></span><span class="rt-codebox-title">PHP Post Example</span><button type="button" class="rt-codebox-copy ignore" onclick="var a=this.parentNode.parentNode.querySelector('textarea');a.focus();a.select();document.execCommand('copy');this.classList.add('is-done');this.innerHTML='&#10003; Copied';"><i class="far fa-copy"></i> Copy</button></div><textarea rows="14" class="form-control rt-codebox-area" spellcheck="false"><?php
$DATA   =   '<?xml version="1.0" encoding="ISO-8859-1"?>
                     <g7bill>
                       <_key_>{$Key|default:"2AFFFBB594XXXXXXXXXX33DD3B6EEBB77"}</_key_>
                       <cmd>account</cmd>
                       <action>info</action>
                       <tid>37721E0AF986000000C15F03AD7A767</tid>
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
                        <td><code class="rt-param">tid</code></td>
                        <td> The Transaction ID </td>
                        <td> 37721E0AF986000000C15F03AD7A767 </td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">pid</code></td>
                        <td> (Optional) The PP Transaction ID </td>
                        <td> 1234567890 </td>
                      </tr>
                      <tr class="rt-api-eg">
                        <td><strong> cur </strong></td>
                        <td> Passing this parameter instead of the default <strong>tid</strong> above will return the account info (balances) in the respective currency. </td>
                        <td><input type="text" value="<cur>UGX</cur>" /></td>
                      </tr>
                      <tr class="rt-api-sec">
                        <td colspan="3">Return Variables</td>
                      </tr>
                      
                      <tr class="rt-api-eg">
                        <td colspan="3"><strong>Typical Example</strong></td>
                      </tr>
                      <tr class="rt-api-eg">
                        <td colspan="3">{literal}{"tid":"37721E0AF986B397542C15F03AD7A767","memo":"333","status":"closed","cur":"KES","amount":"20.0000000000","act_from":"23469","act_to":"23467","msg":"Memo #332","pt":"mm","mobile":"254712830482","_api_log_":"1596555","api_status":"success"}{/literal}</td>
                      </tr>
                      
                      <tr>
                        <td><code class="rt-param">APIStatus</code></td>
                        <td colspan="2"><p>Status of the transaction query.</p>
                          <ul>
                            <li><strong>SUCCESS</strong> - Transaction is successful</li>
                            <li><strong>ERROR</strong> - Transaction failed and or something went wrong</li>
                        </ul></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
          </div>
          </div>
        </div>
</details>
