<?php /* Smarty version Smarty-3.1.6, created on 2018-04-19 17:13:28
         compiled from "E:/AppServ/www/LanouRec/lanourec/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:105005ad80e143f9ed0-06938377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc1194e7d8b6ddd3fc42c83bf326897b4bb0f233' => 
    array (
      0 => 'E:/AppServ/www/LanouRec/lanourec/Admin/View\\Index\\index.html',
      1 => 1524129206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105005ad80e143f9ed0-06938377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ad80e1454608',
  'variables' => 
  array (
    'user_count' => 0,
    'collector_count' => 0,
    'order_count' => 0,
    'wasteType_count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad80e1454608')) {function content_5ad80e1454608($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>蓝鸥资源回收平台管理系统</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="images/png" href="<?php echo @ADMIN_CSS_URL;?>
/static/assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo @ADMIN_CSS_URL;?>
/static/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="蓝鸥教育" />
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
/static/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
/static/assets/css/admin.css">
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
/static/assets/css/app.css">
    <script src="<?php echo @ADMIN_CSS_URL;?>
/static/assets/js/echarts.min.js"></script>
</head>
<body data-type="index">
    <script src="http://cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script>
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
                <li class="am-hide-sm-only">
                    <a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link">
                        <span class="am-icon-arrows-alt"></span>
                        <span class="admin-fullText">开启全屏</span>
                    </a>
                </li>
                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick">管理员</span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li><a href="personal.html"><span class="am-icon-bell-o"></span> 资料</a></li>
                        <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                        <li><a href="<?php echo @__CONTROLLER__;?>
/index/action/logout"><span class="am-icon-power-off"></span> 退出</a></li>
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
        <div class="tpl-content-page-title">
            首页
        </div>
        <ol class="am-breadcrumb">
            <li><a href="<?php echo @__CONTROLLER__;?>
/index" class="am-icon-home">首页</a></li>
            <li class="am-active">管理</li>
        </ol>
        <div class="row">
            <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                <div class="dashboard-stat blue">
                    <div class="visual">
                        <i class="am-icon-comments-o"></i>
                    </div>
                    <div class="details">
                        <div class="number"><?php echo $_smarty_tpl->tpl_vars['user_count']->value;?>
</div>
                        <div class="desc"> 用户 </div>
                    </div>
                    <a class="more" href="<?php echo @__CONTROLLER__;?>
/user"> 查看更多
                        <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
            <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                <div class="dashboard-stat red">
                    <div class="visual">
                        <i class="am-icon-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number"><?php echo $_smarty_tpl->tpl_vars['collector_count']->value;?>
</div>
                        <div class="desc"> 回收员 </div>
                    </div>
                    <a class="more" href="<?php echo @__CONTROLLER__;?>
/collector"> 查看更多
                        <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
            <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                <div class="dashboard-stat green">
                    <div class="visual">
                        <i class="am-icon-apple"></i>
                    </div>
                    <div class="details">
                        <div class="number"><?php echo $_smarty_tpl->tpl_vars['order_count']->value;?>
</div>
                        <div class="desc"> 订单数量 </div>
                    </div>
                    <a class="more" href="<?php echo @__CONTROLLER__;?>
/order"> 查看更多
                        <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
            <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                <div class="dashboard-stat purple">
                    <div class="visual">
                        <i class="am-icon-android"></i>
                    </div>
                    <div class="details">
                        <div class="number"><?php echo $_smarty_tpl->tpl_vars['wasteType_count']->value;?>
</div>
                        <div class="desc"> 废品种类 </div>
                    </div>
                    <a class="more" href="<?php echo @__CONTROLLER__;?>
/wasteType"> 查看更多
                        <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo @ADMIN_CSS_URL;?>
/static/assets/js/jquery.min.js"></script>
    <script src="<?php echo @ADMIN_CSS_URL;?>
/static/assets/js/amazeui.min.js"></script>
    <script src="<?php echo @ADMIN_CSS_URL;?>
/static/assets/js/iscroll.js"></script>
    <script src="<?php echo @ADMIN_CSS_URL;?>
/static/assets/js/app.js"></script>
</body>
</html><?php }} ?>