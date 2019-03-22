
<!-- header作成する -->


<?php
/*
Template Name:コンタクト
*/
?>
<?php get_header("5"); ?>
    <div class="mainvidual">
      <h1 class="contact-title">Contact</h1>
<div class="contact-wrapper">
      <div class="txt-container">
          <p>撮影のご依頼等ありましたらお気軽にご連絡ください。
<br>
※インスタグラムからフォロー後にご連絡いただいた方が<br>
返信早いかもしれません。

</p>
<h3 class="instagram">
<a href="https://www.instagram.com/ayumu.kamiya/"><span class="in">Instagram (ayumu.kamiya)<span></a>
</h3>
      </div>

      <div class="form-container">
      <form class="form" >
    <?php echo do_shortcode('[contact-form-7 id="66" title="contact-form2"]') ?>
  </form>
  </div>

  </div>
  </div>
  </body>
</html>
