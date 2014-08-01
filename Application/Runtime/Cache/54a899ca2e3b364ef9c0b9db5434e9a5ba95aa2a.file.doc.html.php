<?php /* Smarty version Smarty-3.1.6, created on 2014-08-01 09:15:01
         compiled from "./Application/Api/View/Test/doc.html" */ ?>
<?php /*%%SmartyHeaderCode:157515227453da0ee2ed5025-04869952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54a899ca2e3b364ef9c0b9db5434e9a5ba95aa2a' => 
    array (
      0 => './Application/Api/View/Test/doc.html',
      1 => 1406800217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157515227453da0ee2ed5025-04869952',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53da0ee30d820',
  'variables' => 
  array (
    'apis' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53da0ee30d820')) {function content_53da0ee30d820($_smarty_tpl) {?>﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>app API 手册</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link media="all" rel="stylesheet" type="text/css" href="/Public/css/doc/style.css"/>
</head>
<body class="docs">
<div id="index" class="set">
    <h1 class="title">app  API 手册 (V1.0)</h1>
    <div class="info">
        <div class="pubdate">2014-07-28</div>
        <div class="copyright">&copy;<span class="year">2013-2014</span><span class="holder">hughnian</span></div>
    </div>

    <ul class="chunklist chunklist_set">
        <li>API 手册说明</li>
        <li><a href="/test/introduction">简介</a></li>
		<li><a href="/test/errcode">错误码</a></li>
        <li>
			<OL>
				<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
				<LI>
					<div class="refentry">
						<A href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['memo'];?>
</A>&nbsp;
					</div>
				</LI>
				<?php } ?>
			</OL>
        </li>
    </ul>
</div>
</body>
</html>
<?php }} ?>