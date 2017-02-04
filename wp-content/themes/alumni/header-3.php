<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet" />
  <?php wp_head(); ?>
  </head>
  <body class="b-bdy">
    <header id="header">
      <div class="container">
        <div class="header_top">
            <h1><a href="<?php echo home_url(); ?>">OUR MEMORY</a></h1>
        </div>

        <div class="header_bottom">
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <!-- <a class="navbar-brand" href="#">Brand</a> -->
            </div>
            <div class="collapse navbar-collapse navbar-middle navbar-main-collapse" id="bs-example-navbar-collapse-1">
                <nav class="navbar navbar-default navbar-custom" role="navigation">
                     <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li role="presentation" class="active"><a href="<?php echo home_url(); ?>">TOP</a></li>
                          <li role="presentation"><a href="<?php echo home_url(); ?>/blog">同窓会</a></li>
                          <li role="presentation"><a href="<?php echo home_url(); ?>/gallery">写真</a></li>
                          <li role="presentation"><a href="<?php echo home_url(); ?>/association">交流</a></li>
                          <li role="presentation"><a href="<?php echo home_url(); ?>/book">本紹介</a></li>
                        </ul>
                    </div>
                    <hr>
                </nav>
            </div>
        </div>
      </div>
    </header><!--/header-->

    <main>
        <section class="topslide2">
        　 <div class="row">
        	<div class="col-md-5 topword">
        		<h2>
        		    <?php if ( is_page('association') ) { echo 'communication';} ?>
        		    <?php if ( is_page('gallery') ) { echo 'picture gallery';} ?>
        		    <?php if ( is_archive('blog') ) { echo 'Histroy of Alumni';} ?>
        		    <?php if ( is_single() ) { echo 'Histroy of Alumni';} ?>
        		    <?php if ( is_page('book') ) { echo 'book';} ?>
        		</h2>
        	</div>
        	<div class="col-md-7 topslide2Image">
        		<img src="<?php bloginfo('template_url' ); ?>/img/topslide2.jpg" alt="">
        	</div>
        </div>
        </section>
