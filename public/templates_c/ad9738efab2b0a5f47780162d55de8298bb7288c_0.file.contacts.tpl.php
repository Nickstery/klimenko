<?php
/* Smarty version 3.1.30, created on 2017-01-26 21:22:48
  from "/Applications/XAMPP/xamppfiles/htdocs/views/contacts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588a5a98e56b46_28587835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad9738efab2b0a5f47780162d55de8298bb7288c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/views/contacts.tpl',
      1 => 1485462167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_588a5a98e56b46_28587835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_488068019588a5a98e54098_95342563', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_789109364588a5a98e560e7_08373956', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_488068019588a5a98e54098_95342563 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_789109364588a5a98e560e7_08373956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Contacts</h2>

<?php
}
}
/* {/block 'body'} */
}
