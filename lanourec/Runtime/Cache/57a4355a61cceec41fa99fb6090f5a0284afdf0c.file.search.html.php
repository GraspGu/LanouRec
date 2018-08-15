<?php /* Smarty version Smarty-3.1.6, created on 2018-04-17 20:56:09
         compiled from "E:/AppServ/www/tp_test/shop/Admin/View\Index\search.html" */ ?>
<?php /*%%SmartyHeaderCode:163645ad5eee9185777-92239486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57a4355a61cceec41fa99fb6090f5a0284afdf0c' => 
    array (
      0 => 'E:/AppServ/www/tp_test/shop/Admin/View\\Index\\search.html',
      1 => 1523771778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163645ad5eee9185777-92239486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userData' => 0,
    'user_value' => 0,
    'value' => 0,
    'collData' => 0,
    'coll_value' => 0,
    'orderData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ad5eee951966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5eee951966')) {function content_5ad5eee951966($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>搜索结果--废品回收平台</title>
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
        <li class="am-active">搜索</li>
    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 搜索结果 -- 
                <?php if ($_GET['action']=='user'){?>
                用户搜索
                <?php }elseif($_GET['action']=='collector'){?>
                回收员搜索
                <?php }elseif($_GET['action']=='order'){?>
                订单搜索
                <?php }?>
            </div>
        </div>
            <div class="tpl-block ">
                <div class="am-g tpl-amazeui-form">
                    <div class="am-u-sm-12">
                        <form class="am-form">
                            <!-- 用户部分 -->
                            <?php if ($_smarty_tpl->tpl_vars['userData']->value){?>                     
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <thead>
                                    <tr>
                                        <th class="table-id">ID</th>
                                        <th class="table-title">姓名</th>
                                        <th class="table-type">性别</th>
                                        <th class="table-type">类别</th>
                                        <th class="table-author am-hide-sm-only">openid</th>
                                        <th class="table-author am-hide-sm-only">电话</th>
                                        <th class="table-date am-hide-sm-only">注册日期</th>
                                        <th class="table-set">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php  $_smarty_tpl->tpl_vars['user_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user_value']->_loop = false;
 $_smarty_tpl->tpl_vars['user_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['user_value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['user_value']->key => $_smarty_tpl->tpl_vars['user_value']->value){
$_smarty_tpl->tpl_vars['user_value']->_loop = true;
 $_smarty_tpl->tpl_vars['user_key']->value = $_smarty_tpl->tpl_vars['user_value']->key;
 $_smarty_tpl->tpl_vars['user_value']->iteration++;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['user_value']->iteration;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['user_value']->value['username'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['user_value']->value['sex'];?>
</td>
                                        <td>普通用户</td>
                                        <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['user_value']->value['openid'];?>
</td>
                                        <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['user_value']->value['telephone'];?>
</td>
                                        <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['user_value']->value['produce_time'];?>
</td>
                                        <td>
                                            <div class="am-btn-toolbar">
                                                <div class="am-btn-group am-btn-group-xs">
                                                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><a style="color: red" href="<?php echo @__SELF__;?>
/index/delete/action/user/id/<?php echo $_smarty_tpl->tpl_vars['value']->value['user_id'];?>
">删除</a></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="8">地址信息：<?php echo $_smarty_tpl->tpl_vars['user_value']->value['address'];?>
</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php }?>
                            <hr>
                            <!-- 回收员部分 -->
                            <?php if ($_smarty_tpl->tpl_vars['collData']->value){?>
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <thead>
                                    <tr>
                                        <th class="table-id">ID</th>
                                        <th class="table-title">姓名</th>
                                        <th class="table-type">性别</th>
                                        <th class="table-type">类别</th>
                                        <th class="table-author am-hide-sm-only">openid</th>
                                        <th class="table-author am-hide-sm-only">电话</th>
                                        <th class="table-date am-hide-sm-only">注册日期</th>
                                        <th class="table-set">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['coll_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coll_value']->_loop = false;
 $_smarty_tpl->tpl_vars['coll_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['collData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['coll_value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['coll_value']->key => $_smarty_tpl->tpl_vars['coll_value']->value){
$_smarty_tpl->tpl_vars['coll_value']->_loop = true;
 $_smarty_tpl->tpl_vars['coll_key']->value = $_smarty_tpl->tpl_vars['coll_value']->key;
 $_smarty_tpl->tpl_vars['coll_value']->iteration++;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['coll_value']->iteration;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['coll_value']->value['username'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['coll_value']->value['sex'];?>
</td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['coll_value']->value['state']=='0'){?>
                                            申请待通过
                                        <?php }elseif($_smarty_tpl->tpl_vars['coll_value']->value['state']=='1'){?>
                                            正式回收员
                                        <?php }?></td>
                                        <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['coll_value']->value['openid'];?>
</td>
                                        <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['coll_value']->value['telephone'];?>
</td>
                                        <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['coll_value']->value['produce_time'];?>
</td>
                                        <td>
                                            <div class="am-btn-toolbar">
                                                <div class="am-btn-group am-btn-group-xs">
                                                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><a style="color: red" href="<?php echo @__SELF__;?>
/index/delete/action/collector/id/<?php echo $_smarty_tpl->tpl_vars['value']->value['collector_id'];?>
">撤销</a></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td colspan="8">collector_id：<?php echo $_smarty_tpl->tpl_vars['coll_value']->value['collector_id'];?>
</td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td colspan="8">user_id：<?php echo $_smarty_tpl->tpl_vars['coll_value']->value['user_id'];?>
</td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td colspan="8">负责区域： <br />
                                        	"北纬"：<?php echo $_smarty_tpl->tpl_vars['coll_value']->value['collector_latitude_north'];?>
<br />"南纬"：<?php echo $_smarty_tpl->tpl_vars['coll_value']->value['collector_latitude_south'];?>
<br />"西经"：<?php echo $_smarty_tpl->tpl_vars['coll_value']->value['collector_longitude_west'];?>
<br />"东经"：<?php echo $_smarty_tpl->tpl_vars['coll_value']->value['collector_longitude_east'];?>
</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php }?>
                            <hr>
                            <!-- 订单部分 -->
                            <?php if ($_smarty_tpl->tpl_vars['orderData']->value){?>
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <thead>
                                    <tr>
                                        <th class="table-id">ID</th>
                                        <th class="table-title">姓名</th>
                                        <th class="table-type">性别</th>
                                        <th class="table-type">类别</th>
                                        <th class="table-author am-hide-sm-only">订单号</th>
                                        <th class="table-author am-hide-sm-only">联系电话</th>
                                        <th class="table-date am-hide-sm-only">创建时间</th>
                                        <th class="table-set">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['orderData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nickname'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nick_sex'];?>
</td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['value']->value['state']=='0'){?>
                                            订单等待接收
                                        <?php }elseif($_smarty_tpl->tpl_vars['value']->value['state']=='1'){?>
                                            订单已接收
                                        <?php }elseif($_smarty_tpl->tpl_vars['value']->value['state']=='2'){?>
                                            订单已完成
                                        <?php }?></td>
                                        <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['value']->value['order_id'];?>
</td>
                                        <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['value']->value['nick_tel'];?>
</td>
                                        <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['value']->value['produce_time'];?>
</td>
                                        <td>
                                            <div class="am-btn-toolbar">
                                                <div class="am-btn-group am-btn-group-xs">
                                                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><a style="color: red" href="<?php echo @__SELF__;?>
/index/delete/action/order/id/<?php echo $_smarty_tpl->tpl_vars['value']->value['order_id'];?>
">删除</a></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td colspan="8">交货地址：<?php echo (((($_smarty_tpl->tpl_vars['value']->value['province']).('省')).($_smarty_tpl->tpl_vars['value']->value['city'])).($_smarty_tpl->tpl_vars['value']->value['country'])).($_smarty_tpl->tpl_vars['value']->value['spe_add']);?>
</td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td colspan="8">用户openid：<?php echo $_smarty_tpl->tpl_vars['value']->value['openid'];?>
</td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td colspan="8">订单提交经纬度（腾讯地图地址）<br>经度：<?php echo $_smarty_tpl->tpl_vars['value']->value['order_longitude'];?>
 <br> 纬度：<?php echo $_smarty_tpl->tpl_vars['value']->value['order_latitude'];?>
</td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td colspan="8">订单总金额：<?php if ($_smarty_tpl->tpl_vars['value']->value['order_price']){?>
                                            <?php echo $_smarty_tpl->tpl_vars['value']->value['order_price'];?>

                                        <?php }elseif(!$_smarty_tpl->tpl_vars['value']->value['order_price']){?>
                                            订单未完成
                                        <?php }?></td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td colspan="8">回收员id：<?php if ($_smarty_tpl->tpl_vars['value']->value['state']=='0'){?>
                                            订单正在分配中...
                                        <?php }elseif($_smarty_tpl->tpl_vars['value']->value['state']=='1'){?>
                                            $value.collector_id
                                        <?php }?></td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td colspan="8">订单完成时间：<?php if ($_smarty_tpl->tpl_vars['value']->value['finish_time']){?>
                                            $value.finish_time
                                        <?php }elseif(!$_smarty_tpl->tpl_vars['value']->value['finish']['time']){?>
                                            订单未完成
                                        <?php }?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php }?>
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