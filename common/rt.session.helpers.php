{* ROTARY — session helpers: Smarty-only replacement for the PHP include of templates/common/html_css.php *}
{if !empty($smarty.session.subuser)}{V::FT()}{/if}
{if !empty($smarty.session.adminuser) and $smarty.session.newuid neq $smarty.session.adminuser}{Vars::StaticElement()}{/if}
{if !empty($smarty.session.theme)}{assign var='rt_def_tpl' value=V::G("templatedir","config","`domain`='{$smarty.session.licensed_domain}'")}{if $rt_def_tpl and $rt_def_tpl neq $smarty.session.theme}<a href="?theme={$rt_def_tpl}" class="rt-theme-reset ignore"><i class="fas fa-undo"></i> {$smarty.const.RESET_TO_DEFAULT_THEME|default:'Reset to default theme'|ucwords}</a>{/if}{/if}
<script>
function Ajax(url, success) {
    var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    xhr.open('GET', url);
    xhr.onreadystatechange = function() {
        if (xhr.readyState>3 && xhr.status==200) success(xhr.responseText);
    };
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.send();
    return xhr;
}
</script>
<style>._red_ { color:#F00; } ._blue_ { color:#00F; } ._green_ { color:#090; }</style>
