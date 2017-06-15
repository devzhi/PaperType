<?php function threadedComments($comments, $singleCommentOptions) {
$commentClass = '';
if ($comments->authorId) {
if ($comments->authorId == $comments->ownerId) {
$commentClass .= ' comment-by-author';
} else {
$commentClass .= ' comment-by-user';
}
}
 
$commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';
?>
<div id="<?php $comments->theId(); ?>" class="comment-body<?php
if ($comments->_levels > 0) {
echo ' comment-child';
$comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
//以上部份 不用理会，是判断一些奇偶数评论和作者类的，下面的才是需要修改的，根据需要修改吧， php部份不需要 修改，只需要修改 HTML 部分，下面是我现在用的
?>">


<div class="panel panel-default">
<div class="panel-body">
<div class="pull-left" style="padding-right: 10px;"><?php $comments->gravatar($singleCommentOptions->avatarSize, $singleCommentOptions->defaultAvatar);    //头像 只输出 img 没有其它标签 ?></div>
<?php $singleCommentOptions->beforeAuthor();
$comments->author();$singleCommentOptions->afterAuthor(); //输出评论者 ?>
<div style="margin-left: 10px"><a href="<?php $comments->permalink(); ?>"><?php $singleCommentOptions->beforeDate();
$comments->date($singleCommentOptions->dateFormat);
$singleCommentOptions->afterDate();  //输出评论日期 ?></a>
</div>
</div>

 <div class="panel-footer">
<?php $comments->content(); //输出评论内容，包含 <p></p> 标签 ?>

<?php $comments->reply($singleCommentOptions->replyWord); //输出 回复 链接?>
 </div>

</div>


<?php if ($comments->children) { ?>
<div class="comment-children">
<?php $comments->threadedComments($singleCommentOptions); //评论嵌套?>
</div>
<?php } ?>
 
<?php
}
?>


<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <h3 id="response"><?php _e('添加新评论'); ?></h3>
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
            <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
                <div class="input-group">
                    <div class="input-group-addon">用户名：</div>
                    <input type="text" class="form-control" name="author" value="<?php $this->remember('author'); ?>" placeholder="Username">
                    <div class="input-group-addon">邮箱：</div>
                    <input type="text" class="form-control" name="mail" value="<?php $this->remember('mail'); ?>" placeholder="Email">
                    <div class="input-group-addon">网址：</div>
                    <input type="text" class="form-control" name="url" value="<?php $this->remember('url'); ?>" placeholder="Url">
                </div>
            <?php endif; ?>

                <textarea name="text" id="input" class="form-control" rows="3" required="required"></textarea>
                    <br>
                <button type="submit" class="btn btn-primary pull-right"><?php _e('提交评论'); ?></button>
                <?php $security = $this->widget('Widget_Security'); ?>
            <input type="hidden" name="_" value="<?php echo $security->getToken($this->request->getReferer())?>">
        </form>
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    <h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
        
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
