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

class ServerController extends YarController implements ApiConstant
{
	public function __construct()
	{
		parent::__construct();
	}
}
