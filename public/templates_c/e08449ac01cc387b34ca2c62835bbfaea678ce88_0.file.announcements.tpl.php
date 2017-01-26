<?php
/* Smarty version 3.1.30, created on 2017-01-26 21:23:24
  from "/Applications/XAMPP/xamppfiles/htdocs/views/announcements.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588a5abc7adaa3_26811742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e08449ac01cc387b34ca2c62835bbfaea678ce88' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/views/announcements.tpl',
      1 => 1485462202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_588a5abc7adaa3_26811742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1875496724588a5abc7a84f8_91730945', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_761929620588a5abc7ac9c9_84248012', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1875496724588a5abc7a84f8_91730945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_761929620588a5abc7ac9c9_84248012 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Announcements</h2>

<?php
}
}
/* {/block 'body'} */
}
