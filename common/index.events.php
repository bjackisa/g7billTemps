{* ROTARY — events check-in *}
<section class="rt-event-gate">
  <div class="rt-event-gate-art">
    <span class="rt-card-icon"><i class="far fa-calendar-check"></i></span>
    <span class="rt-eyebrow">Events</span>
    <h1>{$row.header|default:"Events Tool"}</h1>
    <p>Record your attendance and service hours. Start by entering your username.</p>
  </div>
  <form action="{$securebase}" method="post" class="rt-event-gate-form rt-form" enctype="multipart/form-data">
    <input type="hidden" name="dad" value="index" />
    <input type="hidden" name="jc" value="events" />
    <input type="hidden" name="a" value="save" />
    <input type="hidden" name="event" value="{$smarty.request.event|default:''}" />
    <div class="form-group rt-ff-stack">
      <label class="control-label rt-ff-label" for="rt-ev-user">Your username</label>
      <div class="input-icon rt-input"><i class="far fa-user"></i>
        <input id="rt-ev-user" class="form-control placeholder-no-fix" type="text" value="" placeholder="Email, account number or OwnerID" name="username" required="required" autofocus onchange="makeReadonly(event)" />
      </div>
      {if empty($smarty.post.event)}<span class="help-block rt-ff-help"><i class="fas fa-info-circle"></i> It's okay if you don't have an event number. Just click continue.</span>{/if}
    </div>
    <button type="submit" class="btn btn-lg btn-block rt-btn-gold">Continue <i class="fas fa-arrow-right"></i></button>
  </form>
</section>
<script type="text/javascript">
function makeReadonly(event) {
  if (event.target.value.trim() !== "") {
    event.target.readOnly = true;
  }
}
</script>
