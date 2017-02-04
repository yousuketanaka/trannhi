<?php
/*
Template Name: page2 
*/
?>

<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>


<section class="postSection">
	<div class="container">
	   <div class="col-md-8">
          <?php do_action( 'bbp_before_main_content' ); ?>

			<?php do_action( 'bbp_template_notices' ); ?>
		
			<?php while ( have_posts() ) : the_post(); ?>
		
				<div id="bbp-new-topic" class="bbp-new-topic">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
		
						<?php the_content(); ?>
		
						<?php bbp_get_template_part( 'form', 'topic' ); ?>
		
					</div>
				</div><!-- #bbp-new-topic -->
		
			<?php endwhile; ?>
		
			<?php do_action( 'bbp_after_main_content' ); ?>

       </div>
       <div class="col-md-4">
    	  <?php get_sidebar("page"); ?>
       </div>
    </div>
</section>
</main>


	
<?php get_footer(); ?>
