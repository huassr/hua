<?php
namespace app\index\Data;
use think\Db;
/**
* 数据提供,数据逻辑
*均为静态方法，可直接调用
*  Db::query()   //select
* Db::execute()  /del update insert
*/
class Fetch
{

	public static function indexdata(){
	  //查询4个花卉，4个蔬菜，并随机排序，用于主页面展示
      $flower = self::fetchFlower(1,4);
      $vege = self::fetchFlower(2,4);
      $data = array_merge($flower,$vege);
      //latest 6 news blog
      $blog = Db::query("select id,title,description,cover FROM blog order by id desc limit 6");
      return array($data,$blog);
	}


	private static function fetchFlower($type=false,$count=6){
		$sql = "select * from flower";
		if($type){
			$sql .= sprintf(" where type=%d",$type);
		}
		$sql .= sprintf(" order by id desc limit %d",$count);
		return Db::query($sql);
	}


	public static function finduserByName($name){

		return Db::query("SELECT * from user where nickname='{$name}'")[0];

	}

	/**
	*注册
	*/
	public static function register($data){
			//插入sql
			$addsql=sprintf("insert into user(nickname,phone,email,password,addtime) VALUES ('%s','%s','%s','%s','%s')",$data['nickname'],$data['phone'],$data['email'],$data['password'],time());
			//执行插入sql语句
			return Db::execute($addsql);
	}


	//login
	public static function login($account,$pwd){

		   $sql = "select * from user where password='{$pwd}' AND (email='{$account}' OR phone='{$account}')";
  			return  Db::query($sql);
	}


	public static function makeorder($data){

		 $price = Db::query(sprintf("select price from flower where id=%d",$data['flowerid']))[0]['price'];
	      //total fee
	      $fee1 = $data['num']*$price;
	      $data['status'] = 2;//no pay status
	      $data['orderid'] = md5(time().$data['uid'].$data['fee']);
	      if(intval($data['type']) === 1){
	        $data['fee'] = $fee1;
	        unset($data['type']);
	        $ret = Db::name('orders')->insert($data);

	      }else if(intval($data['type']) === 2){
	        $data['fee'] = 20*$data['time']+$fee1;
	        $data['expire'] = strtotime("+".$data['time']." month");
	        unset($data['type']);
	        $ret = Db::name('orders2')->insert($data);
	      }
	      return array($ret,$data['fee']);
	}


	public static function PageOrder($page){
		$order1 = Db::name('orders')->alias("o")
		->join('flower f','f.id=o.flowerid')
		->where(['o.uid'=>\think\Session::get('login_uid')])
		->field("f.cover,o.id,o.orderid,o.addtime,o.uid,o.expressinfo,o.phone,o.status")
		->select();
		$orders2 = Db::name('cart_order')->where(['uid'=>\think\Session::get('login_uid')])->select();
		$order = array_merge($order1,$orders2 ? $orders2 :array());
		$order_data  = self::arrangedata($order,'addtime') ? self::arrangedata($order,'addtime'):array();
		self::DealFormat($order_data);
		$maxcount = count($order_data);
		$maxpage = ceil($maxcount/\think\Config::get('PAGE_SIZE'));
		$page = $page>$maxpage?($maxpage==0?1:$maxcount):$page;
		$ret = array_slice($order_data,($page-1)*\think\Config::get('PAGE_SIZE'),\think\Config::get('PAGE_SIZE'));
		return array($ret,$maxpage,$page);
	}


	private static function DealFormat(&$order_data){


				if(!empty($order_data)){

					foreach ($order_data as $key => $value) {

								if($value['data']){

											foreach ($value['data'] as $k => $v) {
														$flowerid = $order_data[$key]['data'][$k]['pid'];
														$flower = Db::name('flower')->where(['id'=>$flowerid])->find();
														$order_data[$key]['data'][$k]['flower'] = $flower;
											}


								}


					}
				}

	}




	private static function arrangedata($data,$attr=''){
			$arr = [];
			foreach ($data as $key => $value) {
				$arr[$key] = $value[$attr];
			}
			arsort($arr);
			foreach ($arr as $k => $v) {
						$data[$k]['data'] = json_decode($data[$k]['data'] ,true);
						$fetch[] = $data[$k];
			}
			return $fetch;
	}



	public static function PageOrder2($page){

	    return self::selectOrder('orders2',$page,'o.id,o.orderid,o.status,f.name,o.expire,
	      o.fee,o.addtime,o.time,f.cover');
	}


	private static function selectOrder($table,$page,$fileds=''){
		$maxcount = Db::query(sprintf("select count(*) as total from %s where uid=%d",$table,\think\Session::get('login_uid')))[0]['total'];
	    $maxpage = ceil($maxcount/\think\Config::get('PAGE_SIZE'));
	    $page = $page>$maxpage?($maxpage==0?1:$maxcount):$page;
		$sql = sprintf("SELECT %s FROM %s as o LEFT JOIN flower as f ON o.flowerid=f.id
			    WHERE o.uid=%d order by id desc limit %d,%d",$fileds,$table,\think\Session::get('login_uid'),($page-1)*(\think\Config::get('PAGE_SIZE')),\think\Config::get('PAGE_SIZE'));
		$order = Db::query($sql);
		return array($order,$maxpage,$page);
	}



}
