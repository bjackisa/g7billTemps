<section class="portlet box rt-panel">
  <div class="portlet-title rt-panel-head">
    <div class="caption"><i class="far fa-address-book"></i> My client directory</div>
    <div class="tools"><a href="javascript:;" class="collapse" aria-label="Toggle"></a></div>
  </div>
  <div class="portlet-body form rt-panel-body">
    <p class="rt-muted">If you are placing this order or quotation on behalf of a client, create them in your address book (if not already) and select them below.</p>
    <div class="rt-inline-form">
      <div class="form-group rt-ff-stack rt-grow">
        <label class="control-label rt-ff-label" for="rt-dir">Choose client</label>
        <select class="form-control select2" name="dir" id="rt-dir">
          <option value="">None</option>
          {section name=results loop=$directory}
          <option value="{$directory[results].id}" {if $directory[results].id eq $smarty.request.dir|default:''}selected="selected"{/if}>{$directory[results].fname} {$directory[results].lname} &#9827; (T) {$directory[results].phone}</option>
          {/section}
        </select>
      </div>
      <a href="welcome.php?dad=account&jc=profile&hs=ab&a=form&sub={U::EN('/?dad=index&jc=checkout')}" class="btn rt-btn-soft"><i class="fas fa-plus"></i> New client</a>
    </div>
  </div>
</section>
