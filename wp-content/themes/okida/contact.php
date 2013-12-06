<section id="contact">
  <a name="section-contact"></a>
  <div class="wrapper">
  <h2 class="title">Contato</h1>

  <?php if (have_posts()): ?>

    <?php
      $temp = $wp_query;
      $wp_query= null;
      $wp_query = new WP_Query();
      $wp_query->query('pagename=contato');
    ?>

    <form>

      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <p id="post-<?php the_ID(); ?>">
          <?php the_content(); // Dynamic Content ?>
        </p>

    </form>

      <?php endwhile; ?>

    </ul>

  <?php endif; ?>

  <?php $wp_query = null; $wp_query = $temp;?>
  <div class="clear"></div>
</div>
</section>