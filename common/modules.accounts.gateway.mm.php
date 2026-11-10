{* ROTARY — payment gateway (mm) *}
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
  </div>
</div>

{FF::Tab(['open'=>1,'menu'=>['modify'=>['active'=>1,'icon'=>'fas fa-mobile-alt'],'cc'=>['icon'=>'fas fa-list','title'=>'Card Payments']]])}

{FF::Tab(['popen'=>'modify','active'=>1])}
{FF::Form(['title'=>'Mobile Money Payments','icon'=>'fas fa-mobile-alt','hidden'=>['dad'=>'accounts','jc'=>'invoices','a'=>'pp','pt'=>'mm','id'=>{V::EN($memo.info.id)}]])}
{FF::Note(['value'=>"<p>Network and or transactional fees may apply!</p>"])}
{if $MON}{Vars::AjaxMonitor("$securebase/?dad=accounts&jc=invoices&a=monitor&id={V::EN($memo.info.id)}")}
<div id="monitor">{Msgs::Warning('...Initiating Transaction...')}</div>
{/if}
{FF::Text(['name'=>'mobile','title'=>'Mobile Number','value'=>$smarty.post.mobile,'icon'=>'fas fa-phone','required'=>1,'id'=>'number','desc'=>'Mobile Number in international format Eg <strong>256752567374</strong>'])}
{FF::Form(['___'=>'close','save'=>'Make Payment'])}
{FF::Tab(['pclose'=>1])}

{FF::Tab(['popen'=>'cc'])}<p>{if !empty($button)}{$button.button}{/if}</p>{FF::Tab(['pclose'=>1])}
{FF::Tab(['close'=>1])}
