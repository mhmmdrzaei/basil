<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
    <div class="sidebarblog">
            <?php  dynamic_sidebar( 'projects-widget-area' ); ?>
        
        </div>
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
          <?php endif; ?>

    </div> <!-- /.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>