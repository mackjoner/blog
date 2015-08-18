<?php $this->need('header.php'); ?>

<div  id="content">
<div id="content-header">
	<div id="breadcrumbs">
		<a href="<?php $this->options->siteUrl(); ?>">Home</a> → <?php $this->archiveTitle('','',''); ?>
	</div>
	<div class="fix"></div>    
</div>
<div id="inner">
	<?php while($this->next()): ?>
	<div class="postEntry">
		<h2 class="entry-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
		<div class="postMeta">
			By <?php $this->author(); ?> • <?php $this->date('Y/n/j'); ?> • <?php $this->category(','); ?> • <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('Leave a comment', '1 Comment', '%d Comment'); ?></a>
		</div>
		<div class="postContent">
			<div class="entry-content"><?php $this->content(); ?></div>
		</div>
	</div>
	<?php endwhile; ?>
	
	<div id="pageNav"><?php $this->pageNav(); ?></div>
</div>
</div><!-- end #content-->

<?php $this->need('footer.php'); ?>
