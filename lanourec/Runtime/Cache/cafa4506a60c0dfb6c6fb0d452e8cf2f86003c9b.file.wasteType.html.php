<?php /* Smarty version Smarty-3.1.6, created on 2018-04-19 14:04:50
         compiled from "E:/AppServ/www/LanouRec/lanourec/Admin/View\Index\wasteType.html" */ ?>
<?php /*%%SmartyHeaderCode:169025ad831826e78f7-01258617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cafa4506a60c0dfb6c6fb0d452e8cf2f86003c9b' => 
    array (
      0 => 'E:/AppServ/www/LanouRec/lanourec/Admin/View\\Index\\wasteType.html',
      1 => 1524101785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169025ad831826e78f7-01258617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'value' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ad831828cf3d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad831828cf3d')) {function content_5ad831828cf3d($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>废品管理--资源回收平台</title>
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
<style type="text/css">
    .am-btn-toolbar a{
        margin-right: 5px;
    }
</style>
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
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
        </div>
    </div>
<div class="tpl-content-wrapper">
    <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
        <li class="am-active">管理</li>
        <li class="am-active">废品管理</li>
    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 种类管理
            </div>
            <div class="tpl-portlet-input tpl-fz-ml">
                <div class="portlet-input input-small input-inline">
                    <div class="input-icon right">
                        <a href="<?php echo @__CONTROLLER__;?>
/add">添加新类型</a>
                    </div>
                </div>
            </div>
        </div>
            <div class="tpl-block ">
                <div class="am-g tpl-amazeui-form">
                    <div class="am-u-sm-12">
                        <form class="am-form">
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <thead>
                                    <tr>
                                        <th class="table-id">ID</th>
                                        <th class="table-title">垃圾类型</th>
                                        <th class="table-title">英文标识</th>
                                        <th class="table-type">垃圾单价(元/kg)</th>
                                        <th class="table-date am-hide-sm-only">价格日期</th>
                                        <th class="table-set">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['type_eg'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</td>
                                        <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['value']->value['price_time'];?>
</td>
                                        <td>
                                            <div class="am-btn-toolbar">
                                                <div class="am-btn-group am-btn-group-xs">
                                                    <a href="<?php echo @__CONTROLLER__;?>
/modify/action/wasteType/wid/<?php echo $_smarty_tpl->tpl_vars['value']->value['waste_id'];?>
"><span class="am-icon-pencil-square-o"></span> 修改</a>
                                                    <a style="color: red" href="<?php echo @__CONTROLLER__;?>
/delete/action/wasteType/id/<?php echo $_smarty_tpl->tpl_vars['value']->value['waste_id'];?>
"><span class="am-icon-trash-o"></span> 删除</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="7" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                        </form>
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