<?php get_header(); ?>

<div class="main">
<!-- <div id="space-invader"></div> -->
  <div class="container">
<div class="cContainer">

      <div class="content">
  <div class="sidebarProjects">
  <div class="containerCube cubeProjects">
    <a href="https://www.mijnwebwinkel.nl/webwinkel-gesloten"><div class="axis">
      <div class="front">BZL BZL</div>
      <div class="back">BZL BZL</div>
      <div class="left">BZL BZL</div>
      <div class="right">BZL BZL</div>
      <div class="top"></div> 
      <div class="bottom"></div>
    </div></a>
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
      <h2 style="margin-bottom: 0"><a href="">Projects:</a></h2>
      <?php  dynamic_sidebar( 'projects-widget-area' ); ?>
          <?php $the_query = new WP_Query( 'page_id=13' ); ?>
     
          <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
     
     
      <?php endwhile;?>
      
    </div>
</div>
 <div class="projectsMain"> 
       <?php $dreamBeanQuery = new WP_Query(array(
               // 'post_per_page' => 1,// if you want all its -1
               'post_type' => array( 'projects' ),
               'post_per_page' => array(-1)
           )); ?> 
     
     
       <?php if($dreamBeanQuery-> have_posts()):?>
       <?php while($dreamBeanQuery->have_posts()): ?> 
        
       <?php $dreamBeanQuery->the_post(); ?>
       <?php $dreamBeanQuery->the_content(); ?> 
       
        <a class="redProject" href="<?php the_permalink(); ?>">
         <div class="projectpost">
           <div class="overflowImage">
           <?php the_post_thumbnail( 'medium' ) ?>
             
           </div>
          
          

           <div class="paragraph">
                     <?php the_title(); ?>
            
            </div>
         </div>

         </a>
      
         <?php endwhile; ?>
         <?php wp_reset_postdata(); ?> 
                   <!-- this will end the and reset and go back to normal so you can go back to normal to your page -->
         <?php endif; ?>

  </div>
  <div id="space-invader" style="background-color:<?php the_field('hex_colour'); ?>"></div>
      </div> <!-- /.content -->

      </div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>