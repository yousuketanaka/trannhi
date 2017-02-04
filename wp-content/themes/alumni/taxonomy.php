<?php
/*
Template Name: page2 
*/
?>

<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>


<section class="postSection">
	<div class="container">
	    <h2>
           <?php 
                $taxonomy = $wp_query->get_queried_object(); 
                echo esc_html($taxonomy->name);
           ?>
        </h2> 
	   <div class="col-md-8">
              <?php if ( have_posts()): ?>
    	   	  　　　<div class="row">
    	   	  　　　    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-6 col-sm-6">
                            <div class="box">
                                <?php
                                // get an image field
                                $image = get_field('picture');
                                
                                // each image contains a custom field called 'link'
                                $link = get_field('link', $image['ID']);
                                
                                // render
                                ?>
                                <a href="<?php echo $link; ?>">
                                 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </a>
                                <div class="box-content">
                                    <h3 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="description">
                                        <?php the_field('author',$post->ID); ?>
                                    </p>
                                    <p class="year">
                                        <?php the_field('year',$post->ID); ?>
                                    </p>
                                    <p class="year">
                                        <?php the_field('description',$post->ID); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                 
                        <!--<div class="col-md-6 col-sm-6">-->
                        <!--    <div class="box">-->
                        <!--        <img src="images/img-2.jpg" alt="">-->
                        <!--        <div class="box-content">-->
                        <!--            <h3 class="title">Kristiana</h3>-->
                        <!--            <p class="description">-->
                        <!--                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec pretium magna. Etiam elementum lorem et leo sagittis dapibus. Curabitur magna ligula, fermentum a ipsum.-->
                        <!--            </p>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    <?php endwhile; ?>
                    </div>
    	   	  <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
              <?php endif; ?>
       </div>
       <div class="col-md-4">
    	  <?php get_sidebar('book'); ?>
       </div>
    </div>
</section>
</main>

<?php get_footer(); ?>