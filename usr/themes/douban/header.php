<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>" type="image/x-icon" /> 
<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
</head>
<body>
<div id="nav_box" class="clearfix">
<div class="container_16 bd"> 
<div class="top-nav-info">     
    <?php if($this->user->hasLogin()): ?>
	<a href="<?php $this->options->adminUrl(); ?>" target="_blank"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a>
    <a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a>
    <?php else: ?>
    <a href="<?php $this->options->adminUrl('login.php'); ?>" target="_blank"><?php _e('登录'); ?></a>
    <?php endif; ?>
</div> 
<div class="top-nav-items"> 
<ul class="clearfix" id="nav_menu">
        <?php $this->widget('Widget_Metas_Category_List')
        ->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
</ul>
</div>
</div>
</div>
<div id="header" class="container_16 clearfix">
	<div id="db-nav-main" class="site-nav"> 
    <div class="site-nav-logo"> 
       <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->description() ?>"> 
       <img src="<?php $this->options->themeUrl(); ?>images/logo.png" alt="<?php $this->options->title() ?>" /> 
       <em><?php $this->options->title() ?></em> 
      </a> 
    </div>  
    <div class="bd"> 
    <div class="nav-srh"> 	
        <form method="post" action="/"> 
            <div class="inp"> 
                <span><input name="s" type="text" title="search" size="22" maxlength="60" value="" /></span> 
                <span><input class="bn-srh" type="submit" value="搜索" /></span> 
            </div> 
        </form> 
    </div>  
    <div class="site-nav-items"> 
        <ul> 
		    <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
            <?php $this->widget('Widget_Contents_Page_List')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul> 
    </div> 
    </div> 
    </div>  
</div><!-- end #header -->
<div class="container_16 clearfix">