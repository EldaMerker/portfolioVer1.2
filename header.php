<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ayumu Kamiya Photography</title>




   <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/common.css" type="text/css" />
     <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/home.css" type="text/css" />

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<!-- Vegas2 -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vegas/vegas.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vegas/vegas.min.js"></script>



<script>$(function(){
  $('body').vegas({ //背景画像でスライドショーしたい場所の設定
    slides: [

      { src: '<?php echo get_template_directory_uri(); ?>/img/portraits/sendai-62.jpg' }, //スライドする画像を配列で設定
      { src: '<?php echo get_template_directory_uri(); ?>/img/portraits/sendai-63.jpg' },
      { src: '<?php echo get_template_directory_uri(); ?>/img/portraits/sendai-48.jpg' },
      { src: '<?php echo get_template_directory_uri(); ?>/img/portraits/sendai-50.jpg' },
      { src: '<?php echo get_template_directory_uri(); ?>/img/portraits/sendai-49.jpg' },
      { src: '<?php echo get_template_directory_uri(); ?>/img/portraits/sendai-43.jpg' },
      { src: '<?php echo get_template_directory_uri(); ?>/img/portraits/sendai-52.jpg' },
      { src: `<?php echo get_template_directory_uri(); ?>/img/portraits/taka03.jpg`},
      { src: `<?php echo get_template_directory_uri(); ?>/img/portraits/taka04.jpg`},
      { src: `<?php echo get_template_directory_uri(); ?>/img/portraits/taka06.jpg`},
      { src: `<?php echo get_template_directory_uri(); ?>/img/portraits/hina02.jpg`}


    ],
     delay: 6000, //スライドまでの時間ををミリ秒単位で設定
     timer: false, //タイマーバーの表示/非表示を切り替え
     overlay: "#000", //オーバーレイする画像の設定
     animation: 'random', //スライドのアニメーションを設定
     transition: 'blur', //スライド間のエフェクトを設定
     transitionDuration: 3000 //エフェクト時間をミリ秒単位で設定
  });
});</script>



  </head>
  <body>
    <header>
      <div class="topnav">

              <!-- smart-phone-menu--------------------- -->
              <div class="sp-logo">
                    <h1><a href="<?php echo home_url("/index.php"); ?>">A.K. SENDAI</a></h1>
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
