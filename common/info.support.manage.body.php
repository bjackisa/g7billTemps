{* ROTARY — help desk: conversation thread *}
<section class="rt-summary-card rt-thread-card">
  <header class="rt-card-headline"><h2><i class="far fa-comments"></i> Conversation <span class="rt-kb-count">{$responses|count}</span></h2></header>
  <ol class="rt-thread">
    {assign var='i' value=1}
    {section name=results loop=$responses}
    <li class="rt-msg {if $responses[results].uinfo.username eq $users.username}is-mine{/if}">
      <img class="rt-msg-avatar" src="{$responses[results].uinfo.avatar}" alt="">
      <div class="rt-msg-bubble">
        <div class="rt-msg-head"><strong>{$responses[results].uinfo.fname} {$responses[results].uinfo.lname}</strong><time>{if $i eq 1}Posted{else}Replied{/if} {U::D($responses[results].timestamp)}</time></div>
        <div class="rt-msg-body rt-prose">{$responses[results].description}</div>
      </div>
    </li>
    {assign var='i' value=$i+1}{/section}
  </ol>
</section>

{if !empty($row.files)}
<section class="rt-summary-card">
  <header class="rt-card-headline"><h2><i class="fas fa-paperclip"></i> Attachments</h2></header>
  <ul class="rt-filelist">
    {section name=results loop=$row.files}
    {assign var='R' value=V::D($row.files[results])}
    <li>
      <span class="rt-file-ico"><i class="far fa-file"></i></span>
      <span class="rt-file-meta"><strong>{$R.name}</strong><small>{U::Units($R.size)} &middot; {$R.timestamp}</small></span>
      <a href="?dad=info&jc=support&a=d&id={$R.id}" class="btn btn-sm rt-btn-soft ignore" target="_blank" rel="nofollow noopener noreferrer"><i class="fas fa-download"></i> Download</a>
    </li>
    {/section}
  </ul>
</section>
{/if}
