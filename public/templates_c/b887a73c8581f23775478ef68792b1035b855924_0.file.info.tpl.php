<?php
/* Smarty version 3.1.30, created on 2017-01-26 21:22:34
  from "/Applications/XAMPP/xamppfiles/htdocs/views/info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588a5a8a08bfc8_92861720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b887a73c8581f23775478ef68792b1035b855924' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/views/info.tpl',
      1 => 1485462152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_588a5a8a08bfc8_92861720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1657899646588a5a8a089bc5_09499190', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_478213714588a5a8a08b783_30645130', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1657899646588a5a8a089bc5_09499190 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_478213714588a5a8a08b783_30645130 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Local info</h2>

<?php
}
}
/* {/block 'body'} */
}
