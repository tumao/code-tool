<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery.easyui.min.js"></script>
	<script type="text/javascript" src="locale/easyui-lang-zh_cn.js"></script>
	<link rel="stylesheet" type="text/css" href="themes/bootstrap/easyui.css">
	<link rel="stylesheet" type="text/css" href="themes/icon.css">
	<link rel="stylesheet" type="text/css" href="global.css">
	<script type="text/javascript">
	$(function(){
		
	});
	</script>
</head>
<body style="margin:0">
	<div id="main" class="easyui-layout" style="width:100%; height:300px;; margin:0;">
	    <div data-options="region:'north',split:false, resizable:false" style="height:75px; overflow:hidden">
	    	<div class="easyui-layout" style="width:100%; height:68px; border: 0;">
				<div data-options="region:'west', resizable:false, collapsible:false, title:''" style="width:200px; border: 0; background: url(images/header_bg.gif) bottom repeat-x; overflow: hidden;">
					<!-- <img src="images/zqb-logo.png" style="max-height: 50px; margin-top: 5px; margin-left: 18px;" /> -->
					<span style="max-heigt:50px; margin-top:10px; margin-left:18px; font-weight:20px; font-size:40px; display:block; color:#ffffff;">控制面板</span>
				</div>
				<div data-options="region:'center', title:'', resizable:false, collapsible:false" style=" border: 0; background: url(images/header_bg.gif) bottom repeat-x;">
					<div id="headerMenubar" style="padding:5px;border:1px solid #ddd; border: 0;">
						<a id="btn" href="#" class="easyui-linkbutton" data-options="iconCls:'icon-search'">easyui</a>
					</div>
					<div id="headerUserPanel" style="margin-top:0;">
						<span>2014-3-2&nbsp;&nbsp;</span>
						<a href="javascript: void(0);" class="easyui-linkbutton" data-options="iconCls: 'icon-ok'" onclick="window.location.href='/user/logout/'">注销</a>
					</div>
				</div>
			</div>
	    </div>
	    <div data-options="region:'west',title:'West',split:true,resizable:false," style="width:200px; background:#eee;"></div>
	    <div data-options="region:'center',title:'center title',resizable:false," style="padding:0;"></div>
	</div>
</body>
</html>