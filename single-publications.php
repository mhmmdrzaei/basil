<?php get_header();  ?>

<div class="main">
  <div class="container">

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
          <div class="yearComplete">
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
                   <?php the_content(); ?>
                 </div>
                
          
            
            

                   <!-- credits -->
                  
                   <div class="credits">
                   <h2>Credits and Thank You's:</h2>
                   <p><?php the_field('credits_and_thank_yous_publications'); ?></p>
              
                   </div>
                   
                   
                   

              <?php while( has_sub_fields('promo_mat_upload') ): ?>
                <div class="catalog">
                
                  <?php 
              
                  $file = get_sub_field('catalog');
              
                  if( $file ): ?>
                    
                    <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?><?php the_sub_field('promo_material_download_link_text'); ?></a>
              
                  <?php endif; ?>
                
                  </div>
                  <?php endwhile;//end of Promo Material ?>


          



    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main-->


<?php get_footer(); ?>