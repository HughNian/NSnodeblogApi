<?php

namespace Api\Controller;

use Think\Controller;

class TestController extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * @todo:接口测试页面
	 *
	 *
	 */
	public function api()
	{
		$this->display();
	}
	
	/**
	 * @todo:接口文档
	 *
	 *
	 */
	public function doc()
	{
		$apis = array(
			array('url'=>C('API_HOST') . '/User', 'memo'=>'用户模块接口'),
			array('url'=>C('API_HOST') . '/Task', 'memo'=>'任务模块接口'),
		);

		$this->assign('apis', $apis);
		$this->display();
	}

	/**
	 * @todo:接口简介
	 *
	 *
	 */
	public function introduction()
	{
		$this->display();
	}

	/**
	 * @todo:接口错误码
	 *
	 *
	 */
	public function errcode()
	{
		$success = C("RQ_SUCCESS");
		$errors = C("ERRORS");
		
		$this->assign('success', $success);
		$this->assign('errors', $errors);
		$this->display();
	}
}
