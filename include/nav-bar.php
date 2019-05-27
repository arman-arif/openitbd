<div class="sticky-header navbar-expand-lg">
  <div class="menu-bar clearfix">
    <div class="container clearfix">
      <!-- Header Logo ==== -->
      <div class="menu-logo">
        <?php if ($page == 'home'): ?>
        <a href="index.php"><img src="assets/images/logo-white.png" alt="Open IT Ltd."></a>
        <?php else: ?>
        <a href="index.php"><img src="assets/images/logo.png" alt="Open IT Ltd."></a>
        <?php endif; ?>

      </div>
      <!-- Mobile Nav Button ==== -->
      <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- Author Nav ==== -->
      <div class="secondary-menu">
        <div class="secondary-inner">
          <ul>
            <li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
            <!-- Search Button ==== -->
            <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
          </ul>
        </div>
      </div>
      <!-- Search Box ==== -->
      <div class="nav-search-bar">
        <form action="#">
          <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
          <span><i class="ti-search"></i></span>
        </form>
        <span id="search-remove"><i class="ti-close"></i></span>
      </div>
      <!-- Navigation Menu ==== -->
      <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
        <div class="menu-logo">
          <a href="index.php"><img src="assets/images/logo.png" alt=""></a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</i></a></li>
          <li class=""><a href="index.php">About</i></a></li>
          <li class="add-mega-menu"><a href="javascript:;">Courses <i class="fa fa-chevron-down"></i></a>
            <ul class="sub-menu add-menu">
              <li class="add-menu-left">
                <h5 class="menu-adv-title">Our Courses</h5>
                <ul>
                  <li><a href="">Courses </a></li>
                  <li><a href="courses.php" class="text-danger">See All Courses &rarr;</a></li>
                </ul>
              </li>
              <li class="add-menu-right">
                <div class="vertically-middle">
                  <p class="text-normal">Apply for a course</p>
                  <a class="btn btn-outline-warning" href="#">Apply Now</a>
                </div>
              </li>
            </ul>
          </li>
          <li class=""><a href="javascript:;">Services <i class="fa fa-chevron-down"></i></a>
            <ul class="sub-menu">
                <li><a href="index.html">Services</a></li>
                <li><a href="index-2.html">Services</a></li>
            </ul>
          </li>
          <li class=""><a href="javascript:;">More <i class="fa fa-chevron-down"></i></a>
            <ul class="sub-menu">
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Blogs</a></li>
            </ul>
          </li>
            <li><a href="">Contact Us</a></li>
        </ul>
        <div class="nav-social-link">
          <a href="//facebook.com"><i class="fa fa-facebook"></i></a>
          <a href="//plus.google.com"><i class="fa fa-google-plus"></i></a>
          <a href="//twitter.com"><i class="fa fa-linkedin"></i></a>
          <a href="//linkedin.com"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
      <!-- Navigation Menu END ==== -->
    </div>
  </div>
</div>
