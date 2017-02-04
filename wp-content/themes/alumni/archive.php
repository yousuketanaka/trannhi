<?php
/*
Template Name: page2 
*/
?>

<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>


<section class="postSection">
	<div class="container">
	   <div class="col-md-7">
	      <?php if ( have_posts()): ?>
          <?php while ( have_posts() ) : the_post(); ?>
	   	  <article class="alumniPage">
	   	  	<div class="articleContent">
	   	  		<div class="articleHead">
	   	  			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	   	  			<p><span><a href="<?php the_permalink(); ?>">
                        <time datetime="<?php the_time('y-m-d'); ?>"></time><?php the_time( get_option('date_format') ); ?></a></span></p>
   	  			    <hr>
	   	  		</div>
	   	  		<div class="articleBody">
	   	  			<a href="<?php the_permalink(); ?>">
                     <?php if ( has_post_thumbnail() ) :
                     the_post_thumbnail('post-thumbnails');
                     else :
                     echo '<img src="';
                     bloginfo( 'template_url' );
                     echo '/images/the_post_thumbnail_default.png" alt="デフォルト画像" />';
                     endif; ?>
                     </a>
	   	  			<p><?php the_excerpt(); ?></p>
	   	  		</div>
	   	  	</div>
	   	  </article>
	   	  <?php endwhile; ?>
	   	  <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
          <?php endif; ?>
	   </div>
	   <div class="col-md-1"></div>
	   <div class="col-md-4">
	   	  <?php get_sidebar(); ?>
	   </div>
	</div>
</section>

</main>

<?php get_footer(); ?>