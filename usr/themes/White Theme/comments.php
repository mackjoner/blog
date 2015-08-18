<div id="comments">
  <?php $this->comments()->to($comments); ?>
  <?php if ($comments->have()): ?>
  <h3>
    <?php $this->commentsNum(_t('当前暂无'), _t('仅有一条'), _t('已有 %d 条')); ?>
    关于 "
    <?php $this->title() ?>
    "的评论.</h3>
  <?php $comments->pageNav(); ?>
  <?php $comments->listComments(); ?>
  <?php endif; ?>
</div>
<?php if($this->allow('comment')): ?>
<div id="<?php $this->respondId(); ?>" class="respond">
  <div class="cancel-comment-reply">
    <?php $comments->cancelReply(); ?>
  </div>
  <h3 id="response">添加新评论 &raquo;</h3>
  <form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
    <?php if($this->user->hasLogin()): ?>
    <p>Logged in as <a href="<?php $this->options->profileUrl(); ?>">
      <?php $this->user->screenName(); ?>
      </a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout">
      <?php _e('退出'); ?>
      &raquo;</a></p>
    <?php else: ?>
	<Div class="bd">
    <div class="fieldset">
      <label for="author">Name (required)</label>
      <input type="text" name="author" id="author" class="text" size="15" value="<?php $this->remember('author'); ?>" />
    </div>
    <div class="fieldset">
      <label for="mail">Email (required)</label>
      <input type="text" name="mail" id="mail" class="text" size="15" value="<?php $this->remember('mail'); ?>" />
    </div>
    <div class="fieldset">
      <label for="url">Your Website (optional)</label>
      <input type="text" name="url" id="url" class="text" size="15" value="<?php $this->remember('url'); ?>" />
    </div>
	</div>
    <?php endif; ?>
    <div class="cooment-text">
      <textarea id="comment" rows="5" cols="50" name="text" class="textarea"><?php $this->remember('text'); ?></textarea>
    </div>
    <div class="submit">
      <input type="submit" value="Submit Comment" class="submit" />
    </div>
  </form>
</div>
<?php else: ?>
<h4>
  <?php _e('评论已关闭'); ?>
</h4>
<?php endif; ?>
