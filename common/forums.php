{* ROTARY — forums *}
{$header}
{$top}
{$boxtop}
<!-- Contents /s -->
<table id="mainData">
  <tr>
    <td id="tablehead">{ucwords($smarty.const.FORUMS)}&nbsp;{$help_icon}</td>
  </tr>
  <tr>
    <td id="mainTD"> {Vars::EchoArray($msg)}
      <table class="width-99 alc">
        <tr>
          <td class="vlt">{$umenu}</td>
          <td class="width-1">&nbsp;</td>
          <td class="width-100 vlt">{$content}</td>
        </tr>
      </table></td>
  </tr>
</table>
<!-- Contents /e -->
{$boxbottom}
{$bottom}
