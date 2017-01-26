<?php
/* Smarty version 3.1.30, created on 2017-01-26 22:02:04
  from "/Applications/XAMPP/xamppfiles/htdocs/views/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588a63cc3355a7_12638076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebcee555c287c20ad4fbf7043c54a5e34f2d7f68' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/views/home.tpl',
      1 => 1485464522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_588a63cc3355a7_12638076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1968087489588a63cc30c4a5_06821538', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_662571598588a63cc333738_22158967', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1968087489588a63cc30c4a5_06821538 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_662571598588a63cc333738_22158967 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h2>Home</h2>
<a href="/registration"><button class="btn btn-success" style="margin-bottom: 12px"> Register </button></a>
    <table class="table table-striped table-bordered">
        <thead>
            <th>User name</th>
            <th>Email</th>
            <th>Register date</th>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['created_at'];?>
</td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>

<?php
}
}
/* {/block 'body'} */
}
