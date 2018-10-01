<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeInit($archive) {
    Helper::options()->commentsOrder = 'DESC';//强制最新评论放在最前面
    if ($archive->is('category', 'jobs')) {
        $archive->parameter->pageSize = 5; // 自定义条数
    }
}

function themeConfig($form) {
	/**
	 $search_box_color = new Typecho_Widget_Helper_Form_Element_Radio('search_box_color',
		array('d1' => _t('米色+青碧色'),
	 	'd2' => _t('米色+淡红色>'),
	 	'd3' => _t('青色+米色'),
		'd4' => _t('米色+暗红色->'),
		'd5' => _t('透明+米色'),
		'd6' => _t('透明+米色+紫红色'),
		'd7' => _t('米色+黑绿色')
		),'d1',_t('搜索框样式选择'));
 
	$form->addInput($search_box_color->multiMode());

	$search_box_text = new Typecho_Widget_Helper_Form_Element_Text('search_box_text', NULL, NULL, _t('自定义尾部左侧内'), _t('默认为空'));
    $form->addInput($search_box_text);
     */

    //favicon
    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('favicon图标地址'));
    $form->addInput($favicon);

    //apple touch icon
    $iosicon = new Typecho_Widget_Helper_Form_Element_Text('iosicon', NULL, NULL, _t('apple touch icon图标地址'));
    $form->addInput($iosicon);

    //文章字数统计
    $post_word = new Typecho_Widget_Helper_Form_Element_Radio('post_word', 
        array('1' => _t('启用'),
            '0' => _t('禁止'),
        ),

        '1',  _t('文章字数统计设置'), _t('启用则会在每篇文章上显示文章字数'));
    
    $form->addInput($post_word);

    //文章阅读时长
    $post_readtime = new Typecho_Widget_Helper_Form_Element_Radio('post_readtime', 
        array('1' => _t('启用'),
            '0' => _t('禁止'),
        ),

        '1', _t('文章阅读时长统计设置'), _t('启用则会在每篇文章上显示文章阅读时长'));
    
    $form->addInput($post_readtime);

    //文章评论数
    $post_comments = new Typecho_Widget_Helper_Form_Element_Radio('post_comments', 
        array('1' => _t('启用'),
            '0' => _t('禁止'),
        ),

        '1', _t('文章评论数设置'), _t('启用则会在每篇文章上显示文章评论数'));
    
    $form->addInput($post_comments);

    //文章浏览数
    $post_view = new Typecho_Widget_Helper_Form_Element_Radio('post_view', 
        array('1' => _t('启用'),
            '0' => _t('禁止'),
        ),

        '1', _t('文章评论数设置'), _t('启用则会在每篇文章上显示文章评论数'));
    
    $form->addInput($post_view);

    //文章设置
    $post_show = new Typecho_Widget_Helper_Form_Element_Checkbox('post_show',
        array(
            'code_light' => _t('代码高亮'),
            'math' => _t('MathJax')
        ),
        
        array('code_light'), _t('文章设置开关'), _t('请注意，代码高亮改自Prism，```后的文字需要和Prism同样，比如应填写cpp还不是c++'));

    $form->addInput($post_show->multiMode());

    //时间设置
    $time_show = new Typecho_Widget_Helper_Form_Element_Checkbox('time_show',
        array(
            'time_tips' => _t('时间提示'),
            'time_percent' => _t('时间百分比')
        ),
        
        array('time_tips', 'time_percent'), _t('时间设置开关'));

    $form->addInput($time_show->multiMode());

    //评论设置
    $comments_setting = new Typecho_Widget_Helper_Form_Element_Radio('comments_setting', 
        array('1' => _t('原生评论'),
            '2' => _t('第三方评论')
        ),

        '1', _t('评论设置'), _t('第三方评论请在下方第三方评论代码中填写代码'));
    
    $form->addInput($comments_setting);

    //第三方评论代码
    $third_party_comments = new Typecho_Widget_Helper_Form_Element_Textarea('third_party_comments', NULL, NULL, _t('第三方评论代码'));
    $form->addInput($third_party_comments);

    //侧边栏设置
    $sidebar_show = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebar_show',
        array(
            'hot_posts' => _t('热门文章(5篇)'),
            'new_comments' => _t('最新评论(5条)'),
            'random_posts' => _t('随机文章(5篇)'),
            'new_posts' => _t('最新文章(5篇)'),
            'category_list' => _t('分类列表'),
            'tag_list' => _t('标签云')
        ),
        
        array('hot_posts', 'new_comments', 'random_posts', 'category_list', 'tag_list'), _t('侧栏设置开关'));

    $form->addInput($sidebar_show->multiMode());

    //标签数量限制
    $tag_limit = new Typecho_Widget_Helper_Form_Element_Text('tag_limit', NULL, NULL, _t('标签数量限制'), _t('请填写阿拉伯数字，默认为无穷大'));
    $form->addInput($tag_limit);

    //天气
    $weather = new Typecho_Widget_Helper_Form_Element_Textarea('weather', NULL, NULL, _t('天气代码'), _t('可填写<a href="https://www.seniverse.com/widget/get" style="text-decoration:none">心知天气代网页插件</a>代码，请使用浮动气泡样式，切勿使用其他样式。注意：手机端不显示'));
    $form->addInput($weather);

    //自定义主题色系
    $primary_color = new Typecho_Widget_Helper_Form_Element_Text('primary_color', NULL, NULL, _t('自定义主题色系'), _t('请填入16进制颜色代码，默认为#3498db'));
    $form->addInput($primary_color);

    //自定义css
    $header_css = new Typecho_Widget_Helper_Form_Element_Textarea('header_css', NULL, NULL, _t('自定义css'), _t('无需加style标签'));
    $form->addInput($header_css);

    //自定义头部代码
    $header_code = new Typecho_Widget_Helper_Form_Element_Textarea('header_code', NULL, NULL, _t('自定义头部代码'), _t('代码将会放在<head></head>之间，可填写统计代码或引入js等'));
    $form->addInput($header_code);

    //友情链接
    $friend_link = new Typecho_Widget_Helper_Form_Element_Textarea('friend_link', NULL, NULL, _t('友情链接'), _t('<xmp>书写模板：<a href="友链1地址">友链1</a><a href="友链2地址">友链2</a>···</xmp>'));
    $form->addInput($friend_link);

    //自定义尾部模块
    $footer_col = new Typecho_Widget_Helper_Form_Element_Textarea('footer_col', NULL, NULL, _t('自定义尾部模块'), _t('<xmp>书写模板：<div class="hola-columns-item hola-columns-item-margined ihola-footer-block"><h4>大标题</h4><a>内容1</a><a>内容2</a>······</div>。注意：会被放在友情链接后</xmp>'));
    $form->addInput($footer_col);

    //自定义尾部右侧内容
    $footer_right = new Typecho_Widget_Helper_Form_Element_Textarea('footer_right', NULL, NULL, _t('自定义尾部右侧内容'), _t('可填写html,js,php,也可以填写备案号'));
    $form->addInput($footer_right);
}

