<?php
return array(
	'DEFAULT_CONTROLLER' => 'Client', // 默认控制器名称
	'DEFAULT_ACTION'     => 'output', // 默认操作名称


	/****************Restful URL规则******************/
	'URL_ROUTER_ON'   => true,
	'URL_ROUTE_RULES'=>array(
	    'user/:username/:password' => array('Client/output?cmd=user&opt=login', 'status=1', array('ext'=>'json')),
	),
);
