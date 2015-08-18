<div id="comments">
            <?php $this->comments()->to($comments); ?>
            <?php if ($comments->have()): ?>
			<h4><?php $this->commentsNum(_t('当前暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?> &raquo;</h4>
            
            <?php $comments->pageNav(); ?>
            
            <?php $comments->listComments(); ?>
            
            <?php endif; ?>

            <?php if($this->allow('comment')): ?>
            <div id="<?php $this->respondId(); ?>" class="respond">
            
            <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
            </div>
            
			<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
               <fieldset>
               <legend><?php _e('添加新评论'); ?> &raquo;</legend>
                <?php if($this->user->hasLogin()): ?>
				<p>Logged in as <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
                <?php else: ?>

                <?php if($this->remember('author',true) != "" && $this->remember('mail',true) != "") : ?>
		<script type="text/javascript">function setStyleDisplay(id, status){document.getElementById(id).style.display = status;}</script>
		<p>
		<?php _e('欢迎'); ?> <strong><?php $this->remember('author'); ?></strong> <?php _e('童鞋归来'); ?>
		<a href="javascript:setStyleDisplay('author_info','');setStyleDisplay('show_author_info','none');setStyleDisplay('hide_author_info','');" id="show_author_info">编辑信息?</a>
		<a href="javascript:setStyleDisplay('author_info','none');setStyleDisplay('show_author_info','');setStyleDisplay('hide_author_info','none');" id="hide_author_info">隐藏信息?</a>
		</p>

		<?php endif ; ?>

		    <div id="author_info">
                    <label for="author"><?php _e('称呼'); ?>
					<input type="text" name="author" id="author" class="text" size="15" value="<?php $this->remember('author'); ?>" /><span class="required">*</span>
                    </label>
                    <label for="mail"><?php _e('电邮'); ?>
					<input type="text" name="mail" id="mail" class="text" size="15" value="<?php $this->remember('mail'); ?>" /><?php if ($this->options->commentsRequireMail): ?><span class="required">*</span><?php endif; ?>
                    </label>
                    <label for="url"><?php _e('网站'); ?>
					<input type="text" name="url" id="url" class="text" size="15" value="<?php $this->remember('url'); ?>" /><?php if ($this->options->commentsRequireURL): ?><span class="required">*</span><?php endif; ?>
                    </label>

		    </div>

                <?php endif; ?>

		<?php if($this->remember('author',true) != "" && $this->remember('mail',true) != "") : ?>
		<script type="text/javascript">setStyleDisplay('hide_author_info','none');setStyleDisplay('author_info','none');</script>
		<?php endif; ?>

                    <p><textarea rows="8" cols="50" name="text" class="textarea"><?php $this->remember('text'); ?></textarea></p>
               </fieldset>
				<p><input type="submit" value="<?php _e('提交评论'); ?>" class="submit" /></p>
			</form>
            </div>
            <?php else: ?>
            <h4><?php _e('评论已关闭'); ?></h4>
            <?php endif; ?>
		</div>
