<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">
		<div class="wrapper">
			<h1><?php the_category(); ?></h1>
		
			<?php get_template_part('loop'); ?>
			
			<?php get_template_part('pagination'); ?>
		</div>
	</section>
	<!-- /section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>