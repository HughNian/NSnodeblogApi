<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Restful接口测试页面</title>
	<link rel="StyleSheet" type="text/css" href="/Public/css/style.css" />
	<script type="text/javascript" src="/Public/scripts/BubbleTooltips.js"></script>
	<script type="text/javascript" src="/Public/scripts/parse.js"></script>
	<!--[if lt IE 7]>
	<script defer type="text/javascript" src="scripts/pngfix.js"></script>
	<![endif]-->

	<script src="/Public/scripts/jquery-1.6.4.min.js"></script>
	<link rel="Stylesheet" href="/Public/css/button.css">
	<style type="text/css">
		html {font-family: Consolas, "Andale Mono WT", "Andale Mono", "Lucida Console",  Monaco, "Courier New", Courier, monospace;background:#333 url(/Public/images/1.svg)}
		.navbar{width:100%;height;48px;background:#8892BF;border-bottom:4px solid #4F5B93;}
		.fixed-top {position:fixed;right:0;left:0;z-index:1030;margin-bottom:0;top:0}
		.zi {width:200px;height:48px;line-height:48px;margin-left:210px;font-size:20px;}
		.testarea {height:auto;width:1300px;margin: 0 auto;margin-top:50px;background:#FFF;border:4px solid #666;}
		#apitable table {margin-top:35px;}
		#apitable td {width:380px;font-size:20px;float:left;margin-left:150px;}
		#apitable select {width:150px;height:30px;font-family: Consolas, "Andale Mono WT", "Andale Mono", "Lucida Console",  Monaco, "Courier New", Courier, monospace;}
		.textinput {width:385px;height:35px;line-height:30px;border:1px solid #8892BF;font-family: Consolas, "Andale Mono WT", "Andale Mono", "Lucida Console",  Monaco, "Courier New", Courier, monospace;font-size:16px;}
		.paraminput {width:385px;height:35px;line-height:30px;border:1px solid #8892BF;margin-top:10px;font-family: Consolas, "Andale Mono WT", "Andale Mono", "Lucida Console",  Monaco, "Courier New", Courier, monospace;font-size:16px;}
		.note {width:900px;min-height:80px;margin:0 auto; margin-top:30px;border:1px dashed #008000; background:#F0F7FD; font-size:15px;line-height:30px;color:#008000;text-indent:10px;white-space:normal;}
		#result {width:100%;height:auto;background:#FFF;margin-top:15px;}
	</style>
	</head>
	
	<body>
		<nav class="navbar fixed-top">
			<div class="zi"><strong>API Test Page</strong></div>
		</nav>
		<div class="testarea">
			<div class="note">
				<strong>说明:</strong>
				<li>例如登录接口，地址为:127.0.0.1:8008/user/login/{"username":"niansong","password":"123456"}.json, 请求类型为GET，返回的数据格式为json。</li>			   
				<li>参数填写，请填写JSON数据。如果请求的接口为加密接口则需要填写加密后的参数值。</li>
			</div>
			<table width="100%" cellspacing="25"cellpadding="0" id="apitable">
				<col><col/>
				<thead></thead>
				<tr>
					<td>Api Url(接口地址):</td>
					<td>
						<input type="text" name="url" id="url" value="http://127.0.0.1:8008" class="textinput">
					</td>
				</tr>
				<tr>
					<td>Request Type(请求类型):</td>
					<td>
						 <select name="type" id="type">
							<option value="GET">GET</option>
							<option value="POST">POST</option>
							<option value="PUT">PUT</option>
							<option value="DELETE">DELETE</option>
						  </select>
					</td>
				</tr>
				<tr>
					<td>Data Type(数据类型):</td>
					<td>
						<select name="datatype" id="datatype">
						  <option value="json">json</option>
						  <option value="xml">xml</option>
						  </select>
					</td>
				</tr>
				<tr>
					<td>CMD(Controller):</td>
					<td>
						<input type="text" name="cmd" id="cmd" value="" class="textinput">
					</td>
				</tr>
				<tr>
					<td>OPT(Action):</td>
					<td>
						<input type="text" name="opt" id="opt" value="" class="textinput">
					</td>
				</tr>
				<tr>
					<td>Param(参数):</td>
					<td>
					<span><input type="text" name="param" value="" class="paraminput"></span>
					<!--<input type="button" id="addparm" value="添加参数" class="button gray small">-->
					</td>
				<tr>
			</table>
			<input type="button" id="commit" class="button gray bigrounded" style="margin-left:180px;" value="Submit">
			
			<!--输出结果-->
			<div style="width:100%;height:3px;background:#666;margin-top:30px;"></div>
			<div id="result">			
				<form onsubmit="doParse(); return false;">
			    <div id="inputcontainer"><textarea id="text" rows="12" style="font-size:16px"></textarea></div>
		        <div class="clear"></div>
		        <div class="lfloat"><input type="submit" id="submit" value="json 2 html" onclick="doParse(); return false;" /> <input type="button" id="reset" value="reset" onclick="clearPage();" /></div>
		        <div class="clear"></div>
		        <hr />
		        <a name="_output" class="noa"></a>
		        <div id="stats" class="stats"></div>
		        <div id="output" class="output"></div>
			   </form>
			</div>
		</div>
	</body>
	<script type="text/javascript">
			$("#addparm").click(function(){
				var input = "<input type='text' name='param[]' class='paraminput'>";
				$(this).prev().append(input);
			});
			
			// JSON转换为字符串
			function JSONstringify(Json){
				if($.browser.msie){
					if($.browser.version=="7.0"||$.browser.version=="6.0"){
						var  result=jQuery.parseJSON(Json);
					}else{
						var result=JSON.stringify(Json);   
					}		
				}else{
					var result=JSON.stringify(Json);			
				}
				return result;
			}

			$("#commit").click(function(){
				var _url  = $("#url").val(),
					_type = $("#type").val(),
					_datatype = $("#datatype").val(),
					_cmd  = $("#cmd").val(),
					_opt  = $("#opt").val();
				if(_url == "" || _type == "" || _datatype == "" || _cmd == "" || _opt == ""){
					alert("请填写完整数据再提交");
					return;
				}
				if(_datatype == 'xml'){
					alert("暂时不支持xml数据");
					return;
				}
				var _data = {'Accept':'application/json'};
				_url += '/' + _cmd + '/' +  _opt;
				var param = "";
				var text = $("#text");
				$(".paraminput").each(function(){
					var val = $(this).val();
					if(val != "") param += '/' + ($(this).val());
				});
				if(param != "") _url += param;
				_url += '.' + _datatype;
				console.log(_url);
				var text = $("#text");
				$.ajax({
					type:_type,
					method:_type,
					url: _url,
					dataType:_datatype,
					contentType:"application/json",
					data: _data,
					cache:false,
					success:function(ret){
						var data = JSONstringify(ret);
						text.html(data);
						$("#submit").click();
					},
					error:function(req, status, error){
						alert(error);
						//alert(status);
					}
				});
			});
			
	</script>
</html>