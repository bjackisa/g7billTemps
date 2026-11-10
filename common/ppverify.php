{* ROTARY — ppverify *}
{$header}
{$top}
<!-- Contents /s -->
{$boxtop}
<table id="mainData">
	<tr>
		<td id="tablehead">{$smarty.const.PPVERIFYTITLE}</td>
	</tr>
	<tr>
		<td class="mainTD ac">
        <p class="rt-strong ac pb-20">{$smarty.const.PPVERIFYBLURB}</div>
        <br /><br />
        <h3 class="ac pb-20">{$smarty.const.PPVERIFYYOURCHARGES}:&nbsp;<span class="red">{$vars->GetPrice($total_charge)}</span></h3>
        <br /><br />
		<p class="rt-strong ac pb-20">{$smarty.const.PPVERIFYBLURB2}</p>
        <br /><br />
        <div class="ac">
        	{$theform}
        </div>
        <br />
		<p class="ac"><a href="{$base}" class="rtrntomgmt">{$smarty.const.CANCELCLICK}</a></div>

		</td>
	</tr>
</table>
{$boxbottom}
<!-- Contents /e -->
{$bottom}
