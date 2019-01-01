/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

      },
      finalize: function() {
       // JavaScript to be fired on all pages, after page specific JS is fired

      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page

        // get dimensions for canvas size
        // var width = $("#anemic").width();
        // var height = $("#anemic").height();
        // var canvas = document.createElement("CANVAS");
        // canvas.setAttribute("id", "canvas");
        // canvas.setAttribute("width", width + "px");
        // canvas.setAttribute("height", height + "px");
        // document.getElementById("canvas-div").appendChild(canvas);
        // var ctx = canvas.getContext("2d");
        //
        // var img = document.getElementById("anemic");
        //
        //
        // //red
        // ctx.fillStyle = "rgba(255, 0, 125, 0.9)";
        // ctx.beginPath();
        // ctx.moveTo(0, height);
        // ctx.lineTo(width, height);
        // ctx.lineTo(width * 0.8, height * 0.97);
        // ctx.lineTo(width * 0.2, height * 0.97);
        // ctx.fill();
        // //orange
        // ctx.fillStyle = "rgba(255, 147, 0, 0.9)";
        // ctx.fillRect( width/2.33, height/2.33, width, height);
        //
        // //circle
        // ctx.beginPath();
        //
        // ctx.arc(width/2, height/2, 50, 0, 2 * Math.PI);
        // ctx.fillStyle = "rgba(39, 17, 221, 0.84)";
        // ctx.fill();

        //img
        // ctx.drawImage(img, 0, 0, width, height);


      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
        var canvas = document.getElementById("defaultCanvas0");
        canvas.parentNode.removeChild(canvas);
        var home = document.getElementById("home");
        home.appendChild(canvas) 
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
