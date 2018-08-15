<?php
namespace Home\Controller;
use Think\Controller;
class CollController extends Controller{
	function index(){

        /*****判断openid是否为回收员，如果是普通用户，跳转到相应的控制器*****/
        $c = new \Model\CollectorModel();
        $p_sql = "select * from collector where `openid` = '$_SESSION[openid]' and `state` = '0'";
        if ($c -> query($p_sql)) {
            //跳转到回收员index
            $this->redirect('/Home/Index/fast_Rec');
        }
        /******************************************************************/
		$u = new \Model\User_infoModel();
		//获取回收员信息
		$coll_sql = "select * from collector where `openid` = '$_SESSION[openid]'";
		$result = $u -> query($coll_sql);

		//获取collector_id
		$_SESSION['collector_id'] = $result['0']['collector_id'];
		$this->assign('info',$result['0']);
		$this->display();
	}
	//订单详情   点击接收订单和订单查询后跳转的方法
	function order(){
		$o = new \Model\t_orderModel();
		//两个逻辑
		//如果是接收订单
		if ($_GET['action'] == 'receive') {
			$order_id = $_GET['id'];
			//将订单的order_id置1
			$sql = "update t_order set `state` = '1' where `order_id` = '$order_id'";
			$result = $o -> execute($sql);
		}
		//查询已接收订单
		$sql = "select * from t_order where `collector_id` = '$_SESSION[collector_id]' and `state` = '1' order by produce_time desc";
		$result = $o -> query($sql);
		$this->assign('info',$result);
		$this->display();
	}
	//历史订单
	function history(){
		$o = new \Model\t_orderModel();
		$sql = "select * from t_order where `collector_id` = '$_SESSION[collector_id]' and `state` = '2'";
		$result = $o ->query($sql);
		$this->assign('info',$result);
		$this->display();
	}

	//work
	function work(){
		$o = new \Model\t_orderModel();
		$sql = "select * from t_order where `collector_id` = '$_SESSION[collector_id]' and `state` = '0'";
		$info = $o ->query($sql);
		$this->assign('info',$info);
		$this->display();
	}

	//ajax轮训
	function testPush(){
		if(!$_GET['timed']) {
		    $o = new \Model\t_orderModel();
		    $sql = "select * from t_order where `collector_id` = '$_SESSION[collector_id]' and `state` = '0'";
		    $info = $o ->query($sql);
		    echo json_encode($info);  
		}
	}
}