{* ROTARY — document / certificate verification *}
{if !empty($row)}
<section class="rt-result rt-result-success">
  <div class="rt-result-ico"><i class="fas fa-certificate"></i></div>
  <div class="rt-result-body">
    <span class="rt-eyebrow">Verified</span>
    <h1>This document is authentic</h1>
    <dl class="rt-kv rt-kv-boxed">
      <div><dt>Name on certificate</dt><dd>{$row.user.name}</dd></div>
      <div class="rt-kv-strong"><dt>Certificate number</dt><dd>{$row.number}</dd></div>
      <div><dt>Date of enrollment</dt><dd>{U::D($row.start_date)}</dd></div>
    </dl>
    <h3 class="rt-card-label"><i class="fas fa-layer-group"></i> Modules on certificate</h3>
    <ol class="rt-checklist rt-checklist-num">
      {section name=results loop=$row.items}
      {assign var='R' value=V::D($row.items[results])}
      <li>{$R.name}</li>
      {/section}
    </ol>
  </div>
</section>
{else}
<section class="rt-event-gate">
  <div class="rt-event-gate-art">
    <span class="rt-card-icon"><i class="fas fa-certificate"></i></span>
    <span class="rt-eyebrow">Verification</span>
    <h1>Verify document authenticity</h1>
    <p>Check the authenticity of a document issued by [[CN]]. To be authenticated, your document must be an original bearing a recognized signature (and seal, if applicable).</p>
  </div>
  <form action="{$securebase}" method="post" class="rt-event-gate-form rt-form" enctype="multipart/form-data">
    <input type="hidden" name="dad" value="index" />
    <input type="hidden" name="jc" value="orders" />
    <input type="hidden" name="a" value="grouped" />
    <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label" for="rt-cert">Certificate number</label>
      <div class="input-icon rt-input"><i class="fas fa-hashtag"></i><input id="rt-cert" class="form-control placeholder-no-fix" type="text" value="{$smarty.post.number|default:''}" autocomplete="off" placeholder="Enter certificate number" name="number" /></div>
    </div>
    <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label" for="rt-cert-mail">Email address <span class="rt-muted">(optional)</span></label>
      <div class="input-icon rt-input"><i class="far fa-envelope"></i><input id="rt-cert-mail" class="form-control placeholder-no-fix" type="text" value="{$smarty.post.email|default:''}" placeholder="Email on file" name="email" /></div>
      <span class="help-block rt-ff-help">Provide the email on file if you'd like the document emailed to you.</span>
    </div>
    <button type="submit" class="btn btn-lg btn-block rt-btn-gold"><i class="fas fa-check-double"></i> Verify</button>
  </form>
</section>
{/if}
