<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container"><div class="cContainer">
  		<div class="creditsSide">
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
  	
  	  <div class="content">
  	  		<?php get_template_part( 'loop', 'index' );	?>
  	  		<?php the_content(); ?>
  	  		<?
  	                    hackeryou_continue_reading_link()
  	                     ?>
  	  </div> <!--/.content --></div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>