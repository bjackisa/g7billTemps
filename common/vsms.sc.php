{* ROTARY — vsms · sc *}
{Stats::Mini()}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-calendar-check"></i></span><span>Scheduled broadcasts</span></h2>
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
              <th class="all">To</th>
              <th class="all">Message</th>
              <th class="all">Start</th>
              <th class="all text-center">Status</th>
              <th class="all"></th>
              <th class="none">From</th>
              <th class="none">Group Name</th>
              <th class="none">Date</th>
              <th class="none">End</th>
              <th class="none">Full SMS</th>
            </tr>
          </thead>
          <tbody>
          {assign var='i' value=1}
          {section name=results loop=$rows}
          {if $rows[results].status eq 'completed'}{assign var='class' value='success'}
          {elseif $rows[results].status eq 'pending'}{assign var='class' value='warning'}
          {elseif $rows[results].status eq 'pause'}{assign var='class' value='info'}
          {else}{assign var='class' value='danger'}{/if}
          <tr>
            <td class="rt-strong">{Vars::Limit($rows[results].to|default:{', '|implode:$rows[results].group},50)}</td>
            <td>{Vars::Limit($rows[results].message,50)}</td>
            <td data-sort="{$rows[results].start}"><span class="rt-tone-grass rt-strong">{Vars::Date($rows[results].start,TRUE)}</span></td>
            <td class="rt-cell-status" align="center"><span class="label label-{$class}">{$rows[results].status|ucwords}</span></td>
            <td align="right"><div class="rt-row-actions">{if $rows[results].status eq 'pending' or $rows[results].status eq 'error'}
    <button type="button" class="btn btn-xs rt-btn-soft" onclick="location.href='?dad=vsms&jc=sc&a=pause&id={$rows[results].id}';"><i class="fas fa-pause"></i> Pause</button>
    {/if}
    {if $rows[results].status eq 'pause'}
    <button type="button" class="btn btn-xs btn-default" onclick="location.href='?dad=vsms&jc=sc&a=play&id={$rows[results].id}';"><i class="fas fa-play"></i> Play</button>
    {/if}
    <button type="button" class="btn btn-xs btn-danger" onclick="location.href='?dad=vsms&jc=sc&a=delete&id={$rows[results].id}&g7bc=1';"><i class="fas fa-trash-alt"></i> Delete</button></div></td>
            <td>{Vars::Limit($rows[results].from)|default:"N/A"}</td>
            <td>{if !empty($rows[results].group)}{', '|implode:$rows[results].group}{else}N/A{/if}</td>
            <td>{Vars::Date($rows[results].timestamp,TRUE)}</td>
            <td><span class="rt-tone-cardinal rt-strong">{Vars::Date($rows[results].end,TRUE)}</span></td>
            <td><span class="rt-tone-royal">{$rows[results].message}</span></td>
          </tr>
          {assign var='i' value=$i+1} {/section}
    </tbody>
        </table>
  </div>
</section>
{include file='pagination.php'}
