<?php /* Smarty version 3.1.27, created on 2016-12-28 12:22:44
         compiled from "/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/plugin/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13710139095863a0849a74c5_73425583%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e74f3b79d85a44d73a5ab695c026cecb9dcf50af' => 
    array (
      0 => '/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/plugin/create.tpl',
      1 => 1479306480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13710139095863a0849a74c5_73425583',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5863a0849b1162_98680092',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5863a0849b1162_98680092')) {
function content_5863a0849b1162_98680092 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13710139095863a0849a74c5_73425583';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>