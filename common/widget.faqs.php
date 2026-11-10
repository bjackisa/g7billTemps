{* ROTARY — FAQ accordion *}
<section class="rt-faq">
  <div class="rt-section-head rt-left"><span class="rt-eyebrow">Help</span><h2>Frequently asked questions</h2></div>
  <div class="panel-group accordion rt-accordion" id="accordion1">
  {assign var='i' value=1}
  {section name=results loop=$faqs}
  {assign var='R' value=V::D($faqs[results])}
    <div class="panel rt-acc-item">
      <div class="panel-heading">
        <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_{$R.id}">{$R.title}<span class="rt-acc-ico" aria-hidden="true"></span></a></h4>
      </div>
      <div id="collapse_{$R.id}" class="panel-collapse collapse">
        <div class="panel-body rt-prose">{$R.body}</div>
      </div>
    </div>
  {assign var='i' value=$i+1}
  {/section}
  </div>
</section>
