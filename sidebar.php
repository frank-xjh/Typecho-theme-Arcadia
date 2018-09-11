<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<aside class="hola-layout-sidebar hola-card-stack">
	<?php if (!empty($this->options->sidebar_show) && in_array('hot_posts', $this->options->sidebar_show)) { ?>
	<div class="hola-card">
		<!-- 按评论数排序 -->
		<h2 class="hola-card-title ihola-widget-title">热门文章</h2>
		<?php theme_most_commented_posts($this);?>
	</div>
	<?php } if (!empty($this->options->sidebar_show) && in_array('new_posts', $this->options->sidebar_show)) { ?>
	<div class="hola-card">
		<!-- 最新文章 -->
		<h2 class="hola-card-title ihola-widget-title">最新文章</h2>
		<?php theme_latest_posts($this);?>
	</div>
	<?php } if (!empty($this->options->sidebar_show) && in_array('new_comments', $this->options->sidebar_show)) { ?>
	<div class="hola-card">
		<!-- 最新评论 -->
		<h2 class="hola-card-title">最新评论</h2>
		<ul class="hola-vmenu">
			<?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true&pageSize=5')->parse('<li class="hola-vmenu-item"><a href="{permalink}">{text}</a></li>'); ?>
		</ul>
	</div>
	<?php } if (!empty($this->options->sidebar_show) && in_array('random_posts', $this->options->sidebar_show)) { ?>
	<div class="hola-card">
		<!-- 5篇随机文章 -->
		<h2 class="hola-card-title">随机文章</h2>
		<ul class="hola-vmenu"><?php theme_rand_posts($this);?></ul>
	</div>
	<?php } if (!empty($this->options->sidebar_show) && in_array('category_list', $this->options->sidebar_show)) { ?>
	<div class="hola-card">
		<!-- 分类 -->
		<h2 class="hola-card-title">分类</h2>
		<ul class="hola-vmenu">
			<?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li class="hola-vmenu-item"><a href="{permalink}">{name}<span class="hola-badge hola-badge-radii">{count}</span></a></li>'); ?>
		</ul>
	</div>
	<?php }Typecho_Widget::widget('Widget_Metas_Tag_Cloud','ignoreZeroCount=1')->to($tags); if (!empty($this->options->sidebar_show) && in_array('tag_list', $this->options->sidebar_show) && $tags->have()) { ?>
	<div class="hola-card">
		<!-- 标签云 -->
		<h2 class="hola-card-title">标签</h2>
        <?php $tags_limit = 0;while ($tags->next() && ((++$tags_limit <= intval($this->options->tag_limit)) || (!$this->options->tag_limit))): ?>
            <a href="<?php $tags->permalink();?>" style="line-height:3rem"><span class="hola-badge" style="border-radius:.25rem"><?php $tags->name(); ?></span></a>
        <?php endwhile;while ($tags->next()): ?>
        <?php endwhile; ?>
	</div>
	<?php } ?>
</aside>