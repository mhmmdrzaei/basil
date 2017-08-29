<?php get_header(); ?>

<div class="main">
  <div class="container">
   <div class="cContainer"> 
   <div class="sidebarProjects">
   <div class="containerCube cubeProjects">
     <div class="axis">
       <div class="front">BZL BZL</div>
       <div class="back">BZL BZL</div>
       <div class="left">BZL BZL</div>
       <div class="right">BZL BZL</div>
       <div class="top"></div> 
       <div class="bottom"></div>
     </div>
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
     <div class="sidebarblog">
       <h2 style="margin-bottom: 0">Projects:</h2>
       <?php  dynamic_sidebar( 'projects-widget-area' ); ?>
           <?php $the_query = new WP_Query( 'page_id=13' ); ?>
      
           <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
      
      
       <?php endwhile;?>
       
     </div>
</div>
   	  <div class="projectsMain">
   	  	<?php get_template_part( 'loop', 'tag' ); ?>

   	
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
      </div>
  </div><!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>