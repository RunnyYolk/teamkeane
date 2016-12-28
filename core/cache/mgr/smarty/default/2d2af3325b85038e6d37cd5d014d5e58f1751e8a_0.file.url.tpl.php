<?php /* Smarty version 3.1.27, created on 2016-12-21 18:12:59
         compiled from "/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/tv/renders/input/url.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1352678232585ab81ba3e923_59261073%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d2af3325b85038e6d37cd5d014d5e58f1751e8a' => 
    array (
      0 => '/Users/admin/webdev/MAMP/modx/teamkeane/manager/templates/default/element/tv/renders/input/url.tpl',
      1 => 1479306480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1352678232585ab81ba3e923_59261073',
  'variables' => 
  array (
    'tv' => 0,
    'urls' => 0,
    'url' => 0,
    'selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585ab81baac2b0_03302176',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585ab81baac2b0_03302176')) {
function content_585ab81baac2b0_03302176 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1352678232585ab81ba3e923_59261073';
?>
<select id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
_prefix" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
_prefix" onchange="MODx.fireResourceFormChange();">
<?php
$_from = $_smarty_tpl->tpl_vars['urls']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['url'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['url']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
$foreach_url_Sav = $_smarty_tpl->tpl_vars['url'];
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['url']->value == $_smarty_tpl->tpl_vars['selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</option>
<?php
$_smarty_tpl->tpl_vars['url'] = $foreach_url_Sav;
}
?>
</select>
<input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"
	type="text"
	value="<?php echo $_smarty_tpl->tpl_vars['tv']->value->get('processedValue');?>
"
	onchange="MODx.fireResourceFormChange();"
	class="textfield x-form-text x-form-field"
	style="width: 283px;"
/>
<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
Ext.onReady(function() {
	MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));

    var fld = MODx.load({
        xtype: 'combo'
        ,transform: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
_prefix'
        ,id: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
_prefix'
        ,triggerAction: 'all'
        ,width: 100
        ,allowBlank: false
        ,maxHeight: 300
        ,typeAhead: false
        ,forceSelection: false
        ,msgTarget: 'under'
        ,listeners: { 'select': { fn:MODx.fireResourceFormChange, scope:this}}
    });

	fld.wrap.applyStyles({
		display: "inline-block"
	});
});
// ]]>
<?php echo '</script'; ?>
><?php }
}
?>