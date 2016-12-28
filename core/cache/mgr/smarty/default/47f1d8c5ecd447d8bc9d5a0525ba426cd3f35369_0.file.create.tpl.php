<?php /* Smarty version 3.1.27, created on 2016-12-19 17:59:37
         compiled from "/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/tv/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:637972013585811f98b6719_98640162%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47f1d8c5ecd447d8bc9d5a0525ba426cd3f35369' => 
    array (
      0 => '/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/tv/create.tpl',
      1 => 1479306480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '637972013585811f98b6719_98640162',
  'variables' => 
  array (
    'onTVFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585811f98b9191_60823577',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585811f98b9191_60823577')) {
function content_585811f98b9191_60823577 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '637972013585811f98b6719_98640162';
?>
<div id="modx-panel-tv-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onTVFormPrerender']->value;

}
}
?>