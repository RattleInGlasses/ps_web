<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-27 06:15:13
         compiled from ".\template\upload.html" */ ?>
<?php /*%%SmartyHeaderCode:16986553db04a388b74-32497917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '588eb32d3019cbcb2ff7a8b16415e186d9d6716c' => 
    array (
      0 => '.\\template\\upload.html',
      1 => 1430107198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16986553db04a388b74-32497917',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553db04a3b9dd0_90449924',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553db04a3b9dd0_90449924')) {function content_553db04a3b9dd0_90449924($_smarty_tpl) {?><div>
  <form action="getImage.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="fileName">
    <input type="submit" value="Загрузить">
  </form>
</div><?php }} ?>
