<?php
/*
Template Name: page2 
*/
?>

<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>


<section class="postSection">
        	<div class="container">
        	   <div class="col-md-9">
        	   	  <article class="alumniSingle">
        	   	  	<div class="SingleContent">
        	   	  		<div class="SingleleHead">
                            <?php while(have_posts()): the_post(); ?>
                                 <h4><span><a href="<?php the_permalink(); ?>">
                                 <time datetime="<?php the_time('y-m-d'); ?>"></time>
                                 <?php the_time( get_option('date_format') ); ?></a></span>
                                 </h4>
                                 <?php the_content(); ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
        	   	  </article>
        	   </div>
        	   <div class="col-md-3">
    	   <?php get_sidebar(); ?>
       </div>
    </div>
</section>
</main>

<?php get_footer(); ?>