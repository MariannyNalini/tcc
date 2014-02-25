<?php get_header();?>
<?
    $id = get_query_var('cat');
    $title = single_cat_title( '', false );
    $cat_name = get_category(get_query_var('cat'))->name;
    echo $cat_name;
    
    if ($id==7 || $id==8 || $id==3)
    {
        $idsection ="music-and-theater";
    }
    
    if ($id==2 || $id==9 || $id==10 || $id==11 || $id==12 || $id==13)
    {
        $idsection ="portfolio";
    }
    
    if ($id==5)
    {
        $idsection ="blog";
    }


    
?>
<section id="<?=$idsection;?>">
  <div class="wrapper">
  <h2 class="title"><?=$title;?></h2>

  <?php if (have_posts()): ?>

    <?php
      $temp = $wp_query;
      $wp_query= null;
      $wp_query = new WP_Query();
      $wp_query->query("&cat=" .$id);
    ?>

    <ul class="grid da-thumbs">

      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <li id="post-<?php the_ID(); ?>">
          <a href="<?php the_permalink() ?>" rel="bookmark">
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            }
            else {?>
              <img src="<?php bloginfo('template_directory'); ?>/img/thumb.jpg">
            <?}
          ?>
          <div>
            <span><?php echo(limit_words(get_the_title(),4)); ?></span>
          </div>      
          </a>
        </li>

        <?php comments_template(); // Get wp-comments.php template ?>

      <?php endwhile; ?>

    </ul>

  <?php endif; ?>

  <?php $wp_query = null; $wp_query = $temp;?>
  <?php get_sidebar();?>
  <div class="clear"></div>
</div>
</section>

<?php get_footer();?>