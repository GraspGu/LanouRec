<?php
//命名空间
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;

class ManagerController extends Controller{
	//管理员登录系统
	function login(){
		//两个逻辑
		if (!empty($_POST)) {
			//实例化对象
			$ad = new \Model\ManagerModel();
			$vry = new \Think\Verify();
			//获取表单数据
			$username = $_POST['username'];
			$password = $_POST['password'];
			//验证账号密码的正确性
			$sqlstr = "select * from manager where `username` = '$username' and `password` = '$password'";
			$result = $ad -> query($sqlstr);
			if (!$result) {
				echo "账号或密码错误！";
				exit;
			}
			if (!($vry -> check($_POST['captcha']))) {
				echo "验证码输入错误";
				exit;
			}
			//注册session
			session('username',$username);
			//跳转至index页面
			$this->redirect('/Admin/Index/index');
		}

		//引入页面
		$this->display();
	}

	//输出验证码
	function verifyImg(){
		ob_clean();
		//重写验证码参数
		$cfg = array(
			'imageH' => '45',
			'imageW' =>  '120',
			'fontSize' => '17',
			'length' => '4'
		);
		//实例化Verify类
		$very =  new Verify($cfg);
		//输出验证码
		$very->entry();	
	}
}