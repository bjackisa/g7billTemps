{* ROTARY — vsms · ct *}
{Stats::Mini()}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-address-book"></i></span><span>Contacts</span></h2>
    <div class="rt-list-actions">
      <button id="sample_editable_1_new" type="button" class="btn rt-btn-primary btn-sm ignore" onclick="location.href='{$securebase}/welcome.php?dad=vsms&jc=ct&a=form';"><i class="fas fa-paper-plane"></i> Add New</button>
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
              <th class="all">Phone</th>
              <th class="all">Name</th>
              <th class="all">Group</th>
              <th class="all text-center">Status</th>
              <th class="all"></th>
              <th class="none">Timestamp</th>
              <th class="none">Email</th>
              <th class="none">Description</th>
            </tr>
          </thead>
          <tbody>
          {assign var='i' value=1}
          {section name=results loop=$rows}
          {assign var='R' value=V::D($rows[results])}
          {assign var='xstatus' value=Vars::Statuses($rows[results].status,'onoff_mini')}
          <tr>
            <td class="rt-strong">{$R.phone}</td>
            <td>{$R.fname} {$R.lname}</td>
            <td>{$R.group}</td>
            <td class="rt-cell-status" align="center"><span class="label label-{$xstatus.color}">{$xstatus.text}</span></td>
            <td align="center"><div class="rt-row-actions"><button type="button" class="btn btn-xs rt-btn-soft" onclick="location.href='?dad=vsms&jc=bc&to={$R.phone}';"><i class="fas fa-envelope"></i> SMS</button>
    <button type="button" class="btn btn-xs btn-default" onclick="location.href='?dad=vsms&jc=ct&a=form&id={$rows[results].id}';"><i class="fas fa-pencil-alt"></i> Modify</button>
    <button type="button" class="btn btn-xs btn-danger" onclick="location.href='?dad=vsms&jc=ct&a=delete&id={$rows[results].id}&g7bc=1';">
    <i class="fas fa-trash-alt"></i> Delete
    </button></div></td>
            <td><span class="rt-tone-royal">{$R.timestamp}</span></td>
            <td>{$rows[results].email}</td>
            <td>{$rows[results].description}</td>
          </tr>
          {assign var='i' value=$i+1} {/section}
    </tbody>
        </table>
  </div>
</section>
{include file='pagination.php'}
