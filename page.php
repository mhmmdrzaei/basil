<?php get_header();  ?>

<div class="main">
  <div class="container">
<div class="cContainer">
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
 
     <div id="space-invader" style="background-color:<?php the_field('hex_colour'); ?>"></div>
    
     </div>
  </div> -->
  </div>
  <div class="containerCube">
    <a href="https://www.mijnwebwinkel.nl/webwinkel-gesloten"><div class="axis">
      <div class="front">BZL BZL</div>
      <div class="back">BZL BZL</div>
      <div class="left">BZL BZL</div>
      <div class="right">BZL BZL</div>
      <div class="top"></div> 
      <div class="bottom"></div>
    </div></a>
  </div>

  
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>