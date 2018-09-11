<?php
/**
* 归档
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="hola-container hola-layout-container hola-layout-container-sidebar-right">
	<?php
    $stat = Typecho_Widget::widget('Widget_Stat');
    $this->widget('Widget_Contents_Post_Recent', 'pageSize='.$stat->publishedPostsNum)->to($archives);
    $year=0; $mon=0; $i=0; $j=0;
    $output = '<section class="hola-layout-main hola-card-stack">';
    while($archives->next()){
        $year_tmp = date('Y',$archives->created);
        $mon_tmp = date('m',$archives->created);
        $y=$year; $m=$mon;
        if ($year > $year_tmp || $mon > $mon_tmp) {
            $output .= '</ul></div></article>';
        }
        if ($year != $year_tmp || $mon != $mon_tmp) {
			 $year = $year_tmp;
			 $mon = $mon_tmp;
			 $output .= '<article class="article article-type-post"><div class="article-inner hola-card"><h1 class="hola-card-title ihola-widget-title article-title">'.date('M Y',$archives->created).'</h1><ul class="hola-vmenu">';
        }
        $output .= '<li class="hola-vmenu-item"><a href="'.$archives->permalink .'">'. $archives->title .' <div style="float:right;color:#6b6b6b;font-weight:500;margin-right:.2rem;">'.date('M j, Y',$archives->created).'</div> </a></li>';
    }
    $output .= '</section>';
    echo $output;
    ?>
    <?php
        if (!defined('__TYPECHO_ROOT_DIR__')) exit;
          $this->need('sidebar.php');
      ?>
    </div>
    <?php $this->need('footer.php'); ?>
  </div>
  </body>
</html>