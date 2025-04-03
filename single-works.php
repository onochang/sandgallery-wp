<?php get_header(); ?>
<main>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    <h1><?php the_title(); ?></h1>
    <p><?php the_field('works_date'); ?></p>
    <p><?php the_field('works_author'); ?></p>
    <?php the_content(); ?>
</main>
<?php get_footer();