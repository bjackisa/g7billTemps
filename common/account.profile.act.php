{* ROTARY — account · profile · act *}
{include file='account.profile.header.php'}
{RR::Header(['title'=>'My Accounts','icon'=>'fas fa-wallet'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">A/C Name</th>
      <th class="all">A/C Number</th>
      <th class="all">Available Balance</th>
      <th class="all text-center">Status</th>
      <th class="none">Actual Balance</th>
      <th class="none">Pending Balance</th>
      <th class="none">Withdraw Limit</th>
      <th class="none">Minimum Balance</th>
      <th class="none">Maximum Balance</th>
      <th class="none">Credit Limit</th>
      <th class="none">Credit Limit Rate</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=$rows[results]}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong">{FF::Def(['id'=>$R.id,'value'=>$R.default])} {$R.name}</td>
    <td class="rt-tone-royal rt-strong">{$R.number}</td>
    <td class="{if $R.available<0}rt-tone-cardinal{elseif $R.available>0}rt-tone-grass{else}rt-tone-royal{/if} rt-strong">{$R.currency}{Cur::D($R.available)}</td>
    <td class="rt-cell-status" align="center">{$R.status}</td>
    <td><span class="rt-tone-grass rt-strong">{$R.currency}{Cur::D($R.balance)}</span></td>
    <td><span class="rt-tone-gold rt-strong">{$R.currency}{Cur::D($R.pending)}</span></td>
    <td><span class="rt-tone-grass rt-strong">{$R.currency}{Cur::D($R.limit_debits_amount)}</span></td>
    <td><span class="rt-tone-cardinal rt-strong">{$R.currency}{Cur::D($R.balance_min)}</span></td>
    <td><span class="rt-tone-royal rt-strong">{$R.currency}{Cur::D($R.balance_max)}</span></td>
    <td><span class="rt-tone-violet rt-strong">{$R.currency}{Cur::D($R.credit_limit)}</span></td>
    <td><span class="rt-tone-violet rt-strong">{if $R.credit_limit_rate>1}{$R.currency}{Cur::D($R.credit_limit_rate)}{else}{$R.credit_limit_rate*100}%{/if} {$R.credit_limit_cycle|ucwords}</span></td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
