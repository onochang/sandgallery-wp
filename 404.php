<?php get_header(); ?>
<main>
<?php
// 最新の投稿からサムネイルを取得
$thumbnails = [];

$args = [
    'posts_per_page' => 10, // 取得する投稿数
    'post_type'      => 'works',
    'orderby'        => 'date',
    'order'          => 'DESC',
];

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        if (has_post_thumbnail()) {
            $thumbnails[] = get_the_post_thumbnail_url(get_the_ID(), 'full');
        }
    }
}

// クエリをリセット
wp_reset_postdata();

// サムネイルをランダムに表示
if (!empty($thumbnails)) {
    shuffle($thumbnails);
    echo '<img src="' . esc_url($thumbnails[0]) . '" alt="Random Thumbnail">';
} else {
    echo '<p>サムネイル画像がありません。</p>';
}
?>
</main>
<?php get_footer();