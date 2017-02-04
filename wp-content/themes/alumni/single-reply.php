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
		
			<?php if ( bbp_user_can_view_forum( array( 'forum_id' => bbp_get_reply_forum_id() ) ) ) : ?>
		
				<?php while ( have_posts() ) : the_post(); ?>
		
					<div id="bbp-reply-wrapper-<?php bbp_reply_id(); ?>" class="bbp-reply-wrapper">
						<h1 class="entry-title"><?php bbp_reply_title(); ?></h1>
						<div class="entry-content">
		
							<?php bbp_get_template_part( 'content', 'single-reply' ); ?>
		
						</div><!-- .entry-content -->
					</div><!-- #bbp-reply-wrapper-<?php bbp_reply_id(); ?> -->
		
				<?php endwhile; ?>
		
			<?php elseif ( bbp_is_forum_private( bbp_get_reply_forum_id(), false ) ) : ?>
		
				<?php bbp_get_template_part( 'feedback', 'no-access' ); ?>
		
			<?php endif; ?>
		
			<?php do_action( 'bbp_after_main_content' ); ?>
       </div>
       <div class="col-md-4">
    	  <?php get_sidebar("page"); ?>
       </div>
    </div>
</section>
</main>



<?php get_footer(); ?>
