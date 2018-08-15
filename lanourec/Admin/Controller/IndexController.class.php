<?php 
//命名空间
namespace Admin\Controller;
use Think\Controller;
use Think\Session;

class IndexController extends Controller{
	//index部分
	function index(){
		//退出当前用户
		$this->user_logout();
		//检查session
		$this->sess_check();

		//实例化数据模型
		$user_model = new \Model\User_infoModel();
		$collector_model = new \Model\CollectorModel();
		$order_model = new \Model\t_orderModel();
		$wasteType_model = new \Model\Waste_priceModel();
		//查询数据数量
		$user = $user_model -> count();
		$collector = $collector_model -> count();
		$order = $order_model -> count();
		$wasteType = $wasteType_model -> count();

		$this->assign(array(
			'user_count' => $user,
			'collector_count' => $collector,
			'order_count' => $order,
			'wasteType_count' => $wasteType
		));
		//引入页面
		$this->display();	
	}

	//用户部分
	function user(){
		//退出当前用户
		$this->user_logout();
		//检查session
		$this->sess_check();

		//实例化model对象
		$m = new \Model\User_infoModel();

		//删除用户
		if (!empty($_GET['id']) && $_GET['action'] == 'user' && $_GET['index'] == 'delete') {
			$user_id = $_GET['id'];

			$m ->delete_all($user_id);

			$this->redirect('/Admin/Index/user');
			
		}
		//实现数据分页效果
		//①获得总记录数据
		$total = $m -> count();
		$per = 7;//每页显示7条数据

		//②实例化分页类对象
		$page_obj  = new \Tools\Page($total,$per);

		//③自定义sql语句--将sql部分放置user_infoModel
		$info = $m -> select_all($page_obj);

		//④获得页码列表
		$pagelist = $page_obj -> fpage(array(3,4,5,6));

		//将数据发送至html
		$this->assign('pagelist',$pagelist);
		$this->assign('info',$info);
		//引入页面
		$this->display();
	}

	//回首页部分
	function collector(){
		//退出当前用户
		$this->user_logout();
		//检查session
		$this->sess_check();

		//实例化model对象
		$m = new \Model\CollectorModel();

		//撤销回收员资格
		if (!empty($_GET['id']) && $_GET['action'] == 'collector' && $_GET['index'] == 'delete') {
			$collector_id = $_GET['id'];

			$info = $m -> delete_all($page_obj);
			$this->redirect('/Admin/Index/collector');
		}

		//实现数据分页效果
		//①获得总记录数据
		$total = $m -> count();
		$per = 7;//每页显示7条数据

		//②实例化分页类对象
		$page_obj  = new \Tools\Page($total,$per);

		//③自定义sql语句
		$info = $m -> select_all($page_obj);

		//④获得页码列表
		$pagelist = $page_obj -> fpage(array(3,4,5,6));
		
		
		//将数据发送至html
		$this->assign('pagelist',$pagelist);
		$this->assign('info',$info);
		//引入页面
		$this->display();
	}

	//订单页面
	function order(){
		//退出当前用户
		$this->user_logout();
		//检查session
		$this->sess_check();

		//实例化model对象
		$m = new \Model\t_orderModel();

		//删除订单--置state标志位为2
		if (!empty($_GET['id']) && $_GET['action'] == 'order' && $_GET['index'] == 'delete') {
			$order_id = $_GET['id'];

			$info = $m -> delete_all($page_obj);
			$this->redirect('/Admin/Index/order');
		}

		//实现数据分页效果
		//①获得总记录数据
		$total = $m -> count();
		$per = 7;//每页显示7条数据

		//②实例化分页类对象
		$page_obj  = new \Tools\Page($total,$per);

		//③自定义sql语句
		$info = $m -> select_all($page_obj);

		//④获得页码列表
		$pagelist = $page_obj -> fpage(array(3,4,5,6));
		
		
		//将数据发送至html
		$this->assign('pagelist',$pagelist);
		$this->assign('info',$info);
		//引入页面
		$this->display();
	}
	//种类页面
	function wasteType(){
		//退出当前用户
		$this->user_logout();
		//检查session
		$this->sess_check();

		//实例化model对象
		$m = new \Model\Waste_priceModel();

		//实现数据分页效果
		//①获得总记录数据
		$total = $m -> count();
		$per = 7;//每页显示7条数据

		//②实例化分页类对象
		$page_obj  = new \Tools\Page($total,$per);

		//③自定义sql语句
		$info = $m -> select_all($page_obj);

		//④获得页码列表
		$pagelist = $page_obj -> fpage(array(3,4,5,6));
		
		
		//将数据发送至html
		$this->assign('pagelist',$pagelist);
		$this->assign('info',$info);
		//引入页面
		$this->display();
	}

