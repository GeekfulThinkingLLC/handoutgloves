<?php get_template_part('mainnav') ?>
  
  <?php get_header(); ?>

      <div class="row">



          <?php get_template_part( 'page-product', get_post_format() ); ?>



      </div> 

<?php get_footer(); ?>