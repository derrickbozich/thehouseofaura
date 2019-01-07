<?php the_content(); ?>
<div class="contact">
  <div class="info">
    <div class="icons">
      <a href="https://soundcloud.com/user-320086851" target="_blank">
        <i class="fab fa-soundcloud fa-2x"></i>
      </a>

      <a href="https://soundcloud.com/user-320086851" target="_blank">
         <i class="fab fa-instagram fa-2x"></i>
      </a>
    </div>
    <p>
      <a href="mailto:thehouseofauramusic@gmail.com">thehouseofauramusic@gmail.com</a>
    </p>

    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
  </div>
</div>
