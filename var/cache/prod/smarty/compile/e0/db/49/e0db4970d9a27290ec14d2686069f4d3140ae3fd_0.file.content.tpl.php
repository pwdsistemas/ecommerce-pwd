<?php
/* Smarty version 3.1.33, created on 2020-06-21 10:40:10
  from '/var/www/html/shop/admin349ahpjyr/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eef1ceac12d03_28411787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0db4970d9a27290ec14d2686069f4d3140ae3fd' => 
    array (
      0 => '/var/www/html/shop/admin349ahpjyr/themes/default/template/content.tpl',
      1 => 1592695332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eef1ceac12d03_28411787 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
