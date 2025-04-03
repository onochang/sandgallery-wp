<?php get_header(); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<article class="works-post">
    <a href="<?php the_permalink(); ?>">
        <img class="works-thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
        <h2 class="works-title"><?php the_title(); ?></h3>
    </a>
</article>
<?php endwhile;?>
<?php else: ?>
<p>投稿がありません。</p>
<?php endif; ?>
<?php get_footer(); ?>