<?php
/* Smarty version 3.1.30, created on 2017-01-26 21:23:03
  from "/Applications/XAMPP/xamppfiles/htdocs/views/program.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588a5aa7428453_46898006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9a0af5720aa456ea6d69f54f5d45b74477d463f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/views/program.tpl',
      1 => 1485462181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_588a5aa7428453_46898006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_818086603588a5aa7425c69_28379125', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1749205211588a5aa74279b4_58924319', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_818086603588a5aa7425c69_28379125 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1749205211588a5aa74279b4_58924319 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Program</h2>

<?php
}
}
/* {/block 'body'} */
}
