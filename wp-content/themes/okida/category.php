<?php if (is_category(2) or is_category( get_term_children( 2, 'category' ) )) { 
        require 'category-portfolio.php';
    } else if (is_category(5)){
        require 'category-blog.php';
    } else if (is_category(3) or is_category(get_term_children(3,'category'))){
        require 'category-musicateatro.php';
    }
    else{
        require '404.php';
    }
?>
