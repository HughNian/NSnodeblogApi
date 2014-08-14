<?php
return array(
	'DEFAULT_CONTROLLER' => 'Client',																				// 默认控制器名称
	'DEFAULT_ACTION'     => 'output',																				// 默认操作名称
	
	'API_HOST'           => 'http://127.0.0.1:8008',                                                                //接口地址

	/***模版引擎***/
	'TMPL_ENGINE_TYPE'        => 'Smarty',																			//使用smarty模版引擎
	'TMPL_TEMPLATE_SUFFIX'    => '.html',																			//默认模板文件后缀
	'TMPL_CONTENT_TYPE'       => 'text/html',																		//默认模板输出类型
	'TMPL_ENGINE_CONFIG'      =>array(
			'left_delimiter'  => '<!--{',																			// 左边界
			'right_delimiter' => '}-->',																			//右边界
	),

	'RQ_SUCCESS'        => array('CODE' => 1000, 'DESC'=>'接口返回成功'),											//接口返回成功
	/****************Api 错误码**********************/
	'ERRORS' => array(
		'RQ_TYPE_ERROR' => array('CODE' => 1001, 'DESC'=>'接口请求类型错误'),										//接口请求类型错误
		'RQ_PARAMS_NOT_EXISTS' => array('CODE'=>1002,'DESC'=>'接口缺少参数'),										//接口缺少参数
	),

	/****************Restful URL规则******************/
	'URL_MODEL' => 1,
	'URL_ROUTER_ON'   => true,
	'URL_ROUTE_RULES'=>array(
		
		/***USER API***/
	    'user/login/:params' => array('Client/output?cmd=user&opt=login'),
		'user/register/:params' => array('Client/output?cmd=user&opt=register'),

	),
);
