{* ROTARY — directory header + search *}
<div class="rt-page-title">
  <div><span class="rt-eyebrow">Directory</span><h1>{$info.name}</h1><div class="rt-muted">{$info.description}</div></div>
</div>
<form action="/" name="search" method="post" class="rt-dir-search">
  <input type="hidden" name="dad" value="user" />
  <input type="hidden" name="jc" value="list" />
  <input type="hidden" name="a" value="report" />
  <input type="hidden" name="csrf" value="{CSRF::Token()}" />
  <div class="rt-searchbox rt-searchbox-sm">
    <i class="fas fa-search"></i>
    <input type="text" class="form-control" name="name" value="{$smarty.request.name|default:''}" placeholder="Search members…" aria-label="Search">
    <button class="btn rt-btn-primary" type="submit" name="search" value="search">Search</button>
  </div>
</form>
