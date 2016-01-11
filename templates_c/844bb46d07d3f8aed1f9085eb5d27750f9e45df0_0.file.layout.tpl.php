<?php
/* Smarty version 3.1.30-dev/18, created on 2016-01-09 13:46:11
  from "C:\OpenServer523\domains\Library\templates\layout.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_5690e4f3021155_03374871',
  'file_dependency' => 
  array (
    '844bb46d07d3f8aed1f9085eb5d27750f9e45df0' => 
    array (
      0 => 'C:\\OpenServer523\\domains\\Library\\templates\\layout.tpl',
      1 => 1448707105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5690e4f3021155_03374871 ($_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <h1>Мой супер сайт!!!</h1>
        <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['content_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </body>
</html>
<?php }
}
