{* ROTARY — account · profile · api *}
{include file='account.profile.header.php'}
{RR::Header(['title'=>'API Settings','icon'=>'fas fa-exchange-alt'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">API Key</th>
      <th class="all">Last Update</th>
      <th class="all text-center">IP Limits</th>
      <th class="all text-center">API LOG</th>
      <th class="all text-center">API Status</th>
      <th class="none"></th>
      <th class="none">IPN</th>
      <th class="none">IPS</th>
      <th class="none">Header</th>
      <th class="none">Footer</th>
    </tr>
  </thead>
  <tbody>
  {assign var='i' value=1}
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td class="rt-strong rt-tone-cardinal">{$R.access_key}</td>
    <td>{$R.timestamp}</td>
    <td align="center">{RR::Status($R.ip_limit)}</td>
    <td align="center">{RR::Status('on')}</td>
    <td class="rt-cell-status" align="center">{RR::Status($R.status)}</td>
    <td>{if !$R.lock}{RR::Buttons(['edit'=>$R.id])}{/if}</td>
    <td>{if !empty($R.ipn)}<a href="{$R.ipn}" target="_blank" rel="nofollow noopener noreferrer">{$R.ipn}</a> <i class="fas fa-external-link-alt"></i>{else}N/A{/if}</td>
    <td>{if !empty($R.ips)}{_Array_::Lists($R.ips)}{else}N/A{/if}</td>
    <td>{if !empty($R._header_)}<a href="?dad=account&jc=profile&hs=api&a=download&id={$R._header_.id}" rel="nofollow noopener noreferrer">{$R._header_.name}</a>{else}N/A{/if}</td>
    <td>{if !empty($R._footer_)}<a href="?dad=account&jc=profile&hs=api&a=download&id={$R._footer_.id}" rel="nofollow noopener noreferrer">{$R._footer_.name}</a>{else}N/A{/if}</td>
  </tr>
  {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
