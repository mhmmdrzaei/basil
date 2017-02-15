<?php get_header();  ?>

<div class="main">


  <div class="container">
 <div class="cContainer">       <div class="creditsSide hideAtSize">
    <div class="creditsHeader">
           <?php $the_query = new WP_Query( 'page_id=13' ); ?>
      
           <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
      
       <div class="creditsToggle">
       <?php the_post_thumbnail( 'medium' ) ?>  
       </div>      
       <div class="creditsContent away">
       <span class="close thick"></span>
         <?php the_content(); ?>
           
         </div>   
      
       <?php endwhile;?>
      </div>
         </div>
     <div class="content contentSingleProject">
      <div class="sidebarblog">
     <?php  dynamic_sidebar( 'projects-widget-area' ); ?>
         
       </div>
   
   
     <?php $dreamBeanQuery = new WP_Query(array(
     // 'post_per_page' => 1,// if you want all its -1
     'post_type' => array( 'projects' ),
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
     <div class="yearComplete">
          <?php if( have_rows('image_slider_projects') ) : ?>
                               <ul class="bxslider">
                                   <?php while( have_rows('image_slider_projects') ) : the_row(); ?>
                                       <li>
                                           <?php $image = get_sub_field('images_projects');
                                               if( !empty($image) ): ?>
                                                   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                              
                                               <?php endif; ?>
                                       </li>
                                   <?php endwhile; ?>
                               </ul><!-- .bxslider -->
                           <?php endif;  // end gallery repeater field?>
   
            <div class="contentWelcome">
           <h2> <?php the_title(); ?></h2>
              <?php the_content(); ?>
            </div>
           
     
       
       
   
              <!-- credits -->
             
              <div class="credits">
              <h2>Credits and Thank You's:</h2>
              <p><?php the_field('credits_and_thank_yous_projects'); ?></p>
         
              </div>
              
              
              
   
              <!-- video -->
               <?php while( has_sub_fields('video_projects') ): ?>
               <div class="Vimeo">
                 
                   <?php the_sub_field('video_styling'); ?>
                   <div class="embed-container">
                     <?php the_sub_field('embedded_link'); ?>
                   </div>
                   <p class="artistCaption"><?php the_sub_field('video_credits'); ?></p>
                   
   
               </div>
               <?php endwhile;//end of vimeo ?>
   
   
     
   
   
   </div>
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
</div> <!-- /.main-->


<?php get_footer(); ?>