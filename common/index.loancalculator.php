{* ROTARY — loan calculator results *}
<div class="rt-page-title">
  <div><span class="rt-eyebrow">Results</span><h1>Interest computations</h1></div>
  <span class="rt-badge-soft"><i class="fas fa-percent"></i> Rate: {$smarty.request.rate|default:0}%</span>
</div>
<section class="rt-summary-card rt-table-card">
  <table class="table table-hover rt-table abdi" id="abdi">
    <thead>
      <tr><th scope="col">Day</th><th scope="col">Interest</th><th scope="col">Amount</th></tr>
    </thead>
    <tbody>
      <tr><th scope="row">0</th><td>{$first_result.0}</td><td>{$first_result.1}</td></tr>
      {section name=record loop=$result}
      {assign var='K' value=$result[record]}
      <tr><th scope="row">{$K.0}</th><td>{$K.1}</td><td><strong>{$K.2}</strong></td></tr>
      {/section}
    </tbody>
  </table>
</section>
<p><a href="?dad=index&jc=loancalculator" class="btn rt-btn-soft"><i class="fas fa-redo"></i> New calculation</a></p>
