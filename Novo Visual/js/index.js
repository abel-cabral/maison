var MyModule;
$(function() {

  //generate random int a<=x<=b
  function randint(a, b) {
    return Math.floor(Math.random() * (b - a + 1) + a);
  }

  //generate random float
  function randRange(a, b) {
    return Math.random() * (b - a) + a;
  }

  //generate random float more likely to be close to a
  function hyperRange(a, b) {
    return Math.random() * Math.random() * Math.random() * (b - a) + a;
  }

  /*** Configuration constants */
  var config = {
    textAnimationTime: 1500,
    // min and max radius, radius threshold and percentage of filled circles
    radMin: 5,
    radMax: 100,
    filledCircle: 80,
    concentricCircle: 40,
    //min and max speed to move
    speedMin: 0.2,
    speedMax: 2.6,
    //max reachable opacity for every circle and blur effect
    maxOpacity: 0.45,
    //default palette choice
    colors: ["52,168,83", "117,95,147", "199,108,23", "194,62,55", "0,172,212", "120,120,120", "120,120,120"],
    bgColors: ["52,168,83", "117,95,147", "199,108,23", "194,62,55", "0,172,212", "120,120,120", "120,120,120"],
    //multiplier that makes background circles larger and slower
    backgroundMlt: 1.5,
    //blur variable
    blur: 9,
    //min distance for connecting links among spheres
    linkDist: Math.min(window.innerWidth, window.innerHeight) / 3.25,
    //border for the connecting links among spheres
    lineBorder: 2.5,
    //experimental vars
    circleExp: 1,
    circleExpMax: 1.003,
    circleExpMin: 0.997,
    circleExpSp: 0.00004,
    circlePulse: false
  };

  /*** Class that handles animation size. */
  var MyAnimationSize = (function() {
    /*** constructor */
    function MyAnimationSize() {
      this.setSize(0, 0);
    }

    /*** Updates the available size */
    MyAnimationSize.prototype.setSize = function(w, h) {
      var winSizeMlt = Math.min(w / 1980, h / 1200);
      this.width = w;
      this.height = h;
      this.radMax = config.radMax * winSizeMlt;
      this.radThreshold = 25 * winSizeMlt; //IFF special, over this radius concentric, otherwise filled
      this.circleBorder = 10 * winSizeMlt;
      this.maxCircles = 35 * winSizeMlt; // number of circles
    };
    return MyAnimationSize;
  })();

  /*** Class that handles an animation layer (geometry + canvas). */
  var MyAnimationLayer = (function() {

    /*** constructor */
    function MyAnimationLayer(sizeConfig, isBackground) {

      // Global isBackground field that is applied to all circles of this instance.
      this.isBackground = isBackground;

      this.sizeConfig = sizeConfig;
      this.isBackground = isBackground;
      this.sizeConfig = sizeConfig;
      this.circles = [];
    }

    /*** Initializes a circle. */
    MyAnimationLayer.prototype.resetCircle = function(a) {
      var isBg = this.isBackground,
        width = this.sizeConfig.width,
        height = this.sizeConfig.height;
      a.x = randRange(-width / 2, width / 2);
      a.y = randRange(-height / 2, height / 2);
      a.radius = (isBg ? config.backgroundMlt : 1) * hyperRange(config.radMin, this.sizeConfig.radMax);
      a.filled = a.radius < this.sizeConfig.radThreshold ? (randint(0, 100) > config.filledCircle ? false : "full") : (randint(0, 100) > config.concentricCircle ? false : "concentric");
      a.color = isBg ? config.bgColors[randint(0, config.bgColors.length - 1)] : config.colors[randint(0, config.colors.length - 1)];
      a.borderColor = isBg ? config.bgColors[randint(0, config.bgColors.length - 1)] : config.colors[randint(0, config.colors.length - 1)];
      a.opacity = 0.05;
      a.speed = (isBg ? 1 / config.backgroundMlt : 1) * randRange(config.speedMin, config.speedMax);
      a.speedAngle = Math.random() * 2 * Math.PI;
      a.speedx = Math.cos(a.speedAngle) * a.speed;
      a.speedy = Math.sin(a.speedAngle) * a.speed;
      var spacex = Math.abs((a.x - (a.speedx < 0 ? -1 : 1) * (window.innerWidth / 2 + a.radius)) / a.speedx),
        spacey = Math.abs((a.y - (a.speedy < 0 ? -1 : 1) * (window.innerHeight / 2 + a.radius)) / a.speedy);
      a.ttl = Math.min(spacex, spacey);
    };

    /*** Geometry update. */
    MyAnimationLayer.prototype.update = function() {
      var a, circles = this.circles,
        isBg = this.isBackground,
        sizeConfig = this.sizeConfig,
        circlesCount = sizeConfig.maxCircles;
      // Updates the size of the array.
      if (isBg)
        circlesCount *= 0.5;
      if (circles.length > circlesCount) {
        // Reduce the size of the array.
        circles.splice(circlesCount, circles.length - circlesCount);
      } else {
        while (circles.length < circlesCount) {
          // Increase the size of the array.
          a = {};
          this.resetCircle(a);
          circles.push(a);
        }
      }
      // Update all the circles.
      for (var i = 0; i < circles.length; i++) {
        a = circles[i];
        if (a.ttl < -20)
          this.resetCircle(circles[i]);
        var radius = isBg ? a.radius * config.circleExp : a.radius /= config.circleExp;
        a.radius = radius;
        a.lineWidth = Math.max(1, sizeConfig.circleBorder * (config.radMin - a.radius) / (config.radMin - sizeConfig.radMax));
        a.x += a.speedx;
        a.y += a.speedy;
        if (a.opacity < (isBg ? config.maxOpacity : 1))
          a.opacity += 0.01;
        a.ttl--;
      }
    };

    /*** Renders this layer to the 2D context. */
    MyAnimationLayer.prototype.render = function(ctx) {
      var i, circles = this.circles,
        isBg = this.isBackground;
      var offSet = isBg ? -2 * this.sizeConfig.width : 0;
      for (i = 0; i < circles.length; i++) {
        var a = circles[i];
        ctx.beginPath();
        ctx.arc(a.x + offSet, a.y, a.radius * config.circleExp, 0, 2 * Math.PI, false);
        if (isBg) {
          ctx.shadowColor = "rgba(" + a.borderColor + "," + a.opacity + ")";
          ctx.shadowBlur = config.blur;
          ctx.shadowOffsetX = -offSet;
          ctx.fillStyle = "#000";
        } else {
          ctx.fillStyle = "rgba(" + a.borderColor + "," + (isBg ? a.opacity * 0.8 : a.opacity) + ")";
        }
        if (a.filled === "full") {
          ctx.fill();
        } else {
          ctx.lineWidth = a.lineWidth;
          ctx.strokeStyle = "rgba(" + a.borderColor + "," + a.opacity + ")";
          ctx.stroke();
        }
        if (a.filled === "concentric") {
          ctx.beginPath();
          ctx.arc(a.x + offSet, a.y, a.radius * 0.5, 0, 2 * Math.PI, false);
          ctx.lineWidth = a.lineWidth;
          if (isBg) {
            ctx.strokeStyle = "#000";
            ctx.shadowColor = "rgba(" + a.color + "," + a.opacity + ")";
            ctx.shadowBlur = config.blur;
            ctx.shadowOffsetX = -offSet;
          } else {
            ctx.strokeStyle = "rgba(" + a.color + "," + a.opacity + ")";
          }
          ctx.stroke();
        }
        for (var j = i + 1; j < circles.length; j++) {
          var b = circles[j];
          var deltax = a.x - b.x;
          var deltay = a.y - b.y;
          var dist = Math.sqrt(deltax * deltax + deltay * deltay);
          //if the circles are overlapping, no laser connecting them
          if (dist <= a.radius + b.radius)
            continue;
          //otherwise we connect them only if the dist is < linkDist
          if (dist < config.linkDist) {
            var xi = (a.x < b.x ? 1 : -1) * Math.abs(a.radius * deltax / dist);
            var yi = (a.y < b.y ? 1 : -1) * Math.abs(a.radius * deltay / dist);
            var xj = (a.x < b.x ? -1 : 1) * Math.abs(b.radius * deltax / dist);
            var yj = (a.y < b.y ? -1 : 1) * Math.abs(b.radius * deltay / dist);
            ctx.beginPath();
            ctx.moveTo(a.x + xi + offSet, a.y + yi);
            ctx.lineTo(b.x + xj + offSet, b.y + yj);
            ctx.lineWidth = (isBg ? config.lineBorder * config.backgroundMlt : config.lineBorder) * ((config.linkDist - dist) / config.linkDist);
            var clr = "rgba(" + a.borderColor + "," + (Math.min(a.opacity, b.opacity) * ((config.linkDist - dist) / config.linkDist)) + ")";
            if (isBg) {
              ctx.strokeStyle = "#000";
              ctx.shadowColor = clr;
              ctx.shadowBlur = config.blur;
              ctx.shadowOffsetX = -offSet;
            } else {
              ctx.strokeStyle = clr;
            }
            ctx.stroke();
          }
        }
      }
    };
    return MyAnimationLayer;
  })();

  /*** The main canvas animation class. Handles the canvas context, resize and rendering. */
  var MyAnimation = (function() {

    /*** constructor */
    function MyAnimation(sizeConfig, elementId) {
      this.sizeConfig = sizeConfig;
      this.elementId = elementId;
      this.sizeConfig = sizeConfig;
      this.elementId = elementId;
      this.context = null;
      this.bgLayer = new MyAnimationLayer(sizeConfig, true);
      this.fgLayer = new MyAnimationLayer(sizeConfig, false);
    }

    /*** Gets the HTML Canvas element for this animation. */
    MyAnimation.prototype.getElement = function() {
      return (document.getElementById ? (document.getElementById(this.elementId)) : null);
    };

    /*** Tries to load the 2D canvas context. */
    MyAnimation.prototype.loadContext = function() {
      var e = this.getElement();
      if (e && e.getContext) {
        var ctx = e.getContext("2d");
        if (ctx) {
          this.context = ctx;
          return true;
        }
      }
      return false; // Context or element not found.
    };

    /*** Called to resize the canvas. */
    MyAnimation.prototype.setSize = function(w, h) {
      this.sizeConfig.setSize(w, h);
      var e = this.getElement();
      if (e) {
        e.style.width = w + "px";
        e.style.height = h + "px";
        e.width = w;
        e.height = h;
      }
    };

    /*** Updates geometry. */
    MyAnimation.prototype.update = function(time) {
      this.bgLayer.update();
      this.fgLayer.update();
    };

    /*** Renders the animation. */
    MyAnimation.prototype.render = function() {
      var ctx = this.context,
        w2 = this.sizeConfig.width / 2,
        h2 = this.sizeConfig.height / 2;
      // reset transform and translate
      ctx.setTransform(1, 0, 0, 1, w2, h2);
      // clear canvas
      ctx.clearRect(-w2, -h2, this.sizeConfig.width, this.sizeConfig.height);
      this.bgLayer.render(ctx);
      this.fgLayer.render(ctx);
    };

    return MyAnimation;
  })();

  var myAnimation = new MyAnimation(new MyAnimationSize(), "canvas");

  // Allows the execution of animation frames with an upper frame rate limit and with the possibility to stop.
  function limitLoop(fn, fps) {
    if (!requestAnimationFrame)
      return false;
    var then = new Date().getTime(),
      interval = 1000 / fps;

    function loop(time) {
      var now = new Date().getTime(),
        delta = now - then;
      if (delta > interval) {
        then = now - (delta % interval);
        if (!fn(time))
          return false;
      }
      requestAnimationFrame(loop);
      return true;
    };

    requestAnimationFrame(loop);
    return true;
  }

  var titles = $("#title > h2 > span");
  var activeTitleState = 0;
  var activeTitleIndex = 0;

  /*** Finite state machine function for texts fade animation. */
  function myTimer() {
    var nextTitleIndex = (activeTitleIndex + 1) % titles.length;
    switch (activeTitleState) {
      case 0: // Fade out
        $(titles[activeTitleIndex]).css({
          opacity: 0
        });
        setTimeout(myTimer, config.textAnimationTime + 50);
        activeTitleState = 1;
        break;
      case 1: // Switch visibility
        $(titles[activeTitleIndex]).css({
          opacity: 0,
          display: "none"
        });
        $(titles[nextTitleIndex]).css({
          opacity: 0,
          display: "inline"
        });
        setTimeout(myTimer, 50);
        activeTitleState = 2;
        break;
      default: // Fade in
        $(titles[nextTitleIndex]).css({
          opacity: 1
        });
        activeTitleIndex = nextTitleIndex;
        setTimeout(myTimer, config.textAnimationTime + 50);
        activeTitleState = 0;
        break;
    }
  }

  // Start the texts animation
  setTimeout(myTimer, 1000);

  // The animation resize function.
  function animationResize() {
    myAnimation.setSize(window.innerWidth, window.innerHeight);
  };

  // First resize.
  animationResize();

  // Attach the window resize event
  $(window).resize(animationResize);

  if (myAnimation.loadContext()) {
    // Starts the canvas animation
    limitLoop(function(time) {
      myAnimation.update(time);
      myAnimation.render();
      return true;
    }, 60);
  }

});

$('#toggle').click(function() {
   $(this).toggleClass('active');
  console.log($('#toggle').attr('class'));
   $('#overlay').toggleClass('open');
});