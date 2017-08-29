<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
<div id="space-invader"></div>
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
      <div class="newsTitle">
      <div id="#logo">
        <div class="loader loader--style5" title="4">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="54px" height="60px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
            <rect x="0" y="0" width="4" height="10" fill="#FF0000" border-radius="10px;">
              <animateTransform attributeType="xml"
                attributeName="transform" type="translate"
                values="0 0; 0 20; 0 0"
                begin="0" dur="0.6s" repeatCount="indefinite" />
            </rect>
            <rect x="10" y="0" width="4" height="10" fill="#FF0000">
              <animateTransform attributeType="xml"
                attributeName="transform" type="translate"
                values="0 0; 0 20; 0 0"
                begin="0.2s" dur="0.6s" repeatCount="indefinite" />
            </rect>
            <rect x="20" y="0" width="4" height="10" fill="#FF0000">
              <animateTransform attributeType="xml"
                attributeName="transform" type="translate"
                values="0 0; 0 20; 0 0"
                begin="0.4s" dur="0.6s" repeatCount="indefinite" />
            </rect>
          </svg>
        </div>
      </div>
        <h4>Basil's News:</h4>

<div class="allnewsCredits">
  <div class=" hideAtSize ">
     <div class="creditsHeader">
            <?php $the_query = new WP_Query( 'page_id=13' ); ?>
       
            <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
       
        <div class="creditsToggle newsToggle headerOpenNot">
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
        <div class="creditsContent newsCreditsContent away">
        <span class="close thick"></span>
          <?php the_content(); ?>
            
          </div>   
       
        <?php endwhile;?>
       </div> 
  </div>
  <div class="containerCube cubeNews">
    <div class="axis">
      <div class="front">BZL BZL</div>
      <div class="back">BZL BZL</div>
      <div class="left">BZL BZL</div>
      <div class="right">BZL BZL</div>
      <div class="top"></div> 
      <div class="bottom"></div>
    </div>
  </div>
</div>

      </div>
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