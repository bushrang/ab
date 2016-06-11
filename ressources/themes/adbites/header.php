<!DOCTYPE html>
<html lang="de">
  <head>
  
    <title><?php wp_title(); ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

    <link rel="icon" href="../../favicon.ico">


    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
	<link rel="stylesheet" href="http://dev2.adbites.de/wp-content/themes/adbites-child/animate.css"> 

<!-- 	 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.min.css"> -->


<!--     <script src="<?php bloginfo('template_url'); ?>/assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,700' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Featured Image abgreifen fuer Blogposts -->
<?php

if (has_post_thumbnail()) { //if a thumbnail has been set

	$imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
	$featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
	$imgURL = $featuredImage[0]; //get the url of the image out of the array

	?>
	<style type="text/css">

    .blogheadimg {
        border:none;
        color:black;
        background-image:
    linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
    url('<?php echo $imgURL ?>');        
		}

  </style>

  <?php
}//end if

?>

<!-- Featured Image Ende -->


<!-- Featured Image abgreifen fuer Cases -->
<?php

if (has_post_thumbnail()) { //if a thumbnail has been set

	$imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
	$featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
	$imgURL = $featuredImage[0]; //get the url of the image out of the array

	?>
	<style type="text/css">

    .caseheadimg {
        border:none;
        color:black;
        background-image:
    linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
    url('<?php echo $imgURL ?>');        
		}

  </style>

  <?php
}//end if

?>

<!-- Featured Image Ende -->



 
  </head>
<!-- NAVBAR
================================================== -->
  <body <?php body_class(); ?>>
 
  
  
  <!-- Navbar neu -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
        <p style="color:#fff; font-size: 14px;">Menü</p>
      </button>
      	   <a class="navbar-brand logo1" href="<?php echo home_url(); ?>"><img src="http://dev3.adbites.de/ressources/assets/logo_black.png"></a>

       <a class="navbar-brand logo2" href="/"><img src="http://dev3.adbites.de/ressources/assets/logo_social.png"></a>
       <a class="navbar-brand logo2" href="/"><img src="http://dev3.adbites.de/ressources/assets/logo_digital.png"></a>
       <a class="navbar-brand logo2" href="/"><img src="http://dev3.adbites.de/ressources/assets/logo_interactive.png"></a>
    </div>

    
         <div id="navbar" class="navbar-collapse collapse text-center">
         
          <?php 

            $defaults = array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
				'container'			 => false,
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
            );
        

 wp_nav_menu($defaults); ?>

            </div>
          </div>
</nav>
  
