<?php /* Smarty version Smarty-3.1.6, created on 2018-04-17 20:37:33
         compiled from "E:/AppServ/www/tp_test/shop/Home/View\Index\user_info.html" */ ?>
<?php /*%%SmartyHeaderCode:49995ad5ea8d997d93-70838756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9be9f6c9758574ab7c1d34017f72459b04137cf5' => 
    array (
      0 => 'E:/AppServ/www/tp_test/shop/Home/View\\Index\\user_info.html',
      1 => 1523878971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49995ad5ea8d997d93-70838756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ad5ea8da7f25',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5ea8da7f25')) {function content_5ad5ea8da7f25($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
/mall.css"/>
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
<div id="child_header">
    <div class="goback"><a href="javascript:history.back(-1)"><i></i></a></div>
    <div class="current_location"><span>个人信息</span></div>
    <?php if ($_smarty_tpl->tpl_vars['info']->value['info_state']=='0'){?>
    <div class="next_operate"><span>保存</span></div>   
    <?php }?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['info']->value['info_state']=='0'){?>
    <h3 style="text-align: center;margin: 10px 0;">请确保您的信息准确，提交之后不可更改</h3>
    <?php }?>
<div class="user_info">
	<form action="<?php echo @__CONTROLLER__;?>
/user_info" method="post">
		<ul>
	        <li><span>姓名</span><input class="info_input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
" name="username"></li>
	        <li><span>性别</span><input class="info_input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sex'];?>
" name="sex"></li>
	        <li><span>手机号</span><input class="info_input" maxlength="11" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['telephone'];?>
" name="telephone"></li>
	        <li><span>住址</span><input class="info_input" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['address'];?>
" name="address"></li>
	    </ul>
	</form>
</div>
<script>
$('.next_operate').click(function(){
    $('form').submit();
})
</script>
</body>
</html>

<?php }} ?>