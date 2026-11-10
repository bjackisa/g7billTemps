{* ROTARY — SMS IPN settings *}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-satellite-dish"></i></span><span>Instant Payment Notification URL (IPN)</span></h2>
  </header>
  <div class="rt-list-body">
    <form action="{$securebase}/welcome.php" method="post" class="rt-form">
      <input type="hidden" name="dad" value="vsms" />
      <input type="hidden" name="jc" value="api" />
      <input type="hidden" name="a" value="save" />
      <p class="rt-muted">Instant Payment Notification (IPN) is a message service that automatically notifies you of events related to transactions. You can use it to automate back-office and administrative functions, including automatically fulfilling orders and providing customers with order status.</p>
      <div class="form-group rt-ff-stack">
        <label class="control-label rt-ff-label" for="rt-vsms-ipn">Enter qualified URL</label>
        <div class="input-icon rt-input"><i class="fas fa-link"></i><input id="rt-vsms-ipn" type="text" class="form-control" placeholder="https://secure.jolis.net/ipn.php" required="required" name="ipn" value="{$settings.ipn}"></div>
      </div>
      <div class="rt-form-actions">
        <button type="submit" class="btn rt-btn-primary"><i class="far fa-save"></i> Save settings</button>
        <button type="button" class="btn btn-default ignore">Cancel</button>
      </div>
    </form>
  </div>
</section>
