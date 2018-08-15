<?php /* Smarty version Smarty-3.1.6, created on 2018-04-17 20:54:32
         compiled from "E:/AppServ/www/tp_test/shop/Admin/View\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:58255ad5ee88ce2105-16182877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab560938c16baa38b84efcffe595083a7b8935d7' => 
    array (
      0 => 'E:/AppServ/www/tp_test/shop/Admin/View\\Manager\\login.html',
      1 => 1523508694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58255ad5ee88ce2105-16182877',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ad5ee88dbf6f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5ee88dbf6f')) {function content_5ad5ee88dbf6f($_smarty_tpl) {?><!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="utf-8"/>
<title>蓝鸥资源回收平台</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo @ADMIN_CSS_URL;?>
/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo @ADMIN_CSS_URL;?>
/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo @ADMIN_CSS_URL;?>
/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo @ADMIN_CSS_URL;?>
/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo @ADMIN_CSS_URL;?>
/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo @ADMIN_CSS_URL;?>
/assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
</head>
<body class="login">
<div class="logo">
	<a href="index.html">
		<img src="<?php echo @ADMIN_CSS_URL;?>
/assets/img/logo.png" alt=""/>
	</a>
</div>
<div class="content">
	<form class="login-form" action="" method="post">
		<h3 class="form-title">登录您的账户</h3>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="验证码" name="captcha"/>
			</div>
		</div>
		<div class="form-actions">
			<img src="<?php echo @__CONTROLLER__;?>
/VerifyImg" onclick="this.src='<?php echo @__CONTROLLER__;?>
/VerifyImg/'+Math.random()">
			<button type="submit" class="btn green pull-right">
			Login
			</button>
		</div>
	</form>
</div>
<div class="copyright">
	 2018 &copy; Lanou. Backstage management system.
</div>
</body>
</html><?php }} ?>