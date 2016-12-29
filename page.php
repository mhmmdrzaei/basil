<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<h2><?php the_title(); ?></h2>
		<div class="emailcv">
			<a href="<?php the_field('email_address') ?>"><?php the_field('email_address') ?></a>
		</div>
		<div class="socialmedia">
			 <?php while( has_sub_fields('social_media') ): ?>
                
                  <p><?php the_sub_field('social_media_name'); ?>: <a href="<?php the_sub_field('social_media_link'); ?>"><?php the_sub_field('username_social_media'); ?></a></p>
            
                  <?php endwhile;//end of Promo Material ?>
		</div>
        <?php the_content(); ?>

        <div class="cvpdf">
        	<?php 
              
                  $file = get_field('cv_pdf_attacher');
              
                  if( $file ): ?>
                    
                    <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?>Download CV PDF</a>
              
                  <?php endif; ?>
        </div>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>