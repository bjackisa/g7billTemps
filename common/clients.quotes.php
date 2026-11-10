{* ROTARY — clients · quotes *}
{RR::Header(['title'=>'Quotations','icon'=>'fas fa-list'])}
<table class="table table-hover dt-responsive rt-table abdi" width="100%" id="abdi">
  <thead>
            <tr>
              <th class="all">Quote Number</th>
              <th class="all">Amount</th>
              <th class="all">Client </th>
              <th class="all">Date</th>
              <th class="all" align="center"></th>
              <th class="none">Phone</th>
              <th class="none">Email</th>
              <th class="none">Quotation Items</th>
            </tr>
          </thead>
          <tbody>

          {assign var='i' value=1}
          {section name=results loop=$rows}
          {assign var='R' value=V::D($rows[results])}
          <tr>
            <td class="rt-strong">{$R.id}</td>
            <td><span class="rt-tone-royal rt-strong">{Cur::XE(['amount'=>$rows[results].amount+$rows[results].tax1_amount+$rows[results].tax2_amount+$rows[results].tax3_amount+$rows[results].tax4_amount+$rows[results].tax5_amount,'from'=>$rows[results].cur])}</span></td>
            <td>{$R.client_name}</td>
            <td>{$R.invoice_date}</td>
            <td align="right">
            <a href="?dad=clients&jc=quotes&a=order&id={$rows[results].id}&g7bc=1&_g_=q" class="btn btn-xs btn-outline purple"><i class="fas fa-dollar-sign"></i> Order</a>
            <a href="{$securebase}/welcome.php?dad=clients&jc=quotes&a=email&id={$rows[results].id}" class="btn btn-xs btn-outline blue"><i class="fas fa-envelope"></i> Email</a>
            <a href="viewitem.php?action=quote&pdf=1&uid={U::EN($rows[results].id)}" target="_blank" rel="nofollow noopener noreferrer" class="btn btn-xs btn-outline dark ignore"><i class="fas fa-file-pdf"></i> Download</a>
            <a href="{$securebase}/welcome.php?dad=clients&jc=quotes&a=delete&id={$rows[results].id}&g7bc=1" class="btn btn-xs btn-outline red"><i class="fas fa-trash-alt"></i> Remove</a>
            </td>
            <td>{$R.phone}</td>
            <td>{$R.email}</td>
            <td><br />{Vars::Array_To_List($R.items)}</td>
          </tr>
          {assign var='i' value=$i+1} {/section}
  </tbody>
</table>
{RR::Footer()}
