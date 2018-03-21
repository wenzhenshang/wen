<?php if (!defined('THINK_PATH')) exit();?>﻿
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="http://127.0.0.1/blog/Application/Admin/Public/favicon.ico" >
<link rel="Shortcut Icon" href="http://127.0.0.1/blog/Application/Admin/Public/favicon.ico" />

<link rel="stylesheet" type="text/css" href="http://127.0.0.1/blog/Application/Admin/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/blog/Application/Admin/Public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/blog/Application/Admin/Public/lib/Hui-iconfont/1.0.8/iconfont.css" />

<link rel="stylesheet" type="text/css" href="http://127.0.0.1/blog/Application/Admin/Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/blog/Application/Admin/Public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script><![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>blog_后台管理</title>
<meta name="keywords" content="blog_后台管理">

</head>
<body>
<!--_header 作为公共模版分离出去-->
  <header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="#">blog_后台管理</a> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="http://127.0.0.1/blog/Application/Admin/Public/javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="http://127.0.0.1/blog/Application/Admin/Public/javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="http://127.0.0.1/blog/Application/Admin/Public/javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
							<li><a href="http://127.0.0.1/blog/Application/Admin/Public/javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
							<li><a href="http://127.0.0.1/blog/Application/Admin/Public/javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
							<li><a href="http://127.0.0.1/blog/Application/Admin/Public/javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="javascript:;" class="dropDown_A"><?php echo (session('username')); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" >个人信息</a></li>
							<li><a href="#">切换账户</a></li>
							<li><a href="/blog/index.php/Admin/admin/logout">退出</a></li>
						</ul>
					</li>
					<!--<li id="Hui-msg"> <a href="http://127.0.0.1/blog/Application/Admin/Public/#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>-->
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="http://127.0.0.1/blog/Application/Admin/Public/javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="http://127.0.0.1/blog/Application/Admin/Public/javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="http://127.0.0.1/blog/Application/Admin/Public/javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="http://127.0.0.1/blog/Application/Admin/Public/javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="http://127.0.0.1/blog/Application/Admin/Public/javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="http://127.0.0.1/blog/Application/Admin/Public/javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="http://127.0.0.1/blog/Application/Admin/Public/javascript:;" data-val="orange" title="橙色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<!--/_header 作为公共模版分离出去-->

<!--_menu 作为公共模版分离出去-->
  <aside class="Hui-aside">
	
	<div class="menu_dropdown bk_2">
		
		
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="http://127.0.0.1/blog/Application/Admin/Public/admin-role.html" title="角色管理">角色管理</a></li>
					<li><a href="http://127.0.0.1/blog/Application/Admin/Public/admin-permission.html" title="权限管理">权限管理</a></li>
					<li><a href="/blog/index.php/Admin/Admin/lst" title="管理员列表">管理员列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe667;</i> 栏目管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>  
			<dd>
				<ul>
					<li><a href="/blog/index.php/Admin/Cate/lst" title="栏目列表">栏目列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">

			<dt><i class="Hui-iconfont">&#xe6aa;</i> 链接管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>  
			<dd>
				<ul>
					<li><a href="/blog/index.php/Admin/Link/lst" title="链接列表">链接列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe64b;</i> 标签管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>  
			<dd>
				<ul>
					<li><a href="/blog/index.php/Admin/Tags/lst" title="标签列表">标签列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe616;</i> 文章管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>  
			<dd>
				<ul>
					<li><a href="/blog/index.php/Admin/Article/lst" title="文章列表">文章列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="http://127.0.0.1/blog/Application/Admin/Public/system-base.html" title="系统设置">系统设置</a></li>
					<li><a href="http://127.0.0.1/blog/Application/Admin/Public/system-category.html" title="栏目管理">栏目管理</a></li>
					<li><a href="http://127.0.0.1/blog/Application/Admin/Public/system-data.html" title="数据字典">数据字典</a></li>
					<li><a href="http://127.0.0.1/blog/Application/Admin/Public/system-shielding.html" title="屏蔽词">屏蔽词</a></li>
					<li><a href="http://127.0.0.1/blog/Application/Admin/Public/system-log.html" title="系统日志">系统日志</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:;" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->

<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/blog/index.php/Admin/Index/Index" class="maincolor">首页</a> <span class="c-999 en">&gt;</span></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<h3>欢迎使用后台管理！</h3>
<?php  $remote = $_SERVER['REMOTE_ADDR'];$write = $remote . '|' . date('Y-m-d H:i:s');$str = file_get_contents('./Public/record.txt');$clickcount = 1; if($str){ $rows = explode("\r\n",$str); $count = count($rows) + 1; foreach($rows as $key=>$value){ $ip = explode("|",$value); if($ip[0] == $remote) $clickcount++; } $write = "\r\n" . $write; }else{ $count = 1; } file_put_contents('./Public/record.txt',$write,FILE_APPEND); echo "<p>当前网页已经是第".$count."次被访问</p>"; echo "<p>您是第".$clickcount."次来访问该网页</p>"; ?>



			<p>本次登录IP：<?php echo ($_SERVER['REMOTE_ADDR']); ?> &nbsp;&nbsp;&nbsp;本次登录时间：<?php echo date('Y-m-d H:i:s');?></p>
			<table class="table table-border table-bordered table-bg ">
               <thead>
                 <tr>
                   <th colspan="2" scope="">系统信息</td>
                 </tr>
                 </thead>
                 <tbody>
                 <tr>
                    <td width="30%">服务器IP地址</td>
                    <td><?php echo ($_SERVER['HTTP_HOST']); ?> </td>
                 </tr>
                 <tr>
                    <td>服务器端口</td>
                    <td><?php echo ($_SERVER['SERVER_PORT']); ?></td>
                 </tr>
               </tbody>
			</table>
		</article>
	</div>
</section>

<!--_footer 作为公共模版分离出去-->
 <script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/lib/layer/2.4/layer.js"></script> 
 
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/static/h-ui.admin/js/H-ui.admin.page.js"></script> 
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">

</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>