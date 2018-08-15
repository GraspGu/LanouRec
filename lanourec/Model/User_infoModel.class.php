<?php
namespace Model;
use Think\Model;

#父类Model：ThinkPHP/Library/Think/Model.class.php
#为user_info数据库创建模型
#执行所有数据库操作
class User_infoModel extends Model {

    public function select_oid($openid){
    	//自定义sql语句
        $sqlstr = "select * from `user_info` where `openid` = '$openid'";
        $info = $this -> query($sqlstr);
        return $info;
    }

    /**
    * 查询数据
    * 参数 $page_obj--分页管理对象
    */
    function select_all($page_obj){
    	//自定义sql语句
		$sqlstr = "select * from `user_info` order by produce_time desc " . $page_obj -> limit;
		$info = $this -> query($sqlstr);
		return $info;
    }

    /**
    * 查询数据
    * 参数 $username--搜索数据的姓名参数
    */
    function select_uname($username){
        //自定义sql语句
        $sqlstr = "select * from user_info where `username` = '$username' order by produce_time desc";
        $info = $this -> query($sqlstr);
        return $info;
    }

    /**
    * 查询数据
    * 参数 $user_id--搜索数据的姓名参数
    */
    function select_uid($user_id){
        //自定义sql语句
        $sqlstr = "select * from user_info where `user_id` = '$user_id' order by produce_time desc";
        $info = $this -> query($sqlstr);
        return $info;
    }

    /**
    * 删除用户数据
    * 参数 $user_id--用户id
    */
    function delete_all($user_id){
    	$sqlstr = "delete from `user_info` where `user_id` = '$user_id'";
    	$info = $this-> query($sqlstr);
    	return $info;
    }
}