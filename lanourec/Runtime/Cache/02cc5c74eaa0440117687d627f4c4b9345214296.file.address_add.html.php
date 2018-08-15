<?php /* Smarty version Smarty-3.1.6, created on 2018-04-17 20:38:25
         compiled from "E:/AppServ/www/tp_test/shop/Home/View\Index\address_add.html" */ ?>
<?php /*%%SmartyHeaderCode:311455ad5eac138fe52-75932347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02cc5c74eaa0440117687d627f4c4b9345214296' => 
    array (
      0 => 'E:/AppServ/www/tp_test/shop/Home/View\\Index\\address_add.html',
      1 => 1523878070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311455ad5eac138fe52-75932347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ad5eac155555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5eac155555')) {function content_5ad5eac155555($_smarty_tpl) {?><!DOCTYPE html>
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
    <title>个人管理中心</title>
    <style type="text/css">
        .next_operate{
            cursor: pointer;
        }
        #area_adr p{
            padding: 0;
            margin:0;
        }
    </style>
</head>
<body>
<div class="mall_main">
<div id="child_header">
    <div class="goback"><a href="javascript:history.back(-1)"><i></i></a></div>
    <div class="current_location"><span>新增地址</span></div>
    <div class="next_operate"><span>保存</span></div>
</div>
<div class="address_edit">
    <form method="post" action="<?php echo @__SELF__;?>
/id/<?php echo $_smarty_tpl->tpl_vars['info']->value['openid'];?>
">
        <ul>
            <li><span class="span_color">联系人</span><input type="text" value="" placeholder="收货人姓名" name="username"></li>
            <li>            
                <p class="gender">
                <label><input type="radio" name="gender" value="男" id="gender_2">先生</label>
                <label><input type="radio" name="gender" value="女" id="gender_3">女士</label>
                <br>
                </p>
            </li>
            <li><span class="span_color">手机号码</span><input class="input_w1" name="tel" type="text" value="" placeholder="请输入交货人的手机号码" maxlength="11"></li>
            <li><span  class="span_color">所在地区</span>
                <div id="area_adr" class="area_adr">
                    <input style="display: none;" type="text" name="province" value="">
                    <div class="m_zlxg" id="shengfen">
                        <p title="">选择省份</p>
                        <div class="m_zlxg2">
                            <ul></ul>
                        </div>
                    </div>
                    <input style="display: none;" type="text" name="city" value="">
                    <div class="m_zlxg" id="chengshi">
                        <p title="">选择城市</p>
                        <div class="m_zlxg2">
                            <ul></ul>
                        </div>
                    </div>
                    <input style="display: none;" type="text" name="country" value="">
                    <div class="m_zlxg" id="quyu">
                        <p title="">选择区域</p>
                        <div class="m_zlxg2">
                            <ul></ul>
                        </div>
                    </div>
                    <input id="sfdq_num" type="hidden" value="" />
                    <input id="csdq_num" type="hidden" value="" />
                    <input id="sfdq_tj" type="hidden" value="" />
                    <input id="csdq_tj" type="hidden" value="" />
                    <input id="qydq_tj" type="hidden" value="" />
                </div>
            </li>
            <li><span  class="span_color">详细地址</span><input class="input_w1" name="address" type="text" value="" placeholder="请输入您的详细地址至门牌号" maxlength="30"></li>
        </ul>
    </form>
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
<script type="text/javascript" src="<?php echo @JS_URL;?>
/address.js"></script>

<script type="text/javascript">
$(function(){

	$("#area_adr").sjld("#shengfen","#chengshi","#quyu");
	
});
$('.next_operate').click(function(){
    $('form').submit();
});
$(".next_operate").click(function(){
            var sf = $("#shengfen").find("p").text();
            $("input[name = 'province']").val(sf);

            var cs = $("#chengshi").find("p").text();
            $("input[name = 'city']").val(cs);

            var qy = $("#quyu").find("p").text();
            $("input[name = 'country']").val(qy);

            $("form").submit();
        })
</script>

</body>
</html>

<?php }} ?>