<?php
/*
Template Name:Portfolio
*/
?>
  <?php get_header("2"); ?>

    <div class="mainvidual">
      <div class="portfolio-wrapper">

      <h1 class="portfolio-title">Portfolio</h1>


      <div class="access-container">

        <div class="access-box">
        <h3>Portraits</h3>
          <a href="<?php echo home_url("portraits"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/portraits/sendai-49.jpg" alt=""></a>
      </div>

        <div class="access-box">
        <h3>Landscapes</h3>
        <a href="<?php echo home_url("landscapes"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/landscapes-icon/IMG_6313.png" alt=""></a>
      </div>

      <div class="access-box">
        <h3>Lovegraph</h3>
        <a href="<?php echo home_url("lovegraph"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/lovegraph-icon/lovegraph11.png" alt=""></a>
      </div>

      </div>

    </div>

    </div>

  </body>
</html>
