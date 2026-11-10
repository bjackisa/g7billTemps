{if !empty($invoice)}
<section class="rt-result rt-result-success">
  <div class="rt-result-ico"><i class="fas fa-file-invoice"></i></div>
  <div class="rt-result-body">
    <span class="rt-eyebrow">Renewal</span>
    <h2>Your renewal invoice has been generated</h2>
    <p class="rt-muted">{$invoice.description}</p>
    <p><a href="?dad=accounts&jc=invoices&a=pay&id={V::EN($invoice.id)}" class="btn btn-lg rt-btn-gold"><i class="fas fa-lock"></i> Make payment</a></p>
  </div>
</section>
{else}
<div class="rt-secure-note"><img src="{Pic::Get('spin.gif')}" width="22" height="22" alt="" /><span>Generating renewal invoice…</span></div>
{/if}
