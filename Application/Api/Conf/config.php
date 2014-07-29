<?php
return array(
	'DEFAULT_CONTROLLER' => 'Client', // 默认控制器名称
	'DEFAULT_ACTION'     => 'output', // 默认操作名称
	
	'HOST'               => 'http://127.0.0.1:8008',       //api服务地址

	/****************Restful URL规则******************/
	'URL_ROUTER_ON'   => true,
	'URL_ROUTE_RULES'=>array(
		
		/***USER API***/
	    'user/login/:username/:password' => array('Client/output?cmd=user', 'status=0', array('ext'=>'json')),
		'user/register/:username/:password' => array('Client/output?cmd=user', 'status=1', array('ext'=>'json')),

	),
);
