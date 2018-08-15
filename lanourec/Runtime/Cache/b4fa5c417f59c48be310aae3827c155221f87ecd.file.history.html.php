<?php /* Smarty version Smarty-3.1.6, created on 2018-04-17 20:47:22
         compiled from "E:/AppServ/www/tp_test/shop/Home/View\Order\history.html" */ ?>
<?php /*%%SmartyHeaderCode:203995ad5ecda430505-27616764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4fa5c417f59c48be310aae3827c155221f87ecd' => 
    array (
      0 => 'E:/AppServ/www/tp_test/shop/Home/View\\Order\\history.html',
      1 => 1523881920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203995ad5ecda430505-27616764',
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
  'unifunc' => 'content_5ad5ecda58b88',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5ecda58b88')) {function content_5ad5ecda58b88($_smarty_tpl) {?><!DOCTYPE html>
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
<body class="body_color">
<div class="mall_main">
    <div id="child_header">
        <div class="goback"><a href="javascript:history.back(-1)"><i></i></a></div>
        <div class="current_location"><span>已完成订单</span></div>
    </div>
<div id="container">
	<div data-role="page">
		<div data-role="content">
			<ul data-role="listview" class="swipe">
                <?php if (!$_smarty_tpl->tpl_vars['info']->value){?>
                    <h3 style='text-align:center;margin-top:10px;'>您暂时还未有已完成订单。</h3>
                <?php }?>
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
	                        <p><?php echo $_smarty_tpl->tpl_vars['value']->value['province'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['city'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['country'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['spe_add'];?>
</p>
	                        <span class="span_price">已完成</span><span class="span_stock"><?php echo $_smarty_tpl->tpl_vars['value']->value['produce_time'];?>
</span>
	                    </div>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
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

<script type="text/javascript">
$(function() {

    function prevent_default(e) {
        e.preventDefault();
    }

    function disable_scroll() {
        $(document).on('touchmove', prevent_default);
    }

    function enable_scroll() {
        $(document).unbind('touchmove', prevent_default)
    }

    var x;
    $('.swipe-delete li > a')
        .on('touchstart', function(e) {
            console.log(e.originalEvent.pageX)
            $('.swipe-delete li > a').css('left', '0px') // close em all
            $(e.currentTarget).addClass('open')
            x = e.originalEvent.targetTouches[0].pageX // anchor point
        })
        .on('touchmove', function(e) {
            var change = e.originalEvent.targetTouches[0].pageX - x
            change = Math.min(Math.max(-60, change), 0) // restrict to -60px left, 0px right
            e.currentTarget.style.left = change + 'px'
            if (change < -10) disable_scroll() // disable scroll once we hit 10px horizontal slide
        })
        .on('touchend', function(e) {
            var left = parseInt(e.currentTarget.style.left)
            var new_left;
            if (left < -35) {
                new_left = '-60px'
            } else if (left > 35) {
                new_left = '60px'
            } else {
                new_left = '0px'
            }
            // e.currentTarget.style.left = new_left
            $(e.currentTarget).animate({left: new_left}, 200)
            enable_scroll()
        });

});
</script>

</body>
</html>
<?php }} ?>