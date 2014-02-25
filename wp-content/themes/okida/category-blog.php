<?php get_header(); ?>
<section id="blog">
  <div class="wrapper">
    <h2 class="title">Blog</h2>

  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
      <ul class="grid da-thumbs">
    <?php if ( have_posts() ) : ?>
      <!-- .archive-header -->

      <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>


    <?php else : ?>
      <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>
  </ul>
    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
</div>
<div class="clearfix"></div>
</section>
<?php get_footer(); ?>