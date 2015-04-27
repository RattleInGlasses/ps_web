<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-27 19:06:40
         compiled from ".\template\side_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:24151553e5ca8b9d233-46239119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bc35579e262846b336f767ba6dc8f28228ac61b' => 
    array (
      0 => '.\\template\\side_menu.html',
      1 => 1430154369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24151553e5ca8b9d233-46239119',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553e5ca8baa203_71739862',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e5ca8baa203_71739862')) {function content_553e5ca8baa203_71739862($_smarty_tpl) {?><aside class="side_menu">
  <div class="block">
    <div class="block_content">
      <form class="filter">
        <input class="filter_text" type="search" placeholder="Тег HTML или св-во CSS" autocomplete="off">
        <input class="filter_image" type="image" alt="Найти" src="/images/find.png">
        <div class="clear"></div>
      </form>
    </div>
  </div>
  <div class="block">
    <h2 class="block_title">Теги HTML</h2>
    <div class="block_content menu_html_tags">
      <ul class="menu">
        <li class="first leaf">
          <a href="">Все теги</a>
        </li>
        <li class="leaf">
          <a href="">Валидация тегов</a>
        </li>
        <li class="leaf">
          <a href="">&lt;!-- --&gt;</a>
        </li>
        <li class="leaf">
          <a href="">&lt;!DOCTYPE&gt;</a>
        </li>
        <li class="collapsed">
          <a href="">&lt;a&gt;</a>
        </li>
        <li class="leaf">
          <a href="/canvas">&lt;canvas&gt;</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="block">
    <h2 class="block_title">Справочник CSS</h2>
    <div class="block_content menu_css">
      <ul class="menu">
        <li class="first leaf">
          <a href="">Как пользоваться справочником</a>
        </li>
        <li class="leaf">
          <a title="" href="">!important</a>
        </li>
        <li class="leaf">
          <a href="">-moz-border-bottom-colors</a>
        </li>
        <li class="leaf">
          <a href="">-moz-border-left-colors</a>
        </li>
        <li class="leaf">
          <a href="">-moz-border-right-colors</a>
        </li>
      </ul>
    </div>
  </div>
</aside><?php }} ?>
