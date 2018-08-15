<?php
namespace Model;
use Think\Model;

//为collector数据库创建模型
//父类Model：ThinkPHP/Library/Think/Model.class.php
class CollectorModel extends Model {
    public function index(){
    	
    }

    /**
    * 查询数据
    * 参数 $page_obj--分页管理对象
    */
    function select_all($page_obj){
    	//自定义sql语句
		$sqlstr = "select * from `collector` order by produce_time desc " . $page_obj -> limit;
		$info = $this -> query($sqlstr);
		return $info;
    }

    /**
    * 查询数据
    * 参数 $collector_name--搜索数据时的回收员姓名
    */
    function select_cname($collector_name){
        //自定义sql语句
        $sqlstr = "select * from `collector` where `username` = '$collector_name' order by produce_time";
        $info = $this -> query($sqlstr);
        return $info;
    }

    /**
    * 查询数据
    * 参数 $c_id--搜索数据时的回收员姓名
    */
    function select_cid($c_id){
        //自定义sql语句
        $sqlstr = "select * from `collector` where `collector_id` = '$c_id' order by produce_time";
        $info = $this -> query($sqlstr);
        return $info;
    }

    /**
    * 查询数据
    * 无参数
    */
    function coll_sel(){
        //自定义sql语句
        $sqlstr = "select * from collector";
        $info = $this -> query($sqlstr);
        return $info; //返回回收员一维信息
    }

    /**
    * 删除用户数据
    * 参数 $user_id--用户id
    */
    function delete_all($user_id){
    	$sqlstr = "delete from `collector` where `collector_id` = '$collector_id'";
    	$info = $this-> query($sqlstr);
    	return $info;
    }
}