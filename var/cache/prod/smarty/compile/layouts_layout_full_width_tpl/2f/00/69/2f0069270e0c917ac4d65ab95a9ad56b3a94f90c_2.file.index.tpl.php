<?php
/* Smarty version 3.1.33, created on 2020-06-21 10:39:16
  from '/var/www/html/shop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eef1cb43a36a2_16704842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f0069270e0c917ac4d65ab95a9ad56b3a94f90c' => 
    array (
      0 => '/var/www/html/shop/themes/classic/templates/index.tpl',
      1 => 1592695332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eef1cb43a36a2_16704842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8572333895eef1cb43a1c86_14751335', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_13758938065eef1cb43a2120_07244048 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_14060651155eef1cb43a2b04_28420058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_15333508895eef1cb43a2852_01771394 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14060651155eef1cb43a2b04_28420058', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8572333895eef1cb43a1c86_14751335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_8572333895eef1cb43a1c86_14751335',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13758938065eef1cb43a2120_07244048',
  ),
  'page_content' => 
  array (
    0 => 'Block_15333508895eef1cb43a2852_01771394',
  ),
  'hook_home' => 
  array (
    0 => 'Block_14060651155eef1cb43a2b04_28420058',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13758938065eef1cb43a2120_07244048', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15333508895eef1cb43a2852_01771394', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
