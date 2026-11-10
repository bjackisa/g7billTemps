{* ROTARY — action-required + contextual helper sidebar *}
{assign var='h' value=Content::Helper('F')}
{assign var='rows' value=Users::Requirements(['action'=>1])}
{if is_array($rows)}
<section class="rt-side-card rt-alert-card">
  <h3><i class="fas fa-exclamation-triangle"></i> Action required <a href="?dad={$smarty.request.dad}&jc={$smarty.request.jc}&hs={$smarty.request.dad}" class="rt-icon-action rt-icon-sm" aria-label="Refresh"><i class="fas fa-sync-alt"></i></a></h3>
  <ul class="rt-tasks">
    {foreach from=$rows key=k item=v}
    {if !$v.title}{continue}{/if}
    <li class="rt-task">
      <span class="rt-task-dot" aria-hidden="true"></span>
      <div class="rt-task-body">
        <strong>{$v.title|ucwords}</strong>
        <p>{$v.desc}</p>
        <div class="rt-task-foot"><span class="rt-badge-soft is-urgent">Urgent</span>{if !empty($v.link)}<button type="button" class="btn btn-sm rt-btn-gold" onclick="location.href='{$v.link}';"><i class="fas fa-check"></i> Act now</button>{/if}</div>
      </div>
    </li>
    {/foreach}
  </ul>
</section>
{/if}
{if !empty($h)}
<section class="rt-side-card hidden-xs">
  <h3><i class="far fa-life-ring"></i> Helper</h3>
  <div class="scroller rt-helper-body" style="max-height:600px" data-rail-visible="1" data-rail-color="#F7A81B" data-handle-color="#9DB0CF">{$h}</div>
</section>
{/if}
