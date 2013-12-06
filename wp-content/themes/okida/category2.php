<?
$category = get_the_category(get_query_var('cat'));

// once you have the category array, the rest of the code will work wherever you want on the page 

//# getting the main category of the page
$catid=$category[0]->category_parent;
if($catid==0){
  $catid=$category[0]->cat_ID;
}

//# now letz get the children categories of the main category
$categories = get_categories('child_of='.intval($catid));       

foreach ($categories as $category) {
    //# check if it is a real parent category with subcategories
    if ($category->parent ==$catid):
        echo '<span class="category"><a href="">'.$category->cat_name.'</a></span>';
        //# here we go, getting the subcategories
        $subcategories=  get_categories('child_of='.intval($category->cat_ID));
        foreach ($subcategories as $subcategory) {
            echo '<span class="subcategory" style="padding-left:12px">';
            echo '<a href="">'.$subcategory->cat_name.'</a></span>';
        }
    endif;
}?>

<?php if (is_category( 'portfolio' )) { 
		require 'category-portfolio.php';
	} else if (is_category( 'musica-e-teatro')){ 
		require 'category-musicateatro.php';
	} else if (is_category('blog')){
		require 'category-blog.php';
	} 
?>
