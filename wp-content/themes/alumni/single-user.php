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

			<div id="bbp-user-<?php bbp_current_user_id(); ?>" class="bbp-single-user">
				<div class="entry-content">
		
					<?php bbp_get_template_part( 'content', 'single-user' ); ?>
		
				</div><!-- .entry-content -->
			</div><!-- #bbp-user-<?php bbp_current_user_id(); ?> -->
		
			<?php do_action( 'bbp_after_main_content' ); ?>
       </div>
       <div class="col-md-4">
    	  <?php get_sidebar("page"); ?>
       </div>
    </div>
</section>
</main>


<?php get_footer(); ?>
