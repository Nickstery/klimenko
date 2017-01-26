<?php
/* Smarty version 3.1.30, created on 2017-01-26 21:23:37
  from "/Applications/XAMPP/xamppfiles/htdocs/views/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588a5ac94863d8_36571910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebcee555c287c20ad4fbf7043c54a5e34f2d7f68' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/views/home.tpl',
      1 => 1485462214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_588a5ac94863d8_36571910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1562137024588a5ac9483145_27361729', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_710116066588a5ac9485450_31645904', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1562137024588a5ac9483145_27361729 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_710116066588a5ac9485450_31645904 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h2>Home</h2>
<a href="/registration"><button class="btn btn-success" style="margin-bottom: 12px"> Register </button></a>
    <table class="table table-striped table-bordered">
        <thead>
            <th>User name</th>
            <th>Register date</th>
        </thead>
        <tbody>
        <tr>
            <td>Test name</td>
            <td>11/11/2011</td>
        </tr>
        <tr>
            <td>Test name</td>
            <td>11/11/2011</td>
        </tr>
        <tr>
            <td>Test name</td>
            <td>11/11/2011</td>
        </tr>
        </tbody>
    </table>

<?php
}
}
/* {/block 'body'} */
}
