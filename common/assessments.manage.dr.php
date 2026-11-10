{* ROTARY — assessments · manage · dr *}
<!DOCTYPE html>
<html>
<head>
<title>Assessment Report :: {$row.title}</title>
<style>
body {
	width: 98%;
	margin: 0px auto;
	font-family: 'trebuchet MS', 'Lucida sans', Arial;
	font-size: 14px;
}
table {
 *border-collapse: collapse; /* IE7 and lower */
	border-spacing: 0;
	width: 100%;
}
.bordered {
	border: solid #232164 1px;
}
.bordered td, .bordered th {
	border-left: 1px solid #ccc;
	border-top: 1px solid #ccc;
	padding: 10px;
	text-align: left;
}
</style>
</head>

<body>
<img src="{U::File(['file'=>'images/header.png','a'=>'path'])}"/><br><br>
<table class="bordered">
  <thead>
    <tr>
      <th colspan="3" style="background-color:#232164; text-align:center"><font color="#FFFFFF">{$row.title|strtoupper} ASSESSMENT REPORT</font></th>
    </tr>
  </thead>
  <tr>
    <td colspan="3"><p>******[Pre-Report Text]******</p></td>
  </tr>
  <tr bgcolor="#ECECFB">
    <td width="45%">Name</td>
    <td width="110%" colspan="2"><b>{$user.name}</b></td>
  </tr>
  <tr>
    <td>Email</td>
    <td colspan="2"><strong>{$user.email}</strong></td>
  </tr>
  <tr bgcolor="#ECECFB">
    <td>Phone</td>
    <td colspan="2"><strong>{$user.phone}</strong></td>
  </tr>
</table>
<p style="text-transform:uppercase"><strong>Overall Weight Score Result</strong></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="bordered">
        <tr>
          <th width="29%" scope="row"><strong>Factor</strong></th>
          <td width="27%"><strong>Factor Weighted Rating</strong></td>
          <td width="22%"><strong>Overall Weight</strong></td>
          <td width="22%"><strong>Overall Score</strong></td>
        </tr>
    {assign var='score_total' value=0}
    {assign var='i' value=1}
    {section name=results loop=$cats}
    {assign var='R' value=V::D($cats[results])}
    {assign var='score_total' value=($score_total+$R.score_overal)}
    {assign var='percent_total' value=($percent_total+$R.percent)}
        <tr>
          <th scope="row">{$R.title}</th>
          <td>{$R.weight}</td>
          <td>{$R.score}</td>
          <td><strong>{$R.score_overal}</strong></td>
        </tr>
    {assign var='i' value=$i+1} {/section}
        <tr>
          <th colspan="2" rowspan="2" scope="row">&nbsp;</th>
          <td bgcolor="#ECECFB">Weighted Score</td>
          <td bgcolor="#ECECFB"><strong>{$score_total}</strong></td>
        </tr>
        <tr>
          <td bgcolor="#ECECFB"><strong>Percentage Score </strong></td>
          <td bgcolor="#ECECFB"><strong><font color="{if $percent_total>50}#009900{else}#FF0000{/if}">{Cur::D($percent_total)}%</font></strong></td>
        </tr>
      </table>
<p style="text-transform:uppercase"><strong>Overall Risk Score Scale and Applicable Interest</strong></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="bordered">
        <tr>
          <th width="28%" scope="row"><strong>Target  Score </strong></th>
          <td width="50%"><strong>Risk Classification </strong></td>
          <td width="22%"><strong>Rate </strong></td>
        </tr>
        <tr bgcolor="#ECECFB">
          <th scope="row">90-100 </th>
          <td>Extreme Low Risk </td>
          <td>Minimum </td>
        </tr>
        <tr>
          <th scope="row">80-89</th>
          <td>Very Low Risk</td>
          <td>Minimum + 0.5</td>
        </tr>
        <tr bgcolor="#ECECFB">
          <th scope="row">70-79</th>
          <td>Low Risk</td>
          <td>Minimum + 1.0 </td>
        </tr>
        <tr>
          <th scope="row">60-69</th>
          <td>Medium Risk</td>
          <td>Minimum + 1.5</td>
        </tr>
        <tr bgcolor="#ECECFB">
          <th scope="row">50-59</th>
          <td>Acceptable-Moderate Risk</td>
          <td>Minimum + 2.0</td>
        </tr>
        <tr>
          <th scope="row">40-49</th>
          <td>High Risk (needs improvement)</td>
          <td>Minimum + 2.5</td>
        </tr>
        <tr bgcolor="#ECECFB">
          <th scope="row">30-39</th>
          <td>Very High Risk (needs improvement)</td>
          <td>Minimum + 3.0</td>
        </tr>
        <tr>
          <th scope="row">0-29</th>
          <td>Extreme High Risk</td>
          <td>Minimum + 3.5</td>
        </tr>
      </table>
<p>******[Post-Report Text]*****</p>
      <p>Thank you for taking the assessment, we value your continued support.</p>
      <p> Yours Sincerely,</p>
      <img src="{$admin.signature}" {U::iSize(['i'=>$admin.signature,'t'=>200])}> <br>
      {$admin.name}<br>
      <strong>{$admin.designation|default:'Managing Director'}</strong>
      <p><strong>[[CN]]</strong></p>
</body>
</html>
