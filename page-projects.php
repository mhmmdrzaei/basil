<?php get_header(); ?>

<div class="main">
  <div class="container">
<div class="cContainer">
<div class="creditsSide hideAtSize">
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
      <div class="content">
  <div class="sidebarProjects">
  
    <div class="sidebarblog">
      <p class="ProjectsText">Projects</p>
      <?php  dynamic_sidebar( 'projects-widget-area' ); ?>
      
    </div>
 <div class="projectsMain"> 
       <?php $dreamBeanQuery = new WP_Query(array(
               // 'post_per_page' => 1,// if you want all its -1
               'post_type' => array( 'projects' ),
               'post_per_page' => array(-1)
           )); ?> 
     
     
       <?php if($dreamBeanQuery-> have_posts()):?>
       <?php while($dreamBeanQuery->have_posts()): ?> 
       <?php $dreamBeanQuery->the_post(); ?>
       <?php $dreamBeanQuery->the_content(); ?> 
       
     
         <div class="projectpost">
           <?php the_post_thumbnail( 'medium' ) ?>
           <p><a href="<?php the_permalink(); ?>">
                     <?php the_title(); ?></a></p>
         </div>
     
         <?php endwhile; ?>
         <?php wp_reset_postdata(); ?> 
                   <!-- this will end the and reset and go back to normal so you can go back to normal to your page -->
         <?php endif; ?></div>
  
      </div> <!-- /.content -->
      <div class="creditsSide showAtSize">
   <div class="creditsHeader">
          <?php $the_query = new WP_Query( 'page_id=13' ); ?>
     
          <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
     
      <div class="creditsToggle">
      <div class="creditsContent away">
      <span class="close thick"></span>
        <?php the_content(); ?>
          
        </div> 
      <img src="<?php bloginfo('template_directory'); ?>/images/projectetchorizontal.png" alt=""> 
      </div>      
  
     
      <?php endwhile;?>
     </div>
  </div>
      </div>
  
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>