<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-20 14:28:27
         compiled from ".\template\students.html" */ ?>
<?php /*%%SmartyHeaderCode:245235534ee092dc7b7-97566740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3af70171f876855dd22ecda3031d4d7a99e9220' => 
    array (
      0 => '.\\template\\students.html',
      1 => 1429532905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245235534ee092dc7b7-97566740',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5534ee092fc5f9_67482722',
  'variables' => 
  array (
    'list' => 0,
    'students' => 0,
    'student' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5534ee092fc5f9_67482722')) {function content_5534ee092fc5f9_67482722($_smarty_tpl) {?><h1>Students</h1>
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
