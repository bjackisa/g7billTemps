{* ROTARY — help desk: ticket summary *}
{assign var='R' value=V::D($row)}
<section class="rt-ticket-head">
  <div class="rt-ticket-head-main">
    <a href="?dad=info&jc=support" class="rt-link-arrow rt-back"><i class="fas fa-arrow-left"></i> All tickets</a>
    <h1><span class="rt-ticket-id is-lg"><i class="fas fa-ticket-alt"></i> HD-{$row.id}</span> {if !empty($row.item_type)}[{$row.item_type|ucwords}] {/if}{$row.service|default:'Support request'}</h1>
    <div class="rt-ticket-meta">
      <span class="rt-pill rt-pill-{$row.status}">{$row.status}</span>
      <span><i class="far fa-calendar"></i> Created {Vars::Date($row.timestamp,TRUE)}</span>
      <span><i class="far fa-clock"></i> Last response {Vars::Date($row.last_timestamp,TRUE)}</span>
    </div>
  </div>
  <div class="rt-ticket-head-side">
    <a href="tel:[[CP]]" class="btn rt-btn-soft"><i class="fas fa-phone-alt"></i> [[CP]]</a>
    <a href="?dad=info&jc=support&a=close&id={$row.id}" class="btn btn-default confirm"><i class="far fa-check-circle"></i> Close ticket</a>
  </div>
  <dl class="rt-ticket-facts">
    <div><dt>Category</dt><dd>{V::G("description","helpdesk_categories","`id`='{$row.cat}'")|default:'N/A'}</dd></div>
    <div><dt>Department</dt><dd>{$row.department|default:'N/A'}</dd></div>
    <div><dt>Assigned to</dt><dd>{if !empty($R.assigned)}{$R.assigned.name}{else}Level 2 Support Agent{/if}</dd></div>
    <div><dt>Status</dt><dd>{$row.status|ucwords}</dd></div>
  </dl>
</section>
