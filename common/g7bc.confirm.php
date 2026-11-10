{* ROTARY — confirm action *}
<div class="rt-verify-card rt-result-error rt-confirm">
  <div class="rt-result-ico"><i class="fas fa-exclamation-triangle"></i></div>
  <span class="rt-eyebrow">{$smarty.const.CONFIRM_ACTION}</span>
  <h1>{$text}</h1>
  <p class="rt-muted">Please confirm you want to continue. This action may not be reversible.</p>
  <form class="rt-form" role="form">
    {foreach from=$smarty.request key=k item=v}
    <input type="hidden" name="{$k}" value="{$v}" />
    {/foreach}
    <div class="rt-form-actions rt-confirm-actions">
      <button type="button" class="btn btn-default ignore" onclick="location.href='{$back}';"><i class="fas fa-arrow-left"></i> Nope, cancel</button>
      <button type="submit" class="btn btn-danger"><i class="fas fa-check"></i> Yes, I am</button>
    </div>
  </form>
</div>
