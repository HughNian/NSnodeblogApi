<?php
/**
 * @todo:Yar php操作类 (主要支持并行yar请求)
 *
 * @author: hughnian
 *
 */

namespace Api\Libs;

class YarClient
{
	public $url    = "";
	public $method = "";
	public $params = array();

	public function setUrl($url)
	{
		$this->url = $url;	
	}

	public function setMethod($method)
	{
		$this->method = $method;
	}

	public function setParams($params)
	{
		$this->params = $params;
	}

	public function mycallback($reval, $callinfo)
	{
		$ret = array('reval'=>$reval, 'callinfo'=>$callinfo);
		return $ret;
	}

	public function myerror_callback($type, $error, $callinfo)
	{
		$error = array('type'=>$type, 'error'=>$error, 'callinfo'=>$callinfo);
		return $error;
	}

	/**
	 * @todo:yar成功回调
	 *
	 *
	 */
	public function callback($reval, $callinfo)
	{
		exit("here1");
		$this->mycallback($reval, $callinfo);
	}

	/**
	 * @todo:yar失败回调
	 *
	 *
	 */
	function error_callback($type, $error, $callinfo)
	{
		exit("here2");
		$this->myerror_callback($type, $error, $callinfo);
	}

	public function run()
	{	
		\Yar_Concurrent_Client::call($this->url, $this->method, $this->params);
		\Yar_Concurrent_Client::loop();
	}
}