	//搜索页面
	function search(){
		//退出当前用户
		$this->user_logout();
		//检查session
		$this->sess_check();
		//获取get参数
		$action = $_GET['action'];
		//判断
			//判断页面
			//user页面
			if ($action == 'user') {

				//实例化数据模型对象
				$user_model = new \Model\User_infoModel();

				//判断id是否为空，如果id为空，则是搜索名字，id不为空，则为搜索id
				if (!isset($_GET['id']) && !empty($_POST)) {
					$username = $_POST['user_data'];
					//自定义sql
					$userData = $user_model -> select_uname($username);
				}else{
					$user_id = $_GET['id'];
					//自定义sql
					$userData = $user_model -> select_uid($user_id);
				}

				$this->assign('userData',$userData);
			}
			//collector页面
			if ($action == 'collector') {

				//实例化数据模型
				$coll_model = new \Model\CollectorModel();

				//判断id是否为空，如果id为空，则是搜索名字，id不为空，则为搜索id
				if (!isset($_GET['id']) && !empty($_POST)) {
					$username = $_POST['collector_data'];

					//自定义sql
					$collData = $coll_model -> select_cname($username);
				}else{
					$coll_id = $_GET['id'];

					//自定义sql
					$collData = $coll_model -> select_cid($coll_id);
				}

				$this->assign('collData',$collData);
			}
			//order页面
			if ($action == 'order') {

				//实例化数据模型
				$user_model = new \Model\t_orderModel();

				//判断id是否为空，如果id为空，则是搜索名字，id不为空，则为搜索id
				if (!isset($_GET['id']) && !empty($_POST)) {
					$username = $_POST['order_data'];

					//自定义sql
					$orderData = $user_model -> select_oname($username);
				}else{
					$order_id = $_GET['id'];

					//自定义sql
					$orderData = $user_model -> select_oid($order_id);
				}

				$this->assign('orderData',$orderData);
			}

		$this->display();
	}

