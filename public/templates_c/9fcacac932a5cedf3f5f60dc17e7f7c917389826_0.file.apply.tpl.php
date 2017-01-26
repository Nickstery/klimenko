<?php
/* Smarty version 3.1.30, created on 2017-01-26 21:47:33
  from "/Applications/XAMPP/xamppfiles/htdocs/views/apply.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588a60654671b0_04071230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fcacac932a5cedf3f5f60dc17e7f7c917389826' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/views/apply.tpl',
      1 => 1485463493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_588a60654671b0_04071230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1703691878588a6065464c64_20681141', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_736390807588a6065466934_11657364', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1703691878588a6065464c64_20681141 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_736390807588a6065466934_11657364 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Applied</h2>
<?php
}
}
/* {/block 'body'} */
}
