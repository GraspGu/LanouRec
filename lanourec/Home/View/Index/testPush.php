<?php 
/**
*   回收员上线时进行的ajax长轮询订单信息请求页面。
*/

if(!$_GET['timed']) {
    $o = new \Model\t_orderModel();
    $sql = "select * from t_order where `openid` = 'oyOLfwd29fHNKgADHEPPDNLC4R2Y'";
    $info = $o ->query($sql);
    echo json_encode($info);
    exit();      
}