	//修改信息页面
	function modify(){
		//退出当前用户
		$this->user_logout();
		//检查session
		$this->sess_check();

		//判断来源
		//用户信息更改
		if ($_GET['action'] == 'user') {

			//实例化model对象
			$m = new \Model\User_infoModel();

			//提交修改表单
			if (!empty($_POST)) {
				//获取表单数据
				$user_id = $_GET['id'];
				$username = $_POST['username'];
				$sex = $_POST['sex'];
				$telephone = $_POST['telephone'];
				$address = $_POST['address'];

				//更新sql
				$sqlstr = "update user_info set `username` = '$username',`sex` = '$sex',`telephone` = '$telephone',`address` = '$address' where `user_id` = '$user_id'";
				$result = $m ->query($sqlstr);
				if ($result) {
					$this->redirect('/Admin/Index/user');
				}
			}
		}

		//回收员信息更改
		if ($_GET['action'] == 'collector') {

			//实例化model对象
			$m = new \Model\CollectorModel();

			//提交修改表单
			if (!empty($_POST)) {
				//获取表单数据
				$collector_id = $_GET['id'];
				$username = $_POST['username'];
				$sex = $_POST['sex'];
				$telephone = $_POST['telephone'];
				$province = $_POST['province'];
				$city = $_POST['city'];
				$quyu = $_POST['quyu'];
				$spe_address = $_POST['spe_address'];
				$collector_longitude_west = $_POST['longitude_west'];
				$collector_longitude_east =$_POST['longitude_east'];
				$collector_latitude_north = $_POST['latitude_north'];
				$collector_latitude_south = $_POST['latitude_south'];

				//更新sql
				$sqlstr = "update collector set `username` = '$username',`sex` = '$sex',`telephone` = '$telephone',`province` = '$province',`city` = '$city',`quyu` = '$quyu',`spe_address` = '$spe_address',`collector_longitude_west` = '$collector_longitude_west',`collector_longitude_east` = '$collector_longitude_east',`collector_latitude_north` = '$collector_latitude_north',`collector_latitude_south` = '$collector_latitude_south' where `collector_id` = '$collector_id'";
				$result = $m ->query($sqlstr);
				if ($result) {
					$this->redirect('/Admin/Index/collector');
				}
			}
		}

		//废品种类修改
		if ($_GET['action'] == 'wasteType') {

			//实例化model对象
			$m = new \Model\Waste_priceModel();

			//点击更改种类数据
			if (!empty($_GET['id'])) {
				//获取表单数据
				$waste_id = $_GET['id'];
				$waste_type = $_POST['waste_type'];
				$type_eg = $_POST['type_eg'];
				$unit_price = $_POST['unit_price'];

				//更新sql
				$sqlstr = "update waste_price set `type` = '$waste_type',`type_eg` = '$type_eg',`price` = '$unit_price' where `waste_id` = '$waste_id'";
				$result = $m ->execute($sqlstr);
				if ($result) {
					$this->redirect('/Admin/Index/wasteType');
				}
			}
		}

		$this->display();
	}

	//增加新废品类型
	function add(){
		//退出当前用户
		$this->user_logout();
		//检查session
		$this->sess_check();
		//实例化model对象
		$m = new \Model\Waste_priceModel();
		if (!empty($_GET['action'])) {
			//添加新类型
			$waste_type = $_POST['waste_type'];
			$type_eg = $_POST['type_eg'];
			$unit_price = $_POST['price'];

			//更新sql
			$sqlstr = "insert into waste_price(`waste_id`,`type`,`type_eg`,`price`,`price_time`) values(UUID(),'$waste_type','$type_eg','$unit_price',now())";
			$result = $m ->execute($sqlstr);
			if ($result) {
				$this->redirect('/Admin/Index/wasteType');
			}	
		}

		$this->display();
	}
	//删除方法
	function delete(){
		if ($_GET['action'] == 'wasteType') {
			$w = new \Model\Waste_priceModel();
			$waste_id = $_GET['id'];
			$sql = "delete from waste_price where `waste_id` = '$waste_id'";
			$result = $w -> execute($sql);
			$this->redirect('Admin/Index/wasteType');
		}
	}

	//分页
	function page($m){
		//实现数据分页效果
		//①获得总记录数据
		$total = $m -> count();
		$per = 7;//每页显示7条数据

		//②实例化分页类对象
		$page_obj  = new \Tools\Page($total,$per);

		//③自定义sql语句--将sql部分放置user_infoModel
		$info = $m -> select_all($page_obj);

		//④获得页码列表
		$pagelist = $page_obj -> fpage(array(3,4,5,6));
	}
	//检查session
	function sess_check(){
		//检查session
		if (!session('username')) {
			//跳转至login页面
			$this->redirect('/Admin/Manager/login');
		}
	}

	//退出当前用户
	function user_logout(){
		//退出当前用户
		if (!empty($_GET['action']) && $_GET['action'] == 'logout') {
			session('[destroy]'); // 销毁session
			//跳转至login页面
			$this->redirect('/Admin/Manager/login');
		}
	}
}