<?php /* Smarty version 3.1.27, created on 2016-12-21 17:01:26
         compiled from "/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/resource/weblink/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:121887455585aa7566b7504_29423150%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b38ce718ba35f27bcaf764cae21c6e2dae08e190' => 
    array (
      0 => '/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/resource/weblink/create.tpl',
      1 => 1479306482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121887455585aa7566b7504_29423150',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585aa7566d7483_18662032',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585aa7566d7483_18662032')) {
function content_585aa7566d7483_18662032 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '121887455585aa7566b7504_29423150';
?>
<div id="modx-panel-weblink-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>