<?php
namespace Home\Controller;
use Think\Controller;
class WasteController extends Controller {
    public function waste_basket(){
    	//实例化
        $n = new \Model\Waste_basketModel();

        //两个逻辑
        //快速回收二级页面表单数据提交
        if (!empty($_POST) && $_GET['waste_type'] != 'other') {
            $waste_type = $_GET['waste_type'];
            $sigle_price = $_POST['sigle_price'];
            $waste_weight = $_POST['waste_weight'];
            $all_price = $sigle_price * $waste_weight; //计算总价

            //检查废品库是否有相同类型数据
            $sql = "select * from waste_basket where `waste_type` = '$waste_type' and `openid` = '$_SESSION[openid]' and `state` = '0'";
            $result = $n -> query($sql);

            //如果有相同类型数据
            if ($result) {
                //直接更新数据
                $sqlstr = "update waste_basket set `waste_weight` = '$waste_weight',`waste_price` = '$all_price',`produce_time` = now() where `openid` = '$_SESSION[openid]' and `state` = '0' and `waste_type` = '$waste_type'"; 
                if($n -> execute($sqlstr)){
                    $this->redirect('/Home/Waste/waste_basket');
                }
            }else{
                //如果没有相同类型的数据，直接插入新数据
                $sqlstr = "insert into waste_basket(`basket_id`,`openid`,`waste_type`,`waste_weight`,`waste_price`,`state`,`produce_time`) values(UUID(),'$_SESSION[openid]','$waste_type','$waste_weight','$all_price','0',now())";
                if($n -> execute($sqlstr)){
                    $this->redirect('/Home/Waste/waste_basket');
                }
            }
        }elseif(!empty($_POST) && $_GET['waste_type'] == 'other'){
            if ($_FILES['waste_up_img']['error']<4) {
                //修改上传路径
                $cfg = array(
                    'rootPath' => './Public/user_waste_up_img/'
                );
                $up = new \Think\Upload($cfg);
                $z = $up -> uploadOne($_FILES['waste_up_img']);

                //修改数据库路径名
                $img_path = $up -> rootPath . $z['savepath'] . $z['savename'];

                //将订单添加到废品筐
                $sqlstr = "insert into waste_basket(`basket_id`,`openid`,`waste_type`,`waste_weight`,`waste_price`,`state`,`produce_time`,`img_path`,`remark`) values(UUID(),'$_SESSION[openid]','other','0','0','0',now(),'$img_path','$_POST[waste_up_text]')";
                if($n -> execute($sqlstr)){
                    $this->redirect('/Home/Order/address_choose/action/other');
                }
            }
        }

        //用户删除废品框数据
        if (!empty($_GET['id'])) {

            $basket_id = $_GET['id'];
            $sqlstr = "delete from waste_basket where `basket_id` = '$basket_id'";

            if ($n -> execute($sqlstr)) {
                 $this->redirect('/Home/Waste/waste_basket');
            }
        }
    
        $sqlstr = "select * from waste_basket where `openid` = '$_SESSION[openid]' and `state` = '0' and `img_path` is null";

        $result = $n -> query($sqlstr);

        //获取废品中文名称
        foreach ($result as $key => $value) {
            //截取一级废品名称
            $type = substr($value['waste_type'],0,strpos($value['waste_type'], '_'));
            switch ($type) {
                case 'paper':
                    $w = new \Model\PaperModel();
                    break;
                
                default:
                    # code...
                    break;
            }
            $sql = "select * from $type where `type_eg` = '$value[waste_type]'";
            $type_cn[] = $w -> query($sql);
        }
        $this->assign(array('info'=>$result,'type_cn' => $type_cn));
    	//引入html页面
        $this->display();
    }
}