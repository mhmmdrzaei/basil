<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
    <div class="sidebarblog">
            <?php  dynamic_sidebar( 'projects-widget-area' ); ?>
        </div>
      <h4><?php single_tag_title(); ?></h4>
      <?php get_template_part( 'loop', 'tag' ); ?>

    </div> <!-- /.content -->

  </div><!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>