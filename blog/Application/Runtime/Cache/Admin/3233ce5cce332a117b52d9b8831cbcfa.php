<?php if (!defined('THINK_PATH')) exit();?>
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

<title>文章列表 - 文章列表 </title>
<meta name="keywords" content="blog_后台管理">
<style type="text/css">
        .list-page{padding:20px 0;text-align:right;}
		.list-page a{margin:0 5px;padding:2px 7px;border:1px solid #ccc;background:#f3f3f3;}
		.list-page a:hover{background:#e4e4e4;border:1px solid #908f8f;}
		.list-page .current{margin:0 5px;padding:2px 7px;background:#4F94CD;border:1px solid #4F94CD;color:#fff;}
</style>

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
	<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/blog/index.php/Admin/index/index" class="maincolor">首页</a> 
  <span class="c-gray en">&gt;</span>
		文章管理
		<span class="c-gray en">&gt;</span>
		文章列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
	</nav>
	<div class="Hui-article">
	  <article class="cl pd-20">
		  <div class="cl pd-5 bg-1 bk-gray mt-20">
				<span class="l"> <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="admin_add('添加文章','/blog/index.php/Admin/Article/add','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加文章</a> </span>
				<span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span>
			</div>
			<table class="table table-border table-bordered table-bg">
				<thead>
					<tr>
						<th scope="col" colspan="9">文章列表</th>
					</tr>
					<tr class="text-c">
						<th width="25"><input type="checkbox" name="" value=""></th>
						<th width="40">ID</th>
						<th width="150">文章标题</th>
						<th width="150">文章作者</th>
						<th width="150">文章缩略图</th>
						<th width="50">是否推荐</th>
						<th width="150">所属栏目</th>
						<th width="60">点击数</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
				  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
						<td><input type="checkbox" value="1" name=""></td>
						<td><?php echo ($vo["id"]); ?></td>
						<td><?php echo ($vo["title"]); ?></td>
						<td><?php echo ($vo["author"]); ?></td>
						<td>
						<?php if($vo['pic'] != '' ): ?><img src="/blog/<?php echo ($vo["pic"]); ?>""  width="50" height="50">
                        <?php else: ?>
                        暂无图片<?php endif; ?>
						</td>
						<td>
                        <?php if($vo['state'] == '1'): ?>是
                        <?php else: ?>
                        否<?php endif; ?>
					    </td>
						<td><?php echo ($vo["catename"]); ?></td>
						<td><?php echo ($vo["click"]); ?></td>
						
						<td class="td-manage">
						
						<a title="编辑" href="javascript:;" onclick="admin_edit('文章编辑','/blog/index.php/Admin/Article/edit/id/<?php echo ($vo["id"]); ?>','1','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i>
						</a> 
						<a title="删除" href="/blog/index.php/Admin/Article/del/id/<?php echo ($vo["id"]); ?>" onclick="admin_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i>
						</a>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
			<div id="list-page" class="list-page">
                  <?php echo ($show); ?>
			</div>

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
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript">
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*文章-增加*/
function admin_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*文章-删除*/
function admin_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:4000});
	});
}
/*文章-编辑*/
function admin_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*文章-停用*/
function admin_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
		$(obj).remove();
		layer.msg('已停用!',{icon: 5,time:1000});
	});
}

/*文章-启用*/
function admin_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
		$(obj).remove();
		layer.msg('已启用!', {icon: 6,time:1000});
	});
}
</script> 
</body>
</html>