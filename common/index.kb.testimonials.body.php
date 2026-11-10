{* ROTARY — testimonials list *}
<div class="rt-grid rt-grid-2">
  {section name=results loop=$rows}
  {assign var='R' value=V::D($rows[results])}
  <figure class="rt-quote">
    <div class="rt-quote-stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
    <blockquote class="rt-prose">{$R.body}</blockquote>
    <figcaption class="rt-quote-foot"><span class="rt-quote-author"><img class="rt-avatar" src="{$R.avatar}" title="{$R.title}" alt="{$R.title}">{$R.title}</span></figcaption>
  </figure>
  {/section}
</div>
<div class="rt-pager">{FF::Pagination()}</div>
