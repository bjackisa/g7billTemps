{* ROTARY — payment gateway (button) *}
<div class="tab-content rt-gw">
  <div class="tab-pane active" id="tab_1">
    <div class="rt-gw-row">
      <div class="rt-gw-col">
        <div class="rt-list-card rt-gw-card">
          <div class="rt-list-head">
            <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-file-invoice-dollar"></i></span><span>Invoice #{$memo.id} Details</span></h2>
            <div class="rt-list-actions"> <a href="/?dad=index&jc=kb" class="btn btn-default btn-sm ignore" target="_blank" rel="nofollow noopener noreferrer"> <i class="fas fa-question"></i> Help </a> </div>
          </div>
          <div class="rt-list-body">
            <div class="rt-kv-row"><span class="rt-kv-k">Amount Due</span><span class="rt-kv-v is-amount">{Cur::XE(['from'=>$memo.info.cur,'amount'=>$memo.due])}</span></div>
            <div class="rt-kv-row"><span class="rt-kv-k">Invoice Number</span><span class="rt-kv-v"><a href="?dad=accounts&jc=invoices&a=pdf&id={V::EN($memo.id)}" class="ignore" target="_blank" rel="nofollow noopener noreferrer"><i class="far fa-file-pdf"></i> {$memo.id}</a></span></div>
            <div class="rt-kv-row"><span class="rt-kv-k">Order IP</span><span class="rt-kv-v">{$memo.info.ip}</span></div>
          </div>
        </div>
      </div>
      <div class="rt-gw-col">
        <div class="rt-list-card rt-gw-card">
          <div class="rt-list-head">
            <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-receipt"></i></span><span>Transaction Information</span></h2>
            <div class="rt-list-actions"> <a href="welcome.php?dad=accounts&jc=invoices" class="btn btn-default btn-sm"> <i class="fas fa-reply-all"></i> Invoices </a> </div>
          </div>
          <div class="rt-list-body">
            <div class="rt-kv-row"><span class="rt-kv-k">Order Number</span><span class="rt-kv-v">{$memo.info.seed}</span></div>
            <div class="rt-kv-row"><span class="rt-kv-k">Transaction ID</span><span class="rt-kv-v">{$memo.info.tid}</span></div>
            <div class="rt-kv-row"><span class="rt-kv-k">Payment Mode</span><span class="rt-kv-v">{$memo.info.pp|ucwords}</span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="rt-gw-row">
      <div class="rt-gw-col is-wide">
        <div class="rt-list-card rt-gw-card">
          <div class="rt-list-head">
            <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-paper-plane"></i></span><span>Continue to Payment</span></h2>
            <div class="rt-list-actions"> <a href="/?dad=index&jc=kb" class="btn btn-default btn-sm ignore"> <i class="fas fa-question"></i> Help </a> </div>
          </div>
          <div class="rt-list-body">
            <div class="rt-gw-note is-center"><p>Click the '<strong>Continue to Payment</strong>' button below.</p>
                <p>{$i.button}</p>
                <p>Please note: After completing your payment, click the 'continue' button. Depending upon Internet traffic, the process may take some time.<br />
                Please be patient and wait it out!</p>
                <p>Thank you!</p>
                <p><a href="{$securebase}/welcome.php?dad=accounts&jc=invoices"><i class="fas fa-list"></i> My Invoices</a></p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
