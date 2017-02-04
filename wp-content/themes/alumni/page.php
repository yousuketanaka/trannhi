
<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>

<section class="postSection">
	<div class="container">
	   <div class="pictureGallery">
	   	  <div class="pictureSlide">
              <?php while(have_posts()): the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
	   	  </div>
	   </div>
	</div>
</section>

<?php get_footer(); ?>