<?php
/* Smarty version 3.1.30, created on 2017-01-26 21:00:55
  from "/Applications/XAMPP/xamppfiles/htdocs/views/photos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588a5577481c69_17596932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d95967f3664b52a63791c341c5d466afdc88264' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/views/photos.tpl',
      1 => 1485460853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_588a5577481c69_17596932 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1752814844588a5577470e43_21604718', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1609484305588a5577480df7_10561564', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_1752814844588a5577470e43_21604718 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1609484305588a5577480df7_10561564 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <h2>Photos</h2>
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photos']->value, 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
            <div class="col-xs-6 col-md-4" style="cursor: pointer">
                <div class="thumbnail">
                    <img src="image/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="...">
                <div class="caption">
                    <h4>Thumbnail label</h4>
                </div>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
<?php
}
}
/* {/block 'body'} */
}
