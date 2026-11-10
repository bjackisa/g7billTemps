{* ROTARY — vsms · in *}
{Stats::Mini()}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-inbox"></i></span><span>Inbox</span></h2>
    <div class="rt-list-actions">
      <button id="sample_editable_1_new" type="button" class="btn rt-btn-primary btn-sm ignore" onclick="location.href='{$securebase}/welcome.php?dad=vsms&jc=bc';"><i class="fas fa-paper-plane"></i> Broadcast SMS</button>
      <div class="btn-group">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle ignore" data-toggle="dropdown"><i class="fas fa-tools"></i> Tools <i class="fas fa-angle-down"></i></button>
        <ul class="dropdown-menu pull-right">
          <li><a href="javascript:;" class="ignore"><i class="fas fa-print"></i> Print</a></li>
          <li><a href="javascript:;" class="ignore"><i class="far fa-file-pdf"></i> Save as PDF</a></li>
          <li><a href="javascript:;" class="ignore"><i class="far fa-file-excel"></i> Export to Excel</a></li>
        </ul>
      </div>
    </div>
  </header>
  <div class="rt-list-body">
    <table class="table table-hover dt-responsive rt-table" width="100%" id="sample_1">
          <thead>
            <tr>
              <th class="all">From</th>
              <th class="all">Message</th>
              <th class="all">Date</th>
              <th class="all"></th>
              <th class="none">Destination</th>
              <th class="none">Prefix</th>
              <th class="none">Message ID</th>
              <th class="none">Full SMS</th>
            </tr>
          </thead>
          <tbody>
          {assign var='i' value=1}
          {section name=results loop=$rows}
          {if $rows[results].status eq '0'}{assign var='class' value='bold'}
          {else}{assign var='class' value=''}{/if}
          <tr class="{$class}">
            <td>{$rows[results].from}</td>
            <td>{Vars::Limit($rows[results].message,50)}</td>
            <td>{Vars::Date($rows[results].timestamp,TRUE)}</td>
            <td align="center"><div class="rt-row-actions"><button type="button" class="btn btn-xs rt-btn-soft" onclick="location.href='?dad=vsms&jc=in&a=read&id={$rows[results].id}';" {if $rows[results].status eq '1'}disabled="disabled"{/if}>
    <i class="fas fa-check"></i> Read</button>
    <button type="button" class="btn btn-xs btn-danger" onclick="location.href='?dad=vsms&jc=in&a=delete&id={$rows[results].id}&g7bc=1';">
    <i class="fas fa-trash-alt"></i> Delete
    </button></div></td>
            <td>{Vars::Limit($rows[results].to)}</td>
            <td>{Vars::Limit($rows[results].prefix)}</td>
            <td>{Vars::Limit($rows[results].message_id)}</td>
            <td>{$rows[results].message}</td>
          </tr>
          {assign var='i' value=$i+1} {/section}
    </tbody>
        </table>
  </div>
</section>
{include file='pagination.php'}
