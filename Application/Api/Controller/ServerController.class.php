<?php
/***
 * @todo: yar服务端父接口控制器
 *
 * @author: hughnian
 *
 * @date: 2014-07-20
 *
 */
 
namespace Api\Controller;

use Think\Controller\YarController;
use Api\Constant\ApiConst;

class ServerController extends YarController implements ApiConst
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 *
	 * 此非api接口
	 *
	 */
	protected function extractParams($params) 	
	{
		$argcs = explode(',', $params);
			
		if(!$argcs){
			return array("code"=>1002, "msg"=>"参数写法有误");
		}
		
		return $argcs;
	}
}
