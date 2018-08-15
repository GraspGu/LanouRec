<?php
/**
  * wechat php test
  */
require_once 'common.php';
require_once 'menu.php';
require_once 'WeChat.class.php';
//define your token
define("TOKEN", "weixin");
$wechatObj = new wechatCallbackapiTest();
//当接入成功后，请注销这句话，否则，会反复验证。
//$wechatObj->valid();
//添加响应请求的语句
$wechatObj->responseMsg();

class wechatCallbackapiTest
{
	public function valid()
	{
		$echoStr = $_GET["echostr"];

        //valid signature , option
		if($this->checkSignature()){
			echo $echoStr;
			exit;
		}
	}


	public function responseMsg()
	{
		//get post data, May be due to the different environments
		$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
		
      	//extract post data
		if (!empty($postStr))
		{
                /* libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
                the best way is to check the validity of xml by yourself */
				// 使用simplexml技术对xml进行解析 
				// libxml_disable_entity_loader(true), 是从安全性考虑，为了防止xml外部注入，
				//只对xml内部实体内容进行解析
                libxml_disable_entity_loader(true);
				//加载 postStr 字符串
                $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);			
                $fromUsername = $postObj->FromUserName;
                $toUsername = $postObj->ToUserName;
                $keyword = trim($postObj->Content);
                $time = time();
                global $tmp_arr;

				//连接Mysql数据库，并添加信息

                switch($postObj->MsgType)
                {
                	case 'event':
                	if($postObj->Event == 'subscribe')
                	{		

                        //获取用户信息并入库                        
                		require_once 'get_token.php';
                		header('content-type:text/html;charset=utf-8');
                        //获取用户的$openid
                		$url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token={$access_token}&openid={$fromUsername}";
                        //发送请求
                		$res = http_request($url, null);
                		$res = json_decode($res);
                        //获取我们需要的各种信息
                		$openid = $res->openid;
                		$nickname = $res->nickname;
                		$country = $res->country;
                		$province = $res->province;
                		$city = $res->city;
                		$address = $country. ' '. $province. ' '. $city;
                		$sex = $res->sex;
                		$contentStr =" 嘿，亲爱的  ". $nickname ."\n\r这里是 【 废品回收管理中心 】\n\r功能研究请戳导航栏～\n\r更多功能期待您的发现~ ";
                		$resultStr = sprintf($tmp_arr['text'], $fromUsername, $toUsername, $time, $contentStr);
                		echo $resultStr;
                	}
                    //用户取消关注
                	if($postObj->Event == 'unsubscribe')
                	{
                		//应该做一个删除动作
                	}else if($postObj->Event == 'LOCATION')
                	{
							//取出该用户上报的纬度和经度
                		$Latitude = $postObj->Latitude;
                		$Longitude = $postObj->Longitude;
							//返回给用户
							// $contentStr = "我们收到您上报的地理位置:\n\n 纬度是: {$Latitude}\n 经度是:{$Longitude}";
							// $resultStr = sprintf($tmp_arr['text'], $fromUsername, $toUsername, $time, $contentStr);
							// echo $resultStr;
                	}
						//响应用户的点击事件
                	if($postObj->Event == 'CLICK' )
                	{
                		if($postObj->EventKey == 'V1001_GOOD')
                		{
								//这里你就可以写自己的逻辑代码,返回一句话
                			$contentStr = "微信：10010";
                			$resultStr = sprintf($tmp_arr['text'], $fromUsername, $toUsername, $time, $contentStr);
                			echo $resultStr; 
                		}
                	}
                	break;
                	case 'text':
							// $sql = "INSERT  INTO `zx_info` (`id`, `openid`, `zx_info`) VALUES(NULL, '{$fromUsername}', '{$keyword}')";
							// mysql_query($sql);
                	$contentStr = "暂不支持回复功能，快点击下方按钮进行废品回收吧~~";
                	$resultStr = sprintf($tmp_arr['text'], $fromUsername, $toUsername, $time, $contentStr);
                	echo $resultStr;
                	break;
					//处理用户上传图片
                	case 'image':
						//回复用户刚刚上传的这张图片
						//获取到用户上传的图片的mediaid
                	$media_id = $postObj->MediaId;
                	$resultStr = sprintf($tmp_arr['image'], $fromUsername, $toUsername, $time, $media_id);
                	echo $resultStr;

						//把图片保存到本地服务器的文件系统
						//1. 先给图片创建一个名字
                	$image_file_name = time(). ".jpg";
						//2. 获取该图片的内容
                	$image_file = file_get_contents($postObj->PicUrl);
						//3. 保存到本地服务器的文件系统， 特别提醒，应当保证该你创建的文件夹是www用户可读可写，否
						//无法保存该图片到文件夹 
                	file_put_contents("./uploadimage/". $image_file_name, $image_file);

						//将图片的路径和相关信息入库
						//1. 创建一张表
						//2. 连接Mysql数据库，并添加图片信息
                	$connect = mysql_connect('localhost', 'root', 'root');
                	mysql_select_db('wxdb', $connect);
                	mysql_query('SET NAMES UTF8');
                	$media_path = "./uploadimage/". $image_file_name;
                	$sql = "INSERT INTO keep_image_uploads (id, openid, media_id, media_path) VALUES(NULL, '{$fromUsername}', '{$media_id}', '{$media_path}')";
                	mysql_query($sql, $connect);
                	break;
						//处理用户上传语言的业务逻辑
                	case 'voice':
                	$media_id = $postObj->MediaId;
                	$resultStr = sprintf($tmp_arr['voice'], $fromUsername, $toUsername, $time, $media_id);
                	echo $resultStr;
                	break;
						//处理用户上传的地理位置信息
                	case 'location':
						//获取到用户上传的经度
                	$Location_Y = $postObj->Location_Y;
						//获取上传的纬度
                	$Location_X = $postObj->Location_X;
                	$contentStr = "您上报的地理位置是: \n\n 经度是 {$Location_Y} \n 纬度是{$Location_X}";
                	$resultStr = sprintf($tmp_arr['text'], $fromUsername, $toUsername, $time, $contentStr);
                	echo $resultStr;
                	break;
						//处理用户发送的链接消息
                	case 'link':
						//获取到用户上传的链接信息
                	$Title = $postObj->Title;
                	$Url = $postObj->Url;
                	$contentStr = "<a href='{$Url}'>{$Title}</a>";
                	$resultStr = sprintf($tmp_arr['text'], $fromUsername, $toUsername, $time, $contentStr);
                	echo $resultStr;
                	break;
					//default:
                }
            }else {
            	echo "";
            	exit;
            }
        }

        private function checkSignature()
        {
        // you must define TOKEN by yourself
        	if (!defined("TOKEN")) {
        		throw new Exception('TOKEN is not defined!');
        	}

        	$signature = $_GET["signature"];
        	$timestamp = $_GET["timestamp"];
        	$nonce = $_GET["nonce"];

        	$token = TOKEN;
        	$tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
        	sort($tmpArr, SORT_STRING);
        	$tmpStr = implode( $tmpArr );
        	$tmpStr = sha1( $tmpStr );

        	if( $tmpStr == $signature ){
        		return true;
        	}else{
        		return false;
        	}
        }
    }

    ?>