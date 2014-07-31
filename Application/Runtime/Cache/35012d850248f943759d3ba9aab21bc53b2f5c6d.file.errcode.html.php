<?php /* Smarty version Smarty-3.1.6, created on 2014-07-31 17:48:10
         compiled from "./Application/Api/View/Test/errcode.html" */ ?>
<?php /*%%SmartyHeaderCode:24250392453da0f008b9aa7-61540233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35012d850248f943759d3ba9aab21bc53b2f5c6d' => 
    array (
      0 => './Application/Api/View/Test/errcode.html',
      1 => 1406799634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24250392453da0f008b9aa7-61540233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53da0f009a733',
  'variables' => 
  array (
    'success' => 0,
    'errors' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53da0f009a733')) {function content_53da0f009a733($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<style type="text/css">
.star{
	color: red;
}
h3{
	color: red;
}
.codeTable{
	margin: 0 0 0 50px;
	width: 550px;
	background-color: #7BA0CD;
}
.codeTable th,.codeTable td{
	padding: 2px;
	font-size: 14px;
	height: 25px;
	background-color: #D3DFEE;
	font-family: "Consolas";
}
.codeTable td.value{
	width: 80px;
}
.codeTable td.desc{
	text-align: left;
}
.codeTable td.module{
	font-weight: bold;
	text-align: center;
	background-color: #A7BFDE;
}
.wp{
	margin: 10px 0 0 50px;
	height: 300px;
	text-align: left;
}
.index{
	padding: 20px;
	font-family: tahoma,verdana;
	border-left: 2px solid #A7BFDE;
}
.index p{
	font-size: 36px;
}
.index p.b{
	font-size: 48px;
}
.index p.xs{
	font-size: 12px;
}
p.warning{
	margin: 10px 0 0 50px;
	padding: 5px;
	width: 550px;
	height: 25px;
	line-height: 25px;
	color: red;
	background-color: #FB9D9B;
	border: 1px solid #f00;
}
</style>
</head>
<body>
<div class="wp">
	<div class="index">
		<p class="b">接口返回错误码</p>
		<p>接口文档</p>
	</div>
</div>
<table cellspacing="1" class="codeTable">
<tr><td class="module">模块</td><td class="module">返回值定义</td></tr></thead>
<tr><td class="value"><?php echo $_smarty_tpl->tpl_vars['success']->value['CODE'];?>
</td><td class="desc"><?php echo $_smarty_tpl->tpl_vars['success']->value['DESC'];?>
</td></tr>
<tr><td class="module">模块</td><td class="module">系统错误码</td></tr></thead>
<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
<tr><td class="value"><?php echo $_smarty_tpl->tpl_vars['val']->value['CODE'];?>
</td><td class="desc"><?php echo $_smarty_tpl->tpl_vars['val']->value['DESC'];?>
</td></tr>
<?php } ?>
</table>
</body></html>
<?php }} ?>