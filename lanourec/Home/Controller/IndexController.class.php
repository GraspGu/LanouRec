<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
        
    public function index(){
         //实例化
        $n = new \Model\User_infoModel();
        $sqlstr = "select * from user_info where `openid` = '$_SESSION[openid]'";
        $result = $n -> query($sqlstr);

    	//将数据发送至Smarty
    	$this->assign('info',$result['0']);

    	//引入html页面
        $this->display();
    }

    //快速回收页面
    function fast_rec(){
        //两个逻辑
        //微信部分
        $code = $_GET["code"];
        $appid = "*****";
        $secret = "*****";
        if (!empty($code))  //有code
        {
            $u = new \Model\User_infoModel();
            //通过code获得 access_token + openid
            $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=" . $appid
            . "&secret=" . $secret . "&code=" . $code . "&grant_type=authorization_code";
            $jsonResult = file_get_contents($url);
            $resultArray = json_decode($jsonResult, true);
            $openid = $resultArray["openid"];
            $username = $resultArray['nickname'];
            $sex = $resultArray['sex'];
            $address = $resultArray['address'];
            //将用户的信息保存到user_info表
            //如果表中无用户
            if (!($u -> select_oid($openid)) && $openid) {
                $sql = "insert into user_info(`user_id`,`openid`,`state`,`info_state`,`produce_time`) values(UUID(),'$openid','0','0',now())";
                $result = $u -> execute($sql);
            }
            //写入session
            session('openid',$openid);
        }
        //正式项目，如果没有code，禁止访问
        // else{
        //     exit;
        // }
        /*****判断openid是否为回收员，如果是回收员，跳转到相应的控制器*****/
        $c = new \Model\CollectorModel();
        $p_sql = "select * from collector where `openid` = '$_SESSION[openid]' and `state` = '1'";
        if ($c -> query($p_sql)) {
            //跳转到回收员index
            $this->redirect('/Home/Coll/index');
        }
        /******************************************************************/

        $w = new \Model\Waste_priceModel();
        $sqlstr = "select * from waste_price where `state` = '0'";
        $result = $w ->query($sqlstr);

        $this->assign('info',$result);
        $this->display();
    }

    //废品二级分类
    function classify(){
        //获取一级废品名称
        $classify = $_GET['index_rec'];

        //实例化
        switch ($classify) {
            case 'paper':
                $w = new \Model\PaperModel();
                break;
            case 'plastic':
                $w = new \Model\PlasticModel();
                break;
            case 'battery':
                $w = new \Model\BatteryModel();
                break;
            case 'metal':
                $w = new \Model\MetalModel();
                break;
            case 'electronic':
                $w = new \Model\ElectronicModel();
                break;
            case 'appliance':
                $w = new \Model\ApplianceModel();
                break;
            case 'textile':
                $w = new \Model\TextileModel();
                break;
            default:
                $w = new \Model\Waste_priceModel();
                break;
        }

        $sql = "select * from $classify where `state` = '0'";
        $result = $w -> query($sql);
        $this->assign('info',$result);
        $this->display();
    }

    //快速回收提交页面
    function fast_rec_sec(){

        if ($_GET['index_rec'] == 'other') {

        }else{
            //获取二级废品名称
            $sec_name = $_GET['index_rec'];
            $name = substr($sec_name,0,strpos($sec_name, '_')); //截取一级废品名称
            //分类实例化
            switch ($name) {
                case 'paper':
                    $w = new \Model\PaperModel();
                    break;
                case 'plastic':
                    $w = new \Model\PlasticModel();
                    break;
                case 'battery':
                    $w = new \Model\BatteryModel();
                    break;
                case 'metal':
                    $w = new \Model\MetalModel();
                    break;
                case 'electronic':
                    $w = new \Model\ElectronicModel();
                    break;
                case 'appliance':
                    $w = new \Model\ApplianceModel();
                    break;
                case 'textile':
                    $w = new \Model\TextileModel();
                    break;
                default:
                    $w = new \Model\Waste_priceModel();
                    break;
            }
            //根据英文type查询中文type
            $sql = "select * from $name where `type_eg` = '$sec_name'";  
            $type = $w -> query($sql);  
        }
             
        $this->assign('info',$type['0']);
        $this->display();
    }

    //修改个人信息
    function user_info(){
        $u = new \Model\User_infoModel();
        //两个逻辑
        //用户保存个人信息
        if (!empty($_POST)) {

            $username = $_POST['username'];
            $sex = $_POST['sex'];
            $telephone = $_POST['telephone'];
            $address = $_POST['address'];

            $sql = "update user_info set `username` = '$username',`sex` = '$sex',`telephone` = $telephone,`address` = '$address',`info_state` = '1',`info_time` = now() where `openid` = '$_SESSION[openid]'";
            $result = $u -> execute($sql);
            if ($result) {
                $this->redirect('/Home/Index/index');
            }
        }
        $sql = "select * from user_info where `openid` = '$_SESSION[openid]'";
        $result = $u -> query($sql);

        $this->assign('info',$result['0']);
        $this->display();
    }

    //地址管理
    function address_list(){
        $n= new \Model\User_addressModel();
        //两个逻辑
        //如果是删除地址
        if (!empty($_GET['id'])) {
            //获取address_id
            $address_id = $_GET['id'];
            //这里地址不应直接删除，最好写一个标志位state
            $sql = "delete from user_address where `address_id` = '$address_id'";
            $result = $n -> execute($sql);
        }
        $sql = "select * from user_address where `openid` = '$_SESSION[openid]' order by produce_time desc";
        $result = $n -> query($sql);

        $this->assign('info',$result);
        $this->display();
    }
    //增加地址
    function address_add(){
        $u = new \Model\User_infoModel();
        $n = new \Model\User_addressModel();
        //两个逻辑
        //如果是新增地址
        if (!empty($_POST)) {
            //获取用户的openid
            $openid = $_SESSION['openid'];
            //查询用户的user_id
            $user_id_sql = "select * from user_info where `openid` = '$openid'";
            $user_res = $u -> query($user_id_sql);
            $user_id = $user_res['0']['user_id'];
            //获取表单数据
            $username = $_POST['username'];
            $sex = $_POST['gender'];
            $telephone = $_POST['tel'];
            $province = $_POST['province'];
            $city = $_POST['city'];
            $country = $_POST['country'];
            $spe_add = $_POST['address'];

            //写入数据库
            $sql = "insert into user_address(`address_id`,`user_id`,`openid`,`nickname`,`nick_sex`,`nick_tel`,`province`,`city`,`country`,`spe_add`,`produce_time`) values(UUID(),'$user_id','$_SESSION[openid]','$username','$sex','$telephone','$province','$city','$country','$spe_add',now())";
            if($u -> execute($sql)){
                $this->redirect('/Home/Index/address_list');
            }
        }

        
        $sql = "select * from user_address where `openid` = '$_SESSION[openid]'";
        $result = $n -> query($sql);

        $this->assign('info',$result['0']);
        $this->display();
    }

    //修改交货地址
    function address_edit(){
        
        $u = new \Model\User_addressModel();
        if (!empty($_GET['id'])) {
            //接收地址修改表单
            $address_id = $_GET['id'];

            $username = $_POST['username'];
            $sex = $_POST['gender'];
            $telephone = $_POST['tel'];
            $province = $_POST['province'];
            $city = $_POST['city'];
            $country = $_POST['country'];
            $address = $_POST['address'];
            $sql = "update user_address set `nickname` = '$username',`nick_sex` = '$sex',`nick_tel` = '$telephone',`province` = '$province',`city` = '$city',`country` = '$country',`spe_add` = '$address' where `address_id` = '$address_id'";
            $u -> execute($sql);
            $this->redirect('/Home/Index/address_list');
        }
        //接收list传递的address_id
        $address_id = $_GET['aid'];
        $sql = "select * from user_address where `address_id` = '$address_id'";
        $result = $u ->query($sql);
        $this->assign('info',$result['0']);
        $this->display();
    }

    //申请成为回收员
    function apply(){
        $c = new \Model\CollectorModel();
        $u = new \Model\User_infoModel();

        //如果申请成为回收员
        if (!empty($_POST)) {
            //获取user_id
            $uid_sel = "select * from user_info where `openid` = '$_SESSION[openid]'";
            $uid_res = $u -> query($uid_sel);
            $user_id = $uid_res['0']['user_id'];

            $username = $_POST['username'];
            $sex = $_POST['gender'];
            $telephone = $_POST['tel'];
            $province = $_POST['province'];
            $city = $_POST['city'];
            $country = $_POST['country'];
            $address = $_POST['address'];

            $sql = "insert into collector(`collector_id`,`user_id`,`openid`,`username`,`sex`,`telephone`,`province`,`city`,`quyu`,`spe_address`,`state`,`produce_time`) values(UUID(),'$user_id','$_SESSION[openid]','$username','$sex','$telephone','$province','$city','$country','$address','0',now())";
            $result = $c -> execute($sql);
            if ($result) {
                $this->redirect('/Home/Index/apply');
            }
        }

        //查询当前用户是否为回收员
        $sql = "select * from collector where `openid` = '$_SESSION[openid]'";
        $result = $c ->query($sql);
        $this->assign('info',$result);

        $this->display();
    }

    //废品表
    function price(){
        //查询废品表
        $w = new \Model\Waste_priceModel();
        $sql = "select * from waste_price where `state` = '0'";
        $result = $w -> query($sql);
        $this->assign('info',$result);
        $this->display();
    }

    //价格表
    function price_detail(){
        //接收get参数
        $type_eg = $_GET['type'];

        switch ($type_eg) {
            case 'paper':
                $w = new \Model\PaperModel();
                break;
            case 'plastic':
                $w = new \Model\PlasticModel();
                break;
            case 'battery':
                $w = new \Model\BatteryModel();
                break;
            case 'metal':
                $w = new \Model\MetalModel();
                break;
            case 'electronic':
                $w = new \Model\ElectronicModel();
                break;
            case 'appliance':
                $w = new \Model\ApplianceModel();
                break;
            case 'textile':
                $w = new \Model\TextileModel();
                break;
            default:
                $w = new \Model\Waste_priceModel();
                break;
        }
        $sql = "select * from $type_eg where `state` = '0'";
        $result = $w -> query($sql);
        $this->assign('info',$result);
        $this->display();
    }

}