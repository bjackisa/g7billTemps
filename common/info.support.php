{* ROTARY — help desk: ticket list *}
<div class="rt-status-tabs" role="tablist" aria-label="Filter tickets">
  <a href="?dad=info&jc=support&status=new" class="rt-status-tab is-new {if $smarty.request.status eq 'new'}is-active{/if}"><span class="rt-status-ico"><i class="far fa-hourglass"></i></span><span><strong data-counter="counterup" data-value="{Cur::D($stats.new)}">{Cur::D($stats.new)}</strong><small>New</small></span></a>
  <a href="?dad=info&jc=support&status=open" class="rt-status-tab is-open {if $smarty.request.status eq 'open'}is-active{/if}"><span class="rt-status-ico"><i class="far fa-folder-open"></i></span><span><strong data-counter="counterup" data-value="{Cur::D($stats.open)}">{Cur::D($stats.open)}</strong><small>Open</small></span></a>
  <a href="?dad=info&jc=support&status=hold" class="rt-status-tab is-hold {if $smarty.request.status eq 'hold'}is-active{/if}"><span class="rt-status-ico"><i class="far fa-pause-circle"></i></span><span><strong data-counter="counterup" data-value="{Cur::D($stats.hold)}">{Cur::D($stats.hold)}</strong><small>On hold</small></span></a>
  <a href="?dad=info&jc=support&status=closed" class="rt-status-tab is-closed {if $smarty.request.status eq 'closed'}is-active{/if}"><span class="rt-status-ico"><i class="far fa-check-circle"></i></span><span><strong data-counter="counterup" data-value="{Cur::D($stats.closed)}">{Cur::D($stats.closed)}</strong><small>Closed</small></span></a>
</div>

<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="far fa-life-ring"></i></span><span>Support tickets</span></h2>
    <button id="sample_editable_1_new" class="btn rt-btn-primary" onclick="location.href='{$securebase}/welcome.php?dad=info&jc=support&a=form';"><i class="fas fa-plus"></i> New ticket</button>
  </header>
  <div class="rt-list-body">
    <table class="table table-hover dt-responsive rt-table" width="100%" id="sample_1">
      <thead>
        <tr>
          <th class="all"></th>
          <th class="all">Ticket</th>
          <th class="all">Last reply</th>
          <th class="all">Service</th>
          <th class="all">Status</th>
          <th class="none">Created</th>
          <th class="none">Description</th>
          <th class="none">Last response</th>
        </tr>
      </thead>
      <tbody>
      {section name=results loop=$rows}
      {assign var='st' value=$rows[results].status}
        <tr>
          <td><span class="rt-dot rt-dot-{$st}" aria-hidden="true"></span></td>
          <td><a href="?dad=info&jc=support&a=manage&id={$rows[results].id}" class="rt-ticket-id" {Vars::Tip($smarty.const.OPEN_TICKET)}><i class="fas fa-ticket-alt"></i> HD-{$rows[results].id}</a></td>
          <td>{Vars::Date($rows[results].last_timestamp,TRUE)}</td>
          <td>{$rows[results].service}</td>
          <td><span class="rt-pill rt-pill-{$st}">{$st}</span></td>
          <td>{Vars::Date($rows[results].timestamp,TRUE)}</td>
          <td>{Vars::Clean($rows[results].description)}</td>
          <td>{Vars::Clean($rows[results].response.description)}</td>
        </tr>
      {/section}
      </tbody>
    </table>
  </div>
</section>
