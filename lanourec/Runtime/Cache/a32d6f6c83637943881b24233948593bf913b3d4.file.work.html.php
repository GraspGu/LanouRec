<?php /* Smarty version Smarty-3.1.6, created on 2018-04-17 20:53:04
         compiled from "E:/AppServ/www/tp_test/shop/Home/View\Coll\work.html" */ ?>
<?php /*%%SmartyHeaderCode:6665ad5edd56cf569-28904252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a32d6f6c83637943881b24233948593bf913b3d4' => 
    array (
      0 => 'E:/AppServ/www/tp_test/shop/Home/View\\Coll\\work.html',
      1 => 1523969581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6665ad5edd56cf569-28904252',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ad5edd57a6e5',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5edd57a6e5')) {function content_5ad5edd57a6e5($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title>全部订单</title>
    <script src="<?php echo @JS_URL;?>
/jquery-1.7.2.min.js"></script>
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
/mall.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
/css_add.css">
</head>
<style type="text/css">
    .wait_pay{
        margin-bottom: 30px;
    }
</style>
<body class="body_color">
<div class="mall_main">
<div id="child_header">
    <div class="goback"><a href="javascript:history.back(-1)"><i></i></a></div>
    <div class="current_location"><span>全部订单</span></div>
</div>

<div class="all_orders">
    <ul class="order_nav">
        <li class="current"><a>进行中</a></li>
        <!-- <li><a>待发货</a></li>
        <li><a>已发货</a></li>
        <li><a>已完成</a></li> -->
    </ul>
    <!--待付款订单-->
        <div class="wait_pay">
            <?php if (!$_smarty_tpl->tpl_vars['info']->value){?>
                <h3 style='text-align:center;margin-top:50px;'>接收订单中...</h3>
            <?php }?>
            <div class="order_list">
                
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


<!-- 轮训方式查询订单 -->
<script type="text/javascript">  
    $(function () {  
        (function longPolling() { 
            $.ajax({  
                url: "testPush",  
                //data: {"timed": Date.parse(new Date())/1000},  
                //dataType: "text", 
                timeout: 5000,//5秒超时，可自定义设置  
                error: function (XMLHttpRequest, textStatus, errorThrown) {  
                    $("#state").append("[state: " + textStatus + ", error: " + errorThrown + " ]<br/>");  
                    //$("#state").append("[state: " + XMLHttpRequest.status + ", error: " + XMLHttpRequest.readyState + " ]<br/>" + textStatus);  
                    if (textStatus == "timeout") { // 请求超时  
                        //$("#state").append("请求超时。"); 
                        //longPolling(); // 递归调用  
                    } else { // 其他错误，如网络错误等  
                        $//("#state").append("未知错误。"); 
                        //longPolling();  
                    }  
                },  
                success: function (data, textStatus) {  
                    //$("#state").append("[state: " + textStatus + ", data: { " + data  + "} ]<br/>");  
                    if (textStatus == "success") { // 请求成功 
                        $('.wait_pay').empty();
                        var jsonObj = eval('(' + data + ')');
                        //对json数组each
						// $.each(jsonObj,function(name,value) {
						// 	//document.write(name);
						// 	document.write(value.order_id);
						// }); 
                        //for(var p in jsonObj){//遍历json数组时，这么写p为索引，0,1
                        $.each(jsonObj,function(name,value){
                        	$('.wait_pay').append(
                                "<div class='order_list'>" + 
                                "<p>订单号：" + value.order_id + "</p>" + 
                                "<div class='goods_info'>" +
                                "<div class='left_goods'>" +
                                "<a class='goods_img'><img src='/tp_test/shop/Public/images/user_photo.jpg'></a>" +
                                "<p id='nickname' style='margin-top: 10px;padding-top: 0'>联系人：" + value.nickname +"</p>" +
                                "<p id='nick_tel'>联系电话：" + value.nick_tel + "</p>" +
                                "<p id='spe_add'>地址：" + value.province + value.city + value.country + value.spe_add + "</p>" +
                                "</div>" +
                                "<div class='right_operate'><a href='order/action/receive/id/" + value.order_id + "'>接收</a></div>" +
                                "</div>" +
                                "<div class='price_count'><time id='produce_time'>" + value.produce_time +
                                "<span id='sum'>总计约" + value.order_weight + 'kg ' + '共' + value.order_price + '元' +
                                "</div>" +
                                "</div>" +
                                "</div>");
                        });
                        //longPolling();  
                    }
                }
            });
        })();  
    });  
</script> 

    <div id="state"></div>
</body>
</html><?php }} ?>