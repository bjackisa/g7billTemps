{* ROTARY — SMS API doc card: deliveryreport *}
<details class="rt-api">
  <summary class="rt-api-head"><span class="rt-api-ico"><i class="fas fa-clipboard-check"></i></span><span class="rt-api-title"><strong>Delivery Report</strong><small>Use this command to obtain the delivery status for the sent messages</small></span><span class="rt-api-chev" aria-hidden="true"></span></summary>
  <div class="rt-api-body">
    <div class="rt-api-section">
      <h3 class="rt-card-label"><i class="fas fa-link"></i> For example</h3>
      <div class="input-icon rt-input"><i class="fas fa-terminal"></i><input type="text" class="form-control rt-mono" readonly value="{$config.securebase}/api.php?username={$newuid}&password=YourPassword&IS_GET=3&command=vsms&action=deliveryreport&to=256752567374&sid=8273"></div>
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
                        <td>The destination number for this delivery report</td>
                        <td>256752567374</td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">sid</code></td>
                        <td>Your Schedule ID</td>
                        <td>8273</td>
                      </tr>
                      <tr class="rt-api-sec">
                        <td colspan="3"><strong>Return Variables</strong></td>
                      </tr>
                      <tr class="rt-api-eg">
                        <td><strong>Typical Example</strong></td>
                        <td colspan="2">[SUCCESS] DELIVRD</td>
                      </tr>
                      <tr>
                        <td><strong>[CODE] STATUS</strong></td>
                        <td><strong>CODE:</strong> defines the action status.<br />
                          <strong>STATUS:</strong> Delivery Status Code.<br />
                          <br />
                          <strong>Possible Delivery Status Codes:</strong> <br />
                          <ul>
                            <li>LS</li>
                            <li>UNKNOWN</li>
                            <li>ACKED</li>
                            <li>ENROUTE</li>
                            <li>DELIVRD</li>
                            <li>EXPIRED</li>
                            <li>DELETED</li>
                            <li>UNDELIV</li>
                            <li>ACCEPTED</li>
                            <li>REJECTD</li>
                          </ul></td>
                        <td><code class="rt-chip-code is-ok">SUCCESS</code> API query successful<br />
                          <code class="rt-chip-code is-err">ERROR</code> Something went wrong </td>
                      </tr>
          </tbody>
                  </table>
      </div>
    </div>
  </div>
</details>
