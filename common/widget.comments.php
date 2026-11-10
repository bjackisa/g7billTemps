{* ROTARY — comments thread + form *}
{if !empty($_id_)}
<section class="rt-prose-card rt-comments">
  <h3 class="rt-card-label"><i class="far fa-comments"></i> Comments ({$comments|count})</h3>
  <ul class="rt-comment-list">
    <li class="rt-comment is-pinned">
      <img class="rt-comment-avatar" alt="" src="{Pic::Get('logo.png')}">
      <div class="rt-comment-body"><div class="rt-comment-head"><strong>[[CN]]</strong><time>{Vars::Date()}</time></div><p>If you have any comments or suggestions please feel free to let us know.</p></div>
    </li>
    {assign var='i' value=1}
    {section name=results loop=$comments}
    {assign var='R' value=V::D($comments[results])}
    <li class="rt-comment {if $R.status neq 'on'}is-pending{/if}" {if $R.status neq 'on'}title="Pending approval"{/if}>
      <img class="rt-comment-avatar" alt="" src="{$R.avatar}">
      <div class="rt-comment-body"><div class="rt-comment-head"><strong>{$R.name}</strong><time>{$R.timestamp}</time>{if $R.status neq 'on'}<span class="rt-badge-soft">Pending approval</span>{/if}</div><div class="rt-prose">{$R.comments}</div></div>
    </li>
    {assign var='i' value=$i+1}
    {/section}
  </ul>
  <h4 class="rt-card-label">Leave a comment</h4>
  <form action="/" method="post" name="comments" class="rt-form">
    <input type="hidden" name="dad" value="{$smarty.request.dad}" />
    <input type="hidden" name="jc" value="{$smarty.request.jc}" />
    <input type="hidden" name="_id_" value="{$_id_}" />
    <input type="hidden" name="a" value="comment" />
    <div class="rt-field-grid">
      <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label" for="rt-cm-name">Your name *</label><input id="rt-cm-name" type="text" name="name" placeholder="Your name" class="form-control" required="required" value="{$smarty.post.name|default:''}" autocomplete="name"></div>
      <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label" for="rt-cm-email">Your email *</label><input id="rt-cm-email" type="text" name="email" placeholder="you@example.com" class="form-control" required="required" value="{$smarty.post.email|default:''}" autocomplete="email"></div>
      <div class="form-group rt-ff-stack is-wide"><label class="control-label rt-ff-label" for="rt-cm-phone">Your phone</label><input id="rt-cm-phone" type="text" name="phone" placeholder="Optional" class="form-control" value="{$smarty.post.phone|default:''}" autocomplete="tel"></div>
      <div class="form-group rt-ff-stack is-wide"><label class="control-label rt-ff-label" for="rt-cm-body">Comment *</label><textarea id="rt-cm-body" rows="6" name="comments" placeholder="Write your comment…" class="form-control" required="required">{$smarty.post.comments|default:''}</textarea></div>
      <div class="form-group rt-ff-stack is-wide">
        <label class="control-label rt-ff-label" for="rt-cm-cap">Captcha *</label>
        <div class="rt-captcha-inline"><span class="rt-captcha-code" aria-label="Captcha code">{$smarty.session.captcha}</span><input id="rt-cm-cap" type="text" name="captcha" placeholder="Type the code shown" class="form-control" required="required" autocomplete="off"></div>
      </div>
    </div>
    <button type="submit" class="btn btn-lg rt-btn-primary"><i class="far fa-paper-plane"></i> Submit</button>
  </form>
</section>
{/if}
