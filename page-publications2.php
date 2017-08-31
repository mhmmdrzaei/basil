<?php get_header(); ?>

<div class="main">
<div id="space-invader"></div>
  <div class="container">
  <div class="cContainer">
    
      <div class="content sidebarProjects">
      <div class="sidebarblog">
        <p class="ProjectsText">Publications</p>
          <?php $the_query = new WP_Query( 'page_id=13' ); ?>
         
              <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
         
          <div class="creditsToggle hideAtSize">
          <?php the_post_thumbnail( 'medium' ) ?>  
          </div>      
          <div class="creditsContent away">
          <span class="close thick"></span>
            <?php the_content(); ?>
              
            </div>   
         
          <?php endwhile;?>
      </div>

  <div class="projectsMain">
    <?php $dreamBeanQuery = new WP_Query(array(
             // 'post_per_page' => 1,// if you want all its -1
             'post_type' => array( 'publications' ),
             'post_per_page' => array(-1)
         )); ?> 
        
        
     <?php if($dreamBeanQuery-> have_posts()):?>
     <?php while($dreamBeanQuery->have_posts()): ?> 
     <?php $dreamBeanQuery->the_post(); ?>
     <?php $dreamBeanQuery->the_content(); ?> 
        
       <div class="publicationspost">
         <?php the_post_thumbnail( 'medium' ) ?>
         <div class="paragraph"><a href="<?php the_permalink(); ?>">
                   <?php the_title(); ?></a></div>
       </div>
        
       <?php endwhile; ?>
       <?php wp_reset_postdata(); ?> 
                 <!-- this will end the and reset and go back to normal so you can go back to normal to your page -->
       <?php endif; ?>
    </div>
      </div> <!-- /.content -->
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