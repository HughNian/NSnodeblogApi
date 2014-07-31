<?php

namespace Api\Controller;

/***
 * @todo:用户任务接口
 *
 *
 */
class TaskController extends ServerController
{
	public $funcType;

	public function __construct()
	{
		$this->funcType = array(
			array('opt' => 'tasklist', 'type'=>'get', 'encrypt' => 0),
			array('opt' => 'taskadd', 'type' => 'post', 'encrypt' => 0),
		);
		parent::__construct();
	}

	/**
	 * @todo:用户列表API (2014-07-28)
	 *
	 * @param: {int} userid -用户id
	 *
	 * @type: GET
     *
	 * @return {json} list -任务列表信息
	 *
	 */
	public function tasklist($params, $status, $method)
	{
		
	}

	/**
	 * @todo:用户添加任务API (2014-07-28)
	 *
	 * @param: {int} userid  -用户名id
	 *         {string} name - 任务名
	 *         {string} memo - 任务描述
	 *         {string} content - 任务内容
	 *
	 *
	 * @type: POST
     *
	 * @return {json} list - 该用户新的任务列表
	 *
	 */
	public function taskadd()
	{
	
	}

}
