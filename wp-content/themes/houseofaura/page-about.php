<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <!-- <canvas id='myCanvas'></canvas> -->
  <?php get_template_part('templates/content', 'page--about'); ?>
<?php endwhile; ?>
