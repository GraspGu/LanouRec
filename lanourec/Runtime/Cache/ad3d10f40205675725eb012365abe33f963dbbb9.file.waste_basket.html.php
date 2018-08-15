<?php /* Smarty version Smarty-3.1.6, created on 2018-04-19 09:00:41
         compiled from "E:/AppServ/www/LanouRec/lanourec/Home/View\Waste\waste_basket.html" */ ?>
<?php /*%%SmartyHeaderCode:246435ad7ea399a3a22-33680439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad3d10f40205675725eb012365abe33f963dbbb9' => 
    array (
      0 => 'E:/AppServ/www/LanouRec/lanourec/Home/View\\Waste\\waste_basket.html',
      1 => 1524044813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246435ad7ea399a3a22-33680439',
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
  'unifunc' => 'content_5ad7ea39b3c66',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad7ea39b3c66')) {function content_5ad7ea39b3c66($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title>废品筐</title>
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
        <div class="current_location"><span>废品筐</span></div>
    </div>
<div id="container">
    <?php if (!$_smarty_tpl->tpl_vars['info']->value){?>
    <h3 style="text-align: center;margin-top: 50px;">您的废品筐空空如也</h3>
    <?php }?>
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
/<?php echo $_smarty_tpl->tpl_vars['value']->value['waste_type'];?>
.png"></div>
	                        <p>
                                <?php if ($_smarty_tpl->tpl_vars['value']->value['waste_type']=='paper'){?>
                                    废纸
                                <?php }elseif($_smarty_tpl->tpl_vars['value']->value['waste_type']=='plastic'){?>
                                    塑料
                                <?php }elseif($_smarty_tpl->tpl_vars['value']->value['waste_type']=='battery'){?>
                                    废旧电池
                                <?php }elseif($_smarty_tpl->tpl_vars['value']->value['waste_type']=='metal'){?>
                                    废旧金属
                                <?php }elseif($_smarty_tpl->tpl_vars['value']->value['waste_type']=='electronic'){?>
                                    电子产品
                                <?php }elseif($_smarty_tpl->tpl_vars['value']->value['waste_type']=='other'){?>
                                    其它
                                <?php }?>
                            <a class="basket_delete" href="<?php echo @__SELF__;?>
/id/<?php echo $_smarty_tpl->tpl_vars['value']->value['basket_id'];?>
"><span style="float:right;">删除</span></a></p>
	                        <span class="span_price">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['waste_price'];?>
</span><span class="span_stock"><?php echo $_smarty_tpl->tpl_vars['value']->value['waste_weight'];?>
kg</span>
	                    </div>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
</div>
<!-- 下一步 -->
<?php if ($_smarty_tpl->tpl_vars['info']->value){?>
<div id="next_wrap_contianer">
    <a href="<?php echo @__MODULE__;?>
/Order/address_choose">提交</a>
</div>
<?php }?>
<!-- 底部导航条->暂定 -->
<ul id="bottom_navbar">
    <a href="<?php echo @__MODULE__;?>
/Index/fast_rec""><li>首页</li></a>
    <a href="<?php echo @__SELF__;?>
"><li>废品筐</li></a>
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