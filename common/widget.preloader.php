{* ROTARY — page transition loader (same triggers as the shared loader; null-safe class checks) *}
{if !empty($smarty.const._IGNORE_)}{else}
<style id="compiled-css" type="text/css">
.loader { position: fixed; inset: 0; z-index: 10000000; background: rgba(7, 24, 51, .55); -webkit-backdrop-filter: blur(4px); backdrop-filter: blur(4px); display: flex; align-items: center; justify-content: center; }
.loader::before { content: ""; width: 64px; height: 64px; border-radius: 50%; border: 5px solid rgba(255, 255, 255, .18); border-top-color: #F7A81B; border-right-color: #F7A81B; animation: rt-spin .8s linear infinite; }
.loader::after { content: ""; position: absolute; width: 22px; height: 22px; border-radius: 50%; background: #F7A81B; box-shadow: 0 0 0 6px rgba(247, 168, 27, .25); }
@keyframes rt-spin { to { transform: rotate(360deg); } }
@media (prefers-reduced-motion: reduce) { .loader::before { animation-duration: 2.4s; } }
</style>
<script type="text/javascript">//<![CDATA[
	$(window).on('load', function(){
		function rtCls(el) { return $(el).attr('class') || ''; }
		//*	href links
		$('a').click(function(){
			if(rtCls(this).indexOf('ignore')!=-1) { return null; }
			if (this.href!=""&&this.href!='javascript:;'&&this.href.indexOf('#')==-1&&rtCls(this).indexOf('confirm')==-1&&rtCls(this).indexOf('toggle')==-1) {
				$('<div class=loader></div>').prependTo(document.body);
			}
		});
		//*	forms
		$('form').submit(function () {
			if(rtCls(this)=='ignore') { return null; }
			if($.validator) {
				if( $('form').valid() ) {
					if (typeof g7bill_form_validation!=='undefined') {
						if (g7bill_form_validation!==false) {
							$('<div class=loader></div>').prependTo(document.body);
						}
					} else {
						$('<div class=loader></div>').prependTo(document.body);
					}
				}
			} else {
				$('<div class=loader></div>').prependTo(document.body);
			}
		});
		//*	buttons
		$('button').click(function(){
			if(rtCls(this).indexOf('ignore')!=-1) { return null; }
			if (this.onclick!=null) {
				$('<div class=loader></div>').prependTo(document.body);
			}
		});
	});
	window.addEventListener('pageshow', function(e){ if (e.persisted) { $('.loader').remove(); } });
//]]>
</script>
{/if}
