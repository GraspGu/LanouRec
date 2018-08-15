<?php
namespace Model;
use Think\Model;

//为collector数据库创建模型
//父类Model：ThinkPHP/Library/Think/Model.class.php
class Waste_priceModel extends Model {
    public function index(){
    	
    }
    /**
    * 查询数据
    * 参数 $page_obj--分页管理对象
    */
    function select_all($page_obj){
    	//自定义sql语句
		$sqlstr = "select * from `waste_price` order by price_time desc " . $page_obj -> limit;
		$info = $this -> query($sqlstr);
		return $info;
    }
}