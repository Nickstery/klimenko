<?php
/* Smarty version 3.1.30, created on 2017-01-26 20:50:38
  from "/Applications/XAMPP/xamppfiles/htdocs/views/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588a530e234304_49365928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adbda2756c1663775140e0209c1adc071eb735e7' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/views/layout.tpl',
      1 => 1485460014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588a530e234304_49365928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_840273863588a530e22eec2_41078573', 'title');
?>
</title>
    <link rel="stylesheet" type="text/css" href="../public/css/app.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="#">
                Some Branding
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="/home">Home</a></li>
                <li><a href="/announcements">Announcements</a></li>
                <li><a href="/program" >Program</a></li>
                <li><a href="/contacts" >Contacts</a></li>
                <li><a href="/photos" >Photos</a></li>
                <li><a href="/registration" >Registration</a></li>
                <li><a href="/info" >Local info</a></li>

            </ul>

        </div>
    </div>
</nav>
<div class="container">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1975049211588a530e232131_34681974', 'body');
?>

</div>
</body>
</html><?php }
/* {block 'title'} */
class Block_840273863588a530e22eec2_41078573 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1975049211588a530e232131_34681974 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
