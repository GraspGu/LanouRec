<?php /* Smarty version Smarty-3.1.6, created on 2018-04-18 18:46:04
         compiled from "E:/AppServ/www/tp_test/shop/Home/View\Index\address_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:201225ad5ec8f17fdb4-53939063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec487c9bf5c3531541f3199d54d130b72eb5a9bb' => 
    array (
      0 => 'E:/AppServ/www/tp_test/shop/Home/View\\Index\\address_edit.html',
      1 => 1524045766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201225ad5ec8f17fdb4-53939063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ad5ec8f24135',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad5ec8f24135')) {function content_5ad5ec8f24135($_smarty_tpl) {?><!DOCTYPE html>
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
    <div class="current_location"><span>编辑地址</span></div>
    <div class="next_operate"><span>保存</span></div>
</div>
<div class="address_edit">
    <form method="post" action="<?php echo @__CONTROLLER__;?>
/address_edit/id/<?php echo $_smarty_tpl->tpl_vars['info']->value['address_id'];?>
">
        <ul>
            <li><span class="span_color">联系人</span><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['nickname'];?>
" placeholder="收货人姓名" name="username"></li>
            <li>
                <p class="gender">
                <label><input type="radio" name="gender" value="男" id="gender_2">先生</label>
                <label><input type="radio" name="gender" value="女" id="gender_3">女士</label>
                <br>
                </p>
            </li>
            <li><span class="span_color">手机号码</span><input class="input_w1" name="tel" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['nick_tel'];?>
" placeholder="请输入交货人的手机号码" maxlength="11"></li>
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
            <li><span class="span_color">详细地址</span><input class="input_w1" name="address" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['spe_add'];?>
" placeholder="请输入您的详细地址至门牌号" maxlength="30"></li>
        </ul>
    </form>
</div>
</div>
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