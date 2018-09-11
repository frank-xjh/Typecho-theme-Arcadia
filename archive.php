<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>

      <div class="hola-container hola-layout-container hola-layout-container-sidebar-right">
        <section class="hola-layout-main hola-card-stack">
        <article class="article article-type-post">
          <div class="article-inner hola-card">
            <h1 class="hola-card-title" style="margin-bottom:0rem;">
              <?php $this->archiveTitle(array(
              'category'  =>  _t('分类&nbsp;&nbsp;&nbsp;%s&nbsp;下的文章'),
              'search'    =>  _t('搜索🔍&nbsp;&nbsp;&nbsp;含有&nbsp;%s&nbsp;的文章'),
              'tag'       =>  _t('标签&nbsp;&nbsp;&nbsp;%s&nbsp;下的文章'),
              'author'    =>  _t('作者 : %s'),
              'date'      =>  _t('日期 : %s')
              ), '', ''); ?>
            </h1>
          </div>
        </article>
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
    <?php
      if (!defined('__TYPECHO_ROOT_DIR__')) exit;
       $this->need('footer.php');
    ?>
  </div>
  </body>
</html>