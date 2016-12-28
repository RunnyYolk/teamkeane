<?php /* Smarty version 3.1.27, created on 2016-12-28 12:23:42
         compiled from "/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/plugin/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12019435035863a0beae5c65_37494185%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49401fd0ff7945ef90b6198bec5ca2f9f4766d5d' => 
    array (
      0 => '/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/plugin/update.tpl',
      1 => 1479306480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12019435035863a0beae5c65_37494185',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5863a0beae9f42_49792850',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5863a0beae9f42_49792850')) {
function content_5863a0beae9f42_49792850 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12019435035863a0beae5c65_37494185';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>