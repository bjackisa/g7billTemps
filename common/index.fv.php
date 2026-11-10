{* ROTARY — face verification *}
<div class="rt-page-title"><div><span class="rt-eyebrow">Verification</span><h1>Face verification</h1><p class="rt-muted">We need some information regarding your transaction. After you submit it, we'll review and get back to you about its status within 1 business day.</p></div></div>
{FF::Form(['hidden'=>['dad'=>'index','jc'=>'fv','a'=>'save','G7BILL_SECURITY'=>'FALSE'],'icon'=>'fas fa-user-check','title'=>'Face Verification'])}
<div class="rt-webcam">{include file='widget.webcam.php'}</div>
<div class="form-group rt-ff-stack">
  <label class="control-label rt-ff-label"><i class="far fa-edit"></i> Special instructions</label>
  {FF::Textarea(['name'=>'description','type'=>'plain','_min_'=>1])}
</div>
<div class="rt-secure-note"><i class="fas fa-shield-alt"></i><span>By submitting your document, you agree to our <a href="/terms/" target="_blank" rel="nofollow noopener noreferrer"><strong>Terms of Service</strong></a> and you acknowledge that the documents you are submitting are correct and true.</span></div>
{FF::Form(['___'=>'close','save'=>'Save Document'])}
