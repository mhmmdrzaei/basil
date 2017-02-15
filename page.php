<?php get_header();  ?>

<div class="main">
  <div class="container">
<div class="cContainer"><div class="creditsSide hideAtSize">
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
  <div class="content indexContent">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  

      <div class="emailcv">
       <a href="mailto:<?php the_field('email_address') ?>"><?php the_field('email_address') ?></a>
      </div>
      <div class="socialmedia">
         <?php while( has_sub_fields('social_media') ): ?>
              
                <p><?php the_sub_field('social_media_name'); ?>: <a href="<?php the_sub_field('social_media_link'); ?>"><?php the_sub_field('username_social_media'); ?></a></p>
          
                <?php endwhile;//end of Promo Material ?>
      </div>
      <div class="cvpdf">
        <?php 
            
                $file = get_field('cv_pdf_attacher');
            
                if( $file ): ?>
                  
                  <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?>Download CV PDF</a>
            
                <?php endif; ?>
      </div>
      <?php the_content(); ?>
  
      
  
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