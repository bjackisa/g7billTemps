<!-- ROTARY — G7Bill template · public scripts -->
<!-- END QUICK NAV -->
<!--[if lt IE 9]>
<script src="{U::File(['file'=>'global/plugins/respond.min.js','a'=>'path'])}"></script>
<script src="{U::File(['file'=>'global/plugins/excanvas.min.js','a'=>'path'])}"></script> 
<script src="{U::File(['file'=>'global/plugins/ie8.fix.min.js','a'=>'path'])}"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{U::File(['file'=>'global/plugins/jquery.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/plugins/bootstrap/js/bootstrap.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/plugins/js.cookie.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/plugins/jquery.blockui.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js','a'=>'path'])}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- ROTARY behaviour (nav, drawer, Layout shim) -->
<script src="{U::File(['file'=>'js/rotary.js','a'=>'path'])}" type="text/javascript"></script>

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{U::File(['file'=>'global/scripts/app.min.js','a'=>'path'])}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->

{if $smarty.request.jc!='index'} 
<script src="{U::File(['file'=>'global/plugins/moment.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-daterangepicker/daterangepicker.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/clockface/js/clockface.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/counterup/jquery.waypoints.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/counterup/jquery.counterup.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/fancybox/source/jquery.fancybox.pack.js','a'=>'path'])}" type="text/javascript"></script> 
{/if} 
<script src="{U::File(['file'=>'global/plugins/select2/js/select2.full.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js','a'=>'path'])}" type="text/javascript"></script> 

<!--Callback Model--> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-modal/js/bootstrap-modal.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'pages/scripts/ui-extended-modals.min.js','a'=>'path'])}" type="text/javascript"></script> 
<!-- / End Callback Model --> 
<!--Applicable to ?dad=index&jc=contact---> 
{if $smarty.request.jc!='index'} 
<script src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCtHrZmc7shpnm3xjXfr7v6lrrpc5SD2_4" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/gmaps/gmaps.min.js','a'=>'path'])}" type="text/javascript"></script> 
{/if} 
<!--/Applicable to ?dad=index&jc=contact---> 
<!--Data-Tables--> 
{if $smarty.request.jc!='index'} 
<script src="{U::File(['file'=>'global/scripts/datatable.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/datatables/datatables.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/bootbox/bootbox.min.js','a'=>'path'])}" type="text/javascript"></script> 
{/if}

{if $smarty.request.jc eq 'kb'} 
<script src="{U::File(['file'=>'global/plugins/jstree/dist/jstree.min.js','a'=>'path'])}" type="text/javascript"></script> 
{/if}
{if $smarty.request.jc eq 'tools'} 
<script src="{U::File(['file'=>'global/plugins/clipboardjs/clipboard.min.js','a'=>'path'])}" type="text/javascript"></script> 
{/if} 
<script src="{U::File(['file'=>'global/plugins/ladda/spin.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'global/plugins/ladda/ladda.min.js','a'=>'path'])}" type="text/javascript"></script> 
<!-- END PAGE LEVEL PLUGINS --> 
<!-- BEGIN PAGE LEVEL SCRIPTS --> 
{if $smarty.request.jc!='index'} 
<script src="{U::File(['file'=>'pages/scripts/components-date-time-pickers.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'pages/scripts/search.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'pages/scripts/portfolio-1.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script type="application/javascript">
var Contact = function () {
    return {
        init: function () {
			var map;
			$(document).ready(function(){
			  if (!document.getElementById('gmapbg') || typeof GMaps === 'undefined') return;
			  map = new GMaps({
				div: '#gmapbg',
				lat: {Extended::Value(['name'=>'latitude'])|default:'0.171317'},
				lng: {Extended::Value(['name'=>'longitude'])|default:'32.526138'}
			  });
			   var marker = map.addMarker({
		            lat: {Extended::Value(['name'=>'latitude'])|default:'0.171317'},
					lng: {Extended::Value(['name'=>'longitude'])|default:'32.526138'},
		            title: "{$config.companyname}",
		            infoWindow: {
		                content: "<b>{if !empty($config.companyaddress1)}{$config.companyaddress1},{/if}<br/>{$config.companyaddress2}{if !empty($config.companycity)}, {$config.companycity}{/if}{if !empty($config.companystate)}{$config.companystate}, {$config.companyzip}{/if}."
		            }
		        });
			   marker.infoWindow.open(map, marker);
			});
        }
    };
}();
jQuery(document).ready(function() {    
   Contact.init(); 
});
</script> 
<script src="{U::File(['file'=>'pages/scripts/table-datatables-managed.js','a'=>'path'])}" type="text/javascript"></script> 
{/if} 
<script src="{U::File(['file'=>'pages/scripts/components-select2.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'pages/scripts/ui-buttons-spinners.min.js','a'=>'path'])}" type="text/javascript"></script> 
{if $smarty.request.jc eq 'kb'} 
<script src="{U::File(['file'=>'pages/scripts/ui-tree.min.js','a'=>'path'])}" type="text/javascript"></script> 
{/if}
{if $smarty.request.jc eq 'tools'} 
<script src="{U::File(['file'=>'pages/scripts/components-clipboard.min.js','a'=>'path'])}" type="text/javascript"></script> 
{/if} 
<!-- END PAGE LEVEL SCRIPTS --> 

<!--Bootstrap wysihtml5 Editor Only (insurance, motor cart configs)
<script src="{U::File(['file'=>'global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js','a'=>'path'])}" type="text/javascript"></script>
<script src="{U::File(['file'=>'global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js','a'=>'path'])}" type="text/javascript"></script>--> 
<script src="{U::File(['file'=>'global/plugins/bootstrap-summernote/summernote.min.js','a'=>'path'])}" type="text/javascript"></script> 
<script src="{U::File(['file'=>'pages/scripts/components-editors.js','a'=>'path'])}" type="text/javascript"></script> 
<!-- /WYSI Editor Only --> 

<!-- BEGIN THEME LAYOUT SCRIPTS (rotary: layout3 scripts replaced by js/rotary.js) --> 

<!-- Putting this ontop disables the mobile menu--> 
{if $smarty.request.jc eq 'cart'} 
<script src="{U::File(['file'=>'pages/scripts/form-input-mask.js','a'=>'path'])}" type="text/javascript"></script> 
{/if} 
<!-- /Putting this ontop disables the mobile menu--> 

<!-- END THEME LAYOUT SCRIPTS --> 
<script src="/libs/md5.js" type="text/javascript"></script> 
<script type="text/javascript">
function MD5(obj) {
  var pwdObj 	= document.getElementById('pwd');
  var hash 		= calcMD5(pwdObj.value);
  pwdObj.value 	= hash;
}
</script> 
<script>
function Visible() {
  var passwordInput = document.getElementById("password");
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
  }
}
</script> 
<!--Ajax-->{T::G('widget.ajax.php')}<!--Ajax--> 
{if file_exists("templates/$template/common/cfooter.php")}{include file="templates/$template/common/cfooter.php"}{/if}
{include file='rt.session.helpers.php'} 
<!--Music-->{U::Player()}<!--Music--> 
<!--Preloader-->{U::Preloader()}<!--Preloader--> 
<!--AcceptCookies-->{U::AcceptCookies()}<!--AcceptCookies--> 
<!--AcceptCookies-->{U::RefTagger()}<!--AcceptCookies--> 
<script src="{U::File(['file'=>'custom.js','a'=>'path'])}" type="text/javascript"></script>
</body></html>