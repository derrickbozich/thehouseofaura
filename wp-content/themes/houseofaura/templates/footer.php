<footer class="footer">
  <div class="container">
    <div id="sketch-holder">
      <?php dynamic_sidebar('sidebar-footer'); ?>
      <script type="text/javascript">
        let t = 0.1;
        let numCircles = 8;

        function setup() {
          var width = windowWidth * 0.05;
          var canvas = createCanvas(width, width);
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
    <div class="footer-logo">
      The House of Aura
    </div>
    <div class="footer-info">
      <div class="copyright">&copy; 2019</div>
      <a href="http://www.derrickbozich.com"><div class="author">by derrick bozich</div></a>
    </div>
  </div>
</footer>
