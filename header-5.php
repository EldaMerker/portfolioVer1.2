<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Contact Ayumu Kamiya Photography</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/common.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/contact.css" type="text/css" />


    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

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
      </div>
      <div class="clear-fix"></div>
    </header>
