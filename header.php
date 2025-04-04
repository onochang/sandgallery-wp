<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sand Gallery</title>
    <?php wp_head(); ?>
</head>

<body>

    <!-- ヘッダー -->
    <header class="header">
        <div class="header-container">
            <a href="<?php echo home_url('/'); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_white.svg" alt="Sand Galleryのロゴ"></a>
            <nav class="header-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu', // ヘッダーメニューを表示
                'container'      => false, // <nav> で囲まない
                'menu_class'     => false, // <ul> のクラス
            ));
            ?>
            </nav>
            <!-- スマホ閲覧時のみ表示 -->
            <div class="mobile-menu" id="mobile-menu">
                <div class="mobile-menu-border"></div>
                <div class="mobile-menu-border"></div>
            </div>
            <!-- ここまで -->
        </div>
    </header>

    <!-- モバイルナビゲーション -->
    <nav class="mobile-nav" id="mobile-nav">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'mobile-menu', // モバイル用メニュー
        'container'      => false,
        'menu_class'     => false,
    ));
    ?>
    </nav> 
