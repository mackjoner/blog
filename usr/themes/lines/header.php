<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />

<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.3.0/mootools-yui-compressed.js"></script>
<!-- <script type="text/javascript" src="<?php $this->options->themeUrl('js/mootools.js'); ?>"></script> -->
<script type="text/javascript" src="<?php $this->options->themeUrl('js/lazyload.js'); ?>"></script>

<script type="text/javascript" src="<?php $this->options->themeUrl('js/pillmenu.js'); ?>"></script>

<script type="text/javascript" src="<?php $this->options->themeUrl('js/hilight.js'); ?>"></script>

<script type="text/javascript"> 

//MooTools

window.addEvent('domready', function() {

//lazy loader for images

  var lazyload = new LazyLoad({ 

    onLoad: function(img) { 

      (function() { img.setStyle('opacity',0).fade(1); }).delay(100); 

    } 

  });

//comment form

  var myInputs = $$('#comment_form .text', '#comment_form textarea');	

  var myHilighter = new SL_Hilight({

    inputs: myInputs, 

    activeClass: 'active_field',

    initialFocus: false

  });

//pretty menu

  var myMenu1 = new PillMenu('dynamic_nav', {vertical: 1});

  <?php if(($this->is('index'))||($this->is('category'))||($this->is('archive'))){ ?>var myMenu2 = new PillMenu('dynamic_page');<?php } ?>

//smart float

  var $smartFloat = function(elements) {

     var position = function(element) {

        var top = element.getPosition().y, pos = element.getStyle("position");

        window.addEvent("scroll", function() {

            var scrolls = this.getScroll().y;

            if (scrolls > top) {

                if (window.XMLHttpRequest) {

                    element.setStyles({

                        position: "fixed",

                        top: 0

                    });    

                } else {

                    element.setStyles({

                        top: scrolls

                    });    

                }

            }else {

                element.setStyles({

                    position: "absolute",

                    top: top

                });    

            }                       

        });

    };

    if ($type(elements) === "array") {

        return elements.each(function(items) {

            position(items);                         

        });

    } else if ($type(elements) === "element") {

        position(elements);    

    }

};



$smartFloat($("float"));

});

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50512335-1', 'vilog.org');
  ga('send', 'pageview');

</script>

<?php $this->header(); ?>

</head>

<body>

<div id="wrapper">

<div id="header">

  <div id="float">

    <div id="logo">

	<h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?><span></span></a></h1>

    </div>

  <div id="dynamic_nav" class="menu_nav">

	<ol>

		<li<?php if($this->is('index')): ?> class="current"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>

		<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>

		<?php while($pages->next()): ?>

		<li<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>

		<?php endwhile; ?>

		<?php if($this->is('post')): ?><li class="current"><a href="#">&lt;&lt;&lt;正在阅读</a></li><?php endif; ?>

		<?php if($this->is('archive')): ?><li class="current"><a href="#">&lt;&lt;&lt;检索</a></li><?php endif; ?>

	</ol>

  </div>

    <div id="searchform">

	<form id="search" method="post" action="/">

		<div><input type="text" name="s" class="text" size="20" /></div>

	</form>

    </div>

  </div>

</div>