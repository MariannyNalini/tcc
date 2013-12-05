<?php get_header();?>
<section id="portfolio">
  <div class="wrapper">
  <h2 class="title">Portfolio</h2>

  <?php if (have_posts()): ?>

    <?php
      $temp = $wp_query;
      $wp_query= null;
      $wp_query = new WP_Query();
      $wp_query->query('&category_name=portfolio');
    ?>

    <ul class="grid da-thumbs">

      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <li id="post-<?php the_ID(); ?>">
          <a href="<?php the_permalink() ?>" rel="bookmark">
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            }
            else {?>
              <img src="<?php bloginfo('template_directory'); ?>/img/thumb.jpg">
            <?}
          ?>
          <div>
            <span><?php the_title(); ?></span>
          </div>      
          </a>
        </li>

        <?php comments_template(); // Get wp-comments.php template ?>

      <?php endwhile; ?>

    </ul>

  <?php endif; ?>

  <?php $wp_query = null; $wp_query = $temp;?>
  <?php get_sidebar();?>
  <div class="clear"></div>
</div>
</section>

<?php get_footer();?>