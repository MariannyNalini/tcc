<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<li id="post-<?php the_ID(); ?>">
	<a href="<?php the_permalink() ?>" rel="bookmark">
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail('small');
            }
            else {?>
              <img src="<?php bloginfo('template_directory'); ?>/img/thumb.jpg">
            <?}
          ?>
          <div>
            <span><?php echo(limit_words(get_the_title(),4)); ?></span>
          </div>      
          </a>
	<!-- .entry-meta -->
</li><!-- #post -->
