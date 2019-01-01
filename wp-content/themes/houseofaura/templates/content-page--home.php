<?php // the_content(); ?>
<div class="container home" id="home">
    <script type="text/javascript">
      let t = 0.1;
      let numCircles = 8;

      function setup() {
      createCanvas(1000, 500);
      noStroke();

      }

      function draw() {
       // background(255,0,0);
       translate(width/2, height/2);
       // blendMode(LIGHTEST);
       //circles(initial radius, pixels to subtract from radius of nested circles, angle, angleAdd)

       circles(250, 30, 0, radians(t));
      // house();
       t += 0.15;
      }


      function circles(radius, rSub,angle, aAdd) {
      push();
          for (let i = numCircles; i > 0; i--){
            if(i % 2 == 0){
              c = 0;
            } else {
              c = 255;
            }
            fill(c);
            ellipse(0, 0, radius * 2, radius * 2);
            radius -= rSub;
            angle += aAdd;
            let r = rSub * 0.7;
            let x = cos(angle + aAdd) * r;
            let y = sin(angle + aAdd) * r;
            translate(x, y);
          }
      pop();
      }

      function house(){
      // let color = color(255, 204, 0);

      fill(255,0,0);
      beginShape();
      vertex(30, 20);
      vertex(85, 20);
      vertex(85, 75);
      vertex(30, 75);
      endShape(CLOSE);
      }
    </script>



  <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
</div>
