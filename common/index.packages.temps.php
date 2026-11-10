{* ROTARY — bulk upload templates *}
<section class="rt-summary-card">
  <header class="rt-card-headline">
    <h2><i class="fas fa-file-csv"></i> Bulk upload templates</h2>
  </header>
  <p class="rt-muted">Download the template for the package you want to upload in bulk, fill it in and upload it from your dashboard.</p>
  <ul class="rt-filelist">
    {section name=results loop=$rows}
    {assign var='R' value=V::D($rows[results])}
    <li>
      <span class="rt-file-ico"><i class="fas fa-file-csv"></i></span>
      <span class="rt-file-meta"><strong>{$R.name}</strong><small>{$R._product_.name}</small></span>
      <a href="{$securebase}/downloads/{$R.temp_upload}" class="btn btn-sm rt-btn-soft ignore" target="_blank" rel="nofollow noopener noreferrer"><i class="fas fa-download"></i> Download</a>
    </li>
    {/section}
  </ul>
  {$buttons}
</section>
