<?php get_header(); ?>

<div class="main">
  <div class="container">
   <div class="cContainer"> <div class="creditsSide hideAtSize">
   	   <div class="creditsHeader">
   	        <?php $the_query = new WP_Query( 'page_id=13' ); ?>
   	   
   	        <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
   	   
   	    <div class="creditsToggle">
   	    <?php the_post_thumbnail( 'medium' ) ?>  
   	    </div>      
   	    <div class="creditsContent away">
   	      <?php the_content(); ?>
   	        
   	      </div>   
   	   
   	    <?php endwhile;?>
   	   </div>
   	</div>
   	<div class="content tagBody">
   	   	    <div class="sidebarblog">
   	   	    <?php  dynamic_sidebar( 'projects-widget-area' ); ?>
   	   	    </div>
   	  <div class="mainTag">
   	  	<?php get_template_part( 'loop', 'tag' ); ?>
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
  </div><!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>