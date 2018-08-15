<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {

	//选择地址
	function address_choose(){

		//实例化
		$n = new \Model\t_orderModel();
		$w = new \Model\Waste_basketModel();
		
		//两个逻辑
		//地址选择完毕，订单提交成功。进入订单处理。
		if (!empty($_POST)) {

			$address_id = $_POST['address_id'];

			//如果订单是other
			if (!empty($_GET['action'])) {
				//获取负责本订单地址的回收员id
				$info = $this->tx_addtrans($address_id);

				$add_info = $info['add_info'];

				$sql = "insert into t_order(`order_id`,`address_id`,`openid`,`nickname`,`nick_sex`,`nick_tel`,`province`,`city`,`country`,`spe_add`,`order_longitude`,`order_latitude`,`collector_id`,`state`,`produce_time`,`remark`) values(UUID(),'$address_id','$_SESSION[openid]','$add_info[nickname]','$add_info[nick_sex]','$add_info[nick_tel]','$add_info[province]','$add_info[city]','$add_info[country]','$add_info[spe_add]','$info[lng]','$info[lat]','$info[collector]','0',now(),'1')";

				if($n -> execute($sql)){
					//查询订单号
					$sql = "select * from t_order where `openid` = '$_SESSION[openid]' order by produce_time desc limit 1";
					$result = $n -> query($sql);
					$order_id = $result['0']['order_id'];
					//将order_id插入到相应的废品筐，以便查询remark
					$sql = "update waste_basket set `order_id` = '$order_id', `state` = '1' where `openid` = '$_SESSION[openid]' order by produce_time desc limit 1";
					$w ->execute($sql);
				}

				$this->redirect('/Home/Order/track');
				exit;
			}

			//获取用户废品框数据
			$sql_was = "select * from waste_basket where `openid` = '$_SESSION[openid]' and `state` = '0'";
			$res_was = $w -> query($sql_was);
			$was_info = $res_was['0'];  //获取废品框一维信息

			static $all_price;
			static $all_weight;
			//计算废品框重量和价格
			foreach ($res_was as $key => $value) {
				$all_price += $value['waste_price'];
				$all_weight += $value['waste_weight'];
			}

			//获取负责本订单地址的回收员id
			$info = $this->tx_addtrans($address_id);
			//获取地址信息
			$add_info = $info['add_info'];
			
			//将所有数据（废品框数据，地址id信息）写入数据库
			$sqlstr = "insert into t_order(`order_id`,`address_id`,`openid`,`nickname`,`nick_sex`,`nick_tel`,`province`,`city`,`country`,`spe_add`,`order_longitude`,`order_latitude`,`collector_id`,`state`,`order_weight`,`order_price`,`produce_time`) values(UUID(),'$address_id','$_SESSION[openid]','$add_info[nickname]','$add_info[nick_sex]','$add_info[nick_tel]','$add_info[province]','$add_info[city]','$add_info[country]','$add_info[spe_add]','$info[lng]','$info[lat]','$info[collector]','0','$all_weight','$all_price',now())";
		
			if($n -> execute($sqlstr)){
				//查询订单号
				$sql = "select * from t_order where `openid` = '$_SESSION[openid]' order by produce_time desc limit 1";
				$result = $n -> query($sql);
				$order_id = $result['0']['order_id'];

				//将order_id写入废品筐数据，并将废品筐相应的数据state置1
				foreach ($res_was as $key => $value) {
					$sqlstr = "update waste_basket set `order_id` = '$order_id',`state` = '1' where `openid` = '$_SESSION[openid]' and `basket_id` = '$value[basket_id]'";
					$result = $w -> execute($sqlstr);
				}
				
				//跳转
				$this->redirect('/Home/Order/track');
			}
		}
		
		//查询本用户所有地址
		$sql = "select * from user_address where `openid` = '$_SESSION[openid]'";
		$result = $n -> query($sql);
		
		$this->assign('info',$result);
		
		$this->display();
	}

	//获取地址信息和腾讯逆地址转换，参数address_id
	function tx_addtrans($address_id){
		$a = new \Model\User_addressModel();
		$c = new \Model\CollectorModel();
		//获取用户地址信息
		$sql_add = "select * from user_address where `address_id` = '$address_id'";
		$res_add = $a -> query($sql_add);
		$add_info = $res_add['0']; //获取地址一维信息

		//拼接地址
		$address = $add_info['province'] . $add_info['city'] . $add_info['country'] . $add_info['spe_add'];

		/**腾讯逆地址处理**/
		$key = "F7UBZ-GPIAD-RDU4C-HYZG6-R3LJ2-6PB3Q";	//腾讯地图key
		//根据腾讯地图逆地址解析获取地址对应的经纬度
		$url="http://apis.map.qq.com/ws/geocoder/v1/?address={$address}&key={$key}";
		$jsonResult = file_get_contents($url);
		$resultArray = json_decode($jsonResult, true);
		$lng = $resultArray['result']['location']['lng'];	//经度
		$lat = $resultArray['result']['location']['lat'];	//纬度

		//获取回收员
		$coll = $c -> coll_sel();
		//循环处理回收员
		foreach ($coll as $key => $value) {
		    if ($lng >= $value['collector_longitude_west'] && $lng <= $value['collector_longitude_east'] && $lat >= $value['collector_latitude_south'] && $lat <= $value['collector_latitude_north']) {
		        $collector = $value['collector_id'];
		        break;
		    }
		}

		//返回所有需要使用的数据
		$ret = array(
			'collector' => $collector,
			'add_info' => $add_info,
			'lng' => $lng,
			'lat' => $lat,
		);
		return $ret;
	}

	//订单追踪
	function track(){
		$o = new \Model\t_orderModel();
		//查询当前用户订单
		$sql = "select * from t_order where `openid` = '$_SESSION[openid]' and `state` in(0,1) order by produce_time desc";
		$result = $o ->query($sql);
		//根据collector查询回收员信息
		$c = new \Model\CollectorModel();
		foreach ($result as $key => $value) {
			$sql = "select * from collector where `collector_id` = '$value[collector_id]'";
			$coll[] = $c -> query($sql);
		}

		$this->assign(array('info' => $result,'coll' => $coll));
		$this->display();
	}

	//历史订单
	function history(){
		$o = new \Model\t_orderModel();
		//查询当前用户历史订单
		$sql = "select * from t_order where `openid` = '$_SESSION[openid]' and `state` = '2' order by produce_time desc";
		$result = $o ->query($sql);

		//获取订单回收员信息
		$c = new \Model\CollectorModel();
		foreach ($result as $key => $value) {
			$sql = "select * from collector where `collector_id` = '$value[collector_id]'";
			$coll[] = $c -> query($sql);
		}
		$this->assign(array('info' => $result,'coll' => $coll));
		$this->display();
	}
}