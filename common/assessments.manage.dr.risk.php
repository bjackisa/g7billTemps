{* ROTARY — assessments · manage · dr · risk *}
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
<img src="{U::File(['file'=>'images/header.png','a'=>'path'])}"/><br>
<br>
<table class="bordered">
  <thead>
    <tr>
      <th colspan="3" style="background-color:#232164; text-align:center"><font color="#FFFFFF">{$row.title|strtoupper} ASSESSMENT REPORT</font></th>
    </tr>
  </thead>
  <tr>
    <td colspan="3"><p>THIS REPORT CARRIES THE RISK ASSESSMENT MODEL (SHOWN UNDER B BELOW) AND ALSO IMPORTS THE RESULT OF CLIENT RISK PROFILING IN THE PREVIOUS ASSESSMENT (RESULT SHOWING UNDER A BELOW). THE RECOMMENDATIONS UNDER A ARE FOR PADRE PIO's ACTION. RECOMMENSATIONS UNDER B ARE FOR THE CLIENT'S BENEFIT</p></td>
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
<p style="text-transform:uppercase"><strong>A. CLIENT PROFILE SUMMARY</strong></p>
{if $refs.stats.results.percent<=29}{assign var='client_text' value="Extreme_High_Risk"}{assign var='client_rate' value="Minimum + 3.5"}
{elseif $refs.stats.results.percent<=39}{assign var='client_text' value="Very_High_Risk"}{assign var='client_rate' value="Minimum + 3.0"}
{elseif $refs.stats.results.percent<=49}{assign var='client_text' value="High_Risk"}{assign var='client_rate' value="Minimum + 2.5"}
{elseif $refs.stats.results.percent<=59}{assign var='client_text' value="Acceptable_Moderate_Risk"}{assign var='client_rate' value="Minimum + 2.0"}
{elseif $refs.stats.results.percent<=69}{assign var='client_text' value="Medium_Risk"}{assign var='client_rate' value="Minimum + 1.5"}
{elseif $refs.stats.results.percent<=79}{assign var='client_text' value="Low_Risk"}{assign var='client_rate' value="Minimum + 1.0"}
{elseif $refs.stats.results.percent<=89}{assign var='client_text' value="Very_Low_Risk"}{assign var='client_rate' value="Minimum + 0.5"}
{elseif $refs.stats.results.percent>=90}{assign var='client_text' value="Extreme_Low_Risk"}{assign var='client_rate' value="Minimum"}{/if}
{assign var='client_color' value="{if $refs.stats.results.percent<=49}red{elseif $refs.stats.results.percent<=69}yellow{else}green{/if}"}
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="bordered">
  <tr>
    <th width="51%" scope="row"><strong>Client Risk Classification</strong></th>
    <td width="49%" style="text-align:center"><strong>Rate</strong></td>
  </tr>
  <tr bgcolor="#ECECFB">
    <td style="background-color:{$client_color}"><b>{V::RP('_',' ',$client_text)}</b></td>
    <td style="text-align:center"><b>{$client_rate}</b></td>
  </tr>
</table>
<p style="text-transform:uppercase"><strong>Overall Weight Score Result</strong></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="bordered">
  <tr>
    <th width="78%" scope="row"><strong>Factor</strong></th>
    <td width="22%" style="text-align:center"><strong>Client Risk Exposure</strong></td>
  </tr>
  {assign var='i' value=1}
  {section name=results loop=$cats}
  {assign var='R' value=V::D($cats[results])}
  {assign var='color' value="{if $R.average<=1}red{elseif $R.average<=2}yellow{elseif $R.average>2}green{/if}"}
  {assign var='text' value="{if $color=='red'}HIGH{elseif $color=='yellow'}MEDIUM{elseif $color=='green'}LOW{/if}"}
  <tr>
    <th scope="row">{$R.title}</th>
    <td bgcolor="{$color}" style="text-align:center"><strong>{$text}</strong></td>
  </tr>
  {assign var='i' value=$i+1} {/section}
</table>
<p style="text-transform:uppercase"><strong>B. RISK ASSESSMENT SCORING SHEET</strong></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="bordered">
  <tr>
    <th width="28%" scope="row"><strong>Factor Control Descriptor</strong></th>
    <td width="22%" style="text-align:center"><strong>Rating</strong></td>
  </tr>
  <tr bgcolor="#ECECFB">
    <th scope="row">Defective</th>
    <td style="text-align:center">0</td>
  </tr>
  <tr>
    <th scope="row">To Improve</th>
    <td style="text-align:center">1</td>
  </tr>
  <tr bgcolor="#ECECFB">
    <th scope="row">Acceptable</th>
    <td style="text-align:center">2</td>
  </tr>
  <tr>
    <th scope="row">Effective</th>
    <td style="text-align:center">3</td>
  </tr>
</table>
<p style="text-transform:uppercase"><strong>SAMPLE RECOMMENDATIONS GUIDE</strong></p>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="bordered">
  <tr>
    <th width="19%" scope="row"><strong>Client Risk Exposure</strong></th>
    <td width="81%"><strong>Sample recommendations</strong></td>
  </tr>
  <tr bgcolor="#ECECFB">
    <th scope="row" bgcolor="#FF0000"><p align="center">HIGH</p></th>
    <td>The client should be advised to take insurance cover in instances where risk is flagged high -as a matter of absolute necessity. Where feasible, Management should consider re-engineering the internal control system of the processes/ procedures around the business activities that feed into this particular risk (insurance product) line. Recommendations may include: - installation of fire control systems; - remodelling of buildings to prevent water intrusion, leakages of hazardous materials, to prevent break-ins, etc; - revamping motor fleet control procedures; - revising counterparty contracts to include more favorable terms; - major repairs/ changes to product assembly lines; engaging of neighboring businesses to avert shared risks (eg flood control, possible leakages from combustible fuel reserviors), etc. </td>
  </tr>
  <tr>
    <th scope="row" bgcolor="#FFFF00"><p align="center">MEDIUM</p></th>
    <td>The client should be strongly advised to take insurance cover in instances where risk is flagged medium. The risk control systems the client has in place have to be enhanced and the process monitored closely. Sometimes, a few corrections could make the risk control system satisfactory. Recommendations to the client should suggest the enhancements and corrections they need to make in what they are already implementing to be able to manage risks in their business better. </td>
  </tr>
  <tr bgcolor="#ECECFB">
    <th scope="row" bgcolor="#00FF00"><p align="center">LOW</p></th>
    <td>The client should take insurance cover if the risk is ranked low due to the low probability that an adverse event could manifest, if the event would have a huge impact were it to actually crystallize. The client may not take insurance if compoudning events contributing to the risk are both of low impact and have low probability of occurence. </td>
  </tr>
</table>
<p>Thank you for taking the assessment, we value your continued support.</p>
<p> Yours Sincerely,</p>
<img src="{$admin.signature}" {U::iSize(['i'=>$admin.signature,'t'=>200])}> <br>
{$admin.name}<br>
<strong>{$admin.designation|default:'Managing Director'}</strong>
<p><strong>[[CN]]</strong></p>
</body>
</html>
