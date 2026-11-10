{* ROTARY — API post URL reference *}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-paper-plane"></i></span><span>Post URL</span></h2>
  </header>
  <div class="rt-list-body">
    <p class="rt-muted">This is the URL you will send all post commands to.</p>
    <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label" for="rt-posturl">For example</label>
      <div class="input-icon rt-input"><i class="fas fa-link"></i><input id="rt-posturl" type="text" class="form-control rt-mono" readonly value="{$config.securebase}/api.php?username={$newuid}&password=YourPassword&IS_GET=3"></div>
    </div>
    <h3 class="rt-card-label"><i class="fas fa-cogs"></i> In detail</h3>
    <div class="table-responsive rt-api-table">
      <table class="table rt-table rt-api-params">
        <thead>
          <tr><th>Available Parameters</th><th>Description</th><th>Example</th></tr>
        </thead>
        <tbody>
          <tr><td><code class="rt-param">username</code></td><td>Your {$config.companyname} username</td><td>{$users.username}</td></tr>
          <tr><td><code class="rt-param">password</code></td><td>Your {$config.companyname} password</td><td>SomePassword</td></tr>
          <tr><td><code class="rt-param">IS_GET</code></td><td>Required ONLY if NOT using POST to send data to the API</td><td>3</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
