<?php
/*
Template Name: page2 
*/
?>

<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>


<section class="bookSection" id="bookSectionPart">
	<div class="container">
	   <div class="row">
	   <div class="col-md-8">
	         <h2 class="book-title">本の紹介</h2>
              <?php if ( have_posts()): ?>
    	   	  　　　<div class="row">
    	   	  　　　    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-6 col-sm-6 Areabox">
                            <div class="box">
                                <?php
                                // get an image field
                                $image = get_field('picture');
                                
                                // each image contains a custom field called 'link'
                                $link = get_field('link', $image['ID']);
                                
                                // render
                                ?>
                                <a href="<?php echo $link; ?>">
                                 <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </a>
                                <div class="box-content">
                                    <h3 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="description">
                                        <?php the_field('author',$post->ID); ?>
                                    </p>
                                    <p class="year">
                                        <?php the_field('year',$post->ID); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    </div>
    	   	  <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
              <?php endif; ?>
       </div>
       <div class="col-md-4">
    	  <?php get_sidebar('book'); ?>
       </div>
       </div>
    </div>
</section>
</main>

<?php get_footer(); ?>