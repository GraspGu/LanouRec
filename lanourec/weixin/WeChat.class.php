<?php
	class WeChat{
		//把请求内容封装到函数中
		protected function  http_request($url, $data = null)
		{
			//初识化
			$ch = curl_init();
			//设置变量
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
			if(!empty($data))
			{
				curl_setopt($ch,  CURLOPT_POST, 1);
				curl_setopt($ch,  CURLOPT_POSTFIELDS, $data);
			}
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			//执行
			$output = curl_exec($ch);
			curl_close($ch);
			return $output;
		}

		//这里在父类中封装一个get_token的函数，便于使用和管理
		protected function get_token()
		{
			//原理，就是使用curl 函数，发出http请求，获取access_token
			$appid = '*****';
			$appsecret = '*****';
			$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";

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
			return $access_token;
		}
	}