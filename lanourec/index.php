<?php 
header("content-type:text/html;charset=utf-8");

//框架两种模式。【默认】生产（线上）、开发（调试）
define('APP_DEBUG', true);	//开发(错误提示非常具体)
//define('APP_DEBUG', false);//生产（错误提示模糊）


//给静态资源文件访问目录设置常量，方便后期维护
//Home分组
define('CSS_URL', '/LanouRec/lanourec/Public/css');
define('IMG_URL', '/LanouRec/lanourec/Public/images');
define('JS_URL', '/LanouRec/lanourec/Public/js');

//Admin分组 
define('ADMIN_CSS_URL', '/LanouRec/lanourec/Admin/Public');

//使用thinkPHP开发项目
include '../ThinkPHP/ThinkPHP.php';