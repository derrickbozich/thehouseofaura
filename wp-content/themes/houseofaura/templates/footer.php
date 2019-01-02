<footer class="content-info">
  <div id="sketch-holder">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <script type="text/javascript">
      let t = 0.1;
      let numCircles = 8;

      function setup() {
        var canvas = createCanvas(100, 100);
        canvas.parent('sketch-holder');
        noStroke();
      }

      function draw() {
       translate(width/2, height/2);
       circles(width/2, width * 0.06, 0, radians(t));
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
    </script>



  </div>
  <h1>The House of Aura &copy; 2019</h1>
</footer>
