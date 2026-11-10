{* ROTARY — team / leadership cards *}
{assign var='_rt_lib' value=Lib::Load('users')}
{assign var='rows' value=Users::Get(['_group_'=>$group|default:'staff','groupname'=>$groupname|default:'','department'=>$department|default:'','limit'=>$limit|default:'','rows'=>1,'pag'=>1]|array_merge:Users::Clean($smarty.post|default:''))}
{if $rows|count eq 1}{assign var='rt_grid' value='rt-grid-1'}{elseif $rows|count eq 2}{assign var='rt_grid' value='rt-grid-2'}{else}{assign var='rt_grid' value=''}{/if}
{assign var='csrf' value=CSRF::Token()}
<div class="rt-grid rt-team {$rt_grid}">
{assign var='i' value=1}
{section name=results loop=$rows}
{assign var='R' value=V::D($rows[results])}
  <article class="rt-member">
    {if !empty($R.featured)}<span class="rt-card-tag rt-tag-gold"><i class="fas fa-star"></i> Featured</span>{/if}
    <div class="rt-member-photo"><img src="{$R.avatar}" alt="{$R.name}" title="{$R.name}" loading="lazy"></div>
    <h3 class="rt-member-name" title="{$R.name}">{U::L(['str'=>$R.name,'limit'=>26])}</h3>
    <p class="rt-member-role" title="{$R.jobtitle|default:'Other'}"><i class="far fa-building"></i> {U::L(['str'=>$R.jobtitle|default:'Other','limit'=>40])}</p>
    <div class="rt-member-actions">
      {if !U::F('auto',$rows[results].email)}<a href="mailto:{$rows[results].email}" class="rt-icon-btn ignore" title="Email" aria-label="Email"><i class="far fa-envelope"></i></a>{/if}
      {if !empty({$R.phone})}<a href="tel:{$R.phone}" class="rt-icon-btn ignore" title="Call" aria-label="Call"><i class="fas fa-phone-alt"></i></a>{/if}
      {if !empty({$R.about})}<a href="?dad=user&jc=list&a=open&u={$R.hash}" class="btn rt-btn-soft btn-sm"><i class="far fa-id-card"></i> Profile</a>{/if}
    </div>
  </article>
{assign var='i' value=$i+1}
{/section}
</div>
