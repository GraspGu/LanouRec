<?php /* Smarty version Smarty-3.1.6, created on 2018-04-18 19:28:58
         compiled from "E:/AppServ/www/tp_test/shop/Admin/View\Index\modify.html" */ ?>
<?php /*%%SmartyHeaderCode:204055ad5eefe53b811-00922163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d00c9761087ae5bbdea069c39e1027f3bf49ba8' => 
    array (
      0 => 'E:/AppServ/www/tp_test/shop/Admin/View\\Index\\modify.html',
      1 => 1524050933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204055ad5eefe53b811-00922163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ad5eefe7a179',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5eefe7a179')) {function content_5ad5eefe7a179($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>更改信息--垃圾回收平台</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="<?php echo @ADMIN_CSS_URL;?>
/static/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo @ADMIN_CSS_URL;?>
/static/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
/static/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
/static/assets/css/admin.css">
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
/static/assets/css/app.css">
</head>
<body data-type="generalComponents">
    <header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">
            <a href="<?php echo @__CONTROLLER__;?>
/index" class="tpl-logo">
                <img src="<?php echo @ADMIN_CSS_URL;?>
/static/assets/images/logo.png" alt="">
            </a>
        </div>
        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle></li>
                <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick">管理员</span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li><a href="personal.html"><span class="am-icon-bell-o"></span> 资料</a></li>
                        <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                        <li><a href="<?php echo @__SELF__;?>
/action/logout"><span class="am-icon-power-off"></span> 退出</a></li>
                    </ul>
                </li>
                <li><a href="###" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
            </ul>
        </div>
    </header>
<div class="tpl-page-container tpl-page-header-fixed">
        <div class="tpl-left-nav tpl-left-nav-hover">
            <div class="tpl-left-nav-title">
               导航
            </div>
            <div class="tpl-left-nav-list">
                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-wpforms"></i>
                        <span>管理</span>
                        <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                    </a>
                    <ul class="tpl-left-nav-sub-menu" style="display: block;">
                        <li>
                            <a href="<?php echo @__CONTROLLER__;?>
/user">
                                <i class="am-icon-angle-right"></i>
                                <span>用户管理</span>
                            </a>
                            <a href="<?php echo @__CONTROLLER__;?>
/collector">
                                <i class="am-icon-angle-right"></i>
                                <span>回收员管理</span>
                            </a>
                            <a href="<?php echo @__CONTROLLER__;?>
/order">
                                <i class="am-icon-angle-right"></i>
                                <span>订单管理</span>
                            </a>
                            <a href="<?php echo @__CONTROLLER__;?>
/wasteType">
                                <i class="am-icon-angle-right"></i>
                                <span>废品种类管理</span>
                            </a>
                        </li>
                    </ul>
                </li>
        </div>
    </div>
<div class="tpl-content-wrapper">
    <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
        <li class="am-active">
            <?php if ($_GET['action']=='user'){?>
            用户管理
            <?php }elseif($_GET['action']=='collector'){?>
            回收员管理
            <?php }elseif($_GET['action']=='wasteType'){?>
            种类管理
        <?php }?></li>
        <li class="am-active">更改信息</li>
    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 更改信息
            </div>
        </div>
            <div class="tpl-block ">
                <div class="am-g tpl-amazeui-form">
                    <div class="am-u-sm-12">
                        <!-- 修改用户部分 -->
                        <?php if ($_GET['action']=='user'){?>
                        <form class="am-form" action="<?php echo @__SELF__;?>
/action/user/id/<?php echo $_GET['id'];?>
" method='post'>
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <tr>
                                    <td>姓名：<input type="text" name="username"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>性别：<input type="text" name="sex"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>电话：<input type="text" name="telephone"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>地址：<input type="text" name="address"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td><input style="color: #32c5d2;width:60px;padding:5px 10px;border-radius: 5px;" type="submit" name="" value="保存"></td>
                                </tr>
                            </table>
                            <hr>
                        </form>
                        <?php }?>
                        <!-- 修改回收员部分 -->
                        <?php if ($_GET['action']=='collector'){?>
                        <form class="am-form" action="<?php echo @__SELF__;?>
/action/collector/id/<?php echo $_GET['id'];?>
" method='post'>
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <tr>
                                    <td>姓名：<input type="text" name="username"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>性别：<input type="text" name="sex"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>电话：<input type="text" name="telephone"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>省：<input type="text" name="province"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>市：<input type="text" name="city"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>区/县：<input type="text" name="quyu"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>具体地址：<input type="text" name="spe_address"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>负责区域西经度(请输入腾讯地图坐标，下同)：<input type="text" name="longitude_west"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>负责区域东经度：<input type="text" name="longitude_east"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>负责区域北纬度：<input type="text" name="latitude_north"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>负责区域南纬度：<input type="text" name="latitude_south"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td><input style="color: #32c5d2;width:60px;padding:5px 10px;border-radius: 5px;" type="submit" name="" value="保存"></td>
                                </tr>
                            </table>
                            <hr>
                        </form>
                        <?php }?>
                        <!-- 修改废品部分 -->
                        <?php if ($_GET['action']=='wasteType'){?>
                        <form class="am-form" action="<?php echo @__SELF__;?>
/id/<?php echo $_GET['wid'];?>
" method='post'>
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <tr>
                                    <td>类型：<input type="text" name="waste_type"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>废品类型英文标识：<input type="text" name="type_eg"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>废品单价(元/kg)：<input type="text" name="unit_price"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td><input style="color: #32c5d2;width:60px;padding:5px 10px;border-radius: 5px;" type="submit" name="" value="保存"></td>
                                </tr>
                            </table>
                            <hr>
                        </form>
                        <?php }?>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo @ADMIN_CSS_URL;?>
/static/assets/js/jquery.min.js"></script>
<script src="<?php echo @ADMIN_CSS_URL;?>
/static/assets/js/amazeui.min.js"></script>
<script src="<?php echo @ADMIN_CSS_URL;?>
/static/assets/js/app.js"></script>
</body>
</html><?php }} ?>