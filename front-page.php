<?php get_header();  ?>

<div class="main">
  <div class="container">
<div class="cContainer">
      <div class="creditsSide">
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
      </div>
  
      <div class="content">
  
        <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          
              
              <div class="itemLink">
                <?php while( has_sub_fields('links_on_page_') ): ?>
            <div class="itemLinkeach">
                  <?php $image = get_sub_field('link_png_image');
                      if( !empty($image) ): ?>
                          <a href="<?php the_sub_field('link_frontpage'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
                          <p><?php the_sub_field('link_label_name'); ?></p>
                     
        <?php endif; ?>
        </div>
    <?php endwhile; ?>
      </div>
      
   
  
        <?php endwhile; // end the loop?>
      </div> <!-- /,content --></div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>