<!-- This is a post template  -->
<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php //get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_content(); ?>
    <!-- <div class="acf-test">
      <?php // echo get_field('email') ?>
    </div> -->
  </div>

</article>
