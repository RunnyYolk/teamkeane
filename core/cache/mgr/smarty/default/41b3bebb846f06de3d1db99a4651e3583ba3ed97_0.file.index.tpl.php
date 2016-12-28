<?php /* Smarty version 3.1.27, created on 2016-12-20 00:50:24
         compiled from "/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11421315158587240943d84_40240347%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41b3bebb846f06de3d1db99a4651e3583ba3ed97' => 
    array (
      0 => '/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/workspaces/index.tpl',
      1 => 1479306482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11421315158587240943d84_40240347',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5858724094dd14_77663007',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5858724094dd14_77663007')) {
function content_5858724094dd14_77663007 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11421315158587240943d84_40240347';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>