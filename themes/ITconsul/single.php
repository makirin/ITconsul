<?php get_header(); ?>
<!-- メインビジュアル -->
<section id="main">
  <!-- PC用 -->
  <div class="main-set">
    <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/img/main_a.png" alt="外観">
    <img class="main-frame" src="<?php echo get_template_directory_uri(); ?>/img/main_back_a.png" alt="フレーム">
    <div claas="page-title-set">
      <h4 class="single-back-title">NEWS</h4>
      <h3 class="single-front-title">／  お知らせ  ／</h3>
    </div>
  </div>
  <!-- スマホ用 -->
  <div class="main-set-sp">
  <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/img/main_sp_a.png" alt="外観">
    <img class="main-frame" src="<?php echo get_template_directory_uri(); ?>/img/main_back_sp_a.png" alt="フレーム">
    <div claas="page-title-set">
      <h4 class="single-back-title">NEWS</h4>
      <h3 class="single-front-title">／  お知らせ  ／</h3>
    </div>
  </div>
</section>

<article>
<div class="single-content content">
  <div class="single-container">
    
    <?php if(have_posts()) :?>
      <?php while (have_posts()) : the_post() ; ?>
      <div class="single-post-set">
        <div class="news-single-title-set">
          <div class="news-single-title">
            <?php the_title(); ?>
          </div>
          <div class="news-single-date-set">
            <div class="news-single-date-img"><img src="<?php echo get_template_directory_uri(); ?>/img/clock-regular.png" alt="時計"></div>
            <div class="news-single-date"><?php echo get_the_date(); /* 記事投稿日付 */ ?></div>
          </div>
        </div>
        <div class="news-single-content">
          <?php the_content(); ?>
        </div>
      <div>  
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</div>  
</article>

<?php get_footer(); ?>