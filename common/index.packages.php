{* ROTARY — packages listing *}
{include file="{Vars::LoadTemp('widget.packages.1')}"}
<div class="rt-page-title">
  <div>
    <span class="rt-eyebrow">{if !empty($product.name)}{$product.name}{else}Get involved{/if}</span>
    <h1>{if !empty($PAGE_TITLE)}{$PAGE_TITLE|ucwords}{else}Packages &amp; programmes{/if}</h1>
  </div>
  <a href="/?dad=index&jc=cart" class="btn rt-btn-soft"><i class="fas fa-shopping-bag"></i> View cart</a>
</div>
{include file="{Vars::LoadTemp('index.packages.header')}"}
{include file="{Vars::LoadTemp('index.packages.body')}"}
{include file="{Vars::LoadTemp('index.packages.footer')}"}
{include file="{Vars::LoadTemp('index.packages.faqs')}"}
