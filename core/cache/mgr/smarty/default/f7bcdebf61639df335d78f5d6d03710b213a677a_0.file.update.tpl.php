<?php /* Smarty version 3.1.27, created on 2016-12-21 11:27:57
         compiled from "/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/snippet/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1984306098585a592dba1152_03901191%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7bcdebf61639df335d78f5d6d03710b213a677a' => 
    array (
      0 => '/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/snippet/update.tpl',
      1 => 1479306480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1984306098585a592dba1152_03901191',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585a592dba4ce2_58840701',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585a592dba4ce2_58840701')) {
function content_585a592dba4ce2_58840701 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1984306098585a592dba1152_03901191';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>