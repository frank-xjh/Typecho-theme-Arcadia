<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if($this->options->comments_setting == 1){ ?>
<style>#comments .lists-navigator{margin:20px 0}#comments .lists-navigator ol{margin:20px 0;padding:0 10px;list-style:none;text-align:center}#comments .lists-navigator ol li.current a{color:var(--hola-primary-color)}.comment-container{position:relative;z-index:1;color:#5f5f5f;background-color:#f7f7f7}#comments{max-width:700px;margin:0 auto;padding:0 20px}#comments .page-navigator{margin:0}#comments a{color:#5f5f5f}#comments .response{font-size:16px;font-weight:400;display:block;padding:30px 0 30px 20px;color:#5f5f5f}#comments .response a{color:var(--hola-primary-color)}.comment-list{margin:0;padding-left:0;list-style-type:none}.comment-parent{margin:20px 0;border:1px solid rgba(184,197,214,.2);border-radius:3px;background:#fff;-webkit-box-shadow:0 1px 4px rgba(0,0,0,.04);box-shadow:0 1px 4px rgba(0,0,0,.04)}.comment-parent:last-child{margin:20px 0 0}.comment-parent:first-child{margin:0}.comment-child,.comment-child2{border-top:1px solid rgba(184,197,214,.2)}.comment-view{padding:20px;cursor:pointer}.comment-header{display:inline-block;width:100%}.comment-header .avatar{display:inline-block;float:left;width:40px;height:40px;border:1px solid #eaeaea;border-radius:50%}.comment-header .comment-author{font-size:13px;line-height:45px;display:inline-block;float:left;margin:0 20px}.comment-header .comment-by-author a{color:var(--hola-primary-color)!important}.comment-content{margin-bottom:10px;color:#313131}.comment-meta{font-size:12px}.comment-meta .comment-reply{display:none;float:right}.comment-meta .comment-reply a{color:var(--hola-primary-color)!important}.comment-view:hover .comment-meta .comment-reply{display:block}.comment-parent>.comment-children .avatar{width:34px;height:34px;margin:3px 0 0 3px}.comment-parent>.comment-children .comment-author-at{float:left;margin-right:5px}.comment-parent>.comment-children .comment-content{margin:-3px 3px 10px}.comment-parent>.comment-children .comment-meta{margin:0 3px}.comment-form{position:relative;margin:0 0 40px;padding:10px 20px;border-radius:3px;background:#fff;-webkit-box-shadow:0 1px 4px #f0f0f0;box-shadow:0 1px 4px rgba(0,0,0,.04)}.comment-form .form-control{font-size:13px;display:block;width:100%;height:34px;color:#313131;outline:0}.comment-form .form-control:focus{border-color:var(--hola-primary-color);outline:0}.comment-form textarea.form-control{overflow:hidden;height:150px;padding:10px 0;resize:none;border-radius:0}.comment-form .input-control{float:left;width:100%;max-width:206px;border-bottom:.1px dashed #ddd;border-radius:0}.comment-form .submit{font-size:13px;position:absolute;right:20px;bottom:20px;display:block;height:32px;margin:0 auto;padding:0 20px;-webkit-transition-duration:.4s;transition-duration:.4s;text-align:center;color:#313131;border:1px solid #f7f7f7;border-radius:30px;background-color:#f7f7f7}.comment-form .submit:hover,.submit:active,.submit:active:focus,.submit:focus{color:var(--hola-primary-color);border:1px solid var(--hola-primary-color);outline-style:none;background-color:#fff}.footer{position:relative;z-index:1;margin-top:0;padding-bottom:50px;background-color:#fff}.footer-social{border-bottom:1px solid rgba(184,197,214,.2)}.footer-social .footer-container{max-width:940px;margin:0 auto}.footer-social .social-list{padding:20px;text-align:center}.footer-social .social-list a{font-size:13px;padding:0 25px;text-decoration:none;color:#5f5f5f}.footer-meta{padding:50px 0 0;list-style:none}.footer-meta .footer-container{width:100%;max-width:960px;height:250px;margin:0 auto;padding:0 80px}.footer-meta .meta-item{position:relative;float:left;width:33.3333333%;min-height:1px;padding:0 30px}.footer-meta .meta-copyright .info-logo img{height:32px;margin-bottom:12px}.footer-meta .meta-copyright .info-text p{font-size:13px;line-height:20px;margin:0;color:#767676}.footer-meta .meta-copyright .info-text a{color:#767676}.footer-meta .meta-title{font-size:14px;padding:0 0 10px 0;text-decoration:none;color:#5f5f5f}.footer-meta .meta-posts li{font-size:13px;line-height:25px;display:block;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;color:#767676}.footer-meta .meta-posts li a{color:#5f5f5f}.footer-meta .meta-comments li{font-size:13px;line-height:25px;display:block;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;color:#5f5f5f}.footer-meta .meta-comments li a{color:#767676}@media(max-width:1000px){.directory-content{display:none}.post-header-thumb{height:280px}.post-header-thumb-cover{height:280px}.post-header-thumb-op{height:280px}.post-header-thumb-container{top:70px}}@media(max-width:880px){.index-page{padding:80px 0 0}.archive-page{padding:80px 0 20px}.common-page{padding:80px 0 0}.post-onelist-item-container{padding:50px 20px 55px}.post-list-item{width:50%;padding:10px}.post-list-item:nth-child(odd){padding-left:20px}.post-list-item:nth-child(even){padding-right:20px}.lists-navigator{margin:25px 0 30px}.post-header-thumb{height:250px}.post-header-thumb-op{height:250px}.post-header-thumb-cover{height:250px}.post-header-thumb-container{top:60px}.footer-meta .footer-container{padding:0}.main-content{margin:0 auto}.footer-meta .meta-item{padding:0 20px}}@media(max-width:700px){.comment-form .input-control{max-width:100%}.post-header-thumb{height:220px}.post-header-thumb-op{height:220px}.post-header-thumb-cover{height:220px}.post-header-thumb-container{top:40px}.post-page{padding:20px 25px 0}.page-page{padding:90px 25px 0}.search-page .search-tags{padding:0 0 15px}.search-page .search-tags p{margin:0}.related-post-lists{padding-top:15px}.post-onelist-item-container{padding:20px 20px 25px}.post-onelist-item-container .onelist-item-thumb{min-height:240px}}@media(max-width:650px){.navbar-menu{display:none}.navbar-search{padding:0 35px 0 0}.navbar-search form{width:180px;margin-right:55px}.navbar-mobile-menu{display:inline-block}.red-gradient{display:none}.meta-posts{display:none}.meta-comments{display:none}.post-bottom-bar .social-share{display:none}.post-page{padding:90px 25px 0}.common-page .post-list-item{width:100%;padding:10px 20px}.footer-social{display:none}.footer-meta .footer-container{height:70px;padding:0 15px}.footer-meta .meta-item{width:100%;padding:0 10px}.footer-meta .meta-copyright .info-text{float:right}.footer-meta .meta-copyright .info-text p{text-align:right}.post-onelist-item-container .onelist-item-thumb{min-height:220px}.post-header-thumb{display:none}.post-page .post-header{display:inherit}.post-page .post-content .post-tags{display:inherit}}@media(max-width:580px){.navbar-search form{width:150px}.index-page{padding:70px 0 0}.archive-page{padding:70px 0 20px}.common-page{padding:70px 0 0}.post-list-item{width:100%;padding:10px 20px}.post-list-item:first-child{padding-top:20px}.archive-page .post-list-item:first-child{padding-top:0}.archive-page .post-list-item:last-child{padding-bottom:0}.common-page .post-list-item:first-child{padding-top:0}.related-post-lists{padding-top:5px}.main-content{margin:0 auto}.post-onelist-item-container{padding:20px 20px 25px}.post-onelist-item-container .item-content{display:none}.post-onelist-item-container .item-readmore{display:none}</style>
<?php
function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }

    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
    $depth = $comments->levels +1;

    if ($comments->url) {
        $author = '<a href="' . $comments->url . '"target="_blank"' . ' rel="external nofollow">' . $comments->author . '</a>';
    } else {
        $author = $comments->author;
    }
