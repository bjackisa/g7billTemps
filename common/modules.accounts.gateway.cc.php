{* ROTARY — payment gateway (cc) *}
<div class="tab-content rt-gw">
  <div class="tab-pane active" id="tab_1">
    <div class="rt-gw-row">
      <div class="rt-gw-col">
        <div class="rt-list-card rt-gw-card">
          <div class="rt-list-head">
            <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-file-invoice-dollar"></i></span><span>Invoice #{$memo.id} Details</span></h2>
            <div class="rt-list-actions"> <a href="/?dad=index&jc=kb" class="btn btn-default btn-sm ignore"> <i class="fas fa-question"></i> Help </a> </div>
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
            <div class="rt-list-actions"> <a href="welcome.php?dad=accounts&jc=invoices" class="btn btn-default btn-sm ignore"> <i class="fas fa-reply-all"></i> Invoices </a> </div>
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
{FF::Note(['value'=>"<p>Gateway and or transactional fees may apply!</p>"])}
{FF::Form(['hidden'=>['dad'=>'accounts','jc'=>'invoices','a'=>'pp','pt'=>'cc','id'=>{$smarty.request.id|default:'0'}],'icon'=>'fas fa-credit-card','title'=>'Credit Card Payments'])}

{FF::Box(['_BOX_'=>'open','title'=>'Name, Email &amp; Phone','icon'=>'fas fa-user','class'=>'red'])}
{FF::Text(['name'=>'cc_fname','title'=>'First Name','value'=>$smarty.post.cc_fname|default:$users.fname,'icon'=>'fas fa-user','required'=>1,'desc'=>'First Name Example <strong>Joseph</strong>'])}
{FF::Text(['name'=>'cc_lname','title'=>'Last Name','value'=>$smarty.post.cc_lname|default:$users.lname,'icon'=>'fas fa-user','required'=>1,'desc'=>'Last Name Example <strong>Abdi</strong>'])}
{FF::Text(['name'=>'cc_email','title'=>'Email Address','value'=>$smarty.post.cc_email|default:$users.email,'icon'=>'fas fa-envelope','required'=>1,'desc'=>'Email Address <strong>info@jpesa.com</strong>'])}
{FF::Text(['name'=>'cc_phone','title'=>'Phone','value'=>$smarty.post.cc_phone|default:$users.phone,'icon'=>'fas fa-phone','desc'=>'Phone / Mobile Number. Example <strong>256752567374</strong>'])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Box(['_BOX_'=>'open','title'=>'Address, City &amp; Country','icon'=>'fas fa-map-marker-alt','class'=>'yellow'])}
{FF::Text(['name'=>'cc_add1','value'=>$smarty.post.cc_add1|default:$users.add1,'title'=>'Address #1','icon'=>'fas fa-map-marker-alt','desc'=>'Enter your address #1'])}
{FF::Text(['name'=>'cc_add2','value'=>$smarty.post.cc_add2|default:$users.add2,'title'=>'Address #2','icon'=>'fas fa-map-marker-alt','desc'=>'Enter your address #2'])}
{FF::Text(['name'=>'cc_city','value'=>$smarty.post.cc_city|default:$users.city,'title'=>'City','icon'=>'fas fa-city','desc'=>'Enter your City'])}
{FF::Text(['name'=>'cc_zip','value'=>$smarty.post.cc_zip|default:$users.zip,'title'=>'Zip','icon'=>'fas fa-mail-bulk','desc'=>'Enter your zip code. Example <strong>+256</strong>'])}
{FF::Select(['name'=>'cc_state','title'=>'State (US &amp; Canada)','value'=>$smarty.post.cc_state|default:$users.state,'table'=>'states','column'=>'name','icon'=>'fas fa-flag','key'=>'abbrev'])}
{FF::Select(['name'=>'cc_country','value'=>$smarty.post.cc_country|default:$users.country,'table'=>'countries','column'=>'short_name','icon'=>'fas fa-flag','key'=>'iso2','required'=>1])}
{FF::Box(['_BOX_'=>'close'])}

{FF::Text(['name'=>'cc_number','title'=>'Card Number','value'=>$smarty.post.cc_number|default:'','icon'=>'fas fa-credit-card','required'=>1,'desc'=>'Credit Card Number Eg <strong>4111111111111111</strong>'])}
{FF::Text(['name'=>'cc_expiry','title'=>'Card Expiry','value'=>$smarty.post.cc_expiry|default:'','icon'=>'fas fa-calendar-alt','required'=>1,'desc'=>'Credit Card Expiry Date Eg <strong>10/2020</strong>'])}
{FF::Text(['name'=>'cc_cvc','title'=>'Card CVV2','value'=>$smarty.post.cc_cvc|default:'','icon'=>'fas fa-key','required'=>1,'desc'=>'Credit Card CVV2 Eg <strong>123</strong>'])}

{FF::Form(['___'=>'close','save'=>'Make Payment'])}
