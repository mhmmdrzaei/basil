<?php get_header();  ?>

<div class="main">
<div id="space-invader"></div>


  <div class="container">
 <div class="cContainer"> 
 <div class="sidebarProjects">
 <div class="containerCube cubeProjects">
   <div class="axis">
     <div class="front">BZL BZL</div>
     <div class="back">BZL BZL</div>
     <div class="left">BZL BZL</div>
     <div class="right">BZL BZL</div>
     <div class="top"></div> 
     <div class="bottom"></div>
   </div>
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
   <h2 style="margin-bottom: 0">Projects:</h2>
   <?php  dynamic_sidebar( 'projects-widget-area' ); ?>
       <?php $the_query = new WP_Query( 'page_id=13' ); ?>
  
       <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
  
  
   <?php endwhile;?>
   
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
                                                   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']?>" />
                                              
                                               <?php endif; ?>
                                       </li>
                                   <?php endwhile; ?>
                               </ul><!-- .bxslider -->
                           <?php endif;  // end gallery repeater field?>
   
            <div class="contentWelcome">
           <h2> <?php the_title(); ?></h2>
           <div class="extraProjectsInfo">
              <p><?php the_field('year_projects'); ?></p>
              <p><?php the_field('location_project'); ?></p>
               <p class="catalog">
               
                 <?php 
              
                 $file = get_field('file_uploader');
              
                 if( $file ): ?>
                   
                   <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?><?php the_field('file_uploader_text'); ?></a>
              
                 <?php endif; ?>
               
                 </p>
              
            </div>
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