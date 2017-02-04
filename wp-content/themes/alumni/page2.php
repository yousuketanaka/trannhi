<?php
/*
Template Name: page2 
*/
?>

<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>


<section class="postSection">
	<div class="container">
	   <div class="col-md-7">
          <?php while(have_posts()): the_post(); ?>
             <?php the_content(); ?>
          <?php endwhile; ?>
       </div>
       <div class="col-md-1"></div>
       <div class="col-md-4">
    	  <?php get_sidebar(); ?>
       </div>
    </div>
</section>
</main>

<?php get_footer(); ?>