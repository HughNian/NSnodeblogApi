<?php

namespace Api\Controller;

/***
 * @todo:用户接口
 *
 *
 */
class UserController extends ServerController
{
	public $funcType = array();

	public function __construct()
	{
		parent::__construct();
		$this->funcType = array(
			array('opt' => 'login', 'type'=>'get'),
			array('opt' => 'register', 'type' =>'post'),
			array('opt' => 'edit', 'type' =>'put'),
			array('opt' => 'del', 'type' => 'delete'),
			array('opt' => 'repwd', 'type' => 'post'),
		);
	}

	/**
	 * @todo:用户登录API (2014-07-28)
	 *
	 * @param: {string} username -用户名
	 *         {stirng} passowrd -密码
	 *
	 * @type: GET
     *
	 * @return {json} list -用户信息
	 *
	 */
	public function login($params, $cmd, $opt, $status, $method)
	{	
		$this->checkRequest($opt, $status, $method, $this->funcType);

		$username = $password = NULL;
		$argcs = $this->extractParams($params);
		
		extract($argcs, EXTR_OVERWRITE);

		if(!$username || !$password){
			return array('code'=>1001);
		}
		return array("code"=>1000, "username"=>$username, "password"=>$password);
	}

	/**
	 * @todo:用户注册API (2014-07-28)
	 *
	 * @param: {string} username -用户名
	 *         {string} password -密码
	 *
	 * @type: POST
     *
	 * @return {json} list -用户信息
	 *
	 */
	public function register()
	{
	
	}

}
