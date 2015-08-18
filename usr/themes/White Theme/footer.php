  <div class="foot">
    <div class="copy">
      <ul>
        <li><a href="<?php $this->options->siteurl(); ?>">Copyright &copy; 2012 <?php $this->options->title(); ?></a></li>
        <li>/</li>
        <li><a href="http://www.typecho.org">powered by Typecho)))</a></li>
        <li>/</li>
        <li><a href="<?php $this->options->feedUrl(); ?>">Archives Rss</a></li>
        <li>/</li>
        <li><a href="<?php $this->options->commentsFeedUrl(); ?>">comments Rss</a></li>
        <li>/</li>
        <li><a href="http://www.kongweicong.com/">Theme by KongWeicong</a></li>
      </ul>
    </div>
    <div class="weibo"><?php if ($this->options->sinaUrl): ?><a href="<?php $this->options->sinaUrl() ?>" class="sina" target="_blank"></a><?php endif; ?> <?php if ($this->options->qqUrl): ?><a href="<?php $this->options->qqUrl() ?>" class="qq" target="_blank"></a><?php endif; ?></div>
  </div>
</div>
<?php $this->footer(); ?>
</body>
</html>