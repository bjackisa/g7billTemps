{* ROTARY — branch / club location cards *}
{if $rows|count eq 1}{assign var='rt_grid' value='rt-grid-1'}{elseif $rows|count eq 2}{assign var='rt_grid' value='rt-grid-2'}{else}{assign var='rt_grid' value=''}{/if}
<div class="rt-grid {$rt_grid}">
{assign var='i' value=1}
{section name=results loop=$rows}
{assign var='R' value=V::D($rows[results])}
  <article class="rt-card rt-branch">
    <div class="rt-card-media">
      <span class="rt-card-tag rt-tag-gold"><i class="fas fa-star"></i> Branch</span>
      <img src="{$R.header}" alt="{$R.name}" loading="lazy">
    </div>
    <div class="rt-card-body">
      <h3>{$R.name}</h3>
      <ul class="rt-info-list">
        {if !empty($R.address)}<li><span class="rt-info-ico"><i class="fas fa-map-marker-alt"></i></span><span>{$R.address}</span></li>{/if}
        <li><span class="rt-info-ico"><i class="fas fa-phone-alt"></i></span><a href="tel:{$R.phone}" class="ignore">{$R.phone}</a></li>
        <li><span class="rt-info-ico"><i class="far fa-envelope"></i></span><a href="mailto:{$R._email_}" class="ignore">{$R.email}</a></li>
      </ul>
      <div class="rt-card-actions rt-branch-actions">
        {if !empty($R.map)}<a href="{$R.map}" class="btn rt-btn-soft"><i class="far fa-map"></i> Maps</a>{/if}
        <a href="tel:{$R.phone}" class="btn rt-btn-gold ignore"><i class="fas fa-phone-alt"></i> Call</a>
        <a href="mailto:{$R._email_}" class="btn rt-btn-primary ignore"><i class="far fa-envelope"></i> Email</a>
      </div>
    </div>
  </article>
{assign var='i' value=$i+1}
{/section}
</div>
