<?php $this->need('header.php'); ?>
<div id="main">
  <?php $this->need('sidebar.php'); ?>
	<div id="content">
        <div class="post">
			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<p class="entry_data">
				<span><?php _e('作者：'); ?><?php $this->author(); ?></span>
				<?php _e('发布时间：'); ?><?php $this->date('Y-n-j'); ?>
			</p>
			<?php $this->content(); ?>
			<?php if($this->user->hasLogin()): ?><p><small><a href="<?php $this->options->adminUrl('write-page.php?cid=' . $this->cid); ?>">编辑此页»</a></small></p><?php endif; ?>
		</div>

		<?php $this->need('comments.php'); ?>
    </div><!-- end #content-->
</div>
	<?php $this->need('footer.php'); ?>
