{* ROTARY — account statement *}
{Stats::Mini()}
{FrontWidgets::AdvancedTools()}
{RR::Header(['title'=>$LANG.MY_STATEMENT,'icon'=>'fas fa-chart-line'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Amount</th>
      <th class="all">Type</th>
      <th class="all">Date</th>
      <th class="all">Status</th>
      <th class="none">TID</th>
      <th class="none">Description</th>
      <th class="none">Memo</th>
      <th class="none">A/C</th>
      <th class="none">Balance before</th>
      <th class="none">Balance after</th>
    </tr>
  </thead>
  <tbody>
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td><span class="rt-amt {if $R.action eq 'credit'}is-credit{else}is-debit{/if}">{if $R.action eq 'credit'}+ {$R.currency}{Cur::D($rows[results].amount)}{else}&minus; {$rows[results].currency}{Cur::D($rows[results].amount)}{/if}</span></td>
    <td><span class="rt-pill {if $R.action eq 'credit'}rt-pill-new{else}rt-pill-debit{/if}"><i class="fas {if $R.action eq 'credit'}fa-arrow-down{else}fa-arrow-up{/if}"></i>&nbsp;{$R.action|ucwords}</span></td>
    <td>{$R.timestamp}</td>
    <td class="rt-cell-status">{$R.status}</td>
    <td><code class="rt-code">{$R.tid}</code></td>
    <td>{$R.comments|strip_tags}</td>
    <td>{if !empty($R.memo)}<a href="?dad=accounts&jc=statement&a=memo&id={V::EN($R.memo)}" class="rt-doc-link" target="_blank" rel="nofollow noopener noreferrer"><i class="fas fa-download"></i> {$R.memo}</a>{else}N/A{/if}</td>
    <td>{$R._act_.number}</td>
    <td>{$R.currency}{Cur::D($R.pbal)}</td>
    <td><strong>{$R.currency}{Cur::D($R.cbal)}</strong></td>
  </tr>
  {/section}
  </tbody>
</table>
{RR::Footer()}
