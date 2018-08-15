<?php /* Smarty version Smarty-3.1.6, created on 2018-04-18 16:53:13
         compiled from "E:/AppServ/www/tp_test/shop/Home/View\Index\fast_rec.html" */ ?>
<?php /*%%SmartyHeaderCode:108925ad5ea20de3410-19555208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b62c90c3c5e442b1d5159f00f71ff715b1c35692' => 
    array (
      0 => 'E:/AppServ/www/tp_test/shop/Home/View\\Index\\fast_rec.html',
      1 => 1524040119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108925ad5ea20de3410-19555208',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ad5ea20eb926',
  'variables' => 
  array (
    'info' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5ea20eb926')) {function content_5ad5ea20eb926($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title>快速回收</title>
    <link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
/mall.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
/css_add.css">
    <script type="text/javascript" src="<?php echo @JS_URL;?>
/jquery-1.8.2.min.js"></script>
</head>
<style type="text/css">
	.swipe li{
		float: left;
		margin-left: 5%;
		width: 150px;
	}
	.span_price{
		height: 60px;
		line-height: 60px;
	}
</style>
<body class="body_color">
<div class="mall_main">
    <div id="child_header">
        <div class="goback"><a href="javascript:history.back(-1)"><i></i></a></div>
        <div class="current_location"><span>首页</span></div>
    </div>
<div id="container">
	<div data-role="page">
		<div data-role="content">
			<ul data-role="listview" class="swipe">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<li>
					<a href="<?php echo @__CONTROLLER__;?>
/fast_rec_sec/index_rec/<?php echo $_smarty_tpl->tpl_vars['value']->value['type_eg'];?>
">
                        <div class="collect_goods">
                            <div class="coll_goods_img"><img src="<?php echo @IMG_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['type_eg'];?>
.png"></div>
                            <span class="span_price"><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</span>
                        </div>
					</a>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
</div>
<!-- 底部导航条->暂定 -->
<ul id="bottom_navbar">
	<a href="<?php echo @__SELF__;?>
""><li>首页</li></a>
	<a href="<?php echo @__MODULE__;?>
/Waste/waste_basket"><li>废品筐</li></a>
	<a href="<?php echo @__CONTROLLER__;?>
/index"><li>我的</li></a>
</ul>
</body>
</html>
<?php }} ?>