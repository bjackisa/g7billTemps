{* ROTARY — API endpoint doc card: whatsapp *}
<details class="rt-api is-gold">
  <summary class="rt-api-head"><span class="rt-api-ico"><i class="fab fa-whatsapp"></i></span><span class="rt-api-title"><strong>Send WhatsApp Messages</strong><small>Use this command to send WhatsApp messages</small></span><span class="rt-api-chev" aria-hidden="true"></span></summary>
  <div class="rt-api-body">
          <div class="rt-api-section">
            <div class="rt-codebox"><div class="rt-codebox-bar"><span class="rt-codebox-dots"><i></i><i></i><i></i></span><span class="rt-codebox-title">PHP Post Example</span><button type="button" class="rt-codebox-copy ignore" onclick="var a=this.parentNode.parentNode.querySelector('textarea');a.focus();a.select();document.execCommand('copy');this.classList.add('is-done');this.innerHTML='&#10003; Copied';"><i class="far fa-copy"></i> Copy</button></div><textarea rows="14" class="form-control rt-codebox-area" spellcheck="false"><?php

$DATA   =   array("session"=>"3EB044832C8DF4D682F5FE","chatId"=>"256752567374","text"=>"Testing WhatsApp Messages");
$ch 	= 	curl_init();		
curl_setopt($ch, CURLOPT_URL,"https://waha.jolis.net/api/sendText/");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($DATA));
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
                        <td><code class="rt-param">session</code></td>
                        <td> Your Session ID. This will be given to you when you signup </td>
                        <td> 3EB044832C8DF4D682F5FE	 </td>
                      </tr>
                     <tr>
                      <td><code class="rt-param">chatId</code></td>
                      <td> The WhatsApp Number </td>
                        <td> 256752567374 </td>
                      </tr>
                      <tr>
                      <td><code class="rt-param">text</code></td>
                      <td> The WhatsApp Message </td>
                        <td> Hi, do you love Jesus </td>
                      </tr>
                      <tr class="rt-api-sec">
                        <td colspan="3">Return Variables</td>
                      </tr>
                      <tr class="rt-api-eg">
                        <td colspan="3"><strong>Typical Example</strong></td>
                      </tr>
                      <tr class="rt-api-eg">
                        <td colspan="3">{literal}{"_data":{"id":{"fromMe":true,"remote":"256752567374@c.us","id":"3EB044832C8DF4D682F5FE"...}
{/literal}</td>
                      </tr>                      
                    </tbody>
                  </table>
               </div>
          </div>
        </div>
</details>
