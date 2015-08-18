<div id="comments">
	<?php $this->comments()->to($comments); ?>
	<h4><a href="#comment_form"><?php $this->commentsNum(_t('No comments yet.'), _t('1 Comments So Far'), _t('%d Comments So Far')); ?></a></h4>
            <?php if ($comments->have()): ?>
            <?php $comments->pageNav(); ?>
            <?php $comments->listComments(); ?>
            <?php endif; ?>
            <?php if($this->allow('comment')): ?>
         <div id="<?php $this->respondId(); ?>" class="respond  <?php if($this->user->hasLogin()){echo 'login';} ?>"> 
	<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
	<fieldset>
		<?php if($this->user->hasLogin()): ?>
			<p>已登录： <?php $this->user->screenName(); ?>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
		<?php else: ?>
	<div class="commentAuthor">
		<label for="author"><?php _e('称呼'); ?><span class="required">*</span><input type="text" name="author" id="author" class="text" size="15" value="<?php $this->remember('author'); ?>" /></label>
                    <label for="mail"><?php _e('电子邮件'); ?><?php if ($this->options->commentsRequireMail): ?><span class="required">*</span><?php endif; ?><input type="text" name="mail" id="mail" class="text" size="15" value="<?php $this->remember('mail'); ?>" /></label>
                    <label for="url"><?php _e('网站'); ?><?php if ($this->options->commentsRequireURL): ?><span class="required">*</span><?php endif; ?><input type="text" name="url" id="url" class="text" size="15" value="<?php $this->remember('url'); ?>" /></label>
	</div>
                <?php endif; ?>
		<label><div class="cancel-comment-reply"><?php $comments->cancelReply(); ?></div><?php _e('评论内容'); ?><textarea rows="5" cols="50" name="text" id="comment" class="textarea"  onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('submit').click();return false};"><?php $this->remember('text'); ?></textarea></label>
		<input type="submit" value="<?php _e('确 认 提 交 / Ctrl + Enter'); ?>" class="submit" id="submit"/>
	</fieldset>
	</form>
         </div>
         <?php else: ?>
            <h4><?php _e('评论已关闭'); ?></h4>
         <?php endif; ?>
</div>
