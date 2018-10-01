<?php
/**
 * Arcadia是一款基于holakit.css制作的typecho主题，没有使用任何其他的前端框架，以前端优化为目标，致力于做到在复杂中保持简洁。
 *
 * @package Arcadia Theme
 * @author Frank
 * @version 1.1.0
 * @link https://arcadia.4leaf.top/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>

	<div class="hola-hero hola-hero-dark-bg hola-hero-height-extended">
  	  <div class="hola-container hola-hero-content">
        <h1><?php $this->options->title() ?></h1>
        <p><?php $this->options->description() ?></p>
        <a href="<?php $this->options->feedUrl(); ?>" class="hola-button hola-button-ghost">文章RSS</a> <!-- 文章的RSS地址连接 -->
        <a href="<?php $this->options->commentsFeedUrl(); ?>" class="hola-button hola-button-ghost">评论RSS</a> <!-- 评论的RSS地址连接 -->
   	  </div>
	</div>
    <div class="hola-container">
      <?php
        $time= date("H",time()+($this->options->timezone - idate("Z")));
        $percent= $time/24;
        $percent= sprintf("%01.2f", $percent*100).'%';
      ?>
      <?php if(!empty($this->options->time_show) && in_array('time_tips', $this->options->time_show) && in_array('time_percent', $this->options->time_show)){ ?>
      <?php if($time>=6 && $time<=11): ?>
        <h3 class="hola-card-stack-title hola-card-stack-title-light">早上好，新的一天开始了&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;时间已流走<?php echo $percent; ?></h3>
      <?php elseif($time>=12 && $time<=17): ?>
        <h3 class="hola-card-stack-title hola-card-stack-title-light">下午好，是时候打个盹了&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;时间已流走<?php echo $percent; ?></h3>
      <?php else : ?>
        <h3 class="hola-card-stack-title hola-card-stack-title-light">晚上好，早点休息，健康每一天&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;时间已流走<?php echo $percent; ?></h3>
      <?php endif; ?>
      <?php }elseif(!empty($this->options->time_show) && in_array('time_tips', $this->options->time_show)){ ?>
      <?php if($time>=6 && $time<=11): ?>
        <h3 class="hola-card-stack-title hola-card-stack-title-light">早上好，新的一天开始了</h3>
      <?php elseif($time>=12 && $time<=17): ?>
        <h3 class="hola-card-stack-title hola-card-stack-title-light">下午好，是时候打个盹了</h3>
      <?php else : ?>
        <h3 class="hola-card-stack-title hola-card-stack-title-light">晚上好，早点休息，健康每一天</h3>
      <?php endif; ?>
      <?php }elseif(!empty($this->options->time_show) && in_array('time_percent', $this->options->time_show)){ ?>
        <h3 class="hola-card-stack-title hola-card-stack-title-light">时间已流走<?php echo $percent; ?></h3>
      <?php } ?>
      <div class="hola-layout-container hola-layout-container-sidebar-right">
      <section class="hola-layout-main hola-card-stack">
      	<?php while($this->next()): ?>
    		<article class="article article-type-post">
    			<div class="article-inner hola-card">
					<h1 class="hola-card-title"><a class="article-title" href="<?php $this->permalink() ?>" style="color:inherit;text-decoration:inherit;"><?php $this->title() ?></a></h1>
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
          <div style="padding:.5rem .2rem;"><style>a{text-decoration:none}</style><p>under <?php $this->category('&nbsp;&nbsp;'); ?></p></div>
					<div class="article-entry">
	    				<p><?php $this->excerpt(150, '...');?></p>
	    				<p><a href="<?php $this->permalink() ?>" class="hola-button hola-button-primary" style="text-decoration:none">Read More</a></p>
					</div>
				</div>
    		</article>
		    <?php endwhile; ?>
        <!-- 分页 -->
        <style>
          .lists-navigator{margin:30px 0 35px}.lists-navigator{margin:35px 0 35px}.lists-navigator ol{margin:0;padding:0 10px;list-style:none;text-align:center;color:#5f5f5f}.lists-navigator ol li{display:inline-block}.lists-navigator ol li a{font-size:14px;padding:0 20px;color:#5f5f5f}.lists-navigator ol li.current a{color:#3498db}#comments .lists-navigator{margin:20px 0}#comments .lists-navigator ol{margin:20px 0;padding:0 10px;list-style:none;text-align:center}#comments .lists-navigator ol li.current a{color:#3498db}.lists-navigator{display: table;content: ''}
          .clearfix:before{display:table;content:''}.clearfix:after{clear:both}.clearfix{zoom:1}
          .page-navigator{margin:0}
          .current a{color:#3498db}
        </style>
        <div style="margin:20px 0;display:block;text-align:center;display:inline-block;color:#5f5f5f" class="lists-navigator clearfix">
          <b><?php $this->pageNav('←','→','2','...'); ?></b>
        </div>
      </section>
      <?php
        if (!defined('__TYPECHO_ROOT_DIR__')) exit;
          $this->need('sidebar.php');
      ?>
      </div>
    </div>

    <?php
		  if (!defined('__TYPECHO_ROOT_DIR__')) exit;
			 $this->need('footer.php');
	  ?>
	</div>
  </body>
</html>