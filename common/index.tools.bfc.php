{* ROTARY — beneficiary fund calculator *}
{if !empty($smarty.request.curriculum) and $smarty.request.curriculum eq 'international'}{assign var='classes' value=$classes_international}{else}{assign var='classes' value=$classes_local}{/if}
<div class="rt-page-title"><div><span class="rt-eyebrow">Tools</span><h1>Beneficiary fund calculator</h1><p class="rt-muted">Estimate how much of your salary you may need to contribute towards the Beneficiary Fund.</p></div></div>
<div class="rt-cart">
  <form action="/" method="post" class="rt-prose-card rt-form" enctype="multipart/form-data">
    <input type="hidden" name="dad" value="index" />
    <input type="hidden" name="jc" value="tools" />
    <input type="hidden" name="a" value="bfc" />
    <div class="rt-field-grid">
      <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label"><i class="fas fa-flag"></i> Curriculum</label>{FF::Select(['name'=>'curriculum','value'=>$smarty.request.curriculum|default:'local','options'=>['local','international'],'_min_'=>1,'required'=>1,'other'=>'onchange="window.location = \'?dad=index&jc=tools&a=bfc&curriculum=\' + this.value;"'])}<span class="help-block rt-ff-help">Education curriculum</span></div>
      <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label"><i class="fas fa-school"></i> Current class</label>{FF::Select(['name'=>'class_current','value'=>$smarty.post.class_current|default:'1','title'=>'Current Class','options'=>$classes,'_min_'=>1,'required'=>1,'assoc'=>1])}<span class="help-block rt-ff-help">The beneficiary's current class</span></div>
      <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label"><i class="fas fa-graduation-cap"></i> Education goal</label>{FF::Select(['name'=>'class_final','value'=>$smarty.post.class_final|default:'19','title'=>'Education Goal','options'=>$tertiaries,'_min_'=>1,'required'=>1,'assoc'=>1])}<span class="help-block rt-ff-help">Education goal to be attained</span></div>
      <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label"><i class="fas fa-coins"></i> Termly school fees</label>{FF::Text(['name'=>'fees_current','value'=>$smarty.post.fees_current,'title'=>'Termly School Fees','icon'=>'fas fa-coins','_min_'=>1,'class'=>'money'])}<span class="help-block rt-ff-help">Cost of school fees</span></div>
      <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label"><i class="fas fa-map-signs"></i> Other school expenses</label>{FF::Text(['name'=>'fees_current_other','value'=>$smarty.post.fees_current_other,'title'=>'Other School Expenses','icon'=>'fas fa-coins','_min_'=>1,'class'=>'money1'])}<span class="help-block rt-ff-help">Other school requirements per term</span></div>
      <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label"><i class="fas fa-heartbeat"></i> Annual medical charges</label>{FF::Text(['name'=>'fees_medical','value'=>$smarty.post.fees_medical,'title'=>'Annual Medical Charges','icon'=>'fas fa-heart','_min_'=>1,'class'=>'money2'])}<span class="help-block rt-ff-help">Current medical costs per annum</span></div>
    </div>
    <div class="rt-form-actions" style="margin:0 calc(clamp(20px,3vw,34px) * -1) calc(clamp(20px,3vw,34px) * -1)">
      <button type="reset" class="btn btn-default"><i class="fas fa-redo"></i> Reset</button>
      <button type="submit" name="submit" value="Save Configuration" class="btn rt-btn-primary"><i class="fas fa-calculator"></i> Save &amp; compute</button>
    </div>
  </form>
  <aside class="rt-cart-summary">
    <div class="rt-summary-card">
      <h2>Your estimate</h2>
      {if !empty($smarty.request.class_final)}
      <dl class="rt-summary-lines">
        <div><dt><i class="fas fa-school"></i> Education period</dt><dd>{Cur::D($smarty.request.school_years)} terms</dd></div>
        <div><dt><i class="fas fa-notes-medical"></i> Medical fees</dt><dd>{Cur::Xe($smarty.request.medical_fees)}</dd></div>
        <div><dt><i class="fas fa-coins"></i> School fees</dt><dd>{Cur::Xe($smarty.request.school_fees)}</dd></div>
        <div class="rt-summary-total"><dt>Lump sum</dt><dd><span id="mt-target-3">{Cur::Xe($smarty.request.school_fees+$smarty.request.medical_fees)}</span> <a href="javascript:;" class="mt-clipboard rt-icon-action rt-icon-sm" data-clipboard-action="copy" data-clipboard-target="#mt-target-3" aria-label="Copy"><i class="far fa-copy"></i></a></dd></div>
      </dl>
      {else}
      <div class="rt-empty" style="padding:26px 10px;border:0"><div class="rt-empty-ico"><i class="fas fa-calculator"></i></div><p>Fill in the form and compute to see your estimate here.</p></div>
      {/if}
    </div>
  </aside>
</div>
