{* ROTARY — clients directory *}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-address-card"></i></span><span>Clients</span></h2>
    <div class="rt-list-actions">
      <button id="sample_editable_1_new" type="button" class="btn rt-btn-primary btn-sm ignore" onclick="location.href='{$securebase}/welcome.php?dad=clients&jc=index&a=form';"><i class="fas fa-plus"></i> Add new</button>
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
          <th class="all">Name</th>
          <th class="none">ID</th>
          <th class="all">Phone</th>
          <th class="all">Email</th>
          <th class="all">Status</th>
          <th class="all"></th>
          <th class="none">Join date</th>
          <th class="none">Date of birth</th>
          <th class="none">Gender</th>
          <th class="none">Passport number</th>
          <th class="none">{Vars::ColumnName(['table'=>'directory','column'=>'config1','default'=>'Config #1'])}</th>
        </tr>
      </thead>
      <tbody>
      {section name=results loop=$rows}
      {assign var='xstatus' value=Vars::Statuses($rows[results].status,'onoff')}
      <tr>
        <td class="rt-strong">{$rows[results].fname} {$rows[results].lname}</td>
        <td class="rt-cell-muted">{$rows[results].id}</td>
        <td>{$rows[results].phone}</td>
        <td>{$rows[results].email}</td>
        <td class="rt-cell-status"><span class="label label-{$xstatus.color}">{$xstatus.text}</span></td>
        <td align="right">
          <div class="rt-row-actions">
            {if !empty($rows[results].user)}<button type="button" class="btn btn-xs rt-btn-soft" onclick="location.href='?_SUDO_=1&uid={$rows[results].user.username}&go=/';"><i class="fas fa-user-secret"></i> SUDO user</button>{/if}
            <button type="button" class="btn btn-xs btn-default" onclick="location.href='?dad=clients&jc=index&a=form&id={$rows[results].id}';"><i class="fas fa-pencil-alt"></i> Modify</button>
            <button type="button" class="btn btn-xs btn-danger" onclick="location.href='?dad=clients&jc=index&a=delete&id={$rows[results].id}&g7bc=1';"><i class="fas fa-trash-alt"></i> Delete</button>
          </div>
        </td>
        <td>{Vars::Date($rows[results].joined)}</td>
        <td>{$rows[results].dob}</td>
        <td>{$rows[results].gender|ucwords}</td>
        <td>{$rows[results].id_passport}</td>
        <td>{$rows[results].config1}</td>
      </tr>
      {/section}
      </tbody>
    </table>
  </div>
</section>
{include file='pagination.php'}
