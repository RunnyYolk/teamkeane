<?php /* Smarty version 3.1.27, created on 2016-12-20 12:21:19
         compiled from "/Users/admin/webdev/MAMP/modx/teamkeane/core/components/migx/templates/mgr/setuptab.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17203531835859142f85d028_20590082%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '625adf7c5d96634602476950d1b66d183488ee9b' => 
    array (
      0 => '/Users/admin/webdev/MAMP/modx/teamkeane/core/components/migx/templates/mgr/setuptab.tpl',
      1 => 1482232632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17203531835859142f85d028_20590082',
  'variables' => 
  array (
    'cmptabcaption' => 0,
    'cmptabdescription' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5859142f862fb8_38680639',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5859142f862fb8_38680639')) {
function content_5859142f862fb8_38680639 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17203531835859142f85d028_20590082';
?>
 
{
    title: '<?php echo $_smarty_tpl->tpl_vars['cmptabcaption']->value;?>
',
    defaults: {
        autoHeight: true
    },
    items: [{
        html: '<p><?php echo $_smarty_tpl->tpl_vars['cmptabdescription']->value;?>
</p>',
        border: false,
        bodyCssClass: 'panel-desc'
    },
    {
        xtype: 'form',
        id: 'migx_setup_form',
        standardSubmit: true,
        url: config.src,
        items: [{
            xtype: 'modx-tabs',
            id: 'migx-tab-setup',
            defaults: {
                border: false,
                autoHeight: true
            },
            border: true,
            items: [{
                title: 'Setup',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Setup MIGX-Configurator. (Creates/upgrades Configurations-table)</p>'
                         +'<p>Make allways backups before upgrading!</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.setupmigx('setupmigx')},
                    text: 'Setup',
                    scope: this
                }]
            },{
                title: 'Upgrade MIGX',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Adds the autoinc-field MIGX_id to all existing MIGX-TVs from older Versions</p>'
                    +'<p>Make allways backups before upgrading!</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.setupmigx('upgrademigx')},
                    text: 'Upgrade',
                    scope: this
                }]
            }]
        }]
    }]
}





<?php }
}
?>