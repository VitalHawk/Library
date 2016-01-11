<?php
/* Smarty version 3.1.30-dev/18, created on 2016-01-09 13:46:11
  from "C:\OpenServer523\domains\Library\templates\menu.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_5690e4f3099512_02371582',
  'file_dependency' => 
  array (
    '9dc04b974874cf1a352ad82441bf4e1c06b67623' => 
    array (
      0 => 'C:\\OpenServer523\\domains\\Library\\templates\\menu.tpl',
      1 => 1448707033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5690e4f3099512_02371582 ($_smarty_tpl) {
?>
<ul>
    <li><a href="/Book/Index" >Поиск книг</a></li>
    <?php if ($_SESSION['user']->isAdmin) {?>
    <li><a href="/Book/Add" >Добавление книг</a></li>
    <?php }?>
</ul><?php }
}
