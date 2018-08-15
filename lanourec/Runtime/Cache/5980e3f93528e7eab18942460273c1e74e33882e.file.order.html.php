<?php /* Smarty version Smarty-3.1.6, created on 2018-04-17 20:51:07
         compiled from "E:/AppServ/www/tp_test/shop/Home/View\Coll\order.html" */ ?>
<?php /*%%SmartyHeaderCode:28855ad5edbb4b6b21-82889003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5980e3f93528e7eab18942460273c1e74e33882e' => 
    array (
      0 => 'E:/AppServ/www/tp_test/shop/Home/View\\Coll\\order.html',
      1 => 1523932399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28855ad5edbb4b6b21-82889003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ad5edbb68ad8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5edbb68ad8')) {function content_5ad5edbb68ad8($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title>我的订单</title>
    <link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
/mall.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
/css_add.css">
    <script type="text/javascript" src="<?php echo @JS_URL;?>
/jquery-1.10.0.min.js"></script>
</head>
<style type="text/css">

    #pay{
        float: right;
        margin: -20px 20px 0 0;
        background-color: #edc700;
        padding:5px 10px; 
        border-radius: 5px;
    }
    .collect_goods{
        margin-bottom: 20px;
    }
</style>
<body class="body_color">
<div class="mall_main">
    <div id="child_header">
        <div class="goback"><a href="javascript:history.back(-1)"><i></i></a></div>
        <div class="current_location"><span>订单详情</span></div>
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
                    <div class="collect_goods">
                        <div class="coll_goods_img"><img src="<?php echo @IMG_URL;?>
/user_photo.jpg"></div>
                        <p>联系人：<?php echo $_smarty_tpl->tpl_vars['value']->value['nickname'];?>
</p>
                            <a id="pay" href="?index=admin&work=pay_one">支付</a>
                        <p>联系电话：<?php echo $_smarty_tpl->tpl_vars['value']->value['nick_tel'];?>
</p>
                        <p>&nbsp地址：<?php echo $_smarty_tpl->tpl_vars['value']->value['province'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['city'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['country'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['spe_add'];?>
</p>
                        <p>&nbsp订单号：<?php echo $_smarty_tpl->tpl_vars['value']->value['order_id'];?>
</p>
                        <div class="price_count"><time>&nbsp订单时间：<?php echo $_smarty_tpl->tpl_vars['value']->value['produce_time'];?>
</time> <span>总计约：<?php echo $_smarty_tpl->tpl_vars['value']->value['order_weight'];?>
kg</span><span>共<?php echo $_smarty_tpl->tpl_vars['value']->value['order_price'];?>
元</span></div>
                        <hr>
                    </div>
				</li>
                <?php } ?>
			</ul>
        <!-- 提示 -->
        <div>
            <h3 style="text-align: center;margin-top: 100px;">数量和总价仅作为参考使用<br>具体事宜由您与用户商议完成</h3>
        </div>
		</div>
	</div>
</div>
</div>
<!-- 底部导航条->暂定 -->
<ul id="bottom_navbar">
    <a href="<?php echo @__CONTROLLER__;?>
/work"><li style="width: 50%;">开始工作</li></a>
    <a href="<?php echo @__CONTROLLER__;?>
/index"><li style="width: 50%;">我的</li></a>
</ul>

</body>
</html>
<?php }} ?>