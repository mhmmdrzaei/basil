<?php get_header();  ?>

<div class="main">
<div id="space-invader"></div>
  <div class="container">
<div class="cContainer"><!-- <div class="creditsSide hideAtSize">
     <div class="sidebarblog">
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
  <div class="content indexContent">
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
  <!--     <div class="creditsSide showAtSize">
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
  </div> -->
  </div>
  <div class="containerCube">
    <div class="axis">
      <div class="front">BZL BZL</div>
      <div class="back">BZL BZL</div>
      <div class="left">BZL BZL</div>
      <div class="right">BZL BZL</div>
      <div class="top"></div> 
      <div class="bottom"></div>
    </div>
  </div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>