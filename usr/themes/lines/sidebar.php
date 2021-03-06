<div id="sidebar">
<div class="widget">
		<h3><?php _e('分类'); ?></h3>
    <ul>
	<?php $this->widget('Widget_Metas_Category_List')
	->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
    </ul>
	</div>
<div class="widget">
		<h3><?php _e('归档'); ?></h3>
    <ul>
	<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
	->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
    </ul>
	</div>
<div class="widget">
		<h3><?php _e('其它'); ?></h3>
    <ul>
	<?php if($this->user->hasLogin()): ?>
	<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
	<li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
	<?php else: ?>
	    <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
	<?php endif; ?>
	<!-- <li><a href="#" id="StranLink">繁体显示</a></li> -->
	<li><a href="http://validator.w3.org/check/referer">Valid XHTML</a></li>
    </ul>
	</div>
</div><!-- end #sidebar -->