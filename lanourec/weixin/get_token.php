<?php
	//原理，就是使用curl 函数，发出http请求，获取access_token
	$appid = '*****';
	$appsecret = '*********';
	$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$appid}&secret={$appsecret}";

	//这里我们将使用PHP的curl函数
	//初识化
	$ch = curl_init();
	//设置变量
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	//执行
	$output = curl_exec($ch);
	curl_close($ch);
	//对返回的结果进行json解码
	$jsoninfo = json_decode($output, true);
	$access_token = $jsoninfo['access_token'];

