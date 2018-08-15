<?php
namespace Model;
use Think\Model;

//为t_order数据库创建模型
//父类Model：ThinkPHP/Library/Think/Model.class.php
class t_orderModel extends Model {
    public function index(){
    	
    }

    /**
    * 查询数据
    * 参数 $page_obj--分页管理对象
    */
    function select_all($page_obj){
    	//自定义sql语句
		$sqlstr = "select * from `t_order` order by produce_time desc " . $page_obj -> limit;
		$info = $this -> query($sqlstr);
		return $info;
    }

    /**
    * 查询数据
    * 参数 $order_id--搜索数据时的订单编号
    */
    function select_oid($order_id){
        //自定义sql语句
        $sqlstr = "select * from `t_order` where `order_id` = '$order_id' order by produce_time";
        $info = $this -> query($sqlstr);
        return $info;
    }

    /**
    * 查询数据
    * 参数 $order_name--产生订单的用户名
    */
    function select_oname($order_name){
        //自定义sql语句
        $sqlstr = "select * from `t_order` where `nickname` = '$order_name' order by produce_time";
        $info = $this -> query($sqlstr);
        return $info;
    }

    /**
    * 删除用户数据
    * 参数 $user_id--用户id
    */
    function delete_all($user_id){
    	$sqlstr = "delete from `t_order` where `order_id` = '$order_id'";
    	$info = $this-> query($sqlstr);
    	return $info;
    }
}