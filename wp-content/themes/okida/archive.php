<?php get_header(); ?>
<section id="blog">
  <div class="wrapper">
  <h2 class="title">Blog</h2>	
	<!-- section -->
	<section role="main">
	<ul class="grid da-thumbs">
		<?php if (have_posts()) : ?>
   			<?php while (have_posts()) : the_post(); ?>
     			
     				<li id="post-<?php the_ID(); ?>">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
							 <?php
            					if ( has_post_thumbnail() ) {
              						the_post_thumbnail();
            					}
            					else {?>
              						<img src="<?php bloginfo('template_directory'); ?>/img/thumb.jpg">
            				<?}?>
            				<div>
            					<span><?php echo(limit_words(get_the_title(),4)); ?></span>
          					</div>
						</a>
					</li>
				
    <?php endwhile; ?>
    </ul>
<?php get_sidebar(); ?>

<div class="navigation">
<div class="alignleft">
<?php posts_nav_link('','','&laquo; Página Anterior') ?>
</div>
<div class="alignright">
<?php posts_nav_link('','Próxima Página &raquo;','') ?>
</div>
  </div>
<?php else : ?>
  <h2 class="center">Not Found</h2>
 <p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
  <?php endif; ?>
	
	</section>
	<!-- /section -->
	
</div>
<div class="clearfix"></div>
</section>

<?php get_footer(); ?>