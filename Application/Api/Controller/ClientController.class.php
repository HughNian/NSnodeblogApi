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
use Api\Libs\YarClient;

class ClientController extends RestController implements ApiConst
{
	protected $allowMethod = array("get", "post", "put", "delete");
	protected $defaultMethod = 'get';
	protected $allowType   = array("json", "xml", "html");
	protected $defaultType = 'json';
	protected $allowOutputType = array( 'xml' => 'application/xml', 'json' => 'application/json','html' => 'text/html');

	public function __construct()
	{
		parent::__construct();
		if($_GET['callback']){	
			header("Access-Control-Allow-Origin: *"); //支持CORS跨域,测试api网页地址使用,但ajax请求的数据类型只能为jsonp,所以请求类型只能是get请求。
		}
	}

	/**
	 * @todo:yar成功回调
	 *
	 */
	public function callback($reval, $callinfo)
	{
		var_dump($retval);
	}

	/**
	 * @todo:yar失败回调
	 *
	 */
	public function error_callback($type, $error, $callinfo)
	{
		 error_log($error);
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
			
			/*
			if(isset($_GET['callback'])){ //jsonp 请求只能是get方式 CORS跨域
				$json = 'try{' . $_GET['callback'] .'(' . $json . ')}catch(e){}';
				echo $json;
			}*/
			
			$url = C('HOST') . '/' . $req['cmd'];
			$YarClient = new YarClient();
			$YarClient->url = $url;
			$YarClient->method = "login";
			$YarClient->params = array(1,2);
			$YarClient->run();
			$ret = $YarClient->mycallback();
			$error = $YarClient->myerror_callback();
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
