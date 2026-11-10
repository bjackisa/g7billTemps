<!DOCTYPE html>
<html lang="{$smarty.const.CONTENTLANG|default:'en'}" dir="{$smarty.const.HTMLDIR}">
<head>
<title>{$config.pagetitle}</title>
<meta http-equiv="Content-Type" content="text/html; charset={$smarty.const.CHARSET}" />
<meta http-equiv="Content-Language" content="{$smarty.const.CONTENTLANG}" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@700;800&display=swap" rel="stylesheet" type="text/css" />
{literal}
<style>
:root { --rt-royal:#17458F; --rt-gold:#F7A81B; --rt-ink:#0B1F44; --rt-muted:#5B6B86; --rt-line:#E3E9F3; --rt-canvas:#F4F6FB; }
* { box-sizing: border-box; }
body { margin: 0; min-height: 100vh; background: var(--rt-canvas); color: var(--rt-ink); font: 15px/1.6 Inter, system-ui, sans-serif; display: grid; place-items: center; padding: 24px 16px; }
.rt-viewer { width: 100%; max-width: 860px; background: #fff; border: 1px solid var(--rt-line); border-radius: 22px; box-shadow: 0 24px 48px -28px rgba(11,31,68,.35); overflow: hidden; }
.rt-viewer-head { display: flex; align-items: center; gap: 14px; padding: 18px 22px; background: linear-gradient(120deg, #0E2D63, var(--rt-royal)); color: #fff; }
.rt-viewer-head strong { font: 800 17px/1.2 "Plus Jakarta Sans", Inter, sans-serif; }
.rt-viewer-head img { max-height: 40px; width: auto; }
.rt-viewer-head::after { content: ""; margin-left: auto; width: 34px; height: 4px; border-radius: 4px; background: var(--rt-gold); }
.rt-viewer-body { padding: 24px 22px; overflow-x: auto; }
.rt-viewer-foot { padding: 14px 22px 20px; border-top: 1px solid var(--rt-line); text-align: right; }
.rt-viewer-foot a { display: inline-block; padding: 9px 18px; border-radius: 12px; background: var(--rt-royal); color: #fff; font-weight: 700; text-decoration: none; }
.rt-viewer-foot a:hover { background: #0E2D63; }
</style>
{/literal}
</head>
<body>
<div class="rt-viewer">
  <div class="rt-viewer-head">{$image}<strong>{$smarty.const.SYSTEMVIEWER}</strong></div>
  <div class="rt-viewer-body">{$content}</div>
  <div class="rt-viewer-foot"><a href="javascript:window.close();">{$smarty.const.CLOSEWINDOW}</a></div>
</div>
</body>
</html>
