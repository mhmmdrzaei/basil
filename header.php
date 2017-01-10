<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
    <div class="creditsHeader">
      <?php $the_query = new WP_Query( 'page_id=13' ); ?>

      <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
        
        <div class="toggle">
          <?php the_post_thumbnail( 'medium' ) ?>        
          <div class="toggle-content">
            <?php the_content(); ?>
              
            </div>   

          </div>



        <?php endwhile;?>
    </div>
  </div> <!-- /.container -->
</header><!--/.header-->

