<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php //pjax支持
if(isset($_GET['_pjax'])){
}else{
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/font-awesome.min.css'); ?>">
    	<link rel="stylesheet" href="<?php $this->options->themeUrl('./css/animate.min.css'); ?>">
    	<script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    	<script src="<?php $this->options->themeUrl('./js/jquery.pjax.js'); ?>"></script>
    	<script>var duoshuoQuery = {short_name:"qwqmoe"};</script>
        <script src="https://static.duoshuo.com/embed.js"></script>
    	<script>
    	    $(document).pjax('a', '#pjax-container');
    	</script>

</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div class="rollbg"></div>
<div class="headbar" id="headbar">
	<div class="container" style="margin-top:-16px">
		<ul class="headitem">
			<li id="blogtitle"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></li>
			<li><a href="<?php $this->options->siteUrl(); ?>"><i class="fa fa-home" aria-hidden="true"></i> 首页</a></li>
			<?php
			$this->widget('Widget_Contents_Page_List')->to($pages);
			while($pages->next()){ ?>
			<li><a href="<?php $pages->permalink(); ?>"><?php if(strlen($pages->fields->icon)!==0){ ?><i class="fa <?php $pages->fields->icon(); ?>" aria-hidden="true"></i> <?php } ?><?php $pages->title(); ?></a></li>
			<?php } ?>
			<!-- 右边的搜索 -->
			<li style="float:right" class="searchitem"><i class="fa fa-search" aria-hidden="true"></i> <input class="searchbox" type="text" name="s" placeholder="Poi？"></li>
		</ul>
	</div>
</div>
<div class="container mainbody">
	<!-- 下面的主体内容 -->
	<div class="row">
		<div class="bloginfo col-12" id="bloginfo">
			<div class="bloglogo"><a href="<?php $this->options->siteUrl(); ?>"><img style="margin-bottom: -4px;" src="<?php $this->options->logoUrl() ?>" height="130px" alt="<?php $this->options->title() ?>" /></a></div>
			<p><?php $this->options->description() ?></p> 
			<font size="5" class="links">
			<a href="tencent://message/?uin=1335173664"><i class="fa fa-qq" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-weibo" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-steam" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
			</font>
		</div>
<?php } ?>