<?php if (is_category(3) or is_category( get_term_children( 3, 'category') )){ 
		require 'category-musicateatro.php';
	} else if (is_category('blog') or is_category( get_term_children('blog', 'category') )){
		require 'category-blog.php';
	} else if (is_category('portfolio') or is_category( get_term_children( 'portfolio', 'category' ) )) { 
        require 'category-portfolio.php';
    } else{
        require '404.php';
    }
?>
