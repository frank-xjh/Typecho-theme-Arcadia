<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>

<div class="hola-container hola-layout-container hola-layout-container-sidebar-right">
	<section class="hola-layout-main hola-card-stack">
		<article class="article article-type-post">
			<div class="article-inner hola-card">
				<h1 class="hola-card-title article-title"><a class="article-title" href="<?php $this->permalink() ?>" style="color:inherit;text-decoration:inherit;"><?php $this->title() ?></a></h1>
				<b>
					<a class="article-date" href="<?php $this->permalink() ?>"><time><?php $this->date('Y-m-d'); ?></time></a>
					<?php if($this->options->post_view){ ?>
              			<a class="article-date" href="<?php $this->permalink() ?>"><i class="fa fa-eye" aria-hidden="true"></i> 阅读数：<?php echo get_post_view($this); ?></a>
            		<?php }if($this->options->post_comments){ ?>
              			<a class="article-date" href="<?php $this->permalink() ?>#comments"><i class="fa fa-comments-o" aria-hidden="true"></i> 评论数：<?php $this->commentsNum('%d'); ?></a>
            		<?php }if($this->options->post_word){ ?>
              			<a class="article-date" href="<?php $this->permalink() ?>" style="padding-left:.2rem"><i class="fa fa-database" aria-hidden="true"></i> 字数统计：<?php echo art_count($this->cid); ?></a>
            		<?php }if($this->options->post_readtime){ ?>
              			<a class="article-date" href="<?php $this->permalink() ?>" style="padding-left:.2rem"><i class="fa fa-clock-o" aria-hidden="true"></i> 阅读时长 ≈ <?php echo art_time($this->cid); ?>分钟</a>
            		<?php } ?>
          		</b>
          		<div style="padding:.5rem .2rem;"><style>a{text-decoration:none}</style><p>under <?php $this->category('&nbsp;&nbsp;'); ?>&nbsp;&nbsp;tag <?php $this->tags('&nbsp;&nbsp;', true, ''); ?>&nbsp;&nbsp;&nbsp;&nbsp;Published on <?php $this->date('F jS , Y \\a\t h:i a'); ?></p></div>
          		<div class="markdown-body">
          			<?php $this->content(); ?>
          		</div>
          		<?php
        			//if (!defined('__TYPECHO_ROOT_DIR__')) exit;
          		//		$this->need('component/pay.php');
      			  ?>
              <br />分享到：<a href="https://twitter.com/intent/tweet?url=<?php echo urlencode($this->permalink()); ?>&text=<?php echo urlencode($this->title()); ?>" target="_blank" title="<?php $this->title() ?>" rel="nofollow" style="color:#fff;background-color:#1b95e0;border-radius:1.7rem;padding:.37rem">Twitter</a>&nbsp;&nbsp;<a href="http://service.weibo.com/share/share.php?url=<?php echo urlencode($this->permalink()); ?>&amp;title=<?php echo urlencode($this->title()); ?>" target="_blank" title="<?php $this->title() ?>" rel="nofollow"  style="color:#fff;background-color:#db4437;border-radius:1.7rem;padding:.37rem">Weibo</a>&nbsp;&nbsp;<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($this->permalink()); ?>" target="_blank" title="<?php $this->title() ?>" rel="nofollow" style="color:#fff;background-color:#4267b2;border-radius:1.7rem;padding:.37rem">Facebook</a>
			</div>
      <br /><br />
      <?php if ($this->fields->comments_setting) {include('comments.php');} ?>
		</article>
	</section>
	<?php
        if (!defined('__TYPECHO_ROOT_DIR__')) exit;
        	$this->need('sidebar.php');
    ?>
</div>
<?php
	if (!defined('__TYPECHO_ROOT_DIR__')) exit;
		$this->need('footer.php');
?>
</div>
</body>
</html>