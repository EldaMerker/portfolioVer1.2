<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Portfolio Ayumu Kamiya Photography</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/common.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/gallery.css" type="text/css" />


    <!-- js-loading -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- fancyBox の読み込み（必須）-->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fancybox-2.1.7/source/jquery.fancybox.css" type="text/css" media="screen" />
<script src="<?php echo get_template_directory_uri(); ?>/fancybox-2.1.7/source/jquery.fancybox.pack.js"></script>

<!-- オプショナルの helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fancybox-2.1.7/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox-2.1.7/source/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox-2.1.7/source/helpers/jquery.fancybox-media.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox-2.1.7/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox-2.1.7/source/helpers/jquery.fancybox-thumbs.js"></script>



<script>
    jQuery(document).ready(function($) {
        $(".fancybox").fancybox({
            cyclic: true
        });
    });
</script>
<!-- masonry -->
<script src="<?php echo get_template_directory_uri(); ?>/js/masonry.pkgd.min.js"></script>

<script>
jQuery(function($){
  $('#container').masonry({
    itemSelector: '.item',
    columnWidth: 180,
    isFitWidth: true  //親要素の幅に合わせてカラム数を自動調整
  });
});
// 画像の読み込み方式を調べて設定
// （一括か順次か）


</script>
<!-- ends-masonry -->

  </head>
  <body>
    <header>
      <div class="topnav">
        <!-- smart-phone-menu--------------------- -->
        <div class="sp-logo">
              <h1><a href="home.html">A.K. SENDAI</a></h1>
        </div>
        <div class="sp-menu">
          <a></a>
        </div>

        <!-- common-menu************************* -->
        <ul>
        <li><a href="<?php echo home_url("/index.php"); ?>"><span class="in">Home</span></a></li>
        <li id="drop"><a href="<?php echo home_url("/portfolio"); ?>"><span class="in">Portfolio</span></a>
          <ul class="drop-menu">
            <li><a href="<?php echo home_url("/portraits"); ?>"><span class="in">Portraits</span></a></li>
            <li><a href="<?php echo home_url("/landscapes"); ?>"><span class="in">Landscapes</span></a></li>
            <li><a href="<?php echo home_url("/lovegraph"); ?>"><span class="in">Lovegraph</span></a></li>
          </ul>
        </li>
          <li><a href="<?php echo home_url("/profile"); ?>"><span class="in">Profile</span></a></li>
          <li><a href="<?php echo home_url("/contact"); ?>"><span class="in">Contact</span></a></li>
        </ul>
          <div class="clear-fix"></div>
      </div>

    </header>
