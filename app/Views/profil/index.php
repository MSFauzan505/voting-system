<?= $this->extend('layouts/main'); ?>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              "search-item">
              <a href="#">Kodinger.com</a>
              <a href="#" class="search-close"><i class="fas fa-times"></i></a>
            </div>
            <div class="search-item">
              <a href="#">#Stisla</a>
              <a href="#" class="search-close"><i class="fas fa-times"></i></a>
            </div>
            <div class="search-header">
              Result
            </div>
            <div class="search-item">
              <a href="#">
                <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png" alt="product">
                oPhone S9 Limited Edition
              </a>
            </div>
            <div class="search-item">
              <a href="#">
                <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product">
                Drone X2 New Gen-7
              </a>
            </div>
            <div class="search-item">
              <a href="#">
                <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product">
                Headphone Blitz
              </a>
            </div>
            <div class="search-header">
              Projects
            </div>
            <div class="search-item">
              <a href="#">
                <div class="search-icon bg-danger text-white mr-3">
                  <i class="fas fa-code"></i>
                </div>
                Stisla Admin Template
              </a>
            </div>
            <div class="search-item">
              <a href="#">
                <div class="search-icon bg-primary text-white mr-3">
                  <i class="fas fa-laptop"></i>
                </div>
                Create a new Homepage Design
              </a>
            </div>
          </div>
    </div>
    </form>
    <ul class="navbar-nav navbar-right">
      <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
        <div class="dropdown-menu dropdown-list dropdown-menu-right">
          <div class="dropdown-header">Messages
            <div class="float-right">
              <a href="#">Mark All As Read</a>
            </div>
          </div>
          <div class="dropdown-list-content dropdown-list-message">
            <a href="#" class="dropdown-item dropdown-item-unread">
              <div class="dropdown-item-avatar">
                <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                <div class="is-online"></div>
              </div>
              <div class="dropdown-item-desc">
                <b>Kusnaedi</b>
                <p>Hello, Bro!</p>
                <div class="time">10 Hours Ago</div>
              </div>
            </a>
            <a href="#" class="dropdown-item dropdown-item-unread">
              <div class="dropdown-item-avatar">
                <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle">
              </div>
              <div class="dropdown-item-desc">
                <b>Dedik Sugiharto</b>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <div class="time">12 Hours Ago</div>
              </div>
            </a>
            <a href="#" class="dropdown-item dropdown-item-unread">
              <div class="dropdown-item-avatar">
                <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle">
                <div class="is-online"></div>
              </div>
              <div class="dropdown-item-desc">
                <b>Agung Ardiansyah</b>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="time">12 Hours Ago</div>
              </div>
            </a>
            <a href="#" class="dropdown-item">
              <div class="dropdown-item-avatar">
                <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle">
              </div>
              <div class="dropdown-item-desc">
                <b>Ardian Rahardiansyah</b>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                <div class="time">16 Hours Ago</div>
              </div>
            </a>
            <a href="#" class="dropdown-item">
              <div class="dropdown-item-avatar">
                <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle">
              </div>
              <div class="dropdown-item-desc">
                <b>Alfa Zulkarnain</b>
                <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                <div class="time">Yesterday</div>
              </div>
            </a>
          </div>
          <div class="dropdown-footer text-center">
            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </li>
      <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
        <div class="dropdown-menu dropdown-list dropdown-menu-right">
          <div class="dropdown-header">Notifications
            <div class="float-right">
              <a href="#">Mark All As Read</a>
            </div>
          </div>
          <div class="dropdown-list-content dropdown-list-icons">
            <a href="#" class="dropdown-item dropdown-item-unread">
              <div class="dropdown-item-icon bg-primary text-white">
                <i class="fas fa-code"></i>
              </div>
              <div class="dropdown-item-desc">
                Template update is available now!
                <div class="time text-primary">2 Min Ago</div>
              </div>
            </a>
            <a href="#" class="dropdown-item">
              <div class="dropdown-item-icon bg-info text-white">
                <i class="far fa-user"></i>
              </div>
              <div class="dropdown-item-desc">
                <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                <div class="time">10 Hours Ago</div>
              </div>
            </a>
            <a href="#" class="dropdown-item">
              <div class="dropdown-item-icon bg-success text-white">
                <i class="fas fa-check"></i>
              </div>
              <div class="dropdown-item-desc">
                <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                <div class="time">12 Hours Ago</div>
              </div>
            </a>
            <a href="#" class="dropdown-item">
              <div class="dropdown-item-icon bg-danger text-white">
                <i class="fas fa-exclamation-triangle"></i>
              </div>
              <div class="dropdown-item-desc">
                Low disk space. Let's clean it!
                <div class="time">17 Hours Ago</div>
              </div>
            </a>
            <a href="#" class="dropdown-item">
              <div class="dropdown-item-icon bg-info text-white">
                <i class="fas fa-bell"></i>
              </div>
              <div class="dropdown-item-desc">
                Welcome to Stisla template!
                <div class="time">Yesterday</div>
              </div>
            </a>
          </div>
          <div class="dropdown-footer text-center">
            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </li>
      <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
          <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
          <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-title">Logged in 5 min ago</div>
          <a href="features-profile.html" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Profile
          </a>
          <a href="features-activities.html" class="dropdown-item has-icon">
            <i class="fas fa-bolt"></i> Activities
          </a>
          <a href="features-settings.html" class="dropdown-item has-icon">
            <i class="fas fa-cog"></i> Settings
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item has-icon text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </div>
      </li>
    </ul>
    </nav>
    <div class="main-sidebar sidebar-style-2">
      <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
          <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
          <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
              <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
            </ul>
          </li>
          <li class="menu-header">Starter</li>
          <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
              <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
              <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
          <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="bootstrap-alert.html">Alert</a></li>
              <li><a class="nav-link" href="bootstrap-badge.html">Badge</a></li>
              <li><a class="nav-link" href="bootstrap-breadcrumb.html">Breadcrumb</a></li>
              <li><a class="nav-link" href="bootstrap-buttons.html">Buttons</a></li>
              <li><a class="nav-link" href="bootstrap-card.html">Card</a></li>
              <li><a class="nav-link" href="bootstrap-carousel.html">Carousel</a></li>
              <li><a class="nav-link" href="bootstrap-collapse.html">Collapse</a></li>
              <li><a class="nav-link" href="bootstrap-dropdown.html">Dropdown</a></li>
              <li><a class="nav-link" href="bootstrap-form.html">Form</a></li>
              <li><a class="nav-link" href="bootstrap-list-group.html">List Group</a></li>
              <li><a class="nav-link" href="bootstrap-media-object.html">Media Object</a></li>
              <li><a class="nav-link" href="bootstrap-modal.html">Modal</a></li>
              <li><a class="nav-link" href="bootstrap-nav.html">Nav</a></li>
              <li><a class="nav-link" href="bootstrap-navbar.html">Navbar</a></li>
              <li><a class="nav-link" href="bootstrap-pagination.html">Pagination</a></li>
              <li><a class="nav-link" href="bootstrap-popover.html">Popover</a></li>
              <li><a class="nav-link" href="bootstrap-progress.html">Progress</a></li>
              <li><a class="nav-link" href="bootstrap-table.html">Table</a></li>
              <li><a class="nav-link" href="bootstrap-tooltip.html">Tooltip</a></li>
              <li><a class="nav-link" href="bootstrap-typography.html">Typography</a></li>
            </ul>
          </li>
          <li class="menu-header">Stisla</li>
          <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="components-article.html">Article</a></li>
              <li><a class="nav-link beep beep-sidebar" href="components-avatar.html">Avatar</a></li>
              <li><a class="nav-link" href="components-chat-box.html">Chat Box</a></li>
              <li><a class="nav-link beep beep-sidebar" href="components-empty-state.html">Empty State</a></li>
              <li><a class="nav-link" href="components-gallery.html">Gallery</a></li>
              <li><a class="nav-link beep beep-sidebar" href="components-hero.html">Hero</a></li>
              <li><a class="nav-link" href="components-multiple-upload.html">Multiple Upload</a></li>
              <li><a class="nav-link beep beep-sidebar" href="components-pricing.html">Pricing</a></li>
              <li><a class="nav-link" href="components-statistic.html">Statistic</a></li>
              <li><a class="nav-link" href="components-tab.html">Tab</a></li>
              <li><a class="nav-link" href="components-table.html">Table</a></li>
              <li><a class="nav-link" href="components-user.html">User</a></li>
              <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Wizard</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
              <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
              <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a>
            <ul class="dropdown-menu">
              <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
              <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
              <li><a href="gmaps-geocoding.html">Geocoding</a></li>
              <li><a href="gmaps-geolocation.html">Geolocation</a></li>
              <li><a href="gmaps-marker.html">Marker</a></li>
              <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
              <li><a href="gmaps-route.html">Route</a></li>
              <li><a href="gmaps-simple.html">Simple</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="modules-calendar.html">Calendar</a></li>
              <li><a class="nav-link" href="modules-chartjs.html">ChartJS</a></li>
              <li><a class="nav-link" href="modules-datatables.html">DataTables</a></li>
              <li><a class="nav-link" href="modules-flag.html">Flag</a></li>
              <li><a class="nav-link" href="modules-font-awesome.html">Font Awesome</a></li>
              <li><a class="nav-link" href="modules-ion-icons.html">Ion Icons</a></li>
              <li><a class="nav-link" href="modules-owl-carousel.html">Owl Carousel</a></li>
              <li><a class="nav-link" href="modules-sparkline.html">Sparkline</a></li>
              <li><a class="nav-link" href="modules-sweet-alert.html">Sweet Alert</a></li>
              <li><a class="nav-link" href="modules-toastr.html">Toastr</a></li>
              <li><a class="nav-link" href="modules-vector-map.html">Vector Map</a></li>
              <li><a class="nav-link" href="modules-weather-icon.html">Weather Icon</a></li>
            </ul>
          </li>
          <li class="menu-header">Pages</li>
          <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
            <ul class="dropdown-menu">
              <li><a href="auth-forgot-password.html">Forgot Password</a></li>
              <li><a href="auth-login.html">Login</a></li>
              <li><a href="auth-register.html">Register</a></li>
              <li><a href="auth-reset-password.html">Reset Password</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="errors-503.html">503</a></li>
              <li><a class="nav-link" href="errors-403.html">403</a></li>
              <li><a class="nav-link" href="errors-404.html">404</a></li>
              <li><a class="nav-link" href="errors-500.html">500</a></li>
            </ul>
          </li>
          <li class="dropdown active">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="features-activities.html">Activities</a></li>
              <li><a class="nav-link" href="features-post-create.html">Post Create</a></li>
              <li><a class="nav-link" href="features-posts.html">Posts</a></li>
              <li class=active><a class="nav-link" href="features-profile.html">Profile</a></li>
              <li><a class="nav-link" href="features-settings.html">Settings</a></li>
              <li><a class="nav-link" href="features-setting-detail.html">Setting Detail</a></li>
              <li><a class="nav-link" href="features-tickets.html">Tickets</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
            <ul class="dropdown-menu">
              <li><a href="utilities-contact.html">Contact</a></li>
              <li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
              <li><a href="utilities-subscribe.html">Subscribe</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
          </a>
        </div>
      </aside>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Profile</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Profile</div>
          </div>
        </div>
        <div class="section-body">
          <h2 class="section-title">Hi, Ujang!</h2>
          <p class="section-lead">
            Change information about yourself on this page.
          </p>

          <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-5">
              <div class="card profile-widget">
                <div class="profile-widget-header">
                  <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                  <div class="profile-widget-items">
                    <div class="profile-widget-item">
                      <div class="profile-widget-item-label">Posts</div>
                      <div class="profile-widget-item-value">187</div>
                    </div>
                    <div class="profile-widget-item">
                      <div class="profile-widget-item-label">Followers</div>
                      <div class="profile-widget-item-value">6,8K</div>
                    </div>
                    <div class="profile-widget-item">
                      <div class="profile-widget-item-label">Following</div>
                      <div class="profile-widget-item-value">2,1K</div>
                    </div>
                  </div>
                </div>
                <div class="profile-widget-description">
                  <div class="profile-widget-name">Ujang Maman <div class="text-muted d-inline font-weight-normal">
                      <div class="slash"></div> Web Developer
                    </div>
                  </div>
                  Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.
                </div>
                <div class="card-footer text-center">
                  <div class="font-weight-bold mb-2">Follow Ujang On</div>
                  <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#" class="btn btn-social-icon btn-github mr-1">
                    <i class="fab fa-github"></i>
                  </a>
                  <a href="#" class="btn btn-social-icon btn-instagram">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-7">
              <div class="card">
                <form method="post" class="needs-validation" novalidate="">
                  <div class="card-header">
                    <h4>Edit Profile</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="form-group col-md-6 col-12">
                        <label>First Name</label>
                        <input type="text" class="form-control" value="Ujang" required="">
                        <div class="invalid-feedback">
                          Please fill in the first name
                        </div>
                      </div>
                      <div class="form-group col-md-6 col-12">
                        <label>Last Name</label>
                        <input type="text" class="form-control" value="Maman" required="">
                        <div class="invalid-feedback">
                          Please fill in the last name
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-7 col-12">
                        <label>Email</label>
                        <input type="email" class="form-control" value="ujang@maman.com" required="">
                        <div class="invalid-feedback">
                          Please fill in the email
                        </div>
                      </div>
                      <div class="form-group col-md-5 col-12">
                        <label>Phone</label>
                        <input type="tel" class="form-control" value="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-12">
                        <label>Bio</label>
                        <textarea class="form-control summernote-simple">Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.</textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group mb-0 col-12">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                          <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                          <div class="text-muted form-text">
                            You will get new information about products, offers and promotions
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary">Save Changes</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer class="main-footer">
      <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
      </div>
      <div class="footer-right">

      </div>
    </footer>
  </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="assets/modules/summernote/summernote-bs4.js"></script>

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>