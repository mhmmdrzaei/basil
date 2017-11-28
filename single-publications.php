<?php get_header();  ?>

<div class="main">
<div id="space-invader"></div>
  <div class="container">
    <div class="cContainer">
      <div class="sidebarProjects">
 <div class="containerCube cubeProjects">
  <a href="https://www.mijnwebwinkel.nl/webwinkel-gesloten"> <div class="axis">
     <div class="front">BZL BZL</div>
     <div class="back">BZL BZL</div>
     <div class="left">BZL BZL</div>
     <div class="right">BZL BZL</div>
     <div class="top"></div> 
     <div class="bottom"></div>
   </div> </a>
 </div>
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

         <text fill="#848484" font-size="51" font-weight="400" letter-spacing="2px">
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
 <div class="sidebarblog singleSide">
   <h2 style="margin-bottom: 0"><a href="/publications">Publications:</a></h2>
   <?php  dynamic_sidebar( 'publications-widget-area' ); ?>
       <?php $the_query = new WP_Query( 'page_id=13' ); ?>
  
       <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
  
  
   <?php endwhile;?>
   
 </div>
        <div class="content">
      
      
        <?php $dreamBeanQuery = new WP_Query(array(
            // 'post_per_page' => 1,// if you want all its -1
            'post_type' => array( 'publications' ),
            'post_per_page' => array(1 )
        )); ?> 
        
      
        <?php if($dreamBeanQuery-> have_posts()):?>
            <?php while($dreamBeanQuery->have_posts()): ?> 
              <?php $dreamBeanQuery->the_post(); ?>
               <?php $dreamBeanQuery->the_content(); ?> 
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?> 
                      <!-- this will end the and reset and go back to normal so you can go back to normal to your page -->
            <?php endif; ?>

            <div class="yearComplete publicationsMain">

                 <?php if( have_rows('images_publications') ) : ?>
                                      <ul class="bxslider">
                                          <?php while( have_rows('images_publications') ) : the_row(); ?>
                                              <li>
                                                  <?php $image = get_sub_field('publication_images');
                                                      if( !empty($image) ): ?>
                                                          <a href="<?php the_sub_field('publication_images'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
                                                     
                                                      <?php endif; ?>
                                              </li>
                                          <?php endwhile; ?>
                                      </ul><!-- .bxslider -->
                                  <?php endif;  // end gallery repeater field?>
      
                   <div class="contentWelcome">
                  <h2> <?php the_title(); ?></h2>
                      <?php while( has_sub_fields('promo_mat_upload') ): ?>
                        <div class="catalog">
                        
                          <?php 
                      
                          $file = get_sub_field('catalog');
                      
                          if( $file ): ?>
                            
                            <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?><?php the_sub_field('promo_material_download_link_text'); ?></a>
                      
                          <?php endif; ?>
                        
                        </div>
                          <?php endwhile;//end of Promo Material ?>
                  </div>
                     <?php the_content(); ?>
                  
                  
            
              
              
      
                     <!-- credits -->
                    
                   <div class="credits">
                   <h2>Credits and Thank You's:</h2>
                   <p><?php the_field('credits_and_thank_yous_publications'); ?></p>
              
                   </div>
                     
                     
                     
      

      
      
            
      
      </div>
      
      </div> <!-- /,content -->


      </div>


  </div> <!-- /.container -->
</div> <!-- /.main-->


<?php get_footer(); ?>