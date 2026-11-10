{* ROTARY — obituary cards *}
{assign var='_rt_lib' value=Lib::Load('obituaries')}
{assign var='rows' value=Obituaries::Get(['limit'=>$limit|default:''])}
{assign var='csrf' value=CSRF::Token()}
{if $rows|count>0}
<section class="rt-section-tight">
  <div class="rt-secure-note rt-note-memorial"><i class="fas fa-dove"></i><span><strong>Recent obituaries and services.</strong> [[CN]] is honoured to publish full obituaries at no cost to families. Funeral homes can send notices to [[CE]].</span></div>
  <div class="rt-grid {if $rows|count eq 1}rt-grid-1{elseif $rows|count eq 2}rt-grid-2{/if}">
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  {assign var='length' value="{if $R.name|strlen>35}39{/if}"}
    <article class="rt-card rt-memorial">
      <a href="?dad=index&jc=obituaries&a=open&id={$R.id}" class="rt-card-media"><img src="{$R.thumbnail}" alt="{$R.name}" title="{$R.name}" loading="lazy"></a>
      <div class="rt-card-body">
        <h3><a href="?dad=index&jc=obituaries&a=open&id={$R.id}">{$R.name}</a></h3>
        <p class="rt-memorial-dates"><i class="far fa-calendar-alt"></i> {if !empty($rows[results].dob)}{$rows[results].dob|date_format} &ndash; {/if}{$rows[results].dod|date_format}</p>
        <p>{U::L(['str'=>$R.description|strip_tags,'limit'=>(177-$length|default:0)])}</p>
        <div class="rt-card-actions">
          <a href="?dad=index&jc=obituaries&a=open&id={$R.id}" class="btn rt-btn-soft">Read more</a>
          <a href="?dad=index&jc=cart&a=add&config1=data&config2={$R.id}&package={$R.package.give.id}&obituary=[{$R.id}] {$R.name|urlencode}" class="btn rt-btn-gold"><i class="fas fa-hand-holding-heart"></i> Show support</a>
        </div>
      </div>
    </article>
  {/section}
  </div>
</section>
{/if}
