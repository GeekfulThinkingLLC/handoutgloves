<?php get_template_part('mainnav') ?>

  <?php get_header(); ?>

      <div class="row">

        <div class="col-12">

          <?php get_template_part( 'page-home', get_post_format() ); ?>

        </div> 

      </div> 

<?php get_footer(); ?>