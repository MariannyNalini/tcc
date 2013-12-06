<?php get_header(); ?>
	
	<?php
		$post = $wp_query->post;
		/* se for a categoria blog */
		if (in_category('blog')) {
		include (TEMPLATEPATH.'/single-blog.php');
		return;
		}
		/* se for a categoria portfolio */	
		if (in_category('portfolio')) {
		include (TEMPLATEPATH.'/single-portfolio.php');
		return;
		}
		if (in_category('musica-e-teatro')) {
		include (TEMPLATEPATH.'/single-musicateatro.php');
		return;
		}
		/* se não for nenhuma das categorias acima */
		else { ?>
		<? include (TEMPLATEPATH.'/single-blog.php'); ?>
	<?php } ?>
	
>