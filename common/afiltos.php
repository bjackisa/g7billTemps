{* ROTARY — afiltos *}
{$header}
{$top}
{$boxtop}
<!-- Contents /s -->
<table id="mainData">
	<tr>
		<td id="tablehead">{$smarty.const.AFTOSTITLE}</td>
	</tr>
	<tr>
		<td id="mainTD">
		<ol class="faq">
			<li>{$smarty.const.TTL1}<p>{$smarty.const.DET1}</p></li>
            <li>{$smarty.const.TTL2}<p>{$smarty.const.DET2}</p></li>
            <li>{$smarty.const.TTL3}<p>{$smarty.const.DET3}</p></li>
            <li>{$smarty.const.TTL4}<p>{$smarty.const.DET4}</p></li>
            <li>{$smarty.const.TTL5}<p>{$smarty.const.DET5}</p></li>
            <li>{$smarty.const.TTL6}<p>{$smarty.const.DET6}</p></li>
            <li>{$smarty.const.TTL7}<p>{$smarty.const.DET7}</p></li>
            <li>{$smarty.const.TTL8}<p>{$smarty.const.DET8}</p></li>
            <li>{$smarty.const.TTL9}<p>{$smarty.const.DET9}</p></li>
            <li>{$smarty.const.TTL10}<p>{$smarty.const.DET10}</p></li>
            <li>{$smarty.const.TTL11}<p>{$smarty.const.DET11}</p></li>
		</ol>
        <div align="center">
            <form action="affiliate.php" method="post">
                <p class="width-30"><input type="checkbox" name="read_tos" value="1" />{$smarty.const.AFAGREE}</p>
                <input type="hidden" name="action" value="read_tos" />
                <input type="submit" name="submit" value="Agree" />
            </form>
        </div>
		<a href="{$securebase}/affiliate.php" class="rtrntomgmt">{$smarty.const.RETURNTOAFF}</a>
		</td>
	</tr>
</table>
<!-- Contents /e -->
{$boxbottom}
{$bottom}
