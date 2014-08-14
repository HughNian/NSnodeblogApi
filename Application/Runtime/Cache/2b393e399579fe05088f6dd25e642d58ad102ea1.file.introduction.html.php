<?php /* Smarty version Smarty-3.1.6, created on 2014-08-14 09:54:59
         compiled from "./Application/Api/View/Test/introduction.html" */ ?>
<?php /*%%SmartyHeaderCode:29233070953da0f0bb9ec42-03671092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b393e399579fe05088f6dd25e642d58ad102ea1' => 
    array (
      0 => './Application/Api/View/Test/introduction.html',
      1 => 1407981288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29233070953da0f0bb9ec42-03671092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53da0f0bc2d1d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53da0f0bc2d1d')) {function content_53da0f0bc2d1d($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>江苏共青团网站手机客户端 API 手册</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link media="all" rel="stylesheet" type="text/css" href="/Public/css/doc/style.css"/>
</head>
 <body class="docs">
 <div id="splfileinfo.getctime" class="refentry">
    <div class="refnamediv">
        <h1 class="refname">Interface Document</h1>
        <p class="refpurpose"><span class="refname">API Doc</span> &mdash; <span class="dc-title">文档说明</span></p>
        <ol>
            <li>此接口文档仅适用于Android/iPhone等软件版本</li>
			<li>接口域名：暂未定(内网测试地址为192.168.0.117:8009)</li>
			<li>访问url：每个api说明都有相应的访问url</li>
			<li>API采用Restful风格,需要客户端发起post,get,put,delete等请求类型</li>
			<li>接口参数格式主要为json格式{"param1":"xxx","param2":"xxx","param3":"xxx"},如果遇到某个接口参数需要加密，测直接传入加密后的字符串</li>
			<li>返回形式(json字符窜)：{"code":"xxx","data":"xxx"}</li>
            <li>参数与返回值说明中增加JsonArray与JsonObject两种类型。
                <ul>
                    <li>JsonArray - 表明此参数/返回值将是以数组的形式提交/返回。其中的元素可能是 int/string/JsonObject。</li>
                    <li>JsonObject - 表明此参数/返回值将是以对象的形式返回。</li>
                    <li>JsonArray 与 JsonObject 可能相互嵌套。如 [{"a":[{"b":1},{"b":2}]},{"a":[{"b":3},{"b":4}]}]</li>
                </ul>
            </li>
        </ol>
    </div>
</div>
</div>
</body>
</html>
<?php }} ?>