{if Agent::Info()}
<section class="portlet box rt-panel">
  <div class="portlet-title rt-panel-head">
    <div class="caption"><i class="fas fa-user-tie"></i> On behalf of an agent</div>
    <div class="tools"><a href="javascript:;" class="expand" aria-label="Toggle"></a></div>
  </div>
  <div class="portlet-body form rt-panel-body" style="display: none;">
    <p class="rt-muted">If you are placing this order or quotation on behalf of an agent, select them below.</p>
    <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label" for="rt-agent">Choose agent</label>
      <select class="form-control select2" name="agent" id="rt-agent">
        <option value="">None</option>
        {section name=results loop=$agents}
        <option value="{$agents[results].ownerid}" {if $agents[results].ownerid eq $agent_id}selected="selected"{/if}>{$agents[results].i.fname} {$agents[results].i.lname} &#9827; (P) {$agents[results].i.custom1} &#9827; (C) {$agents[results].code}</option>
        {/section}
      </select>
    </div>
  </div>
</section>
{/if}
