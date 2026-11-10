{* ROTARY — SMS API doc card: post *}
<details class="rt-api is-gold" open>
  <summary class="rt-api-head"><span class="rt-api-ico"><i class="fas fa-paper-plane"></i></span><span class="rt-api-title"><strong>Post URL</strong><small>This is the URL you will send all post commands to</small></span><span class="rt-api-chev" aria-hidden="true"></span></summary>
  <div class="rt-api-body">
    <div class="rt-api-section">
      <h3 class="rt-card-label"><i class="fas fa-link"></i> For example</h3>
      <div class="input-icon rt-input"><i class="fas fa-terminal"></i><input type="text" class="form-control rt-mono" readonly value="{$config.securebase}/api.php?username={$newuid}&password=YourPassword&IS_GET=3&command=vsms"></div>
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
                        <td><code class="rt-param">username</code></td>
                        <td> Your {$config.companyname} username </td>
                        <td> {$users.username} </td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">password</code></td>
                        <td> Your {$config.companyname} password </td>
                        <td> SomePassword </td>
                      </tr>
                      <tr>
                        <td><code class="rt-param">IS_GET</code></td>
                        <td> Required ONLY if NOT using POST to send data to the API </td>
                        <td> 3 </td>
                      </tr>
          </tbody>
                  </table>
      </div>
    </div>
  </div>
</details>
