<div class="frontpage">
<!-- header and navigation area -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <?php if ($logo): ?>
            <a class="logo navbar-btn" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>
          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>    
        
          <div id="navbar" class="navbar-collapse collapse">
            <nav role="navigation">
              <?php if (!empty($primary_nav)): ?>
                <?php
                  print render($primary_nav);
                ?> 
              <?php endif; ?>
              
            </nav>
          </div>
        
      </div>
    </nav>
<!-- end area -->

<!-- slider area -->
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <video autoplay id="bgvid" loop>
        <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
        <source src="/sites/all/themes/pinkieTheme/_resources/lightbgmov.mp4" type="video/mp4">
        <source src="/sites/all/themes/pinkieTheme/_resources/lightbgmov.webm" type="video/webm">
      </video>
      <div class="bgvidoverlay">
        <!-- simple opacity overlay for video element -->
      </div>
      <div class="logoarea">
        <div class="container">
          <!-- top featured -->
          <div class="row">
            <div class="col-md-4 popular-0 popular-each">
              <div class="popular-wrapper background-pink">
                <?php print render($page['popularzero']); ?>
              </div>
            </div>
            <div class="col-md-4 popular-1 popular-each">
              <div class="popular-wrapper background-pink">
                <?php print render($page['popularone']); ?>
              </div>
            </div>
            <div class="col-md-4 popular-2 popular-each">
              <div class="popular-wrapper background-pink">
                <?php print render($page['populartwo']); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
<!-- end area -->

<!-- collage area -->
    <div class="collage background-truewhite">
      <div class="container">
        <div class="row">
          <?php print render($page['collage']); ?>
        </div>
      </div>
    </div>
<!-- end area -->

<!-- parallax one area -->
    <div class="parallax-window plaxone" data-parallax="scroll" data-image-src="/sites/all/themes/pinkieTheme/images/214.jpeg">
      <!-- parallax section goes here -->
    </div>
<!-- end area -->

<!-- features area -->
    <div class="features background-pattern">
      <div class="container">
        <div class="row">
          <div class="col-md-4 feature-0 feature-each">
            <!-- feature one -->
            <?php print render($page['featureleft']); ?>
          </div>
          <div class="col-md-4 feature-1 feature-each">
            <!-- feature two -->
            <?php print render($page['featurecenter']); ?>
          </div>
          <div class="col-md-4 feature-2 feature-each">
            <!-- feature three -->
            <?php print render($page['featureright']); ?>
          </div>
        </div>
      </div>
    </div>
<!-- end area -->

<!-- content area -->
    <div class="main-content background-truewhite">
      <h1 class="main-content-h1 limegreen background-pattern">
        Pinkie Couture
      </h1>
      <div class="container">
          <div class="row">
            <div class="col-md-5">
              <!-- content area -->
              <?php print $messages; ?>
              <?php if (!empty($tabs)): ?>
                <?php print render($tabs); ?>
              <?php endif; ?>
              <?php if (!empty($page['help'])): ?>
                <?php print render($page['help']); ?>
              <?php endif; ?>
              <?php if (!empty($action_links)): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
              <?php endif; ?>
              <?php print render($page['content']); ?>        
              <!--<p class="limegreen">
                <span class="first-sentence-0">Dry cleaning hasn't always been easy on garments, or the environment.</span> That's because traditionally, dry cleaning has used petrochemicals. GreenEarth Cleaning is different. Watch our video to learn why GreenEarth Cleaning's unique silicone technology helps protect the clothes we wear and the communities where we live.
              </p>
              <div class="main-content-social">
                <ul>
                  <li><a class="sharethisvideo" href="#">Share This Video</a></li>
                  <li><a class="sharethisvideofacebook" href="#">Share This Video</a></li>
                  <li><a class="sharethisvideotwitter" href="#">Share This Video</a></li>
                  <li><a class="sharethisvideoemail" href="#">Share This Video</a></li>
                </ul>
              </div>-->
            </div>
            <div class="col-md-7">
              <div class="main-content-video">
                <!-- video area -->
                <?php print render($page['featurevideo']); ?>
                <!--<iframe src="https://www.youtube.com/embed/3EIgmj6gp1I" frameborder="0" allowfullscreen></iframe>-->
              </div>
            </div>
          </div>
      </div>
    </div>
