{* ROTARY — affiliate payment terms + link *}
<section class="rt-list-card rt-aff">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-hand-holding-usd"></i></span><span>Payment terms</span></h2>
  </header>
  <div class="rt-list-body rt-aff-body">
    <div class="rt-aff-rate">
      <span class="rt-eyebrow">You earn</span>
      <strong>{if $row.type eq 'rate'}{$row.amount*100}%{else}{Cur::XE($row.amount)}{/if}</strong>
      <span class="rt-muted">per sale</span>
    </div>
    <div class="rt-aff-link">
      <label class="rt-ff-label" for="mt-target-1">Your standard linking code <span class="rt-muted">— great for emails and online marketing</span></label>
      <div class="rt-copy-field">
        <div class="input-icon rt-input"><i class="fas fa-link"></i><input type="text" id="mt-target-1" class="form-control rt-mono" value="{$config.base}/?afid={$row.afid}" readonly /></div>
        <a href="javascript:;" class="btn rt-btn-gold mt-clipboard ignore" data-clipboard-action="copy" data-clipboard-target="#mt-target-1"><i class="far fa-copy"></i> Copy link</a>
      </div>
    </div>
  </div>
</section>
