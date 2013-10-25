<div id="blog">
  <h1>blog</h1>

  <?php if (have_posts()): ?>

    <?php
      $temp = $wp_query;
      $wp_query= null;
      $wp_query = new WP_Query();
      $wp_query->query('showposts=5'.'&paged='.$paged.'&category_name=blog');
    ?>

    <ul>

      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <li class="postWrapper" id="post-<?php the_ID(); ?>">

          <h2 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <small><?php the_date(); ?> by <?php the_author(); ?></small>

          <div class="post"><?php the_content(__('(more...)')); ?></div>
          <p class="postMeta">Category: <?php the_category(', ') . " " . the_tags(__('Tags: '), ', ', ' | ') . comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')) . edit_post_link(__('Edit'), ' | '); ?></p>

          <hr class="noCss" />
        </li>

        <?php comments_template(); // Get wp-comments.php template ?>

      <?php endwhile; ?>

    </ul>

  <?php endif; ?>

  <?php $wp_query = null; $wp_query = $temp;?>

</div>