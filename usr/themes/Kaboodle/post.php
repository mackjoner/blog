<?php $this->need('header.php'); ?>

<div id="content">
<div id="content-header">
	<div id="breadcrumbs">
		<a href="<?php $this->options->siteUrl(); ?>">Home</a> → <?php $this->category(); ?> → <?php $this->title() ?>
	</div>
	<div id="post-entries"> 
		<div class="nav-prev fl"><?php $this->thePrev('← %s', ''); ?></div>
		<div class="nav-next fr"><?php $this->theNext('%s →', ''); ?></div>
	</div>
	<div class="fix"></div>    
</div>
<div id="inner">
	<div class="postEntry single">
		<h2 class="entry-title"><?php $this->title() ?></h2>
		<div class="postMeta">
			By <?php $this->author(); ?> • <?php $this->date('Y/n/j'); ?> • <?php $this->category(','); ?> • <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('Leave a comment', '1 Comment', '%d Comment'); ?></a>
		</div>
		<div class="postContent">
			<div class="entry-content"><?php $this->content(); ?></div>
			<p class="tags">Tags: <?php $this->tags(', ', true, 'none'); ?></p>
		</div>
		
	</div>
	<?php $this->need('comments.php'); ?>
</div>
</div><!-- end #content-->

<?php $this->need('footer.php'); ?>