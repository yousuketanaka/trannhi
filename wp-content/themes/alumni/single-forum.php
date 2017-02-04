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
		
				<?php if ( bbp_user_can_view_forum() ) : ?>
		
					<div id="forum-<?php bbp_forum_id(); ?>" class="bbp-forum-content">
						<h1 class="entry-title"><?php bbp_forum_title(); ?></h1>
						<div class="entry-content">
		
							<?php bbp_get_template_part( 'content', 'single-forum' ); ?>
		
						</div>
					</div><!-- #forum-<?php bbp_forum_id(); ?> -->
		
				<?php else : // Forum exists, user no access ?>
		
					<?php bbp_get_template_part( 'feedback', 'no-access' ); ?>
		
				<?php endif; ?>
		
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
