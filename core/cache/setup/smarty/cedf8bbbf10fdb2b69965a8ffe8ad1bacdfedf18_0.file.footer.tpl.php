<?php /* Smarty version 3.1.27, created on 2016-12-19 17:55:04
         compiled from "/Users/admin/webdev/MAMP/modx/teamkeane/setup/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1243986279585810e885bcf6_59072805%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cedf8bbbf10fdb2b69965a8ffe8ad1bacdfedf18' => 
    array (
      0 => '/Users/admin/webdev/MAMP/modx/teamkeane/setup/templates/footer.tpl',
      1 => 1479306482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1243986279585810e885bcf6_59072805',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585810e886aee6_28355694',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585810e886aee6_28355694')) {
function content_585810e886aee6_28355694 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/Users/admin/webdev/MAMP/modx/teamkeane/core/model/smarty/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '1243986279585810e885bcf6_59072805';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>