<?php
/* Smarty version 3.1.30, created on 2017-01-26 21:54:33
  from "/Applications/XAMPP/xamppfiles/htdocs/views/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588a62095f6532_41618855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e042e51c3bf534cc27338b9f03b735179518aa9c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/views/register.tpl',
      1 => 1485464071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_588a62095f6532_41618855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152857901588a62095e3952_02202383', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_434527477588a62095f59e1_53975379', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_152857901588a62095e3952_02202383 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_434527477588a62095f59e1_53975379 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? "Wait for moderation plz" : $tmp);?>

<?php
}
}
/* {/block 'body'} */
}
