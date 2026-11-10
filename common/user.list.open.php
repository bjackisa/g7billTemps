{* ROTARY — member profile *}
{assign var='R' value=V::D($row)}
<article class="rt-profile">
  <div class="rt-profile-hero">
    <div class="rt-member-photo rt-profile-photo"><img src="{$R.avatar}" title="{$R.name}" alt="{$R.name}" /></div>
    <div class="rt-profile-intro">
      <span class="rt-eyebrow">Member profile</span>
      <h1>{$R.name}</h1>
      {if !empty($R.jobtitle)}<p class="rt-profile-role">{$R.jobtitle}</p>{/if}
      <div class="rt-profile-meta">
        <span class="rt-badge-soft"><i class="far fa-calendar-alt"></i> {$R.timestamp}</span>
        <span class="rt-badge-soft"><i class="far fa-eye"></i> {$R.hits|number_format} hits</span>
      </div>
      <div class="rt-form-actions"><a href="{U::MR("{$base}/?dad=index&jc=contact")}" class="btn rt-btn-primary"><i class="far fa-envelope"></i> Contact us</a></div>
    </div>
  </div>
  <div class="rt-prose rt-prose-card">{$R.about}</div>
  {if !empty($row.video)}<div class="rt-promo-video rt-profile-video"><iframe src="{$row.video}" width="100%" height="500" allowfullscreen title="{$R.name}"></iframe></div>{/if}
  {if !empty($row.gallery)}
  <section class="rt-list-card">
    <header class="rt-list-head"><h2 class="rt-list-title"><span class="rt-list-ico"><i class="far fa-images"></i></span><span>Gallery</span></h2></header>
    <div class="rt-list-body portfolio-content portfolio-1">
      <div id="js-grid-juicy-projects" class="cbp">
        {section name=results loop=$row.gallery}
        {assign var='G' value=V::D($row.gallery[results])}
        {if U::F('thumbnail',$G.path)}{continue}{/if}
        <div class="cbp-item graphic">
          <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap"><img src="{$G.path}" alt="{$G.name}"></div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body"><a href="{$G.path}" class="cbp-lightbox cbp-l-caption-buttonRight btn rt-btn-gold ignore" data-title="{$G.name|ucwords}"><i class="fas fa-expand"></i> View larger</a></div>
              </div>
            </div>
          </div>
          <div class="cbp-l-grid-projects-title text-center">{$G.name}</div>
        </div>
        {/section}
      </div>
    </div>
  </section>
  {/if}
</article>