?>

<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php
if ($depth > 1 && $depth < 3) {
    echo ' comment-child ';
    $comments->levelsAlt('comment-level-odd', ' comment-level-even');
}
else if( $depth > 2){
    echo ' comment-child2';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
}
else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
?>">
    <div id="<?php $comments->theId(); ?>">
        <?php
            $host = 'https://secure.gravatar.com';
            $url = '/avatar/';
            $size = '80';
            $default = 'mm';
            $rating = Helper::options()->commentsAvatarRating;
            $hash = md5(strtolower($comments->mail));
            $avatar = $host . $url . $hash . '?s=' . $size . '&r=' . $rating . '&d=' . $default;
        ?>
        <div class="comment-view" onclick="">
            <div class="comment-header">
                <img class="avatar" src="<?php echo $avatar ?>" width="<?php echo $size ?>" height="<?php echo $size ?>" />
                <span class="comment-author<?php echo $commentClass; ?>"><?php echo $author; ?></span>
            </div>
            <div class="comment-content">
                <span class="comment-author-at"><?php getCommentAt($comments->coid); ?></span> <?php $comments->content(); ?></p>
            </div>
            <div class="comment-meta">
                <time class="comment-time"><?php $comments->date('M j, Y'); ?></time>
                <span class="comment-reply"><?php $comments->reply('Reply'); ?></span>
            </div>
        </div>
    </div>
    <?php if ($comments->children) { ?>
        <div class="comment-children">
            <?php $comments->threadedComments($options); ?>
        </div>
    <?php } ?>
