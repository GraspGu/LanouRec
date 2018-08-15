<?php /* Smarty version Smarty-3.1.6, created on 2018-04-17 20:27:37
         compiled from "E:/AppServ/www/tp_test/shop/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:117845ad5e839d58e84-43779863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1a77eccc1496a02ed9882de88b8073b2f585227' => 
    array (
      0 => 'E:/AppServ/www/tp_test/shop/Home/View\\Index\\index.html',
      1 => 1523883592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117845ad5e839d58e84-43779863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ad5e839eb1c1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5e839eb1c1')) {function content_5ad5e839eb1c1($_smarty_tpl) {?><!DOCTYPE html>
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
    </style>
</head>
<body>
<div class="mall_main">
    <div id="child_header">
        <div class="goback"><a href="javascript:history.back(-1)"><i></i></a></div>
        <div class="current_location"><span>个人中心</span></div>
    </div>
    <div class="wx_wrap">
        <a href="<?php echo @__CONTROLLER__;?>
/user_info">
            <div class="person_top">
                <img class="top_bj" src="<?php echo @IMG_URL;?>
/top_bj.jpg">
                <div class="per_con">
                    <div class="user_photo">
                        <img src="<?php echo @IMG_URL;?>
/user_photo.jpg">
                    </div>
                    <div class="name_right">
                        <p class="p1">会员姓名：<?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
</p>
                        <p>注册时间：<?php echo $_smarty_tpl->tpl_vars['info']->value['produce_time'];?>
</p>
                        <!-- <p class="p2">积分值：600</p> -->
                    </div>
                </div>
            </div>
        </a>
        <div class="my_menu">
            <ul>
                <li class="li_list"><a href="<?php echo @__MODULE__;?>
/Order/track"><img src="<?php echo @IMG_URL;?>
/user_icon1.png"> <span>订单追踪</span></a></li>
                <li class="li_list"><a href="<?php echo @__MODULE__;?>
/Order/history"><img src="<?php echo @IMG_URL;?>
/user_icon2.png"> <span>历史订单</span></a></li>
                <li class="li_list"><a href=""><img src="<?php echo @IMG_URL;?>
/user_icon3.png"> <span>收款记录</span></a></li>
            </ul>
        </div>
        <ul class="menu_list"> 
            <?php if ($_smarty_tpl->tpl_vars['info']->value['0']['state']=='0'){?>
                <li class='tiao'><a href='<?php echo @__CONTROLLER__;?>
/apply'>申请成为回收员</a></li>
            <?php }?>
            <li class="tiao"><a href="<?php echo @__CONTROLLER__;?>
/address_list">地址管理</a></li>
            <li class="tiao"><a style="color: #aaa" href="">财富中心</a></li>
            <li class="tiao"><a style="color: #aaa" href="">设置</a></li>
        </ul>
    </div>
</div>
<!-- 底部导航条->暂定 -->
<ul id="bottom_navbar">
    <a href="<?php echo @__CONTROLLER__;?>
/fast_rec"><li>首页</li></a>
    <a href="<?php echo @__MODULE__;?>
/Waste/waste_basket"><li>废品筐</li></a>
    <a href="<?php echo @__SELF__;?>
"><li>我的</li></a>
</ul>
</body>
</html>
<?php }} ?>