{* ROTARY — account · profile · mobile *}
{include file='account.profile.header.php'}
{RR::Header(['title'=>'','icon'=>'fas fa-phone'])}
{Msgs::Warning($INFO|default:'')}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Number</th>
      <th class="all">MSISDN</th>
      <th class="all text-center">SMS Verify</th>
      <th class="all text-center">Status</th>
      <th class="none"></th>
      <th class="none">Date</th>
      <th class="none">Update</th>
    </tr>
  </thead>
  <tbody>

  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong">{FF::Def(['id'=>$R.id,'value'=>$R.default])} {$R.number}</td>
    <td class="rt-tone-royal rt-strong"><i class="fas fa-user"></i> {$R.name|default:'N/A'}</td>
    <td align="center"> {if $R.status eq 'pending'}{if $R.count>3}<span class="text-danger rt-strong"><i class="fas fa-exclamation-triangle"></i> {$LANG.MOBILE_NUMBERS_VEX}</span>{else}
      <form action="welcome.php" name="mobile" method="post" class="form-validate-jquery">
        <input type="hidden" name="dad" value="account" />
        <input type="hidden" name="jc" value="profile" />
        <input type="hidden" name="hs" value="mobile" />
        <input type="hidden" name="a" value="confirm" />
        <input type="hidden" name="csrf" value="{CSRF::Token()}" />
        <input type="hidden" name="id" value="{$R.id}" />
        <div class="input-group">{FF::Text(['name'=>'pin','other'=>'maxlength="7" size="1"','required'=>1,'_min_'=>1,'title'=>'PIN'])} <span class="input-group-btn">
          <button id="genpassword" class="btn btn-success" type="submit"><i class="fas fa-check"></i> Confirm</button>
          </span> </div>
      </form>
      {/if}{else}{RR::Status($R.sms_verified)}{/if} </td>
    <td class="rt-cell-status" align="center">{$R.status|default:'error'}</td>
    <td>{RR::Buttons(['delete'=>$R.id,"Resend PIN:fas fa-paper-plane:btn-primary confirm"=>"{if $R.status=='pending'}?dad=account&jc=profile&hs=mobile&a=pin&id={$R.id}{/if}"])} </td>
    <td>{$R.timestamp}</td>
    <td>{$R.last_timestamp}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
