<?php /* Smarty version Smarty-3.1.6, created on 2018-04-18 17:38:01
         compiled from "E:/AppServ/www/tp_test/shop/Home/View\Index\address_list.html" */ ?>
<?php /*%%SmartyHeaderCode:88845ad5eaa500cf80-51683339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a4d84d39a54e099e749c60a4557cab6b79c05b6' => 
    array (
      0 => 'E:/AppServ/www/tp_test/shop/Home/View\\Index\\address_list.html',
      1 => 1524040768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88845ad5eaa500cf80-51683339',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ad5eaa513379',
  'variables' => 
  array (
    'info' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5eaa513379')) {function content_5ad5eaa513379($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
/mall.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
/css_add.css">
    <script type="text/javascript" src="<?php echo @JS_URL;?>
/jquery-1.8.2.min.js"></script>
    <title>选择您的地址</title>
    <style type="text/css">
        .next_operate{
            cursor: pointer;
        }
        p{
            padding:0;
            margin:0;
        }
    </style>
</head>
<body>
<div id="child_header">
    <div class="goback"><a href="javascript:history.back(-1)"><i></i></a></div>
    <div class="current_location"><span>地址管理</span></div>
    <div class="next_operate"><a href="<?php echo @__CONTROLLER__;?>
/address_add"><span>新增地址</span></a></div>
</div>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <div class="address_list">
            <div class="list_left">
                <p class="pw1"><?php echo $_smarty_tpl->tpl_vars['value']->value['nickname'];?>
</p>
                <p class="pw1"><?php echo $_smarty_tpl->tpl_vars['value']->value['nick_tel'];?>
</p>
                <a href="<?php echo @__CONTROLLER__;?>
/address_list/id/<?php echo $_smarty_tpl->tpl_vars['value']->value['address_id'];?>
"><p style="text-align: center;">删除</p></a>
                <p class="pw2"><?php echo $_smarty_tpl->tpl_vars['value']->value['province'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['city'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['country'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['spe_add'];?>
</p>
                <a href="<?php echo @__CONTROLLER__;?>
/address_edit/aid/<?php echo $_smarty_tpl->tpl_vars['value']->value['address_id'];?>
" class="list_right"><img src="<?php echo @IMG_URL;?>
/change_adr.png"></a>
            </div>
        </div>
    <?php } ?>
</div>
<!-- 底部导航条->暂定 -->
<ul id="bottom_navbar">
    <a href="<?php echo @__MODULE__;?>
/Index/fast_rec"><li>首页</li></a>
    <a href="<?php echo @__MODULE__;?>
/Waste/waste_basket"><li>废品筐</li></a>
    <a href="<?php echo @__MODULE__;?>
/Index/index"><li>我的</li></a>
</ul>
</body>
</html>
<?php }} ?>