{* ROTARY — SMS API doc card: broadcast *}
<details class="rt-api is-grass">
  <summary class="rt-api-head"><span class="rt-api-ico"><i class="fas fa-broadcast-tower"></i></span><span class="rt-api-title"><strong>Broadcast SMS</strong><small>Use this command to broadcast out one or many messages. The end functionality of this command depends on your GWallet or credit limit.<br /></small></span><span class="rt-api-chev" aria-hidden="true"></span></summary>
  <div class="rt-api-body">
    <div class="rt-api-section">
      <h3 class="rt-card-label"><i class="fas fa-link"></i> For example</h3>
      <div class="input-icon rt-input"><i class="fas fa-terminal"></i><input type="text" class="form-control rt-mono" readonly value="{$config.securebase}/api.php?username={$newuid}&password=YourPassword&IS_GET=3&command=vsms&action=broadcast&to=256752567374,256776567374&from=Joseph&message=I+love+Jesus"></div>
    </div>
    <div class="rt-api-section">
      <h3 class="rt-card-label"><i class="fas fa-cogs"></i> In detail</h3>
      <div class="table-responsive rt-api-table">
        <table class="table rt-table rt-api-params">
                    <thead>
                      <tr><th>Available Parameters</th><th>Description</th><th>Example</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><code class="rt-param">to</code></td>
                        <td>Your Recepient Number(s)</td>
                        <td>Separated by a comma eg 256776567374,256752567374</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">from</code></td>
                        <td>Your Sender Tag</td>
                        <td>Jesus or 0752567374</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">message</code></td>
                        <td>The SMS message it self not more than 160 characters</td>
                        <td>I love you Jesus</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">start</code></td>
                        <td><strong>[Optional]</strong> The start date / time of sending the message in UNIX timestamp</td>
                        <td>{$smarty.now}</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">end</code></td>
                        <td><strong>[Optional]</strong> The date beyond which this message should not be processed in UNIX timestamp</td>
                        <td>{$smarty.now}</td>
                      </tr>
                      <tr class="rt-api-sec">
                        <td colspan="3"><strong>Return Variables</strong></td>
                      </tr>
                      <tr class="rt-api-eg">
                        <td><strong>Typical Example</strong></td>
                        <td colspan="2">[SUCCESS] 8273|Broadcast Scheduled</td>
                      </tr>
                      <tr>
                        <td><strong>[CODE] SID|RESPONSE</strong></td>
                        <td><strong>CODE:</strong> defines the action status.<br />
                          <strong>SID:</strong> This is your unique Schedule ID.<br />
                          <strong>RESPONSE:</strong> This is the status message. </td>
                        <td><code class="rt-chip-code is-ok">SUCCESS</code> Broadcast is successful<br />
                          <code class="rt-chip-code is-err">ERROR</code> Something went wrong </td>
                      </tr>
          </tbody>
                  </table>
      </div>
    </div>
  </div>
</details>
