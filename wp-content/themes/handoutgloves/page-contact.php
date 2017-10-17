<?php get_template_part('mainnav') ?>
  <?php get_header(); ?>

    <div class="row">
      <div class="col-md-12">

        <?php 
          if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <h1><?php the_title(); ?></h1>
            <button class="btn btn-primary btn-block"><?php the_content(); ?></button>
    
        <?php	endwhile; endif; 
        ?>

      </div> <!-- /.col -->
    </div> <!-- /.row -->

<?php get_footer(); ?>