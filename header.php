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
            <a href="#" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_white.svg" alt="Sand Galleryのロゴ"></a>
            <nav class="header-nav">
                <ul>    
                    <li><a href="#">Top</a></li>
                    <li><a href="#concept">Concept</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#artist">Artist</a></li>
                    <li><a href="#info">Information</a></li>
                    <li><a href="#access">Access</a></li>
                </ul>
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
        <ul>
            <li><a href="#">Top</a></li>
            <li><a href="#concept">Concept</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#artist">Artist</a></li>
            <li><a href="#info">Information</a></li>
            <li><a href="#access">Access</a></li>
        </ul>
    </nav> 
