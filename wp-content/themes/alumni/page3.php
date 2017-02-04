<?php
/*
Template Name: page3 
*/
?>

<?php get_header(); ?>

<section class="loginSection">
	<div class="container">
	   <div class="loginFrame">
	   	  <div class="pictureSlide">
              <?php while(have_posts()): the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
	   	  </div>
	   </div>
	</div>
</section>

<?php get_footer(); ?>