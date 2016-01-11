<?php
/* Smarty version 3.1.30-dev/18, created on 2016-01-09 13:46:11
  from "C:\OpenServer523\domains\Library\templates\login.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_5690e4f307c621_82848947',
  'file_dependency' => 
  array (
    '684ff6af738fbace6c44f983430171713d22a304' => 
    array (
      0 => 'C:\\OpenServer523\\domains\\Library\\templates\\login.tpl',
      1 => 1449313297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5690e4f307c621_82848947 ($_smarty_tpl) {
?>
<div>
    <form action="/Login" method="POST">
        <input type="hidden" name="uri" value="<?php echo $_SERVER['REQUEST_URI'];?>
"/>
        <?php if ($_SESSION['user']) {?>
            Привет, <?php echo $_SESSION['user']->name;?>
 <?php echo $_SESSION['user']->surname;?>

            <input type="submit" value="Sign out..."/>
            <a href="/Login/RegisterForm/login/<?php echo $_SESSION['user']->login;?>
">Update</a>
        <?php } else { ?>
            Login: <input type="text" name="login"/>
            Password: <input type="password" name="password"/>
            <input type="submit" value="Sign in!"/>
            <a href="/Login/RegisterForm">Register</a>
        <?php }?>
    </form>
</div>
<?php }
}
