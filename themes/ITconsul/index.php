<?php get_header(); ?>
<main>
  <!-- メインビジュアル -->
  <section id="main">
    <!-- PC用 -->
    <div class="main-set">
      <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/img/main.png" alt="外観">
      <img class="main-frame" src="<?php echo get_template_directory_uri(); ?>/img/main_back.png" alt="フレーム">
      <h1>ITで日本を前進させる</h1>
      <h2>データ分析に基づく戦略立案で<br>お客様のビジネスを成長させます</h2>
    </div>
    <!-- スマホ用 -->
    <div class="main-set-sp">
      <img class="main-img" src="<?php echo get_template_directory_uri(); ?>/img/main_sp.png" alt="外観">
      <img class="main-frame" src="<?php echo get_template_directory_uri(); ?>/img/main_back_sp.png" alt="フレーム">
      <h1>ITで日本を前進させる</h1>
      <h2>データ分析に基づく戦略立案で<br>お客様のビジネスを成長させます</h2>
    </div>
  </section>
  <!-- 事業内容 -->
  <section id="business-content" class="content">
    <div class="business-container container">
      <div class="content-title">
        <h4 class="back-title">BUSINESS CONTENT</h4>
        <h3 class="front-title">／  事業内容  ／</h3>
      </div>
      <div class="digital">
        <img src="<?php echo get_template_directory_uri(); ?>/img/digital.jpg" alt="デジタル戦略策定">
        <div class="digital-text-set">
          <p class="digital-title">デジタル戦略策定</p>
          <p class="digital-text">データ分析に基づいて、最適で実現可能なデジタル戦略を策定。<br>デジタル技術を活用した新規事業の企画、既存事業のデジタル化なども支援。</p>
        </div>
      </div>  
      <div class="nurturing">
        <img src="<?php echo get_template_directory_uri(); ?>/img/nurturing.jpg" alt="人材育成">
        <div class="nurturing-text-set">
          <p class="nurturing-title">人材育成</p>
          <p class="nurturing-text">ITスキルや経営スキルなど、必要な人材を育成する研修プログラムを提供。<br>企業のニーズに合わせたオーダーメイド研修も実施可能。</p>
        </div>
      </div>  
    </div>
  </section>
  <!-- 強み -->
  <section id="advantage-content" class="content">
    <div class="advantage-container container">
      <div class="content-title">
        <h4 class="back-title">ADVANTAGE</h4>
        <h3 class="front-title">／  強み  ／</h3>
      </div>
      <div class="advantage advantage-top">
        <div class="advantage-num-set">
          <img src="<?php echo get_template_directory_uri(); ?>/img/advantage.jpg" alt="効率化">
          <p class="advantage-num">01</p>
          <p class="advantage-word">効率化</p>
          <p class="advantage-word-sp">効率化</p>
        </div>
        <div class="advantage-text-set slide-left show slide-bottom">
          <p class="advantage-title">業界特化型ソリューションによる効率化</p>
          <p class="advantage-text">特定の業界に特化したソリューションを提供することで、課題解決の迅速化を実現。豊富な経験とノウハウに基づいた最適な提案で、業務効率を大幅に向上させ、顧客満足度向上に貢献。</p>
        </div>  
      </div>
      <div class="advantage advantage-center">
        <div class="advantage-num-set">
          <img src="<?php echo get_template_directory_uri(); ?>/img/advantage.jpg" alt="専門知識">
          <p class="advantage-num">02</p>
          <p class="advantage-word">専門<br>知識</p>
          <p class="advantage-word-sp">専門知識</p>
        </div>
        <div class="advantage-text-set slide-right show slide-bottom">
          <p class="advantage-title">豊富な経験と専門知識を持つ人材</p>
          <p class="advantage-text">長年の経験と専門知識を持つコンサルタントが、お客様の課題を徹底的に分析し、最適な解決策を提案。<br>幅広い分野の専門家チームが、多角的な視点 で課題解決を支援。</p>
        </div>  
      </div>
      <div class="advantage advantage-bottom">
        <div class="advantage-num-set">
          <img src="<?php echo get_template_directory_uri(); ?>/img/advantage.jpg" alt="95%">
          <p class="advantage-num">03</p>
          <p class="advantage-word"><span>95</span>%</p>
          <p class="advantage-word-sp"><span>95</span>%</p>
        </div>
        <div class="advantage-text-set slide-left show slide-bottom">
          <p class="advantage-title">顧客満足度95%の実績</p>
          <p class="advantage-text">顧客満足度調査で95%という高い評価を獲得。<br>顧客との密接なコミュニケーションを重視し、期待以上の成果を提供。幅広い分野の専門家チームが、多角的な視点 で課題解決を支援。</p>
        </div>  
      </div>
    </div>
  </section>
  <!-- お知らせ -->
  <section id="news-content" class="content">
    <div class="news-container container">
      <div class="content-title">
        <h4 class="back-title">NEWS</h4>
        <h3 class="front-title">／  お知らせ  ／</h3>
      </div>
      
      <div class="news">
        <?php
          //取得したい投稿記事などの条件を引数として渡す
          $args = array(
            // 投稿タイプ
            'post_type' =>  'post',
            // 1ページに表示する投稿数
            'posts_per_page' => 3,
            // 更新順
            'orderby' => 'modified',
          );
          // データの取得
          $posts = get_posts($args);
        ?>

        <?php foreach($posts as $post): ?>
          <?php  setup_postdata($post); ?>
          <div class="news-set">
            <a href="<?php the_permalink(); ?>">
              <div class="news-title">
              <?php  $title = wp_trim_words( get_the_title() ,  9, '...'); ?>
                <?php  echo $title; ?>
              </div>
              <div class="news-text">
                <?php  $content = wp_trim_words( get_the_content() ,  25, '...'); ?>
                <?php  echo $content; ?>
              </div>
            </a>    
          </div>
          <?php endforeach; ?>

        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>
      </div>  
        
    <div class="news-btn"> 
      <a href="<?php echo home_url(); ?>/news">お知らせ一覧へ</a>
    </div> 
  </section>
  <section id="inquiry-content" class="content">
    <div class="inquiry-container container">
      <div class="inquiry">
        <a class="inquiry-btn main-inquiry-btn" href="<?php echo home_url(); ?>/inquiry">お問合せはこちら</a>
      </div>
    </div>  
  </section>
</main>
<?php get_footer(); ?>