<?php $this->need('header.php'); ?>
<div id="main">
  <?php $this->need('sidebar.php'); ?>
  <div id="content">
        <div class="post">
            <h2 class="entry_title">404 - <?php _e('页面未找到'); ?></h2>
            <p>您请求的页面要么搬家了，要么飞灰了，欲知详情，请立即搜索。</p>
            <p>
            <form method="post">
                <div><input type="text" name="s" class="text" size="20" /> <input type="submit" class="submit" value="<?php _e('搜索'); ?>" /></div>
            </form>
            </p>
        </div>
  </div>
</div>
	<?php $this->need('footer.php'); ?>