<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
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
<!--[if lt IE 9]>
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/lib/html5.js"></script>
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/blog/Application/Admin/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/blog/Application/Admin/Public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/blog/Application/Admin/Public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/blog/Application/Admin/Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/blog/Application/Admin/Public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script><![endif]-->
<!--/meta 作为公共模版分离出去-->
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/ueditor/ueditor.all.js"></script>
<title>修改文章 - 文章管理 </title>
<meta name="keywords" content="">
<meta name="description" content="">
</head>
<body>
<article class="cl pd-20">
	<form action="/blog/index.php/Admin/Article/edit" method="post" class="form form-horizontal" id="form-admin-add" enctype="multipart/form-data">
	   <input type="hidden" name="id" value="<?php echo ($list["id"]); ?>">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>文章名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($list["title"]); ?>" placeholder="" id="adminName" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>文章作者：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($list["author"]); ?>" placeholder="" id="adminName" name="author">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>文章缩略图：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="file"  value="" placeholder="" id="pic" name="pic">
				<?php if($list['pic'] != ''): ?><img src="/blog/<?php echo ($list["pic"]); ?>" width="50" height="50">
                <?php else: ?>
                  暂无图片<?php endif; ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">文章关键词：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="keysword" cols="" rows="" class="textarea"  placeholder="" dragonfly="true" onKeyUp="textarealength(this,100)"><?php echo ($list["keysword"]); ?></textarea>
			<!--	<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>-->
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>是否推荐：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="checkbox" class=""  placeholder="" id="state" name="state" 
                 <?php if($list['state'] == '1' ): ?>checked="checked"<?php endif; ?>
				>
			  <span class="text"></span>

			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>文章所属栏目：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<select name="cateid" class="select">
				<option>请选择</option>
				<?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($list['cateid'] == $vo['id']): ?>selected="selected"<?php endif; ?>
                   > <?php echo ($vo["catename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">文章内容：</label>
			<div class="formControls col-xs-8 col-sm-9">
			
			 <textarea class="" id="content" name="content"><?php echo ($list["content"]); ?></textarea>
			
				
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">文章描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="des" cols="" rows="" class="textarea"  placeholder="" dragonfly="true" onKeyUp="textarealength(this,100)"><?php echo ($list["des"]); ?></textarea>
				
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/lib/layer/2.4/layer.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/static/h-ui.admin/js/H-ui.admin.page.js"></script> 

<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/blog/Application/Admin/Public/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-add").validate({
		rules:{
			adminName:{
				required:true,
				minlength:4,
				maxlength:16
			},
			password:{
				required:true,
			},
			password2:{
				required:true,
				equalTo: "#password"
			},
			sex:{
				required:true,
			},
			phone:{
				required:true,
				isPhone:true,
			},
			email:{
				required:true,
				email:true,
			},
			adminRole:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		/*submitHandler:function(form){
			$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}*/
	});
});
 UE.getEditor('content',{initialFrameWidth:550,initialFrameHeight:170,});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>