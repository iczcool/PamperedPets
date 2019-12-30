  <footer id="footer">
    <div class="copyright">
      <p>&copy; Pampered Pets 2016. All rights reserved.</p>    
    </div>
    <div class="">
    	<nav>
    		<ul>
          <li><a href="/Repository/Pampered Pets/v 1.0/index.php">Home</a></li> &nbsp;|
          <li><a href="/Repository/Pampered Pets/v 1.0/about.php">About Us</a></li> &nbsp;|
          <li><a href="/Repository/Pampered Pets/v 1.0/sitemap.php">Site Map</a></li> &nbsp;|
    			<li><a href="/Repository/Pampered Pets/v 1.0/terms.php">Terms</a></li>
    		</ul>
    	</nav>
    </div>
  </footer>

  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/jquery.orbit.min.js" type="text/javascript"></script>
  <script type="text/javascript">
     $(window).load(function() {
      $('#carousel').orbit({
           animation: 'horizontal-slide',                  // fade, horizontal-slide, vertical-slide, horizontal-push
           animationSpeed: 800,                // how fast animtions are
           timer: true,        // true or false to have the timer
           advanceSpeed: 4000,     // if timer is enabled, time between transitions 
           pauseOnHover: false,      // if you hover pauses the slider
           startClockOnMouseOut: false,    // if clock should start on MouseOut
           startClockOnMouseOutAfter: 1000,    // how long after MouseOut should the timer start again
           directionalNav: true,     // manual advancing directional navs
           captions: true,       // do you want captions?
           captionAnimation: 'fade',     // fade, slideOpen, none
           captionAnimationSpeed: 800,   // if so how quickly should they animate in
           bullets: true,       // true or false to activate the bullet navigation
           bulletThumbs: true,    // thumbnails for the bullets
           bulletThumbLocation: '',    // location from this file where thumbs will be
           afterSlideChange: function(){}    // empty function 
      });
     });
  </script>
</body>
</html>
