<?php get_header(); ?>
<section id="blog">
	<div class="wrapper">
		<h2 class="title">Blog</h2>
	<!-- section -->
	<section role="main">
		<ul class="grid da-thumbs">
	
		<?php get_template_part('loop-tag'); ?>
		
		<?php get_template_part('pagination'); ?>
		</ul>
	</section>
	<!-- /section -->

<?php get_sidebar(); ?>
</div>
</section>
<?php get_footer(); ?>