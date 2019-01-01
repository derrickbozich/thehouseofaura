<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <div class="contact">
    <div class="contact-card">
      <?php get_template_part('templates/content', 'page--contact'); ?>
    </div>
  </div>

<?php endwhile; ?>
