{* ROTARY — payment gateway (bank) *}
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
            <div class="rt-kv-row"><span class="rt-kv-k">Amount Due</span><span class="rt-kv-v is-amount">{$memo.info.cur}{Cur::D($memo.due)}</span></div>
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
            <div class="rt-kv-row"><span class="rt-kv-k">Payment Mode</span><span class="rt-kv-v">{$memo.info.pt|ucwords}</span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="rt-gw-row {if empty($i.acts)}hide{/if}">
      <div class="rt-gw-col is-wide">
        <div class="rt-list-card rt-gw-card">
          <div class="rt-list-head">
            <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-university"></i></span><span>Bank Details</span></h2>
          </div>
          <div class="rt-list-body">
        {assign var='x' value=1}
    	{section name=results loop=$i.acts}
    	{assign var='R' value=V::D($i.acts[results])}
            <div class="rt-kv-row"><span class="rt-kv-k">A/C Name</span><span class="rt-kv-v">{$R.account_name}</span></div>
            <div class="rt-kv-row"><span class="rt-kv-k">A/C Number</span><span class="rt-kv-v">{$R.account_number} ({$R.currency})</span></div>
            <div class="rt-kv-row"><span class="rt-kv-k">Bank Name</span><span class="rt-kv-v">{$R._bank_.name}</span></div>
            <div class="rt-kv-row"><span class="rt-kv-k">Bank Branch</span><span class="rt-kv-v">{$R.branch|default:'Main Branch'}</span></div>
            {if $x<$i.acts|count}<div class="rt-kv-sep"></div>{/if}
     	{assign var='x' value=$x+1} {/section}
          </div>
        </div>
      </div>
    </div>
    <div class="rt-gw-row">
      <div class="rt-gw-col is-wide">
        <div class="rt-list-card rt-gw-card">
          <div class="rt-list-head">
            <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-check"></i></span><span>Order Completion</span></h2>
          </div>
          <div class="rt-list-body">
            <div class="rt-gw-note">Your order will be processed automatically upon receiving notification of payment.<br />
                If you pay via echeck, your order will be processed upon the echeck clearing. (This usually takes up to 4 days.) <br /><br />
                If you have any questions regarding your payment, please contact our support department. <br />
                <br />
                Thank you!<br />
                [[CN]]</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
