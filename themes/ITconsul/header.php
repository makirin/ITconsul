<!DOCTYPE html>
<html>

<head>
  <title>ITコンサル株式会社 -ITで日本を前進させる-</title>
  <meta charset="UTF-8">
  <meta name="description" content="ITコンサルタントとして、豊富な経験と専門知識を持つ人材による データ分析に基づく戦略立案で新規事業の企画、既存事業のデジタル化なども支援。人材を育成する研修プログラムを提供。オーダーメイド研修も実施可能。お客様のビジネスを成長させます。">
  <meta name="viewport" content="Width=device-width,initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body>
  <div>
    <header>
      <div class="header_container">
        <a class="title" href="<?php echo home_url(); ?>/index.php">ITコンサル株式会社</p>
        <!-- pc用 -->
        <div class="menu-pc">
          <a class="menu-text" href="<?php echo home_url(); ?>/#business-content">事業内容</a>
          <a class="menu-text" href="<?php echo home_url(); ?>/company-info">会社情報</a>
          <a class="inquiry-btn" href="<?php echo home_url(); ?>/inquiry">お問合せ</a>
        </div>
        <!-- スマホ用メニューボタン -->
        <div id="menu-sp">
          <img src="<?php echo get_template_directory_uri(); ?>/img/menu_sp.png" alt="ナビゲーションを開く" onclick="document.getElementById('nav-sp').style.display = 'block'">
        </div>
        <!-- スマホ用ナビゲーション -->
        <div id="nav-sp">
          <div id="close">
          <img src="<?php echo get_template_directory_uri(); ?>/img/button-close.png" alt="ナビゲーションを閉じる" onclick="document.getElementById('nav-sp').style.display = 'none'">
          </div>
          <div class="menu-set">
            <a class="menu-title" href="<?php echo home_url(); ?>/#business-content" onclick="document.getElementById('nav-sp').style.display = 'none'">事業内容</a>
            <a class="menu-title" href="<?php echo home_url(); ?>/company-info">会社情報</a>
            <a class="inquiry-btn" href="<?php echo home_url(); ?>/inquiry">お問合せ</a>
          </div>
        </div>
      </div>

    </header>  