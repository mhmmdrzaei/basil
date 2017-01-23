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


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <h3 class="headerFont">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h3>

     <div class="menuToggle" id="menuToggle">
       Menu
     </div>
    <div class="menuContent away" >
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
        
      </div>
    <div class="creditsHeader">
      <?php $the_query = new WP_Query( 'page_id=13' ); ?>

      <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
        
        <div class="creditsToggle">
          <?php the_post_thumbnail( 'medium' ) ?>  
        </div>      
          <div class="creditsContent away">
            <?php the_content(); ?>
              
            </div>   

          



        <?php endwhile;?>
    </div>
  </div> <!-- /.container -->
</header><!--/.header-->

