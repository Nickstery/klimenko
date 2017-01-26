<?php
/* Smarty version 3.1.30, created on 2017-01-26 20:50:39
  from "/Applications/XAMPP/xamppfiles/htdocs/views/not_found.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588a530f520778_87383252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fe40ec57d2994c8ea0e22a4e419e50947145911' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/views/not_found.tpl',
      1 => 1485460015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_588a530f520778_87383252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211247215588a530f51b470_61385367', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1369600909588a530f51f777_19820505', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_211247215588a530f51b470_61385367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1369600909588a530f51f777_19820505 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My HTML Page Body goes here

<?php
}
}
/* {/block 'body'} */
}
