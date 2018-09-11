<?php
/**
* 搜索
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<link rel="stylesheet" href="<?php $this->options->themeUrl('/assets/css/search_box.css'); ?>">
<div class="hola-container hola-layout-container hola-layout-container-sidebar-right">
	<?php
        if (!defined('__TYPECHO_ROOT_DIR__')) exit;
          $this->need('sidebar.php');
      ?>
    <section class="hola-layout-main hola-card-stack">
    	<article class="article article-type-post">
    		<div class="article-inner hola-card">
    			<h1 class="hola-card-title ihola-widget-title article-title">搜索🔍</h1>
    			<form method="post" action="">
    				<div class="search bar1" style="box-sizing: border-box;margin=0;padding=0;"><input type="text" name="s" class="text" size="32" style="padding:.2rem;font-size:1rem" placeholder="请输入您要搜索的内容..." /></div>
				</form>
				<br />
    			<?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1')->to($tags2);while ($tags2->next()): ?>
            		<a href="<?php $tags2->permalink();?>" style="line-height:3rem"><span class="hola-badge" style="border-radius:.25rem"><?php $tags2->name(); ?></span></a>
        		<?php endwhile; ?>
    		</div>
    	</article>
    </section>
</div>
<?php
	if (!defined('__TYPECHO_ROOT_DIR__')) exit;
      $this->need('footer.php'); 
  ?>
</div>
</body>
</html>