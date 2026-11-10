{* ROTARY — product cards *}
{if $rows|count eq 1}{assign var='rt_grid' value='rt-grid-1'}{elseif $rows|count eq 2}{assign var='rt_grid' value='rt-grid-2'}{else}{assign var='rt_grid' value=''}{/if}
<div class="rt-grid {$rt_grid}">
{assign var='i' value=1}
{section name=results loop=$rows}
{assign var='R' value=V::D($rows[results])}
{if empty($rows[results].package.name)}{continue}{/if}
  <article class="rt-card">
    <a href="#" class="rt-card-media"><img src="{$R.thumbnail}" alt="{$rows[results].package.name}" loading="lazy"></a>
    <div class="rt-card-body">
      <h3>{$rows[results].package.name}</h3>
      <p>{Vars::Limit(Vars::Clean($R.package.description|strip_tags),180)}</p>
      <form action="/" method="post" class="rt-card-actions">
        <input type="hidden" name="G7BILL_SECURITY" value="FALSE" />
        <input type="hidden" name="dad" value="index" />
        <input type="hidden" name="jc" value="cart" />
        <input type="hidden" name="item_id" value="{$rows[results].package.id}" />
        <input type="hidden" name="item_type" value="package" />
        <button type="submit" class="btn rt-btn-gold">Join Investment <i class="fas fa-arrow-right"></i></button>
      </form>
    </div>
  </article>
{assign var='i' value=$i+1}
{/section}
</div>
