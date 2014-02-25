<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- article -->
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
            <span><?php echo(limit_words(get_the_title(),4)); ?></span>
          </div>      
          </a>
	</li>
	<!-- /article -->
	
<?php endwhile; ?>
<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
