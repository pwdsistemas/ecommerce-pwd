<?php
/* Smarty version 3.1.33, created on 2020-06-21 10:39:08
  from '/var/www/html/shop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eef1cac10c702_37109959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7442feda87639cb83f9ec14f1295dc60c36426c' => 
    array (
      0 => '/var/www/html/shop/themes/classic/templates/page.tpl',
      1 => 1592695332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eef1cac10c702_37109959 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16391115015eef1cac1087c5_28249555', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_20690817205eef1cac108eb1_29623070 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_21034559265eef1cac108ad1_91594457 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20690817205eef1cac108eb1_29623070', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_4655350505eef1cac10b425_33761348 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_16418551165eef1cac10b806_40011716 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12536586115eef1cac10b114_06190569 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4655350505eef1cac10b425_33761348', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16418551165eef1cac10b806_40011716', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_6109799835eef1cac10c005_10066805 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4567119995eef1cac10bda5_38853875 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6109799835eef1cac10c005_10066805', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_16391115015eef1cac1087c5_28249555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16391115015eef1cac1087c5_28249555',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_21034559265eef1cac108ad1_91594457',
  ),
  'page_title' => 
  array (
    0 => 'Block_20690817205eef1cac108eb1_29623070',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_12536586115eef1cac10b114_06190569',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4655350505eef1cac10b425_33761348',
  ),
  'page_content' => 
  array (
    0 => 'Block_16418551165eef1cac10b806_40011716',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4567119995eef1cac10bda5_38853875',
  ),
  'page_footer' => 
  array (
    0 => 'Block_6109799835eef1cac10c005_10066805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21034559265eef1cac108ad1_91594457', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12536586115eef1cac10b114_06190569', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4567119995eef1cac10bda5_38853875', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
