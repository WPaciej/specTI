<?php
/* Smarty version 4.3.2, created on 2023-11-17 09:04:16
  from 'C:\xampp\htdocs\spec\zadanie5\app\security\login_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65571e80d210d6_30688136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af26b74631ca9b6a65781cea47f22ed30df216f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\spec\\zadanie5\\app\\security\\login_view.html',
      1 => 1700208159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65571e80d210d6_30688136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104094216065571e80d15335_54261947', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39881769565571e80d15e07_88421758', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/logowanie.html");
}
/* {block 'footer'} */
class Block_104094216065571e80d15335_54261947 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_104094216065571e80d15335_54261947',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_39881769565571e80d15e07_88421758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_39881769565571e80d15e07_88421758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2>Logowanie</h2>
      <div class="hr"></div>      
      
      <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/login.php" method="post">
        <fieldset>
          <p class="form">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['login'];?>
" /> <br>
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass"/>
			<p class="form_submit"><input type="submit" name="a4" id="a4" value="Zaloguj"/></p>
		</fieldset>
      </form>      
      <div class="hr"></div>

    		<?php if (((isset($_smarty_tpl->tpl_vars['messages']->value)))) {?>
			<?php if ((count($_smarty_tpl->tpl_vars['messages']->value) > 0)) {?>
				<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			<?php }?>
		<?php }?>


<?php
}
}
/* {/block 'content'} */
}