function themeFields($layout) {
    $comments_setting = new Typecho_Widget_Helper_Form_Element_Radio('comments_setting', 
        array('1' => _t('启用'),
            '0' => _t('禁止'),
        ),

        '1',  _t('本页评论设置'), _t('禁止则会禁用评论'));
    $layout->addItem($comments_setting);
}

//文章字数统计
function art_count ($cid){
    $db=Typecho_Db::get ();
    $rs=$db->fetchRow ($db->select ('table.contents.text')->from ('table.contents')->where ('table.contents.cid=?',$cid)->order ('table.contents.cid',Typecho_Db::SORT_ASC)->limit (1));
    $text = preg_replace("/[^\x{4e00}-\x{9fa5}]/u", "", $rs['text']);
    echo mb_strlen($text,'UTF-8');
}

//文章阅读时间统计
function art_time ($cid){
    $db=Typecho_Db::get ();
    $rs=$db->fetchRow ($db->select ('table.contents.text')->from ('table.contents')->where ('table.contents.cid=?',$cid)->order ('table.contents.cid',Typecho_Db::SORT_ASC)->limit (1));
    $text = preg_replace("/[^\x{4e00}-\x{9fa5}]/u", "", $rs['text']);
    $text_word = mb_strlen($text,'utf-8');
    echo ceil($text_word / 400);
}

//热评文章
function theme_most_commented_posts($archive){ 
    $defaults = array( 
        'number' => 5, 
        'before' => '<ul class="hola-vmenu">', 
        'after' => '</ul>', 
        'xformat' => '<li class="hola-vmenu-item"><a href="{permalink}">{title}&nbsp;&nbsp;&nbsp;<i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;{commentsNum}&nbsp;&nbsp;&nbsp;<i class="fa fa-eye" aria-hidden="true"></i>&nbsp;{viewNum}</a></li>' 
    ); 
    $time = time() + 8*60*60; 
    $db = Typecho_Db::get(); 
    $sql = $db->select()->from('table.contents') 
        ->where('status = ?','publish')
        ->where('created <= ?', $time) 
    	->where('type = ?', 'post') 
        ->limit($defaults['number']) 
        ->order('commentsNum',Typecho_Db::SORT_DESC); 
    $result = $db->fetchAll($sql); 
    echo $defaults['before']; 
    foreach($result as $val){ 
        $val = Typecho_Widget::widget('Widget_Abstract_Contents')->filter($val); 
        echo str_replace(array('{permalink}', '{title}', '{commentsNum}', '{viewNum}'), array($val['permalink'], $val['title'], $val['commentsNum'], $val['views']), $defaults['xformat']); 
    } 
    echo $defaults['after']; 
}

