<?php

$appid = "*****";
$appsecret = "*****";
$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";

$output = https_request($url);
$jsoninfo = json_decode($output, true);

$access_token = $jsoninfo["access_token"];


$jsonmenu = '{
    "button": [
        {
            "type":"view",  
            "name":"快速回收",  
            "url":"https://open.weixin.qq.com/connect/oauth2/authorize?appid={$appid}&redirect_uri=http://stu360.cn/LanouRec/lanourec/index.php/Home/Index/fast_rec&response_type=code&scope=snsapi_userinfo&state=STATE&connect_redirect=1"  
        }, 
        {
            "name": "个人中心", 
            "sub_button": [
                {
                    "type": "view", 
                    "name": "个人管理", 
                    "url": "https://open.weixin.qq.com/connect/oauth2/authorize?appid={$appid}&redirect_uri=http://stu360.cn/LanouRec/lanourec/index.php/Home/Index/index&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect"
                }, 
                {
                    "type": "view", 
                    "name": "订单管理", 
                    "url": "http://www.soso.com/"
                }
            ]
        }, 
        {
            "name": "关于我们", 
            "sub_button": [
                {
                    "type": "view", 
                    "name": "位置保留", 
                    "url": "http://www.soso.com/"
                }, 
                {
                    "type": "click", 
                    "name": "联系我们", 
                    "key":"V1001_GOOD"
                }
            ]
        }
    ]
}';


$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;
$result = https_request($url, $jsonmenu);
var_dump($result);

function https_request($url,$data = null){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)){
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}

?>