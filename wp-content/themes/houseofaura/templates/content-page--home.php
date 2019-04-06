<?php // the_content(); ?>
<div class="container home" id="home">
  <img src="<?=  get_template_directory_uri(); ?>/dist/images/home.png">
  <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
</div>
