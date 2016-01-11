<?php
/* Smarty version 3.1.30-dev/18, created on 2016-01-09 13:46:11
  from "C:\OpenServer523\domains\Library\templates\books.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_5690e4f312e9c1_01383565',
  'file_dependency' => 
  array (
    '9b0f352752d1e1a17b869faf1ec3a0cf7db1c5f0' => 
    array (
      0 => 'C:\\OpenServer523\\domains\\Library\\templates\\books.tpl',
      1 => 1446287260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5690e4f312e9c1_01383565 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\OpenServer523\\domains\\Library\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php';
?>
<div>
    <form method="get" action="/Book/Index">
        <?php echo smarty_function_html_options(array('name'=>"catId",'options'=>$_smarty_tpl->tpl_vars['cats']->value,'selected'=>$_smarty_tpl->tpl_vars['catId']->value),$_smarty_tpl);?>

        <?php echo smarty_function_html_options(array('name'=>"pubId",'options'=>$_smarty_tpl->tpl_vars['pubs']->value,'selected'=>$_smarty_tpl->tpl_vars['pubId']->value),$_smarty_tpl);?>

        <input type="submit" value="Refresh">
    </form>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Date</th>
                <th>Category</th>
                <th>Publisher</th>
                <th>Authors</th>
            </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'b');
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
$__foreach_b_0_saved = $_smarty_tpl->tpl_vars['b'];
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['b']->value->date->format('d.m.Y');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['b']->value->category;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['b']->value->publisher;?>
</td>
                <td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['b']->value->authors, 'a');
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$__foreach_a_1_saved = $_smarty_tpl->tpl_vars['a'];
echo $_smarty_tpl->tpl_vars['a']->value;?>
<br /><?php
$_smarty_tpl->tpl_vars['a'] = $__foreach_a_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?></td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['b'] = $__foreach_b_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    </table>
</div>
<?php }
}
