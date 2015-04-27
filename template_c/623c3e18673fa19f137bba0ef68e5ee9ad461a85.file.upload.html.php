<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-27 19:08:20
         compiled from ".\template\upload.html" */ ?>
<?php /*%%SmartyHeaderCode:29285553e6d0488a8a0-89669819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '623c3e18673fa19f137bba0ef68e5ee9ad461a85' => 
    array (
      0 => '.\\template\\upload.html',
      1 => 1430107198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29285553e6d0488a8a0-89669819',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553e6d049158b4_12756843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e6d049158b4_12756843')) {function content_553e6d049158b4_12756843($_smarty_tpl) {?><div>
  <form action="getImage.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="fileName">
    <input type="submit" value="Загрузить">
  </form>
</div><?php }} ?>