<!-- end area -->    

<!-- parallax two area -->    
    <div class="parallax-window plaxtwo white" data-parallax="scroll" data-image-src="/sites/all/themes/pinkieTheme/images/214.jpeg">
      <!-- parallax section goes here -->
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="tipofthedayholder">
              
            </div>
          </div>
          <div class="col-md-8">
            <!-- tip of the day goes here -->
            <?php print render($page['tipoftheday']); ?>
            <!--<p class="white">
              <span class="first-sentence-1">March 14</span> When it comes to glass, the advantage of recycling are clear. Using recycled glass to make new glass vuts related air pollution by up to 20%. Recycling, one ton of glass saves the equivalent in energy of 10 gallons of oil.
            </p>-->
          </div>
        </div>
      </div>
    </div>
<!-- end area -->

<!-- footer area -->
    <div class="prefooter background-truewhite">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <!-- footer logo goes here -->
            <div class="logocontainer">
              <?php if ($logo): ?>
                <a class="logo navbar-btn" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-4">
            <?php print render($page['footeraddress']); ?>
            <!--<ul class="prefooter-list-0 orange">
              <li class="line-0">Company Name</li>
              <li class="line-1">0000 Road Name</li>
              <li class="line-2">City, St 00000</li>
              <li class="line-3">(000) 000-0000</li>
            </ul>-->
          </div>
          <div class="col-md-4">
            <h2 class="signup">Sign Up:</h2>
            <?php print render($page['footerform']); ?>
            <?php print render($page['footersocial']); ?>
            <ul class="prefooter-list-1">
              <li class="social-icon-0">
                <a href="#">Facebook</a>
              </li>
              <li class="social-icon-1">
                <a href="#">Twitter</a>
              </li>
              <li class="social-icon-2">
                <a href="#">LinkedIn</a>
              </li>
              <li class="social-icon-3">
                <a href="#">Youtube</a>
              </li>
              <li class="social-icon-4">
                <a href="#">Email</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
<!-- end area -->

<!-- credits area -->
    <div class="credits">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="minitext darkgray">Copyright &copy; <?php echo date('Y'); ?> Pinkie Couture. All Rights Reserved.</p>
          </div>
          <div class="col-md-6">
            <p class="minitext darkgray">Website Developed by <a href="mailto:janetduvall@tulsaglassblowing.org"><img src="/sites/all/themes/pinkieTheme/images/SIG.png"/></a></p>
            <p><img src="/sites/all/themes/pinkieTheme/images/poweredbysheerz.png" style="width: 200px;float: right;margin: 10px 0px;"/></p>
          </div>
        </div>
      </div>
    </div>
<!-- end area -->

<!-- footer menu area -->
    <div class="footer-menu">
      <div class="container">
        <footer>
          <!-- footer menu area -->
          <?php print render($page['footermenu']); ?>
        </footer>
      </div>
    </div>
<!-- end area -->
</div>

<script type="text/javascript">
  jQuery(function($) {
    var riderclass = $('.feature-post-share');
    $(riderclass).each(function(){
      $('.sheerzicon').fadeIn('slow');
      if ($(this).hasClass('All')) {
        console.log('Shared to All...');
        $(this).find('.pinteresticon').show();
        $(this).find('.facebookicon').show();
        $(this).find('.instagramicon').show();
        $(this).find('.twittericon').show();
      }
      else if ($(this).hasClass('Pinterest')) {
        $(this).find('.pinteresticon').show();
      }
      else if ($(this).hasClass('Facebook')) {
        $(this).find('.facebookicon').show();
      }
      else if ($(this).hasClass('Twitter')) {
        $(this).find('.twittericon').show();
      }
      else{
      }
    });
  });
</script>