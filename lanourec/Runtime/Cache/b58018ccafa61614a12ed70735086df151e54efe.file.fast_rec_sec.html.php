<?php /* Smarty version Smarty-3.1.6, created on 2018-04-18 17:32:22
         compiled from "E:/AppServ/www/tp_test/shop/Home/View\Index\fast_rec_sec.html" */ ?>
<?php /*%%SmartyHeaderCode:301655ad5ea231d0e61-80438185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b58018ccafa61614a12ed70735086df151e54efe' => 
    array (
      0 => 'E:/AppServ/www/tp_test/shop/Home/View\\Index\\fast_rec_sec.html',
      1 => 1524043941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301655ad5ea231d0e61-80438185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ad5ea233d456',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5ea233d456')) {function content_5ad5ea233d456($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title>输入数量</title>
    <link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
/mall.css">
    <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
/css_add.css">
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
/jquery.mobile-1.4.3.min.css" />
    <script type="text/javascript" src="<?php echo @JS_URL;?>
/jquery-1.8.2.min.js"></script>
</head>
<style type="text/css">
	.swipe{
		width: 140px;
		display: block;
		margin: 0 auto;
	}
	.span_price{
		height: 60px;
		line-height: 60px;
	}
	table{
		width: 80%;
		margin: 0 auto;
	}
	table tr td{
		padding-top: 30px;
	}
	input{
		border-top: none;
		border-left: none;
		border-right: none;
		background: #fff;
	}
</style>
<body class="body_color">
<div class="mall_main">
    <div id="child_header">
        <div class="goback"><a href="javascript:history.back(-1)"><i></i></a></div>
        <div class="current_location"><span>输入数量</span></div>
    </div>
<div id="container">
	<div data-role="page">
		<div data-role="content">
			<ul data-role="listview" class="swipe">
				<li>
                    <div class="collect_goods">
                        <div class="coll_goods_img"><img src="<?php echo @IMG_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['type_eg'];?>
.png"></div>
                        <span class="span_price"><?php echo $_smarty_tpl->tpl_vars['info']->value['type'];?>
</span>
                    </div>
				</li>
			</ul>
			<hr />
			<form action="<?php echo @__MODULE__;?>
/Waste/waste_basket/waste_type/<?php echo $_GET['index_rec'];?>
" method="post">
				<table>
					<tr style="display: none">
						<td><input type="text" name="sigle_price" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['price'];?>
"></td>
					</tr>
					<tr>
						<td>单价：<label id="sigle_price">
							<?php echo $_smarty_tpl->tpl_vars['info']->value['price'];?>

						</label>元/kg</td>
					</tr>
					<tr>
						<td>重量(单位:kg)：<input type="text" name="waste_weight" oninput="all_price()"></td>
					</tr>
				</table>
			<hr />
				<p style="text-align: center;">总价(￥)：<label id="all_price"></label>元</p>
			<hr />
				<input type="submit" class="a_btn a_btn_submit" value="加入废品框">
			</form> 
		</div>
	</div>
</div>
</div>
<!-- 提示 -->
<div>
    <h3 style="text-align: center;margin-top: 100px;">数量和总价仅作为回收员参考使用<br>具体事宜由回收员与您商议完成</h3>
</div>
<!-- 底部导航条->暂定 -->
<ul id="bottom_navbar">
	<a href="<?php echo @__CONTROLLER__;?>
/fast_rec"><li>首页</li></a>
	<a href="<?php echo @__MODULE__;?>
/Waste/waste_basket"><li>废品筐</li></a>
	<a href="<?php echo @__CONTROLLER__;?>
/index"><li>我的</li></a>
</ul>

<script type="text/javascript">
	function all_price(){
		var sigle_price = $("#sigle_price").text();
		var num = $("table").find("input[name = 'waste_weight']").val();
		var total = sigle_price * num;
		//var totle_num = total.toFixed(2); 按照银行家算法舍入
		var totle_num = Math.round(total * 100) / 100 //四舍五入
        $("#all_price").text(totle_num);
	}
</script>

</body>
</html>
<?php }} ?>