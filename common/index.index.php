{* ROTARY — home page composition (same widgets/order as the system home) *}
{assign var='iih' value=KB::Get(['code'=>'index.index.header','limit'=>1])}
{if !empty($news)}{include file="{Vars::LoadTemp('widget.news')}"}{else}{include file="{Vars::LoadTemp('widget.slides')}"}{/if}
{include file="{Vars::LoadTemp("{if U::G("id","kb","`code`='index.index.header'")}widget.about{else}widget.about.default{/if}")}"}
{include file="{Vars::LoadTemp('widget.packages')}"}
{include file="{Vars::LoadTemp('widget.testimonials')}"}
{include file="{Vars::LoadTemp('widget.logos')}"}
{include file="{Vars::LoadTemp('widget.keywords')}"}
