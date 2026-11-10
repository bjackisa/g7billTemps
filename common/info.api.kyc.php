{* ROTARY — API endpoint doc card: kyc *}
<details class="rt-api is-royal">
  <summary class="rt-api-head"><span class="rt-api-ico"><i class="fa fa-list"></i></span><span class="rt-api-title"><strong>KYC Information</strong><small>Use this command to get KYC information of a mobile number</small></span><span class="rt-api-chev" aria-hidden="true"></span></summary>
  <div class="rt-api-body">
          <div class="rt-api-section">
            <div class="rt-api-section">
            <div class="rt-codebox"><div class="rt-codebox-bar"><span class="rt-codebox-dots"><i></i><i></i><i></i></span><span class="rt-codebox-title">PHP Post Example</span><button type="button" class="rt-codebox-copy ignore" onclick="var a=this.parentNode.parentNode.querySelector('textarea');a.focus();a.select();document.execCommand('copy');this.classList.add('is-done');this.innerHTML='&#10003; Copied';"><i class="far fa-copy"></i> Copy</button></div><textarea rows="14" class="form-control rt-codebox-area" spellcheck="false"><?php
$DATA   =   '<?xml version="1.0" encoding="ISO-8859-1"?>
                     <g7bill>
                       <_key_>{$Key|default:"2AFFFBB594XXXXXXXXXX33DD3B6EEBB77"}</_key_>
                       <cmd>account</cmd>
                       <action>info</action>
                       <mobile>256752567374</mobile>
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
                        <td> The Mobile Number </td>
                        <td> 256752567374 </td>
                      </tr>
                      <tr class="rt-api-sec">
                        <td colspan="3">Return Variables</td>
                      </tr>
                      
                      <tr class="rt-api-eg">
                        <td colspan="3"><strong>Typical Example</strong></td>
                      </tr>
                      <tr class="rt-api-eg">
                        <td colspan="3">{literal}{"fname":"JOSEPH","lname":"ABDI","status":"ok","msg":"","api_status":"success","log_id":"4338756"}{/literal}</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">APIStatus</code></td>
                        <td colspan="2"><p>Status of the API query.</p>
                          <ul>
                            <li><strong>SUCCESS</strong> - API Query is successful</li>
                            <li><strong>ERROR</strong> -  API Query failed and or something went wrong</li>
                        </ul></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
          </div>
          </div>
        </div>
</details>
