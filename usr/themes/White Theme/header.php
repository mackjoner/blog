<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>" />
<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
</head>

<body>
<div class="fuck">
<div class="head">
  <h5 class="logo"><a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>"><?php $this->options->title() ?></a></h5>
  <ul class="nav">
    <li<?php if($this->is('index')): ?> class="current"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>" title="<?php _e('首页'); ?>"><?php _e('首页'); ?></a></li>
	<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
	<?php while($pages->next()): ?>
    <li><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
	<?php endwhile; ?>
  </ul>
</div>