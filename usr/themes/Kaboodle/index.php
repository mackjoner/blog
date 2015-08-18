<?php
/** 
 * Kaboodle，部分样式扒于WordPress英文主题 kaboodle 。
 * @package Kaboodle
 * @author 林木木
 * @version 1.0.0
 * @link http://linmumu.me/typecho-theme-kaboodle
 * 
 */
 
 $this->need('header.php');
 ?>

<div  id="content">
<div id="carousel-inner"></div>
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
