<?php $this->need('header.php'); ?>
<div id="main">
  <?php $this->need('sidebar.php'); ?>
  <div id="content">
  <?php if ($this->have()): ?>
	<?php while($this->next()): ?>
        <div class="post">
			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<p class="entry_data">
				<span><?php _e('作者：'); ?><?php $this->author(); ?></span>
				<span><?php _e('发布时间：'); ?><?php $this->date('Y-n-j'); ?></span>
				<span><?php _e('分类：'); ?><?php $this->category(','); ?></span>
				<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('无评论', '1 条评论', '%d 条评论'); ?></a>
			</p>
			<?php $this->content('阅读剩余部分...'); ?>
        </div>
	<?php endwhile; ?>
	<?php else: ?>
      <div class="post">
			<h2 class="entry_title">搜索结果为空</h2>
			没有找到匹配内容。你可尝试搜索另外一个关键字。
     </div>
 <?php endif; ?>
    <div id="dynamic_page" class="page_nav">
    <?php $this->pageNav('PREV','NEXT',15,'...');?>
    </div>
  </div>
</div>
	<?php $this->need('footer.php'); ?>
