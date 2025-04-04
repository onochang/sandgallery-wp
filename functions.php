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

// カスタム投稿
function create_custom_post_type() {
    register_post_type('works',
        array(
            'labels' => array(
                'name'          => '作品',
                'singular_name' => '作品',
                'add_new'       => '新規追加',
                'add_new_item'  => '新しい作品を追加',
                'edit_item'     => '作品を編集',
                'new_item'      => '新しい作品',
                'view_item'     => '作品を表示',
                'search_items'  => '作品を検索',
                'not_found'     => '作品が見つかりません',
                'not_found_in_trash' => 'ゴミ箱に作品はありません',
            ),
            'public'       => true,
            'has_archive'  => true,
            'menu_position' => 5,
            'menu_icon'    => 'dashicons-portfolio',
            'supports'     => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
            'rewrite'      => array('slug' => 'works'),
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_custom_post_type');

// メニュー登録
function my_custom_menus() {
    register_nav_menus(array(
        'header-menu'  => 'ヘッダーメニュー',
        'mobile-menu'  => 'モバイルメニュー',
        'footer-menu'  => 'フッターメニュー',
    ));
}
add_action('after_setup_theme', 'my_custom_menus');