</li>
<?php } ?>

<div id="<?php $this->respondId(); ?>" class="hola-card">
    <div id="comments" class="clearfix">
        <?php $this->comments()->to($comments); ?>
        <?php if($this->allow('comment')): ?>
        <span class="response"><?php if($this->user->hasLogin()): ?>You are <a href="<?php $this->options->profileUrl(); ?>" data-no-instant><?php $this->user->screenName(); ?></a> here, do you want to <a href="<?php $this->options->logoutUrl(); ?>" title="Logout" data-no-instant>logout</a> ?<?php endif; ?> <?php $comments->cancelReply('<br /><br />Cancel Reply'); ?></span>
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" class="comment-form" role="form" onsubmit ="getElementById('misubmit').disabled=true;return true;">
            <?php if(!$this->user->hasLogin()): ?>
            <div>
            <input type="text" name="author" maxlength="12" id="author" class="hola-form-ctrl hola-input-singleline" style="border-radius:.7rem" placeholder="Name (*)" value="" required>
            </div>
            <div>
            <input type="email" name="mail" id="mail" class="hola-form-ctrl hola-input-singleline" style="border-radius:.7rem" placeholder="Email (*)" value="" <?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>>
            </div>
            <div>
            <input type="url" name="url" id="url" class="hola-form-ctrl hola-input-singleline" style="border-radius:.7rem" placeholder="Site (http://)" value="" <?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?>>
            </div>
            <br /><br />
            <?php endif; ?>

            <textarea name="text" id="textarea" class="form-control" placeholder="Write something." required style="padding:.7rem;font-size:.9rem;border-radius:1rem;font-family: Montserrat,Helvetica Neue,Helvetica,Arial,Lantinghei SC,sans-serif"><?php $this->remember('text',false); ?></textarea>

            <button type="submit" class="submit" id="misubmit">SUBMIT</button>
            <?php $security = $this->widget('Widget_Security'); ?>
            <input type="hidden" name="_" value="<?php echo $security->getToken($this->request->getReferer())?>">
        </form>
        <?php else : ?>
            <span class="response">Comments are closed.</span>
        <?php endif; ?>

        <?php if ($comments->have()): ?>

        <?php $comments->listComments(); ?>

        <div class="lists-navigator clearfix">
            <?php $comments->pageNav('←','→','2','...'); ?>
        </div>

        <?php endif; ?>
    </div>
</div>
<?php }elseif($this->options->comments_setting == 2){ ?>
    <div class="hola-card"><?php $this->options->third_party_comments() ?></div>
<?php } ?>