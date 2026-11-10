{* ROTARY — share bar *}
<div class="rt-share"><span>Share</span>
<a href='https://www.facebook.com/sharer/sharer.php?u={$P.url|urlencode}&t={$P.title|urlencode}' class='rt-share-btn is-fb ignore' target='_blank' rel='noopener' aria-label='Share on Facebook'><i class='fab fa-facebook-f'></i></a>
<a href='whatsapp://send?text={$P.title|urlencode}: {$P.url|urlencode}&image={$P.image|default:''}' class='rt-share-btn is-wa ignore' target='_blank' rel='noopener' aria-label='Share on WhatsApp'><i class='fab fa-whatsapp'></i></a>
<a href='https://twitter.com/intent/tweet?url={$P.url|urlencode}&text={$P.title|urlencode}' class='rt-share-btn is-tw ignore' target='_blank' rel='noopener' aria-label='Share on X'><i class='fab fa-twitter'></i></a>
</div>
