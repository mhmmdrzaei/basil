<?php get_header();  ?>

<div class="main">
<div id="space-invader"></div>
  <div class="container">
    <div class="cContainer">
      <div class="sidebarProjects">
 <div class="containerCube cubeProjects">
   <a href="https://www.mijnwebwinkel.nl/webwinkel-gesloten"><div class="axis">
     <div class="front">BZL BZL</div>
     <div class="back">BZL BZL</div>
     <div class="left">BZL BZL</div>
     <div class="right">BZL BZL</div>
     <div class="top"></div> 
     <div class="bottom"></div>
   </div></a>
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

         <text fill="#000" font-size="51" font-weight="700" letter-spacing="2px">
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

   
 </div>
    <div class="content">
    
    <?php $dreamBeanQuery = new WP_Query(array(
            // 'post_per_page' => 1,// if you want all its -1
            'post_type' => array( 'services' ),
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
            <?php if( have_rows('images_services') ) : ?>
                  <ul class="bxslider">
                      <?php while( have_rows('images_services') ) : the_row(); ?>
                          <li>
                              <?php $image = get_sub_field('services_images');
                                  if( !empty($image) ): ?>
                                      <a href="<?php the_sub_field('publication_images'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
                                 
                                  <?php endif; ?>
                          </li>
                      <?php endwhile; ?>
                  </ul><!-- .bxslider -->
                <?php endif;  // end gallery repeater field?>
    
                   <div class="contentWelcome">
                  <h2> <?php the_title(); ?></h2>
                     <?php the_content(); ?>
                   </div>
    
    
            
    
    
    
      </div> <!-- /,content -->
             

      </div>


  </div> <!-- /.container -->
</div> <!-- /.main-->


<?php get_footer(); ?>