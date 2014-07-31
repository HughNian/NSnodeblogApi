<?php
/***
 * @todo: yar客户端接口控制器,带Restful风格接口
 * 
 * @author: hughnian
 *
 * @date: 2014-07-20
 *
 */

namespace Api\Controller;

use Think\Controller\RestController;
use Api\Constant\ApiConst;

class ClientController extends RestController implements ApiConst
{
	protected $allowMethod = array("get", "post", "put", "delete");
	protected $defaultMethod = 'get';
	protected $allowType   = array("json", "xml", "html");
	protected $defaultType = 'json';
	protected $allowOutputType = array( 'xml' => 'application/xml', 'json' => 'application/json','html' => 'text/html');
	private   $YarClient = NULL;
	protected $ret   = array();
	protected $error = array();

	public function __construct()
	{
		parent::__construct();
		global $YarClient;
		$this->YarClient = $YarClient;
	}

	/**
	 * @todo:yar成功回调
	 *
	 */
	public function mycallback()
	{
		$ret = $this->YarClient->ret;
		if($ret){
			$json = $ret['reval'];
			$this->response($json, $this->defaultType);
		} else {
			$this->myerror_callback();
		}
	}

	/**
	 * @todo:yar失败回调
	 *
	 */
	public function myerror_callback()
	{
		$error = $this->YarClient->error;
		error_log($error);
		$this->response($error['error'], $this->defaultType);
	}
	
	/**
	 * @todo:接口返回结果
	 *
	 */
	public function output()
	{	
		if($this->_type == 'json') { //Rest请求如果为json, 返回json数据
			if(!in_array($this->_method, $this->allowMethod)){
				$ret = array('error'=>'请求类型出错');
				$this->response($ret, $this->defaultType);
			}
			$req = array();
			$req = I("get.");
			$req['method'] = $this->_method;
			
			if(!$req){
				$ret = array('error'=>'请求出错！');
				$this->response($ret, $this->defaultType);
			}
			
			if(!$req['cmd']){
				$ret = array('error'=>'缺少cmd参数');
				$this->response($ret, $this->defaultType);
			}
			
			if(!$req['opt']){
				$ret = array('error'=>'缺少opt参数');
				$this->response($ret, $this->defaultType);
			}
			
			$params = array(
				"params" => $req['params'],
				'status' => $req['status'],
				'method' => $req['method']
			);
			
			$url = self::API_HOST . '/' . $req['cmd'];
			$this->YarClient->url = $url;
			$this->YarClient->method = $req['opt'];
			$this->YarClient->params = $params;
			$this->YarClient->run();
			
			//yar回调
			$this->mycallback();
		} 	
		
		if($this->_type == 'xml') { //Rest请求如果为xml, 返回xml数据
			//$this->response($data, xml); //由于测试页面暂时没有支持xml这里服务端暂时不支持xml
			$ret = array('error' => '暂时不支持xml类型');
			$this->response($ret, $this->defaulType);
		}

		if($this->_type == 'html') { //Rest请求如果为html,就是通过网页浏览器器访问
			$ret = array('error' => '暂时不支持html类型');
			$this->response($ret, $this->defaulType);
		}
	}

}
