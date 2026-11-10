{* ROTARY — mobile money: completed *}
<div class="rt-state is-success" role="status"><span class="rt-state-ico"><i class="fas fa-check"></i></span><div><strong>Payment successful</strong><p>Your payment of <b>{$memo.info.cur}{U::TTZ(Cur::D($memo.total))}</b> has been processed successfully.</p>
  {if !empty($smarty.session.return) and $memo.info.type eq 'invoice'}
    {if !empty($order.id)}
    <script>parent.location="{$smarty.session.return}";</script>
    {/if}
  {elseif !empty($newuid)}
    <p class="rt-state-next"><i class="fas fa-hand-point-right"></i>
    {if !empty($order.id)}<a href="?dad=orders&jc=manage">Go to <strong>{$LANG.T000008}</strong></a>
    {else}{if $memo.info.type eq 'credit_note'}<a href="?dad=accounts&jc=cnotes">Return to the Credit Notes</a>{else}<a href="?dad=accounts&jc=invoices">Return to the Invoice Manager ({$memo.info.type})</a>{/if}{/if}
    </p>
  {/if}
</div></div>
{if !empty($smarty.session.return) and $memo.info.type eq 'invoice' and empty($order.id)}
<div class="rt-state is-pending" role="status"><span class="rt-state-ico"><span class="rt-spinner"></span></span><div><strong>Processing order…</strong><p>Please keep this page open.</p></div></div>
{/if}
