<?php

namespace Api\Constant;

interface ApiConst
{
	const DEFAULT_PAGE = 1;                                                //默认页
	const PAGE_NUMBER  = 20;		                                       //每页显示的条数
	const API_HOST     = 'http://127.0.0.1:8008';                          //接口地址
	const DEL_STATUS_NO = 0;                                               //删除状态(未删除)
	const DEL_STATUS_YES = 1;					                           //删除状态(已删除)

}
