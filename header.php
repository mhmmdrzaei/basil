<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Overpass:300" rel="stylesheet">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>
<?php
  $bg = array('line1.png', 'line2.png', 'line3.png', 'line4.png' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<body <?php body_class(); ?> style="background-image: url('<?php bloginfo('template_directory'); ?>/images/<?php echo $selectedBg; ?>');">

<header>
  <div class="container">
<div class="headerContent">
  <h3 class="headerFont">
    <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
      <?php bloginfo( 'name' ); ?>
    </a>
  </h3>
    <div class="fuckyou" id="">
     <div class="fa fa-bars " title="menu">
      <div id="nav-icon4">
       <span></span>
       <span></span>
       <span></span>
     </div>
     </div>
  
     
   </div> 
   <div class="Menuflex" id="Menuflex">
     <div class="menuToggle" id="menuToggle">
       Menu
     </div>
         <div class="menuContent away" >
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
        
      </div>
   </div>
</div>

  </div> <!-- /.container -->
</header><!--/.header-->

