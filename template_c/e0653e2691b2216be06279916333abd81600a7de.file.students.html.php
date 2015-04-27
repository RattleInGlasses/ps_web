<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-20 19:09:52
         compiled from ".\template\students.html" */ ?>
<?php /*%%SmartyHeaderCode:17380553532e0e0da22-33630588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0653e2691b2216be06279916333abd81600a7de' => 
    array (
      0 => '.\\template\\students.html',
      1 => 1429532905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17380553532e0e0da22-33630588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'students' => 0,
    'student' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553532e0ee4ce0_49909955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553532e0ee4ce0_49909955')) {function content_553532e0ee4ce0_49909955($_smarty_tpl) {?><h1>Students</h1>
<!--<ul>
  <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

</ul>-->
<ul>
  <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value) {
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
, <?php echo $_smarty_tpl->tpl_vars['student']->value['age'];?>
</li>
  <?php } ?>
</ul><?php }} ?>
