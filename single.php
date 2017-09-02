<?php get_header(); ?>

<div class="main">
  <div class="container">
  <div class="cContainer">
<!--   <div class="creditsHeader hideAtSize">
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
    </div> -->
    <div class="content">
      <div class="newsContentMain">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h4 class="entry-title"><?php the_title(); ?></h4>
        
            <div class="newsDate">
              <?php the_date(); ?>
            </div><!-- .entry-meta -->
        
            <div class="entry-content">
              <?php the_content(); ?>
              <?php wp_link_pages(array(
                'before' => '<div class="page-link"> Pages: ',
                'after' => '</div>'
              )); ?>
            </div><!-- .entry-content -->
        
            
          </div><!-- #post-## -->
        
          <div id="nav-below" class="navigation">
            <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
            <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
          </div><!-- #nav-below -->
        
        
        <?php endwhile; // end of the loop. ?>
      </div>

    </div> <!-- /.content -->

  </div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>