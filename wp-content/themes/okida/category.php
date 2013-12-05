<?php if (is_category( 'portfolio' )) { 
		require 'category-portfolio.php'
	} else if (is_category( 'musica-e-teatro')){ 
		require 'category-musicateatro.php'
	else if (is_category('blog')){
		require 'category-blog.php'
	} else{
		require 'category.php'
	}
?>
