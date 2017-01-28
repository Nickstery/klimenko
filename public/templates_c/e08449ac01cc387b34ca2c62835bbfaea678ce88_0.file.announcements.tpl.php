<?php
/* Smarty version 3.1.30, created on 2017-01-28 13:28:50
  from "/Applications/XAMPP/xamppfiles/htdocs/views/announcements.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588c8e82863244_54349219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e08449ac01cc387b34ca2c62835bbfaea678ce88' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/views/announcements.tpl',
      1 => 1485606528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_588c8e82863244_54349219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20371110588c8e82860433_26117954', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_237298348588c8e828625b1_38934636', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_20371110588c8e82860433_26117954 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_237298348588c8e828625b1_38934636 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Announcements</h2>
    <div>
        <object data="http://localhost/pdf" type="application/pdf" style="width: 100%;height: 100%">
            <a href="http://localhost/pdf">test.pdf</a>
        </object>
    </div>
<?php
}
}
/* {/block 'body'} */
}
