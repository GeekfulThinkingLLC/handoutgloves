<?php get_template_part('mainnav') ?>
  
  <?php get_header(); ?>

  <?php get_sidebar(); ?>
     
          <?php get_template_part( 'page-producthunt', get_post_format() ); ?>

<?php get_footer(); ?>