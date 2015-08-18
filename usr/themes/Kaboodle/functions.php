<?php
//自定义评论列表
function threadedComments($comments,$singleCommentOptions) {
         $author = '<a href="'.$comments->url.'" rel="external nofollow" target="_blank">'.$comments->author.'</a>';
        ?>
	<li id="<?php $comments->theId(); ?>" class="<?php if($comments->levels > 0){echo 'comment-child';}else{echo 'comment-parent';}if($comments->levels > 1){echo ' comment-depth';}?>">
	<div id="div-<?php $comments->theId(); ?>" class="comment-body">
		<div class="avata fl"><?php $comments->gravatar($singleCommentOptions->avatarSize, $singleCommentOptions->defaultAvatar);?></div>
		<div class="comment-head">       
	                <span class="name"><?php echo $author; ?></span>
	                <div class="date"><?php $comments->date('F j, Y H:i:G') ?> <?php if($comments->levels == 0) { ?>#<?php $comments->sequence(); ?><?php } ?></div>
		</div>
		<div class="comment-entry">
			<div class="comment-text"><?php $comments->content(); ?></div>
			<div class="comment-reply"><?php $comments->reply('Reply') ?></div>
		</div>
	</div>
         <?php if ($comments->children) { ?><div class="children"><?php $comments->threadedComments($singleCommentOptions); ?></div><?php } ?>
	</li>
<?php } ?>