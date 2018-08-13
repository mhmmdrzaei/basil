<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,700|Permanent+Marker" rel="stylesheet">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>
<!-- <?php
  //$bg = array('line1.png', 'line2.png', 'line3.png', 'line4.png' ); // array of filenames

  //$i = rand(0, count($bg)-1); // generate random number size of the array
  //$selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?> -->

<body <?php body_class(); ?>">

<header>
  <div class="container wrapper">
<div class="headerContent">
  <h1 class="headerFont">
    <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
      <?php bloginfo( 'name' ); ?>
    </a>
  </h1>
    <div class="fuckyou" id="">
     <div class="fa fa-bars " title="menu">
      <div id="nav-icon4">
       <span></span>
       <span></span>
       <span></span>
     </div>
     </div>
  
     
   </div> 
   <div class="Menuflex wrapper" id="Menuflex">
     <button href="#" class="menu-btn">
     <div class="menuToggle" id="menuToggle">
         <div class="loading-bar option1">
           <div class="loading"></div>
         </div>
           <div class="loading-bar option1">
           <div class="loading"></div>
         </div>
           <div class="loading-bar option1">
           <div class="loading"></div>
         </div>
     </div>
     </button>
         <div class="menu" id="menu" >
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
        <div class="extraMenu">
          <a href="<?php the_permalink(13); ?>">Projects, Services & Collaborations </a>
          <a href="#" class="shopMenu">BLZ BLZ Shop</a>
        </div>
      </div>
   </div>
</div>

  </div> <!-- /.container -->
</header><!--/.header-->

