<div class="childpage">
<!-- child page header and navigation -->
  <div class="headerwrapper">
    <header id="navbar" role="banner" class="<?php print $navbar_classes; ?> background-white">
      <div class="container">
        <div class="navbar-header">
          
              <?php if ($logo): ?>
                <a class="logo navbar-btn child-logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
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
    
        <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
          <div class="navbar-collapse collapse">
            <nav role="navigation">
              <?php if (!empty($primary_nav)): ?>
                <?php print render($primary_nav); ?>
              <?php endif; ?>
              <?php if (!empty($secondary_nav)): ?>
                <?php print render($secondary_nav); ?>
              <?php endif; ?>
              <?php if (!empty($page['navigation'])): ?>
                <?php print render($page['navigation']); ?>
              <?php endif; ?>
            </nav>
          </div>
        <?php endif; ?>
      </div>
      <div class="logoarea-telephone">
        <h3 class="orange"><?php print render($page['telephone']); ?></h3>
      </div>
    </header>
  </div>
<!-- end area -->

<!-- pickup and delivery area -->
    <div class="pickupanddelivery">
      <div class="container">
        <!-- pickup and delivery block goes here -->
        <?php print render($page['pickupanddelivery']); ?>
      </div>
    </div>
<!-- end area -->

<!-- hero area -->
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <!-- slider goes here -->
        <div class="jumbotron-vertical">
          <?php print render($page['hero']); ?>
        </div>
    </div>
<!-- end area -->

<!-- content area -->
    <div class="main-content background-white">
      <div class="container">
          <div class="row">
              <!-- content area -->
              <?php if (!empty($page['sidebar_first'])): ?>
                <aside class="col-md-4" role="complementary">
                  <?php print render($page['sidebar_first']); ?>
                </aside>  <!-- /#sidebar-first -->
              <?php endif; ?>
          
              <section class="<?php if (empty($page['sidebar_first']) && empty($page['sidebar_second'])) { print 'col-md-12'; } else if (!empty($page['sidebar_first']) || !empty($page['sidebar_second'])) { print 'col-md-8'; } else { print 'col-md-4'; } ?>">
                <?php if (!empty($page['highlighted'])): ?>
                  <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
                <?php endif; ?>
                <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if (!empty($title)): ?>
                  <h1 class="page-header"><?php print $title; ?></h1>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
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
              </section>
              
              <?php if (!empty($page['left_column'])): ?>
                <div class="col-md-6" role="complementary">
                  <?php print render($page['left_column']); ?>
                </div>  <!-- /#left_column -->
              <?php endif; ?>
              <?php if (!empty($page['right_column'])): ?>
                <div class="col-md-6" role="complementary">
                  <?php print render($page['right_column']); ?>
                </div>  <!-- /#right_column -->
              <?php endif; ?>
              
              <?php if (!empty($page['sidebar_second'])): ?>
                <aside class="col-md-4" role="complementary">
                  <?php print render($page['sidebar_second']); ?>
                </aside>  <!-- /#sidebar-second -->
              <?php endif; ?>      
          </div>
      </div>
    </div>
<!-- end area -->

<!-- spacer area -->
    <div class="bottomspacer background-pattern">
        
    </div>
<!-- end area -->

<!-- footer area -->
    <div class="prefooter background-white">
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
          </div>
          <div class="col-md-4">
            <h2 class="signup">Sign Up:</h2>
            <form>
              <label for="tipsandcoupons" class="darkgray">Receive Tips and Coupons</label>
              <input type="text" class="darkgray" name="tipsandcoupons" id="tipsandcoupons" placeholder="Email"/>
              <input type="submit" value="Submit" id="tipsandcoupons-submit"/>
            </form>
            <?php print render($page['footersocial']); ?>
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
            <p class="minitext darkgray">Copyright &copy; <?php echo date('Y'); ?> <?php if (!empty($site_name)): ?><?php print $site_name; ?><?php endif; ?>. All Rights Reserved.</p>
          </div>
          <div class="col-md-6">
            <p class="minitext darkgray">Website Developed and Hosted by <a href="http://www.lagoon.com">Digital Lagoon</a></p>
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
<script>
function myFunction() {
    window.print();
}
</script>