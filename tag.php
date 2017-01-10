<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <h1>Tag Archives: <?php single_tag_title(); ?></h1>
      <?php get_template_part( 'page-projects', 'tag' ); ?>
 ?>
    </div> <!-- /.content -->

  </div><!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>