<?php /* Smarty version 3.1.27, created on 2016-12-21 11:24:24
         compiled from "/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/snippet/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:845637706585a5858872891_78693119%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efc7388431b97804d0e81d7415c6713e84ba287b' => 
    array (
      0 => '/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/snippet/create.tpl',
      1 => 1479306480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '845637706585a5858872891_78693119',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585a5858875f44_04222046',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585a5858875f44_04222046')) {
function content_585a5858875f44_04222046 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '845637706585a5858872891_78693119';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>