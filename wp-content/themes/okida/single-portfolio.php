<section id="portfolio">
	<div class="wrapper">
		<h2 class="title">Portfolio</h2>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<!-- post thumbnail -->
		
		<h2 class="post-title">
			<?php the_title(); ?>
		</h2>
		<p class="categories">
			<?php _e( 'Categoria: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>


		<div class="post-image">
		<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
			<?php the_post_thumbnail(); // Fullsize image for the single post ?>
		<?php endif; ?>
		</div>

		<?php the_content(); // Dynamic Content ?>
						
	</article>
	<!-- /article -->
	
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		
		<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		
	</article>
	<!-- /article -->

<?php endif; ?>
<?php get_sidebar(); ?>

</div>
<div class="clearfix"></div>
</section>
<?php get_footer(); ?>