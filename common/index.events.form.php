{* ROTARY — event capture form *}
<div class="rt-page-title"><div><span class="rt-eyebrow">Events</span><h1>Event capture form</h1></div></div>
<section class="portlet box rt-panel rt-formcard">
  <div class="portlet-title rt-panel-head">
    <div class="caption"><i class="fas fa-heartbeat"></i> Your Rotary involvement</div>
    <div class="tools"><a href="javascript:;" class="collapse" aria-label="Toggle"></a></div>
  </div>
  <div class="portlet-body form rt-panel-body">
    <div class="note note-info"><p>Fill in the form below to tell us about your Rotary involvement.</p></div>
    <form action="{$securebase}" method="post" class="horizontal-form rt-form" enctype="multipart/form-data">
      <input type="hidden" name="dad" value="index" />
      <input type="hidden" name="jc" value="events" />
      <input type="hidden" name="a" value="save" />
      <input type="hidden" name="type" value="event" />
      <input type="hidden" name="G7BILL_SECURITY" value="FALSE" />
      <input type="hidden" name="event" value="{$smarty.request.event|default:''}" />
      <input type="hidden" name="email" value="{$smarty.request.email|default:''}" />
      <div class="form-body">
        <div class="rt-field-grid">
          {if empty($user)}
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label"><i class="far fa-user"></i> Name <span class="required">*</span></label>{FF::Text(['name'=>'uname','value'=>$smarty.post.uname|default:'','required'=>1,'_min_'=>1,'icon'=>'fas fa-user','title'=>'Name'])}<span class="help-block rt-ff-help">Enter your name</span></div>
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label"><i class="fas fa-phone-alt"></i> Phone <span class="required">*</span></label>{FF::Text(['name'=>'phone','value'=>$smarty.post.phone|default:'','required'=>1,'_min_'=>1,'icon'=>'fas fa-phone'])}<span class="help-block rt-ff-help">Enter your phone number</span></div>
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label"><i class="far fa-envelope"></i> Email</label>{FF::Text(['name'=>'email','value'=>$smarty.post.email|default:'','_min_'=>1,'icon'=>'fas fa-user'])}<span class="help-block rt-ff-help">Enter your email address</span></div>
          {/if}
          {if empty($smarty.post.event)}
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label"><i class="far fa-map"></i> Event name</label>{FF::Select(['name'=>'cat','value'=>$smarty.post.cat|default:'','options'=>$events,'_min_'=>1,'assoc'=>1])}<span class="help-block rt-ff-help">Name or location of the event</span></div>
          <div class="form-group rt-ff-stack {if !empty($smarty.post.event)}hide{/if}"><label class="control-label rt-ff-label"><i class="far fa-calendar"></i> Event date</label>{FF::Date(['name'=>'timestamp','value'=>$smarty.post.timestamp|default:'','_min_'=>1])}<span class="help-block rt-ff-help">Date of the event</span></div>
          <div class="form-group rt-ff-stack {if !empty($smarty.post.event)}hide{/if}"><label class="control-label rt-ff-label"><i class="far fa-clock"></i> Hours</label>{FF::Text(['name'=>'hours','value'=>$smarty.post.hours|default:'1','_min_'=>1,'icon'=>'fas fa-clock'])}<span class="help-block rt-ff-help">Number of hours spent</span></div>
          <div class="form-group rt-ff-stack {if !empty($smarty.post.event)}hide{/if}"><label class="control-label rt-ff-label"><i class="far fa-file"></i> Attachment</label>{FF::File(['name'=>'file[]','icon'=>'fa fa-file','_min_'=>1])}<span class="help-block rt-ff-help">Attach any supporting files</span></div>
          {/if}
          {if E::V('tools:events:form')}
          {if U::FD('clubs',E::V('tools:events:form'))}
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label"><i class="fas fa-home"></i> Rotary / Rotaract club</label>{FF::Select(['name'=>'club','value'=>$smarty.post.club,'table'=>'item_info','column'=>'item_name','where'=>"`item_group`='clubs' and `status`='on' and `cid`='{$config.id}'",'order'=>"order by `item_name` ASC",'_min_'=>1])}<span class="help-block rt-ff-help">Please choose a club</span></div>
          {/if}
          {if U::FD('groups',E::V('tools:events:form'))}
          <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label"><i class="fas fa-users"></i> Group</label>{FF::Select(['name'=>'group','value'=>$smarty.post.group|default:'','table'=>'groups','column'=>'name','where'=>"`status`='on' and `cid`='{$config.id}' and `perms`='all'",'icon'=>'fa fa-user','_min_'=>1])}<span class="help-block rt-ff-help">Please choose a group</span></div>
          {/if}
          {/if}
          <div class="form-group rt-ff-stack is-wide"><label class="control-label rt-ff-label"><i class="far fa-edit"></i> Comments</label>{FF::Textarea(['name'=>'description','type'=>'plain','_min_'=>1])}<span class="help-block rt-ff-help">Enter any additional information</span></div>
        </div>
      </div>
      <div class="form-actions rt-form-actions">
        <button type="reset" class="btn btn-default"><i class="fas fa-redo"></i> Reset</button>
        <button type="submit" name="submit" class="btn rt-btn-primary"><i class="far fa-save"></i> Save</button>
      </div>
    </form>
  </div>
</section>
