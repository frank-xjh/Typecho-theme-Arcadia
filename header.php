<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="hola-html-reset hola-var">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <!--默认使用极速内核：针对国内浏览器产商-->
    <meta name="renderer" content="webkit">
    <title><?php if ($this->is('index')){$this->options->title();}elseif($this->is('page')){$this->archiveTitle('','',' - ');$this->options->title();}elseif($this->is('category')){$this->archiveTitle('','',' - ');$this->options->title();}elseif($this->is('tag')){$this->archiveTitle('','Tag: ',' - ');$this->options->title();}elseif($this->is('archive')){$this->archiveTitle('年','存档: ','月 - ');$this->options->title();}else{$this->archiveTitle('','','');}?></title>
    <?php if ($this->options->favicon) { ?><link rel="icon" href="<?php $this->options->favicon(); ?>" /><?php } ?>
    <?php if ($this->options->iosicon) { ?><link rel="apple-touch-icon" href="<?php $this->options->iosicon(); ?>"><?php } ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/2.10.0/github-markdown.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/assets/css/holakit.css?v=1'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/assets/css/style.min.css?v=2'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/assets/css/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="https://unpkg.com/data-tip@0.0.52/dist/data-tip.css">
    <script src="https://cdn.bootcss.com/twemoji/2.7.0/twemoji.min.js"></script>
    <style>
        .markdown-body {
            box-sizing: border-box;
            min-width: 200px;
            max-width: 980px;
            margin: 0 auto;
            padding: .6rem .0rem;
        }

        @media (max-width: 767px) {
            .markdown-body {
                padding: .4rem .0rem;
            }
        }
        <?php $this->options->header_css(); ?>
        .hola-var, :root {
            <?php if ($this->options->primary_color) { ?>
                --hola-primary-color: <?php $this->options->primary_color() ?>
            <?php } ?>
        }
    </style>
    <?php $this->options->header_code(); ?>
    <?php if (!$this->is('index') && !empty($this->options->post_show) && in_array('code_light', $this->options->post_show)) { ?><link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('/assets/css/Prism/prism.css?v=1'); ?>" /><script src="<?php $this->options->themeUrl('/assets/js/Prism/prism.js?v=1'); ?>" type="text/javascript"></script><?php } ?>
    <?php $this->header(); ?>
</head>
<body class="hola-body-typography hola-grey-bg">
    <div id="container">
    <?php if ($this->is('index')) { ?>
    <header class="hola-navbar hola-navbar-transparent hola-navbar-darkbg">
    <?php }else{ ?>
    <header class="hola-navbar hola-navbar-white hola-navbar-lightbg">
    <?php } ?>
      <div class="hola-container">
        <nav class="hola-navbar-main">
          <a href="<?php $this->options->siteUrl(); ?>" class="hola-navbar-brand"><?php $this->options->title() ?></a>
        </nav>
        <input type="checkbox" class="hola-navbar-toggle" id="navbar-toggle">
        <label for="navbar-toggle" class="hola-navbar-toggle-label"></label>
        <nav class="hola-navbar-sub">
          <a href="<?php $this->options->siteUrl(); ?>">首页</a>
          <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<a href="{permalink}">{title}</a>'); ?>
        </nav>
      </div>
    </header>