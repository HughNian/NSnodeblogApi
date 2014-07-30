<?php
return array(
	'DEFAULT_CONTROLLER' => 'Client', // 默认控制器名称
	'DEFAULT_ACTION'     => 'output', // 默认操作名称
	
	'HOST'               => 'http://127.0.0.1:8008',       //api服务地址

	/****************Restful URL规则******************/
	'URL_ROUTER_ON'   => true,
	'URL_ROUTE_RULES'=>array(
		
		/***USER API***/
	    'user/login/:params' => array('Client/output?cmd=user&opt=login', 'status=0'),
		'user/register/:params' => array('Client/output?cmd=user&opt=register', 'status=1'),

	),
);
