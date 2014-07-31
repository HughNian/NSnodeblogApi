<?php

namespace Api\Controller;

/***
 * @todo:用户接口
 *
 *
 */
class UserController extends ServerController
{
	public $funcType;

	public function __construct()
	{
		$this->funcType = array(
			array('opt' => 'login', 'type'=>'get', 'encrypt' => 0),
			array('opt' => 'register', 'type' =>'post', 'encrypt' => 0),
			array('opt' => 'edit', 'type' =>'put', 'encrypt' => 0),
			array('opt' => 'del', 'type' => 'delete', 'encrypt' => 0),
			array('opt' => 'repwd', 'type' => 'post', 'encrypt' => 0),
		);
		parent::__construct();
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
	public function login($params, $status, $method)
	{	
		$ret = $this->checkRequest($params, $status, $method, $this->funcType);//检测客户端请求，并解析参数
		if(!$ret['ret'] && $ret['code'] == $this->errors['RQ_TYPE_ERROR']['CODE']) {
			return $this->data($this->errors['RQ_TYPE_ERROR']['CODE']);
		}
		
		$username = $password = NULL;
		$argcs = $this->argcs;
		extract($argcs, EXTR_OVERWRITE);
		if(!$username || !$password){
			return $this->data($this->errors['RQ_PARAMS_NOT_EXISTS']['CODE']);
		}
		return $this->data(C('RQ_SUCCESS.CODE'), $argcs);
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
