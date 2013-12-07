<section id="phrase">
  <div class="wrapper">
  <?php if (have_posts()): ?>

    <?php
      $temp = $wp_query;
      $wp_query= null;
      $wp_query = new WP_Query();
      $wp_query->query('pagename=frase');
    ?>

    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

      
          <?php the_content(); // Dynamic Content ?>
       

      <?php endwhile; ?>

  <?php endif; ?>

  <?php $wp_query = null; $wp_query = $temp;?>
  <div class="clear"></div>
</div>
</section>