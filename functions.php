<?php

// Google Fontsのpreconnect設定を追加
function sand_gallery_preconnect_google_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action('wp_head', 'sand_gallery_preconnect_google_fonts', 5);

// CSSとJavaScriptの読み込み
function sand_gallery_enqueue_styles_scripts() {
    // リセットCSS
    wp_enqueue_style(
        'reset-css', 
        'https://cdn.jsdelivr.net/npm/the-new-css-reset@1.11.3/css/reset.min.css'
    );
    
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap'
    );
    
    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css'
    );
    
    // メインスタイル
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/css/styles.css',
        array(),
        '1.0.0'
    );
    
    // タブレット用スタイル
    wp_enqueue_style(
        'tablet-style',
        get_template_directory_uri() . '/css/tablet.css',
        array('main-style'),
        '1.0.0',
        'screen and (max-width: 1024px)'
    );
    
    // スマホ用スタイル
    wp_enqueue_style(
        'mobile-style',
        get_template_directory_uri() . '/css/sp.css',
        array('main-style'),
        '1.0.0',
        'screen and (max-width: 767px)'
    );

    // WordPressに組み込まれているjQueryを読み込む
    wp_enqueue_script('jquery');
    
    // fadeThis.js
    wp_enqueue_script(
        'fade-this',
        get_template_directory_uri() . '/js/jquery.fadethis.min.js',
        array('jquery'),
        '1.0.0',
        true
    );
    
    // メインJS
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/main.js',
        array('jquery', 'fade-this'),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'sand_gallery_enqueue_styles_scripts');

// ツールバーを非表示にするコード
add_filter('show_admin_bar', '__return_false');

// テーマの初期設定
function sand_gallery_setup() {
    // アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');
    // デフォルトのサイズを設定
    set_post_thumbnail_size(800, 400, true);
}
add_action('after_setup_theme', 'sand_gallery_setup');
