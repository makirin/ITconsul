<?php get_header(); ?>
<!-- メインビジュアル -->
<section id="main">
  <!-- PC用 -->
  <div class="main-set">
    <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/img/main_a.png" alt="外観">
    <img class="main-frame" src="<?php echo get_template_directory_uri(); ?>/img/main_back_a.png" alt="フレーム">
    <div claas="page-title-set">
      <h4 class="page-back-title">NEWS</h4>
      <h3 class="page-front-title">／  お知らせ  ／</h3>
    </div>
  </div>
  <!-- スマホ用 -->
  <div class="main-set-sp">
  <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/img/main_sp_a.png" alt="外観">
    <img class="main-frame" src="<?php echo get_template_directory_uri(); ?>/img/main_back_sp_a.png" alt="フレーム">
    <div claas="page-title-set">
      <h4 class="page-back-title">NEWS</h4>
      <h3 class="page-front-title">／  お知らせ  ／</h3>
    </div>
  </div>
</section>
<article>
  <div class="page-content content">
    <div class="container">
      <div id="news-menu">
        <a href="#news-menu" class="ple-a">プレリリース</a>
        <a href="#news-menu" class="event-a">イベント</a>
        <a href="#news-menu" class="info-a">お知らせ</a>
      </div>
      <div class="news-group">
        <!-- お知らせ -->
        <container class="news-info">
          <?php
          $args = array(
              'post_type' => 'post',    // 投稿タイプ
              'category_name' => 'info',
              'posts_per_page' => 10,   // 表示件数
              'post_status' => 'publish',  // 公開済みのみ
              'orderby' => 'date', //新着順
          );

          query_posts($args);

          // ループ
          if ( have_posts() ) :
            while ( have_posts() ) :
              the_post();
          ?>

          <div class="news-one">
            <a href="<?php the_permalink(); ?>">
              <div class="news-one-title"><?php the_title(); /* 記事タイトル */ ?></div>
              <div class="news-one-date-set">
                <div class="news-one-img"><img src="<?php echo get_template_directory_uri(); ?>/img/clock-regular.png" alt="時計"></div>
                <div class="news-one-date"><?php echo get_the_date(); /* 記事投稿日付 */ ?></div>
              </div>
            </a>
          </div>

          <?php
            endwhile;
          endif;

          // 投稿データのリセット
          wp_reset_query();
          ?>
        </container>

        <!-- イベント -->
        <container class="news-event">
          <?php
          $args = array(
              'post_type' => 'post',    // 投稿タイプ
              'category_name' => 'event',
              'posts_per_page' => 10,   // 表示件数
              'post_status' => 'publish',  // 公開済みのみ
              'orderby' => 'date', //新着順
          );

          query_posts($args);

          // ループ
          if ( have_posts() ) :
            while ( have_posts() ) :
              the_post();
          ?>

          <div class="news-one">
            <a href="<?php the_permalink(); ?>">
              <div class="news-one-title"><?php the_title(); /* 記事タイトル */ ?></div>
              <div class="news-one-date-set">
                <div class="news-one-img"><img src="<?php echo get_template_directory_uri(); ?>/img/clock-regular.png" alt="時計"></div>
                <div class="news-one-date"><?php echo get_the_date(); /* 記事投稿日付 */ ?></div>
              </div>
            </a>
          </div>

          <?php
            endwhile;
          endif;

          // 投稿データのリセット
          wp_reset_query();
          ?>
        </container>
        <!-- プレリリース -->
        <container class="news-pre-release">
          <?php
          $args = array(
              'post_type' => 'post',    // 投稿タイプ
              'category_name' => 'pre-release',
              'posts_per_page' => 10,   // 表示件数
              'post_status' => 'publish',  // 公開済みのみ
              'orderby' => 'date', //新着順
          );

          query_posts($args);

          // ループ
          if ( have_posts() ) :
            while ( have_posts() ) :
              the_post();
          ?>

          <div class="news-one">
            <a href="<?php the_permalink(); ?>">
              <div class="news-one-title"><?php the_title(); /* 記事タイトル */ ?></div>
              <div class="news-one-date-set">
                <div class="news-one-img"><img src="<?php echo get_template_directory_uri(); ?>/img/clock-regular.png" alt="時計"></div>
                <div class="news-one-date"><?php echo get_the_date(); /* 記事投稿日付 */ ?></div>
              </div>
            </a>
          </div>

          <?php
            endwhile;
          endif;

          // 投稿データのリセット
          wp_reset_query();
          ?>
        </container>
      </div>
    </div>  
  </div>  
</article>
<?php get_footer( ); ?>