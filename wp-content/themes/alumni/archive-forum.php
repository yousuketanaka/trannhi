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
		
			<div id="forum-front" class="bbp-forum-front">
				<h1 class="entry-title"><?php bbp_forum_archive_title(); ?></h1>
				<div class="entry-content">
		
					<?php bbp_get_template_part( 'content', 'archive-forum' ); ?>
		
				</div>
			</div><!-- #forum-front -->
		
			<?php do_action( 'bbp_after_main_content' ); ?>
       </div>
       <div class="col-md-4">
    	  <?php get_sidebar(); ?>
       </div>
    </div>
</section>
</main>


<?php get_footer(); ?>
