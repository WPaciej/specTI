<?php
/* Smarty version 4.3.2, created on 2023-11-17 09:04:16
  from 'C:\xampp\htdocs\spec\zadanie5\templates\logowanie.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65571e80e70111_76395601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0dd41add7b075ed60b27005118b8deb7cb64a6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\spec\\zadanie5\\templates\\logowanie.html',
      1 => 1700207089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65571e80e70111_76395601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">  
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css" type="text/css" />
</head>

<body>

<div id="main">
    <div class="content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136936689565571e80e6f277_25597117', 'content');
?>

    </div>
    <div class="sidebar">
      <h2>Aktualności</h2>
      <p>Lorem ipsum dolor sit amet consectetuer semper at Suspendisse eros In. Lorem et Aenean fringilla ac cursus et id at lacus ipsum. Accumsan iaculis condimentum id interdum natoque in magna nisl eget Aenean. Pharetra quis tincidunt urna justo nulla convallis in pretium Mauris sagittis. Lobortis ut aliquet nisl facilisis sed sollicitudin faucibus morbi lorem sagittis. Malesuada interdum et tristique dui vitae purus aliquet rutrum tortor tellus. Nunc lacinia.</p>          
    </div>
  </div>
    
  <div class="clear"></div>


  </div>

  <div id="footer">
    <p>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150892570165571e80e6fae9_92577646', 'footer');
?>

        </p>
        <p>
          Copyright &copy; 2012; Projekt: SzablonyStron.org - <a href="http://szablonystron.org">darmowe szablony stron</a>, Uniwersalne <a href="https://redrewno.pl/pl,produkty,9">podajniki do kart</a> jedno i wielo-komorowe.
        </p>
  </div>
  </body>
  </html><?php }
/* {block 'content'} */
class Block_136936689565571e80e6f277_25597117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_136936689565571e80e6f277_25597117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Tu powinno być logowanie :| <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_150892570165571e80e6fae9_92577646 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_150892570165571e80e6fae9_92577646',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
