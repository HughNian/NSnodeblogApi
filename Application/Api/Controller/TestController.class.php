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
	 * @todo:测试页面
	 *
	 *
	 */
	public function api()
	{
		$this->display();
	}
}
