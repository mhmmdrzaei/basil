<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container"><div class="cContainer">
<!-- <div class="creditsSide hideAtSize">
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
  </div> -->
  	  <div class="content newsContentMain">
      <?php while ( have_posts() ) : the_post(); ?>

          <article class="newsBody" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="newspost">
                  <h4><a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?></a></h4>
                                <div class="newsDate"><?php the_date(); ?></div>
                                <?php the_content(); ?>
                                <?
                                              hackeryou_continue_reading_link()
                                               ?>

               

         


      </div>  
      </article><!-- #post-## --> 
      <?php endwhile; // End the loop. Whew. ?>
  	  	<?php wp_reset_postdata(); ?> 
  	   
        
  	  </div> <!--/.content -->
 <!--            <div class="creditsSide showAtSize">
         <div class="creditsHeader">
                <?php $the_query = new WP_Query( 'page_id=13' ); ?>
           
                <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
           
            <div class="creditsToggled">
            <div class="creditsContent away">
            <span class="close thick"></span>
              <?php the_content(); ?>
                
              </div> 
            <a href="<?php the_permalink(13); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/projectetchorizontal.png" alt=""> </a>
            </div>       -->
        
           
            <?php endwhile;?>
           </div>
        </div>

      </div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>