<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>
<!-- META TAGS -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>博客_栏目</title>
<link rel="shortcut icon" href="images/favicon.png" />
<!-- Style Sheet-->
<link rel="stylesheet" href="style.css"/>
<link rel='stylesheet' id='bootstrap-css-css'  href='/blog/Public/css/bootstrap5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css-css'  href='/blog/Public/css/responsive5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='pretty-photo-css-css'  href='/blog/Public/js/prettyphoto/prettyPhotoaeb9.css?ver=3.1.4' type='text/css' media='all' />
<link rel='stylesheet' id='main-css-css'  href='/blog/Public/css/main5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='custom-css-css'  href='/blog/Public/css/custom5152.html?ver=1.0' type='text/css' media='all' />
<link href="/blog/Public/style/lady.css" type="text/css" rel="stylesheet" />


<style type="text/css">
   div.biaoqian a{color:#DEDEDE;}
   div.biaoqian a:hover{color:#fff; border-bottom: 2px solid red; }


.list-page{padding:20px 0;text-align:left;}
.list-page a{margin:0 5px;padding:2px 7px;border:1px solid #ccc;background:#f3f3f3; text-decoration: none;}
.list-page a:hover{background:#e4e4e4;border:1px solid #908f8f; text-decoration: none;}
.list-page .current{margin:0 5px;padding:2px 7px;background:#6f7579;border:1px solid #6f7579;color:#fff;  text-decoration: none;}


</style>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->

</head>

<body>

<!-- Start of Header -->
  <div class="header-wrapper">
        <header>
                <div class="container">


                        <div class="logo-container">
                                <!-- Website Logo -->
                            <a href="/blog/index.php"  title="Knowledge Base Theme" style="font-family: 'Arial','Microsoft YaHei','黑体','宋体',sans-serif;color:#fff;display:inline-block;font-size:28px;">  博 客
                            </a>
                        </div>


                        <!-- Start of Main Navigation -->
                <nav class="main-nav">
                        <div class="menu-top-menu-container">
                                <ul id="menu-top-menu"  >
                                <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/blog/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>" style="font-size:20px;"><span <?php if($currentid == $vo['id']): ?>style="border-bottom:2px solid #fff; color:#fff;"<?php endif; ?>><?php echo ($vo["catename"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                        </div>
                </nav>
                        <!-- End of Main Navigation -->
                </div>
        </header>
</div>
  

<div class="search-area-wrapper" >
        <div class="search-area container" >
               <!-- <h3 class="search-header">你有问题吗？</h3>!-->
            <div class='biaoqian' style="position:relative;top:-40px; color:   #F0F0F0; font-size:14px;" >标签：      
               <?php if(is_array($tags)): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/blog/index.php/Home/search/index?search=<?php echo ($vo["tagname"]); ?>"  rel='dropmenu209'   ><?php echo ($vo["tagname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

                <form id="search-form" class="search-form clearfix" method="get" action="/blog/index.php/Home/Search/index" autocomplete="off">
                        <input class="search-term required" type="text" id="s" name="search" placeholder="问题搜索" title="* Please enter a search term!" />
                        <input class="search-btn" type="submit" value="搜索" />
                        <div id="search-error-container"></div>
                </form>
        </div>
</div>
<!-- End of Header -->

<!-- Start of Search Wrapper -->

<!-- End of Search Wrapper -->
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" title="模板之家">模板之家</a></div>

<!-- Start of Page Container -->
<div class="page-container">
        <div class="container">
                <div class="row">

                        <!-- start of page content -->
                        <div class="span8 page-content">

       <div class="left">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="xnews2">
           <div class="pic">
              <a target="_blank" href="/blog/index.php/Home/article/index/id/<?php echo ($vo["id"]); ?>">
              <img src="/blog/<?php echo ($vo["pic"]); ?>" alt=""/></a>
           </div>                 
           <div class="dec">
             <h3><a target="_blank" href="/blog/index.php/Home/article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
             </h3>
                <div class="time">发布时间：<?php echo ($vo["time"]); ?></div>
                <p >
                 <?php echo (substr($vo["des"],0,250)); ?> .....
                </p>
                <div class="time">
                  <?php
 $arr=explode(',',$vo[keysword]); foreach($arr as $k=>$v) { echo "<a href='/blog/index.php/Home/Search/index/search/".$v."'>".$v."</a>"; } ?>
                
                </div>
                </div>
         </div><?php endforeach; endif; else: echo "" ;endif; ?>              
                <div class="list-page" >
                     <?php echo ($show); ?>
                </div>

        </div>
        

                        </div>
                        <!-- end of page content -->


<!-- start of sidebar -->
 <aside class="span4 page-sidebar">

<section class="widget">
        <h3 class="title">热门点击</h3>
        <ul class="articles">
          <?php if(is_array($click)): $i = 0; $__LIST__ = $click;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="article-entry ">
                        <h4><a href="/blog/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></h4>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
</section>
<!--////////////////-->
  <section class="widget">
    <h3 class="title">推荐阅读</h3>
        <ul>
         <?php if(is_array($rec)): $i = 0; $__LIST__ = $rec;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/blog/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>" title=""><?php echo ($vo["title"]); ?></a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>  
 </section>
<!--
        <section class="widget">
                <h3 class="title">Tags</h3>
                <div class="tagcloud">
                        <a href="#" class="btn btn-mini">basic</a>
                        <a href="#" class="btn btn-mini">beginner</a>
                        <a href="#" class="btn btn-mini">blogging</a>
                        <a href="#" class="btn btn-mini">colour</a>
                        <a href="#" class="btn btn-mini">css</a>
                        <a href="#" class="btn btn-mini">date</a>
                        <a href="#" class="btn btn-mini">design</a>
                        <a href="#" class="btn btn-mini">files</a>
                        <a href="#" class="btn btn-mini">format</a>
                        <a href="#" class="btn btn-mini">header</a>
                        <a href="#" class="btn btn-mini">images</a>
                        <a href="#" class="btn btn-mini">plugins</a>
                        <a href="#" class="btn btn-mini">setting</a>
                        <a href="#" class="btn btn-mini">templates</a>
                        <a href="#" class="btn btn-mini">theme</a>
                        <a href="#" class="btn btn-mini">time</a>
                        <a href="#" class="btn btn-mini">videos</a>
                        <a href="#" class="btn btn-mini">website</a>
                        <a href="#" class="btn btn-mini">wordpress</a>
                </div>
        </section>
-->
</aside>
<!-- end of sidebar -->
</div>
        </div>
</div>
<!-- End of Page Container -->

<!-- Start of Footer -->
  <footer id="footer-wrapper">
        
        <!-- end of #footer -->

        <!-- Footer Bottom -->
        <div id="footer-bottom-wrapper">
                <div id="footer-bottom" class="container">
                        <div class="row">
                                <div class="span6">
                                        <p class="copyright " style="color:#aaa;">
                                                Copyright © <?php echo (C("COPY")); ?><a href="#" title="blog" target="_blank">blog</a>
                                        </p>
                                </div>
                                <div class="span6">
                                        <!-- Social Navigation -->
                                      <!--  <ul class="social-nav clearfix">
                                                <li class="linkedin"><a target="_blank" href="#"></a></li>
                                                <li class="stumble"><a target="_blank" href="#"></a></li>
                                                <li class="google"><a target="_blank" href="#"></a></li>
                                                <li class="deviantart"><a target="_blank" href="#"></a></li>
                                                <li class="flickr"><a target="_blank" href="#"></a></li>
                                                <li class="skype"><a target="_blank" href="skype:#?call"></a></li>
                                                <li class="rss"><a target="_blank" href="#"></a></li>
                                                <li class="twitter"><a target="_blank" href="#"></a></li>
                                                <li class="facebook"><a target="_blank" href="#"></a></li>
                                        </ul>-->
                                </div>
                        </div>
                </div>
        </div>
        <!-- End of Footer Bottom -->

</footer>
<!-- End of Footer -->

<a href="#top" id="scroll-top"></a>

<!-- script -->
<script type='text/javascript' src='/blog/Public/js/jquery-1.8.3.min.js'></script>
<script type='text/javascript' src='/blog/Public/js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='/blog/Public/js/prettyphoto/jquery.prettyPhoto.js'></script>
<script type='text/javascript' src='/blog/Public/s/jflickrfeed.js'></script>
<script type='text/javascript' src='/blog/Public/js/jquery.liveSearch.js'></script>
<script type='text/javascript' src='/blog/Public/js/jquery.form.js'></script>
<script type='text/javascript' src='/blog/Public/js/jquery.validate.min.js'></script>
<script type='text/javascript' src='/blog/Public/js/custom.js'></script>

</body>
</html>