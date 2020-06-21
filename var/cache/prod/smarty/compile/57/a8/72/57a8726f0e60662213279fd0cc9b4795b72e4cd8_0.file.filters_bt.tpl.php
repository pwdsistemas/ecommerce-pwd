<?php
/* Smarty version 3.1.33, created on 2020-06-21 10:41:10
  from '/var/www/html/shop/modules/gamification/views/templates/admin/gamification/helpers/view/filters_bt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eef1d2613b927_58190142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57a8726f0e60662213279fd0cc9b4795b72e4cd8' => 
    array (
      0 => '/var/www/html/shop/modules/gamification/views/templates/admin/gamification/helpers/view/filters_bt.tpl',
      1 => 1592702869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eef1d2613b927_58190142 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['type']->value)) {?>
<form class="form-horizontal well" role="form">
    <?php if ($_smarty_tpl->tpl_vars['type']->value == 'badges_feature' || $_smarty_tpl->tpl_vars['type']->value == 'badges_achievement') {?>
        <div class="form-group">
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type:','mod'=>'gamification'),$_smarty_tpl ) );?>
</label>
            <select id="group_select_<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" onchange="filterBadge('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
');">
                    <option value="badge_all"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','mod'=>'gamification'),$_smarty_tpl ) );?>
</option>
                <?php if (isset($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['type']->value])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['type']->value], 'group', false, 'id_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id_group']->value => $_smarty_tpl->tpl_vars['group']->value) {
?>
                    <option value="group_<?php echo $_smarty_tpl->tpl_vars['id_group']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value;?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </select>
        </div>
    <?php }?>
        <div class="form-group">
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status:','mod'=>'gamification'),$_smarty_tpl ) );?>
</label>
            <select id="status_select_<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" onchange="filterBadge('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
');">
                <option value="badge_all"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','mod'=>'gamification'),$_smarty_tpl ) );?>
</option>
                <option value="validated"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Validated','mod'=>'gamification'),$_smarty_tpl ) );?>
</option>
                <option value="not_validated"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not Validated','mod'=>'gamification'),$_smarty_tpl ) );?>
</option>
            </select>
        </div>
    <?php if ($_smarty_tpl->tpl_vars['type']->value == 'badges_feature' || $_smarty_tpl->tpl_vars['type']->value == 'badges_achievement') {?>
        <div class="form-group">
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Level:','mod'=>'gamification'),$_smarty_tpl ) );?>
</label>
                <select id="level_select_<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" onchange="filterBadge('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
');">
                        <option value="badge_all"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','mod'=>'gamification'),$_smarty_tpl ) );?>
</option>
                    <?php if (isset($_smarty_tpl->tpl_vars['levels']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['levels']->value, 'level', false, 'id_level');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id_level']->value => $_smarty_tpl->tpl_vars['level']->value) {
?>
                        <option value="level_<?php echo $_smarty_tpl->tpl_vars['id_level']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['level']->value;?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </select>
        </div>
    <?php }?>
</form>
<div class="clear"></div>
<?php }
}
}
