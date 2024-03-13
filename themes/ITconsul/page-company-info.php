<?php get_header(); ?>
<!-- メインビジュアル -->
<section id="main">
  <!-- PC用 -->
  <div class="main-set">
    <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/img/main_a.png" alt="外観">
    <img class="main-frame" src="<?php echo get_template_directory_uri(); ?>/img/main_back_a.png" alt="フレーム">
    <div claas="page-title-set">
      <h4 class="page-back-title">COMPANY INFO</h4>
      <h3 class="page-front-title">／  会社情報  ／</h3>
    </div>
  </div>
  <!-- スマホ用 -->
  <div class="main-set-sp">
    <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/img/main_sp_a.png" alt="外観">
    <img class="main-frame" src="<?php echo get_template_directory_uri(); ?>/img/main_back_sp_a.png" alt="フレーム">
    <div claas="page-title-set">
      <h4 class="page-back-title">COMPANY INFO</h4>
      <h3 class="page-front-title">／  会社情報  ／</h3>
    </div>
  </div>  
</section>
<article>
  <div class="page-content content">
    <div class="container">
      <p class="company-section">／  会社概要  ／</p>
      <div>  
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?> 
          <?php endwhile; ?>
        <?php endif; ?>
      </div> 
      <p class="company-section">／  事業所一覧  ／</p>
      <div class="office-content">
        <div class="office-group">
          <p class="office-title">本社</p>
          <p class="office-text">〒000-0000<br>東京都...<br>東京オフィスタワー10F<br>TEL : 000-123-1234</p>
        </div>
        <div class="office-group">
          <p class="office-title">大阪支部</p>
          <p class="office-text">〒000-0000<br>大阪府...<br>大阪オフィスタワー20F<br>TEL : 000-123-1234</p>
        </div>
        <div class="office-group">
          <p class="office-title">福岡支部</p>
          <p class="office-text">〒000-0000<br>福岡県...<br>福岡オフィスタワー2F<br>TEL : 000-123-1234</p>
        </div>
      </div>
    </div>  
  </div>  
</article>
  
<?php get_footer(); ?>