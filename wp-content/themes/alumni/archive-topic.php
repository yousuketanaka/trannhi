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
		
			<div id="topic-front" class="bbp-topics-front">
				<h1 class="entry-title"><?php bbp_topic_archive_title(); ?></h1>
				<div class="entry-content">
		
					<?php bbp_get_template_part( 'content', 'archive-topic' ); ?>
		
				</div>
			</div><!-- #topics-front -->
		
			<?php do_action( 'bbp_after_main_content' ); ?>
       </div>
       <div class="col-md-4">
    	  <?php get_sidebar(); ?>
       </div>
    </div>
</section>
</main>

<?php get_footer(); ?>
