{* ROTARY — my orders / services *}
{Stats::Mini()}
{FrontWidgets::AdvancedTools()}
{if $MON}{Vars::AjaxMonitor("$securebase/?dad=orders&jc=manage&a=renew&id={$smarty.request.id}")}<div id="monitor"><div class="rt-secure-note"><i class="fas fa-sync-alt fa-spin"></i><span>Initiating renewal process…</span></div></div>{/if}
{RR::Header(['title'=>$LANG.T000008,'icon'=>'fas fa-layer-group'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
    <tr>
      <th class="all"></th>
      <th class="all">Name</th>
      <th class="all">Expiry</th>
      <th class="all">Renewal</th>
      <th class="all">Status</th>
      <th class="none">Actions</th>
      <th class="none">Start</th>
      <th class="none">Number</th>
      <th class="none">Invoice</th>
      <th class="none">Date</th>
      <th class="none">Others</th>
      {if $config.edition eq 'insurer'}
      <th class="none">Dependants</th>
      <th class="none">Beneficiaries</th>
      {/if}
    </tr>
  </thead>
  <tbody>
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  {assign var='queue_array' value=Store::Clean($R.queue_array)}
  {assign var='dattachment' value="{if !empty($R.product.button_dattachment)}{$R.product.button_dattachment}{else}Certificate{/if}"}
  <tr>
    <td class="rt-cell-muted">{$R.id}</td>
    <td><strong>{$R.item_name}</strong></td>
    <td>{if !empty($rows[results].expiry)}<span class="rt-pill {if $rows[results].expiry<$now}rt-pill-debit{else}rt-pill-new{/if}"><i class="far fa-calendar"></i>&nbsp;{U::D($rows[results].expiry,1)}</span>{else}<span class="rt-muted">N/A</span>{/if}</td>
    <td>{if !empty($R.invoice)}<a href="?dad=accounts&jc=invoices&a=pay&id={V::EN($R.invoice.id)}" class="btn btn-sm rt-btn-gold" {$_TIP_} title="Pay renewal invoice"><i class="fas fa-lock"></i> Pay invoice</a>
      {elseif $R.status eq 'Active'}<a href="?dad=orders&jc=manage&renew=1&id={$R.id}" class="btn btn-sm rt-btn-soft" {$_TIP_} title="{$LANG.T000027}"><i class="fas fa-sync-alt"></i> Extend</a>{else}<span class="rt-muted">N/A</span>{/if}</td>
    <td><span class="rt-pill rt-pill-{$R.status|strtolower}">{$R.status|strtolower}</span></td>
    <td>
     {RR::Buttons([ "Download Invoice:fa fa-download:btn-primary ignore::target='_blank'"=>"{if !empty($R.invoice)}?dad=accounts&jc=invoices&a=pdf&id={V::EN($R.invoice.id)}{/if}",
                    "Pay Invoice:fas fa-mail-forward:btn-danger ignore::target='_blank'"=>"{if !empty($R.invoice)}?dad=accounts&jc=invoices&a=pay&id={V::EN($R.invoice.id)}{/if}",
                    "{$dattachment}:fa fa-download:btn-primary ignore::target='_blank'"=>"{if !empty($R.da)}?dad=orders&jc=manage&a=da&id={$R.id}{/if}",
                    "Download:fa fa-download:btn-primary ignore::target='_blank'"=>"{if !empty($R.package.downloads)}?dad=orders&jc=manage&a=df&id={$R.id}{/if}",
                    "Claims:fa fa-bed:btn-success ignore::target='_blank'"=>"{if $R.claims=='on'}?dad=orders&jc=claims&a=form&orderid={$R.id}{/if}",
                    "Beneficiaries:fa fa-user:btn-warning"=>"{if $R.beneficiaries=='on'}?dad=orders&jc=beneficiaries&order={$R.id}{/if}",
                    "Dependants:fa fa-users:btn-danger"=>"{if $R.package.dependants=='on'}?dad=orders&jc=dependants&a=form&order={$R.id}{/if}",
                    "Files:fa fa-upload:btn-info ignore::target='_blank'"=>"{if $R.files=='on'}?dad=orders&jc=files&a=form&_id_={$R.id}{/if}"])}
    </td>
    <td>{$R.start_date}</td>
    <td><code class="rt-code">{$R.number|default:$R.id}</code></td>
    <td><a href="?dad=accounts&jc=invoices&a=PDF&id={V::EN($R.memo_id)}" class="rt-doc-link" target="_blank" rel="nofollow noopener noreferrer"><i class="far fa-file-pdf"></i> {$R.memo_id}</a></td>
    <td>{$R.timestamp}</td>
    <td>{if !empty($queue_array)}{_Array_::Lists($queue_array)}{else}N/A{/if}</td>
    {if $config.edition eq 'insurer'}
    <td>{if !empty($R._dependants_)}{_Array_::Lists($R._dependants_,'<ol>','</ol>')}{else}N/A{/if}</td>
    <td>{if !empty($R._beneficiaries_)}{_Array_::Lists($R._beneficiaries_,'<ol>','</ol>')}{else}N/A{/if}</td>
    {/if}
  </tr>
  {/section}
  </tbody>
</table>
{RR::Footer()}
