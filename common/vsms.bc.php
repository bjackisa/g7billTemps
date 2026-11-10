{* ROTARY — SMS broadcast composer *}
{Stats::Mini()}
<section class="rt-list-card rt-sms">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-broadcast-tower"></i></span><span>SMS broadcast</span></h2>
    <span class="rt-badge-soft"><i class="fas fa-tag"></i> {Cur::XE($cost)} per SMS</span>
  </header>
  <div class="rt-list-body">
    <div class="rt-sms-intro">
      <div class="rt-secure-note"><i class="fas fa-wallet"></i><span>The cost of sending SMS is <strong>{Cur::XE($cost)}</strong> per SMS. We will charge your GWallet for processed broadcasts. Any unprocessed broadcasts due to insufficient funds will automatically be closed.</span></div>
      <div class="rt-secure-note"><i class="fas fa-globe-africa"></i><span>Don't include a ( + ) when entering the country code. All entered mobile phone numbers must carry the country code you are sending to. For example, if you are sending to a friend with mobile phone number 0712567374 in Uganda, the number to enter in the 'To' field should be <strong>256712567374</strong>.</span></div>
      <details class="rt-collapse">
        <summary><i class="fas fa-info-circle"></i> About delivery</summary>
        <div class="rt-prose">
          <p>We're a trusted SMS gateway provider with the capability to deliver local and international SMS messages securely, reliably and instantly to over six billion people worldwide. With our gateway, you can SMS-enable any application, website or system, and it’s the easiest and most affordable way to send SMS messages.</p>
          <p class="rt-tone-cardinal">We shall make all reasonable endeavours to ensure uninterrupted and continued use of this Service, however the delivery of SMS messages is largely dependent on the effective functioning of Network Operators' cellular networks, network coverage and the SMS recipient's mobile handset. We will not and cannot guarantee the availability of any Service, the delivery of SMS messages or the compatibility between any message or content format and any particular mobile handsets or mobile operating systems.</p>
        </div>
      </details>
    </div>

    <form action="{$securebase}/welcome.php" method="post" class="rt-form">
      <input type="hidden" name="dad" value="vsms" />
      <input type="hidden" name="jc" value="bc" />
      <input type="hidden" name="a" value="save" />
      <input type="hidden" name="G7BILL_SECURITY" value="FALSE" />

      <div class="rt-field-grid">
        <div class="form-group rt-ff-stack {if empty($groups)}is-wide{/if}">
          <label class="control-label rt-ff-label" for="rt-sms-to"><i class="fas fa-mobile-alt"></i> Recipients</label>
          <textarea id="rt-sms-to" class="form-control" rows="3" name="to" placeholder="256752567374,256776567374,256703567374">{$smarty.request.to|default:""}</textarea>
          <span class="help-block rt-ff-help">Up to 100 numbers, separated by a comma [,]</span>
        </div>
        {if !empty($groups)}
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label" for="multiple"><i class="fas fa-users"></i> Group(s)</label>
          <select placeholder="Select" id="multiple" name="group[]" class="form-control select2-multiple" multiple>
          {section name=results loop=$groups}
            {if $groups[results].contacts eq 0}{continue}{/if}
            <option value="{$groups[results].id}">{$groups[results].name}</option>
          {/section}
          </select>
          <span class="help-block rt-ff-help">You can send to multiple groups at once</span>
        </div>
        {/if}
        <div class="form-group rt-ff-stack is-wide">
          <label class="control-label rt-ff-label" for="maxlength_textarea"><i class="far fa-comment-dots"></i> Message <span class="required" aria-required="true">*</span></label>
          <textarea id="maxlength_textarea" class="form-control" maxlength="{$sms_message_max_characters|default:'160'}" rows="3" name="message" placeholder="Type your message up to {$sms_message_max_characters|default:'160'} characters maximum" required="required">{$smarty.post.message|default:""}</textarea>
          <div class="rt-sms-tokens">
            <span class="rt-muted">Personalise with:</span>
            <code class="rt-chip-code" title="Contact first name">[[FNAME]]</code>
            <code class="rt-chip-code" title="Contact last name">[[LNAME]]</code>
            <code class="rt-chip-code" title="Contact phone number">[[PHONE]]</code>
            <code class="rt-chip-code" title="Contact email address">[[EMAIL]]</code>
            <code class="rt-chip-code" title="Contact group name">[[GROUP]]</code>
          </div>
        </div>
        <div class="form-group rt-ff-stack">
          <label class="control-label rt-ff-label"><i class="far fa-clock"></i> Schedule</label>
          <div class="input-group date form_datetime bs-datetime" data-date-format="dd MM yyyy - HH:ii p">
            <input class="form-control" size="16" type="text" name="start[]" value="{$smarty.post.start.0|default:""}">
            <span class="input-group-addon"><button class="btn btn-default date-reset ignore" type="button" aria-label="Clear"><i class="fas fa-times"></i></button></span>
            <span class="input-group-addon"><button class="btn btn-default date-set ignore" type="button" aria-label="Pick date"><i class="fas fa-calendar-alt"></i></button></span>
          </div>
          <span class="help-block rt-ff-help">When this broadcast should go out</span>
        </div>
      </div>

      <details class="rt-collapse rt-sms-more">
        <summary><i class="far fa-calendar-plus"></i> Additional schedules <span class="rt-muted">— re-broadcast the same message</span></summary>
        <div class="rt-secure-note"><i class="fas fa-redo"></i><span>To re-schedule this message on several dates and times, define the additional dates and times below. <strong>This same message will be re-broadcast on the dates and times defined below.</strong></span></div>
        <div class="rt-sms-sched">
        {for $foo=1 to 5}
          {for $bar=1 to 3}
          <div class="form-group rt-ff-stack">
            <label class="control-label rt-ff-label">Schedule #{$foo}-{$bar}</label>
            <div class="input-group date form_datetime bs-datetime" data-date-format="dd MM yyyy - HH:ii p">
              <input class="form-control" size="16" type="text" name="start[]" value="">
              <span class="input-group-addon"><button class="btn btn-default date-reset ignore" type="button" aria-label="Clear"><i class="fas fa-times"></i></button></span>
              <span class="input-group-addon"><button class="btn btn-default date-set ignore" type="button" aria-label="Pick date"><i class="fas fa-calendar-alt"></i></button></span>
            </div>
          </div>
          {/for}
        {/for}
        </div>
      </details>

      <div class="rt-form-actions">
        <button type="submit" class="btn rt-btn-primary"><i class="fas fa-paper-plane"></i> Schedule</button>
        <button type="button" class="btn btn-default ignore">Cancel</button>
      </div>
    </form>
  </div>
</section>
