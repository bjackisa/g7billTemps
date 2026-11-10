{assign var='keywords' value=KB::Get(['code'=>'index.index.keywords','column'=>'body'])}
{if !empty($keywords)}<div class="rt-keywords"><p>{$keywords}</p></div>{/if}
