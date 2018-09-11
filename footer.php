<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<footer class="hola-footer">
    <div class="hola-container hola-columns">
        <?php if (!empty($this->options->friend_link)) { ?>
            <div class="hola-columns-item hola-columns-item-margined ihola-footer-block"><h4>友情链接</h4><p><?php $this->options->friend_link(); ?></p></div>
        <?php } ?>
        <?php $this->options->footer_col(); ?>
        <div class="hola-columns-item hola-columns-item-margined ihola-footer-block"><h4>鸣谢</h4><a href="http://www.typecho.org" target="_blank" rel="nofollow">Typecho</a><a href="https://arcadia.4leaf.top">Arcadia</a><a href="https://www.4leaf.top/start-page.html">frank</a><a href="https://ihola.one/">¡Hola!</a></div>
    </div>
    <div class="hola-container ihola-footer-right"><p>&copy; Copyright <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a><br /><?php $this->options->footer_right(); ?></p></div>

    <?php if (!empty($this->options->post_show) && in_array('math', $this->options->post_show)) { ?>
        <script type="text/x-mathjax-config">
            MathJax.Hub.Config({
                showProcessingMessages: false,
                messageStyle: "none",
                extensions: ["tex2jax.js"],
                jax: ["input/TeX", "output/HTML-CSS"],
                tex2jax: {
                    inlineMath: [ ['$','$'], ["\\(","\\)"] ],
                    displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
                    skipTags: ['script', 'noscript', 'style', 'textarea', 'pre','code','a'],
                    ignoreClass:"comment-content"
                },
                "HTML-CSS": {
                    availableFonts: ["STIX","TeX"],
                    showMathMenu: false
                }
            });
            MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
        </script>
        <script src="//cdn.bootcss.com/mathjax/2.7.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
    <?php } ?>
    <!-- Weather -->
    <?php
 
function is_mobile_request(){  
    $_SERVER['ALL_HTTP'] = isset($_SERVER['ALL_HTTP']) ? $_SERVER['ALL_HTTP'] : '';  
    $mobile_browser = '0';  
    if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|iphone|ipad|ipod|android|xoom)/i', strtolower($_SERVER['HTTP_USER_AGENT'])))  
        $mobile_browser++;  
    if((isset($_SERVER['HTTP_ACCEPT'])) and (strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') !== false))  
        $mobile_browser++;  
    if(isset($_SERVER['HTTP_X_WAP_PROFILE']))  
        $mobile_browser++;  
    if(isset($_SERVER['HTTP_PROFILE']))  
        $mobile_browser++;  
    $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));  
    $mobile_agents = array(  
        'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',  
        'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',  
        'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',  
        'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',  
        'newt','noki','oper','palm','pana','pant','phil','play','port','prox',  
        'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',  
        'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',  
        'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',  
        'wapr','webc','winw','winw','xda','xda-' 
        );  
    if(in_array($mobile_ua, $mobile_agents))  
        $mobile_browser++;  
    if(strpos(strtolower($_SERVER['ALL_HTTP']), 'operamini') !== false)  
        $mobile_browser++;  
    // Pre-final check to reset everything if the user is on Windows  
    if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows') !== false)  
        $mobile_browser=0;  
    // But WP7 is also Windows, with a slightly different characteristic  
    if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows phone') !== false)  
        $mobile_browser++;  
    if($mobile_browser>0)  
        return true;  
    else
        return false;  
}
    ?>
    <?php if ($this->options->weather && !is_mobile_request()) { ?>
        <?php $this->options->weather() ?>
    <?php } ?>
</footer>