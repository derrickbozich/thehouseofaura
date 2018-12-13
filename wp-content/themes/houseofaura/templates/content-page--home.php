<?php the_content(); ?>

<div class="container home alignedcenter">
      <canvas class="" id="myCanvas" width="300" height="300"></canvas>
      <div class="row justify-content-start">
        <div class="col-4">

        </div>
        <div class="col-4">

        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">

        </div>
        <div class="col-4">

        </div>
      </div>
      <div class="row justify-content-end">
        <div class="col-4">

        </div>
        <div class="col-4">

        </div>
      </div>
      <div class="row justify-content-around">
        <div class="col-4">

        </div>
        <div class="col-4">

        </div>
      </div>
      <div class="row justify-content-between">
        <div class="col-4">

        </div>
        <div class="col-4">

        </div>
      </div>
  <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
</div>
