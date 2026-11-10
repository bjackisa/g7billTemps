{* ROTARY — files & documents list *}
{assign var='url' value="$base/?dad=index&jc=files&subcat={$subcat.id}"}
{assign var='buttons' value="
<div class='rt-share'><span>Share</span> <a href='https://www.facebook.com/sharer/sharer.php?u={$url|urlencode}&t={$subcat.name|urlencode}' class='rt-share-btn is-fb ignore' target='_blank' rel='noopener' aria-label='Share on Facebook'><i class='fab fa-facebook-f'></i></a> <a href='whatsapp://send?text={$subcat.name|urlencode} :: {$url|urlencode}' class='rt-share-btn is-wa ignore' target='_blank' rel='noopener' aria-label='Share on WhatsApp'><i class='fab fa-whatsapp'></i></a> <a href='https://twitter.com/intent/tweet?url={$url|urlencode}&text={$subcat.name|urlencode}' class='rt-share-btn is-tw ignore' target='_blank' rel='noopener' aria-label='Share on X'><i class='fab fa-twitter'></i></a> </div>
"}
<div class="rt-page-title">
  <div><span class="rt-eyebrow">Library</span><h1>{$subcat.name|default:'Files & documents'}</h1></div>
  {$buttons}
</div>
<section class="rt-summary-card rt-table-card">
  <table class="table table-hover dt-responsive rt-table" width="100%" id="sample_3" cellspacing="0">
    <thead>
      <tr>
        <th></th>
        <th class="all">Name</th>
        <th class="min-phone-l">Date</th>
        <th class="min-tablet text-right">Action</th>
        <th class="none">Description</th>
      </tr>
    </thead>
    <tbody>
    {section name=results loop=$rows}
    {assign var='R' value=V::D($rows[results])}
      <tr>
        <th></th>
        <td data-sort="{$rows[results].name}"><a href="{$R.url}" class="rt-file-row"><span class="rt-file-ico"><i class="{File::Icon($R.type)}"></i></span><span class="rt-file-meta"><strong>{$R.name}</strong><small>{$R.downloads|number_format} downloads</small></span></a></td>
        <td data-sort="{$rows[results].start}">{U::D($rows[results].start,1)}</td>
        <td class="text-right"><a href="{$R.url}" class="btn btn-sm rt-btn-soft ignore" target="_blank" rel="nofollow noopener noreferrer"><i class="fas fa-download"></i> Download</a></td>
        <td>{$R.description|default:'N/A'}</td>
      </tr>
    {/section}
    </tbody>
  </table>
</section>
