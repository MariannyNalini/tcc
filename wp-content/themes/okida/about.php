<section id="about">
  <a name="section-about"></a>
  <div class="wrapper">
  <h2 class="title">Sobre</h1>

  <?php if (have_posts()): ?>

    <?php
      $temp = $wp_query;
      $wp_query= null;
      $wp_query = new WP_Query();
      $wp_query->query('pagename=sobre');
    ?>

    <article id="okida">

      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <p id="post-<?php the_ID(); ?>">
          <?php the_content(); // Dynamic Content ?>
        </p>

    </article>
      <aside>
        <div class="photo">
          <span class="border"></span>
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail(array(310,210));
            }
            else {?>
              <img src="<?php bloginfo('template_directory'); ?>/img/thumb.jpg">
          <?}?>
          <ul>
            <li>
              <a href="http://lattes.cnpq.br/2911434293195944" target="_blank">CURRICULO LATTES</a>
            </li>
            <li>
              <a href="interna/blog-namidia.html">NA MÍDIA</a>
            </li>
          </ul>
        </div>
      </aside>

      <?php endwhile; ?>

    </ul>

  <?php endif; ?>

  <?php $wp_query = null; $wp_query = $temp;?>
  <div class="clear"></div>
</div>
</section>