//最新文章
function theme_latest_posts($archive){ 
    $defaults = array( 
        'number' => 5, 
        'before' => '<ul class="hola-vmenu">', 
        'after' => '</ul>', 
        'xformat' => '<li class="hola-vmenu-item"><a href="{permalink}">{title}&nbsp;&nbsp;&nbsp;<i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;{commentsNum}&nbsp;&nbsp;&nbsp;<i class="fa fa-eye" aria-hidden="true"></i>&nbsp;{viewNum}</a></li>' 
    ); 
    $db = Typecho_Db::get(); 
    $sql = $db->select()->from('table.contents') 
        ->where('status = ?','publish')
        ->where('type = ?', 'post') 
        ->limit($defaults['number']) 
        ->order('created',Typecho_Db::SORT_DESC); 
    $result = $db->fetchAll($sql); 
    echo $defaults['before']; 
    foreach($result as $val){ 
        $val = Typecho_Widget::widget('Widget_Abstract_Contents')->filter($val); 
        echo str_replace(array('{permalink}', '{title}', '{commentsNum}', '{viewNum}'), array($val['permalink'], $val['title'], $val['commentsNum'], $val['views']), $defaults['xformat']); 
    } 
    echo $defaults['after']; 
}

//文章阅读次数含cookie
function get_post_view($archive)
{
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        return 0;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
        $views = Typecho_Cookie::get('extend_contents_views');
        if(empty($views)){
            $views = array();
        }else{
            $views = explode(',', $views);
        }
        if(!in_array($cid,$views)){
            $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
            array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
        }
    }
    return $row['views'];
}

function theme_rand_posts($random){
    $modified = $random->modified;
    $db = Typecho_Db::get();
    $adapterName = $db->getAdapterName();//兼容非MySQL数据库
    if($adapterName == 'pgsql' || $adapterName == 'Pdo_Pgsql' || $adapterName == 'Pdo_SQLite' || $adapterName == 'SQLite'){
        $order_by = 'RANDOM()';
    }else{
        $order_by = 'RAND()';
    }
    $sql = $db->select()->from('table.contents')
        ->where('status = ?','publish')
        ->where('table.contents.created <= ?', time())
        ->where('type = ?', 'post')
        ->limit(5)
        ->order($order_by);

    $result = $db->fetchAll($sql);
    $index = 0;
    foreach($result as $val){
        $val = Typecho_Widget::widget('Widget_Abstract_Contents')->filter($val);
        echo '<li class="hola-vmenu-item">
                    <a href="' . $val['permalink'] . '" title="' . $val['title'] . '">' . $val['title'] . '&nbsp;&nbsp;&nbsp;<i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;'.$val['commentsNum'].'&nbsp;&nbsp;&nbsp;<i class="fa fa-eye" aria-hidden="true"></i>&nbsp;'.$val['views'].'</a>
            </li>';
            $index ++;
    }
}

/**
* 显示下一篇
*
* @access public
* @param string $default 如果没有下一篇,显示的默认文字
* @return void
*/
function theNext($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created > ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_ASC)
->limit(1);
$content = $db->fetchRow($sql);
 
if ($content) {
$content = $widget->filter($content);
$link = '<button class="data-tip-bottom" data-tip="' . $content['title'] . '" style="border: 1px solid #04be02;color: #04be02;padding: 10px 14px;display: block;border-radius: 3px;font-size: 18px;cursor: pointer;background-color: #fff;width: 100%;outline: none;"><a style="color:#04be02" href="' . $content['permalink'] . '" title="' . $content['title'] . '">下一篇</a></button>';
echo $link;
} else {
echo $default;
}
}
 
/**
* 显示上一篇
*
* @access public
* @param string $default 如果没有下一篇,显示的默认文字
* @return void
*/
function thePrev($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created < ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_DESC)
->limit(1);
$content = $db->fetchRow($sql);
if ($content) {
$content = $widget->filter($content);
$link = '<button class="data-tip-top" data-tip="' . $content['title'] . '" style="border: 1px solid #04be02;color: #04be02;padding: 10px 14px;display: block;border-radius: 3px;font-size: 18px;cursor: pointer;background-color: #fff;width: 100%;outline: none;"><a style="color:#04be02" href="' . $content['permalink'] . '" title="' . $content['title'] . '">上一篇</a></button>';
echo $link;
} else {
echo $default;
}
}

function getCommentAt($coid){
    $db   = Typecho_Db::get();
    $prow = $db->fetchRow($db->select('parent')
        ->from('table.comments')
        ->where('coid = ? AND status = ?', $coid, 'approved'));
    $parent = $prow['parent'];
    if ($parent != "0") {
        $arow = $db->fetchRow($db->select('author')
            ->from('table.comments')
            ->where('coid = ? AND status = ?', $parent, 'approved'));
        $author = $arow['author'];
        $href   = '<a href="#comment-'.$parent.'">@'.$author.'</a>';
        echo $href;
    } else {
        echo '';
    }
}