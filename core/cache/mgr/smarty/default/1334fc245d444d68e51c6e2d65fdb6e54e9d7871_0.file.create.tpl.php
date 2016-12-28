<?php /* Smarty version 3.1.27, created on 2016-12-19 18:10:42
         compiled from "/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/chunk/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:185919076585814929e8748_13403747%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1334fc245d444d68e51c6e2d65fdb6e54e9d7871' => 
    array (
      0 => '/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/chunk/create.tpl',
      1 => 1479306480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185919076585814929e8748_13403747',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585814929ea695_77126929',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585814929ea695_77126929')) {
function content_585814929ea695_77126929 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '185919076585814929e8748_13403747';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>