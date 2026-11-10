{* ROTARY — contactmgmte *}
{$header}
{$top}
{literal}
<script language="javascript" type="text/javascript">
function isNeeded(name,which) {
	if (name) {
		if (which == "1")  { alert("The fields {$smarty.const.JOBTITLE} and {$smarty.const.FAX} are now required!"); }
	}
}
</script>
<script language="javascript" type="text/javascript">
	window.addEvent('domready', function(){check = new FormCheck('form1', {
		display : {
			fadeDuration : 50,
			errorsLocation : 3,
			indicateErrors : 2,
			showErrors : 1
		}
	})});
</script>
{/literal}
<!-- Contents /s -->
{$boxtop}
<table id="mainData">
  <tr>
    <td id="tablehead">{$smarty.const.PMGMTTITLE}
      &nbsp;
      {$help_icon}</td>
  </tr>
  <tr>
    <td id="mainTD">
      <table class="width-99 alc">
        <tr>
          <td class="vlt">{$umenu}</td>
          <td class="width-1">&nbsp;</td>
          <td class="width-100 vlt"><!-- user menu /s -->
            <p class="ac red rt-strong">
              {$smarty.const.REQFIELDSNOTE}
            </p>
            {$msg}
            <form method="post" action="contactmgmt.php" id="form1" name="form1" onsubmit="submitonce(this); showObject(false,true);" class="awform">
              <input type="hidden" name="action" value="save" />
              <input type="hidden" name="id" value="{if !empty($smarty.request.id)}{$smarty.request.id}{/if}" />
              <input type="hidden" name="ownerid" value="{$users.id}" />
              {$boxtop}
              <fieldset>
                <legend><span class="boxlegend">{$smarty.const.CONTACTTITLE}</span></legend>
                <table class="width-100">
                  <tr>
                    <td class="ac vlt" colspan="2">{$smarty.const.CONTACTBLURB}
                      <strong>
                      {$smarty.const.PROFILEEMAIL}
                      {$users.email}
                      </strong><br />
                      <br /></td>
                  </tr>
                  <tr>
                    <td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em>
                      {$smarty.const.FRIENDLYNAME}
                      :&nbsp;</td>
                    <td><input type="text" name="name" id="aname" maxlength="60" value="{$users_contact.name}" class="validate['required'] width-75" /></td>
                  </tr>
                  <tr>
                    <td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em>
                      {$smarty.const.TYPE}
                      :&nbsp;</td>
                    <td>{html_options name=type options=$contact_type selected=$users_contact.type}</td>
                  </tr>
                  <tr>
                    <td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em>
                      {$smarty.const.ASSIGNEDTO}
                      :&nbsp;</td>
                    <td>{html_options name=config1 options=$contact_dept selected=$users_contact.config1}</td>
                  </tr>
                  <tr>
                    <td class="ar vlt width-25" nowrap="nowrap"><em class="red">*</em>
                      {$smarty.const.CONTACTINFO}
                      :&nbsp;</td>
                    <td><input type="text" name="contactinfo" id="contactinfo" maxlength="128" value="{$users_contact.contactinfo}" class="validate['required'] width-75" /></td>
                  </tr>
                </table>
              </fieldset>
              {$boxbottom}
              {$boxtop}
              <fieldset>
                <legend><span class="boxlegend">
                {$smarty.const.FINISH}
                </span></legend>
                <table class="width-100">
                  <tr>
                    <td class="ac vlt" colspan="2"><input type="submit" name="Submit" value="{$smarty.const.SUBMIT}" /></td>
                  </tr>
                </table>
              </fieldset>
              {$boxbottom}
            </form>
            <p class="center"><a href="contactmgmt.php" class="rtrntomgmt">
              {$smarty.const.CANCELCLICK}
              </a></p>
            <!-- user menu /e --></td>
        </tr>
      </table>
</td>
  </tr>
</table>
{$boxbottom}
<!-- Contents /e -->
{$bottom}
