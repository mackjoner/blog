<?php $this->need('header.php'); ?>

<div id="content">
<div id="carousel-inner"></div>
<div id="inner">
	<div class="postEntry single">
		<h2 class="entry-title"><?php $this->title() ?></h2>
		<div class="postContent">
			<div class="entry-content"><?php $this->content(); ?></div>
		</div>
	</div>

	<?php $this->need('comments.php'); ?>
</div>
</div><!-- end #content-->

<?php $this->need('footer.php'); ?>