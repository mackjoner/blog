<!DOCTYPE html>
<html>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<?php $this->header(); ?>
</head>

<body>
<div id="wrap">	
<div id="header-container"> 
<div id="header">
	<div id="logo">
	    <h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
	</div>
	<div id="description"><?php $this->options->description() ?></div>
	<div id="nav">
		<ul class="nav fl">
		<li<?php if($this->is('index')): ?> class="current"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>"><?php _e('Home'); ?></a></li>
		<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
		<?php while($pages->next()): ?>
		<li<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
		<?php endwhile; ?>
		</ul>
		<ul class="rss fr">
			<li class="sub-rss"><a href="<?php $this->options->feedUrl(); ?>"><img alt="Feed" src="<?php $this->options->themeUrl('images/ico-rss.png'); ?>"></a></li>
		</ul>
	</div>
	<div class="fix"></div>
</div><!-- end #header -->
</div>
<div id="shadow"></div>