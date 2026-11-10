{* ROTARY — users · reports · qrcodes *}
<style>
body {
    font-family: Arial, sans-serif;
    color: #000;
    text-align: center;
    font-size: 29px;
    font-weight: bolder;
}
hr {
    border-top: 2px solid;
}
/* Force each record to start on a new page */
.page {
    page-break-after: always;
}
</style>
{assign var='i' value=1}
{section name=results loop=$P.rows}
  {assign var='R' value=V::D($P.rows[results])}
  <div class="page">
  	<font size="{if $R.name|strlen<=18}80{else}50{/if}px">{$R.name}</font><br>
    <img src="{$securebase}/plugins/qr/?text={$R.username}" width="100%">
    <hr>[[CN]]<br>Phone: [[CP]]
  </div>
{assign var='i' value=$i+1}
{/section}
