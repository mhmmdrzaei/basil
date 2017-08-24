<?php get_header();  ?>

<div class="main">
<div id="space-invader"></div>
  <div class="container">
<div class="cContainer frontMinHeight">
      <div class="creditsSide hideAtSize frontPageOnly">
         <div class="creditsHeader">
                <?php $the_query = new WP_Query( 'page_id=13' ); ?>
           
                <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
           
            <div class="creditsToggle">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 400 400">
              <defs>
                <!-- The text path: see links above regarding coordinate system -->
                <path d="M0, 200a200, 200 0 1, 0 400, 0a200, 200 0 1, 0 -400, 0" id="txt-path"></path>
              </defs>

              <text fill="#848484" font-size="59" font-weight="600">
                <!-- This is the magic -->
                <textPath startOffset="0" xlink:href="#txt-path">PROJECTS, COLLABORATIONS AND SERVICES</textPath>
              </text>
            </svg>
            </div>      
            <div class="creditsContent away">
            <span class="close thick"></span>
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
            <div class="itemLinkeachFront">
                  <?php $image = get_sub_field('link_png_image');
                      if( !empty($image) ): ?>
                          <a href="<?php the_sub_field('link_frontpage'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
                          <a href="<?php the_sub_field('link_frontpage'); ?>"><p class="frontpagename"> 
                              <?php the_sub_field('link_label_name'); ?>
                          </p></a>
                          
                     
        <?php endif; ?>
        </div>
    <?php endwhile; ?>
      </div>
      
   
  
        <?php endwhile; // end the loop?>
      </div> <!-- /,content -->
            <div class="creditsSide showAtSize">
   <div class="creditsHeader">
          <?php $the_query = new WP_Query( 'page_id=13' ); ?>
     
          <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
     
      <div class="creditsToggled">
      <div class="creditsContent away">
      <span class="close thick"></span>
        <?php the_content(); ?>
          
        </div> 
      <a href="<?php the_permalink(13); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/projectetchorizontal.png" alt=""> </a>
      </div>      
  
     
      <?php endwhile;?>
     </div>
  </div>
      </div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>