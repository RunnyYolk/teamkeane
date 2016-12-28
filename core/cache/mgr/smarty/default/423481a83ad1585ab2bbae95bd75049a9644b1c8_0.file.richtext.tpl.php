<?php /* Smarty version 3.1.27, created on 2016-12-21 16:14:25
         compiled from "/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/tv/renders/input/richtext.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1049663130585a9c51727c14_63480187%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '423481a83ad1585ab2bbae95bd75049a9644b1c8' => 
    array (
      0 => '/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/tv/renders/input/richtext.tpl',
      1 => 1479306480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1049663130585a9c51727c14_63480187',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585a9c51783c60_32856364',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585a9c51783c60_32856364')) {
function content_585a9c51783c60_32856364 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1049663130585a9c51727c14_63480187';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
?>