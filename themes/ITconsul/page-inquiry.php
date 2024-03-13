<?php get_header(); ?>
<!-- メインビジュアル -->
<section id="main">
  <!-- PC用 -->
  <div class="main-set">
    <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/img/main_a.png" alt="外観">
    <img class="main-frame" src="<?php echo get_template_directory_uri(); ?>/img/main_back_a.png" alt="フレーム">
    <div claas="page-title-set">
      <h4 class="page-back-title">INQUIRY</h4>
      <h3 class="page-front-title">／  お問合せ  ／</h3>
    </div>
  </div>
  <!-- スマホ用 -->
  <div class="main-set-sp">
    <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/img/main_sp_a.png" alt="外観">
    <img class="main-frame" src="<?php echo get_template_directory_uri(); ?>/img/main_back_sp_a.png" alt="フレーム">
    <div claas="page-title-set">
      <h4 class="page-back-title">INQUIRY</h4>
      <h3 class="page-front-title">／  お問合せ  ／</h3>
    </div>
  </div>
</section>
<article>
  <div class="page-content content">
    <div class="container">
      <div class="form">
        <div class="form-title">
          <p class="form-title-first">法人のお客様向けサービスに関するお問い合わせ</p>
          <p class="form-title-text">コンサルティングサービスに関するご依頼やご相談などは、<br>下記フォームよりお問い合わせください。担当者よりご連絡いたします。</p>
        </div>
        <div class="form-title-sp">
          <p class="form-title-first">法人のお客様向けサービスに<br>関するお問い合わせ</p>
          <p class="form-title-text">コンサルティングサービスに関する<br>ご依頼やご相談などは、<br>下記フォームよりお問い合わせください。<br>担当者よりご連絡いたします。</p>
        </div>
        <div>  
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php the_content(); ?> 
            <?php endwhile; ?>
          <?php endif; ?>
        </div> 
      </div> 
      <p class="recaptcha">このサイトはreCAPTCHAによって保護されており、Googleの<a href = "https://policies.google.com/privacy">プライバシーポリシー</a>と<a href = "https://policies.google.com/terms">利用規約</a>が適用されます。</p>
    </div>  
  </div>  
</article>

<?php get_footer(); ?>