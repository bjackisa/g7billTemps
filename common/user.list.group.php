{* ROTARY — directory group *}
{assign var='url' value="$base/?dad=user&jc=list&a=group&id={$smarty.request.id}"}
<div class="rt-page-title">
  <div><span class="rt-eyebrow"><i class="fas fa-users"></i> Directory</span><h1>{$group.name}</h1></div>
  <div class="rt-share">
    <a href="https://www.facebook.com/sharer/sharer.php?u={$url|urlencode}&t={$subcat.name|urlencode}" class="rt-share-btn is-fb ignore" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
    <a href="whatsapp://send?text={$subcat.name|urlencode} :: {$url|urlencode}" class="rt-share-btn is-wa ignore" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i><span>WhatsApp</span></a>
    <a href="https://twitter.com/intent/tweet?url={$url|urlencode}&text={$subcat.name|urlencode}" class="rt-share-btn is-tw ignore" target="_blank" rel="noopener"><i class="fab fa-twitter"></i><span>Tweet</span></a>
  </div>
</div>
{if !empty($group.description)}<div class="rt-secure-note"><i class="fas fa-info-circle"></i><span>{$group.description}</span></div>{/if}
<section class="rt-list-card">
  <header class="rt-list-head">
    <h2 class="rt-list-title"><span class="rt-list-ico"><i class="fas fa-list"></i></span><span>Members</span></h2>
  </header>
  <div class="rt-list-body">
    <table class="table table-hover dt-responsive rt-table" width="100%" id="sample_3" cellspacing="0">
      <thead>
        <tr>
          <th></th>
          <th class="all">Name</th>
          <th class="min-phone-l">Phone</th>
          <th class="min-tablet">Service offered</th>
          <th class="min-tablet">Address</th>
          <th class="none">Email</th>
          <th class="none">Sub-county</th>
          <th class="none">District</th>
          <th class="none">Region</th>
          <th class="none">Country</th>
        </tr>
      </thead>
      <tbody>
      {section name=results loop=$rows}
      {assign var='R' value=V::D($rows[results])}
      <tr>
        <th></th>
        <td class="rt-strong" data-sort="{$R.fname}">{$R.fname} {$R.mname} {$R.lname}</td>
        <td class="rt-tone-royal rt-strong" data-sort="{$R.phone}">{$R.phone|default:'N/A'}</td>
        <td>{$R.jobtitle|default:'N/A'}</td>
        <td>{$R.add1|default:'N/A'}{if !empty($R.add2)}, {$R.add2}{/if}{if !empty($R.city)}, {$R.city}{/if}</td>
        <td>{$R.email}</td>
        <td>{$R._sub_county_.sname|default:'N/A'}</td>
        <td>{$R._district_.sname|ucwords}</td>
        <td>{$R._region_.sname|ucwords}</td>
        <td>{$R.country}</td>
      </tr>
      {/section}
      </tbody>
    </table>
  </div>
</section>
