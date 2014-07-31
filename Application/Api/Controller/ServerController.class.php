<?php
/***
 * @todo: yar服务端父类
 *
 * @author: hughnian
 *
 * @date: 2014-07-20
 *
 */
 
namespace Api\Controller;

use Think\Controller\YarController;
use Api\Constant\ApiConst;
use Api\Libs\Crypt3Des;

class ServerController extends YarController implements ApiConst
{
	public    $argcs  = array();
	public	  $errors = array(); 
	private   $key   = "267ac2ed67f292ff77c4a0b8";
	private   $iv    = "OTk1M2Qw";
	private   $pack  = false;
	
	public function __construct()
	{
		$this->errors = C('ERRORS');
		parent::__construct();
	}
	
	/**
	 * @todo:检测客户端请求
	 *
	 *
	 *
	 */
	protected function checkRequest($params, $status, $method, $funcType)
	{
		$funcTypeCurr = $funcType[$status];
		
		if($method != $funcTypeCurr['type']) {
			return array('ret' => false, 'code' => $this->errors['RQ_TYPE_ERROR']['CODE']);
		}

		if($funcTypeCurr['encrypt'] == 1){ //加密参数进行解密操作
			$params = stripslashes($params);
			$params = str_replace(" ", "+", $params);
			$des = new Crypt3Des($this->key, $this->iv, $this->pack);
			//$this->argcs = json_decode($des->decrypt($params), true);
			$this->argcs = array("caocao11");
		}

		if($funcTypeCurr['encrypt'] == 0 ){
			$params = str_replace('&quot;', '"', $params);
			$this->argcs = json_decode($params, true);
		}
		
		return array('ret' => true);
	}
	
	/**
	 * @todo:数据返回
	 *
	 *
	 *
	 */
	protected function data($code=NULL, $data = array())
	{	
		return array("code"=>$code, "data"=>$data);
	}

}
