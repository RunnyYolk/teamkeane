<?php /* Smarty version 3.1.27, created on 2016-12-19 17:55:16
         compiled from "/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2030429876585810f45b6660_96542192%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1763103bcb3edecb66485804292e3564fa1092f3' => 
    array (
      0 => '/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/welcome.tpl',
      1 => 1479306482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2030429876585810f45b6660_96542192',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585810f45b9676_81872760',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585810f45b9676_81872760')) {
function content_585810f45b9676_81872760 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2030429876585810f45b6660_96542192';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>