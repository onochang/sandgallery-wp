<?php
/*
 * Template Name: カスタムテンプレートのお問い合わせ
 */
get_header(); ?>
<h1>カスタムテンプレートのお問合せページです。</h1>
<main id="main-content">
  <h1><?php the_title(); ?></h1>

  <div class="page-content">
    <?php
      while ( have_posts() ) :
        the_post();
        the_content();
      endwhile;
    ?>
  </div>

  <!-- お問い合わせフォーム（例としてContact Form 7を使用） -->
  <div class="contact-form">
    <?php echo do_shortcode('[contact-form-7 id="123" title="コンタクトフォーム"]'); ?>
  </div>
</main>

<?php get_footer(); ?>