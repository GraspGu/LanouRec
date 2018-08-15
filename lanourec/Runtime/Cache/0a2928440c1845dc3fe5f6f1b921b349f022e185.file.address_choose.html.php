<?php /* Smarty version Smarty-3.1.6, created on 2018-04-17 20:36:28
         compiled from "E:/AppServ/www/tp_test/shop/Home/View\Order\address_choose.html" */ ?>
<?php /*%%SmartyHeaderCode:183745ad5ea4c9742b0-78900914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a2928440c1845dc3fe5f6f1b921b349f022e185' => 
    array (
      0 => 'E:/AppServ/www/tp_test/shop/Home/View\\Order\\address_choose.html',
      1 => 1523881589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183745ad5ea4c9742b0-78900914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ad5ea4ca99b8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5ea4ca99b8')) {function content_5ad5ea4ca99b8($_smarty_tpl) {?><!DOCTYPE html>
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
    <title>选择您的地址</title>
    <style type="text/css">
        .next_operate{
            cursor: pointer;
        }
        p{
            margin:0;
            padding:0;
        }
        input{
            float: right;
        }
    </style>
</head>
<body>
<div id="child_header">
    <div class="goback"><a href="javascript:history.back(-1)"><i></i></a></div>
    <div class="current_location"><span>选择一个地址</span></div>
</div>
    <form action="<?php echo @__SELF__;?>
" method="post">
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <div class="address_list">
            <div class="list_left">
                <p class="pw1"><?php echo $_smarty_tpl->tpl_vars['value']->value['nickname'];?>
</p>
                <p class="pw1"><?php echo $_smarty_tpl->tpl_vars['value']->value['nick_tel'];?>
</p>
                <p class="pw2"><?php echo $_smarty_tpl->tpl_vars['value']->value['spe_add'];?>
</p>
                <input type="radio" name="address_id" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['address_id'];?>
">
            </div>
        </div>
    <?php } ?>
    </form>
<!-- 下一步 -->
<div id="next_wrap_contianer">
    <a>提交</a>
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

<script type="text/javascript">
    $("#next_wrap_contianer").find('a').click(function(){
        $("form").submit();
    })
</script>

</body>
</html>
<?php }} ?>