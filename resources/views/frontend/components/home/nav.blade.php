

  <!-- Begin Nav ================================================== -->
  <nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
      <div class="container">
          <!-- Brand Logo -->
          <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{ asset('frontend/img/logo.png') }}" alt="logo" class="logo-img">
          </a>

          <!-- Toggle Button for Mobile -->
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" 
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Navbar Links -->
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/') }}">Home</a>
                  </li>

                  <!-- Events Dropdown -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
                          aria-haspopup="true" aria-expanded="false">
                          Events
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Active Events</a>
                          <a class="dropdown-item" href="#">Draft Events</a>
                          <a class="dropdown-item" href="#">My Events</a>
                      </div>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="#">About Us</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">Login</a>
                  </li>
              </ul>

              <!-- Search Form -->
              <form class="form-inline my-2 my-lg-0 search-form ml-lg-3">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search events..." aria-label="Search">
                  <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
                      <svg class="svgIcon-use" width="20" height="20" viewBox="0 0 25 25">
                          <path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path>
                      </svg>
                  </button>
              </form>
          </div>
      </div>
  </nav>
  <!-- End Nav ================================================== -->

  <style>
    /* Navbar Styles */
    .navbar {
      padding: 1rem 0;
      transition: all 0.3s ease;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .navbar.scrolled {
      padding: 0.5rem 0;
      background: rgba(255, 255, 255, 0.98) !important;
      backdrop-filter: blur(10px);
    }
    /* Logo Styles */
    .logo-img {
      height: 40px;
      transition: transform 0.3s ease;
    }
    .navbar-brand:hover .logo-img {
      transform: scale(1.05);
    }
    /* Navigation Links */
    .nav-link {
      font-weight: 500;
      padding: 0.5rem 1rem !important;
      color: #2c3e50 !important;
      transition: all 0.3s ease;
      position: relative;
      margin: 0 0.2rem;
    }
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      width: 0;
      height: 2px;
      background: linear-gradient(45deg, #0d6efd, #0dcaf0);
      transition: all 0.3s ease;
      transform: translateX(-50%);
    }
    .nav-link:hover::after,
    .nav-link.active::after {
      width: 80%;
    }
    .nav-link:hover,
    .nav-link.active {
      color: #0d6efd !important;
    }
    /* Dropdown Menu */
    .dropdown-menu {
      border: none;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      border-radius: 10px;
    }
    .dropdown-item {
      padding: 0.5rem 1.5rem;
      color: #2c3e50;
      transition: all 0.3s ease;
    }
    .dropdown-item:hover {
      background: linear-gradient(45deg, #0d6efd, #0dcaf0);
      color: white !important;
    }
    /* Search Form */
    .search-form .form-control {
      border-radius: 25px;
      padding: 0.5rem 1rem;
      border: 1px solid #dee2e6;
    }
    .search-form .btn {
      border-radius: 25px;
      padding: 0.5rem 1rem;
    }
    /* Mobile Responsive Overrides */
    @media (max-width: 991.98px) {
      .navbar-collapse {
        background: white;
        padding: 1rem;
        border-radius: 10px;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
        margin-top: 1rem;
      }
    }
  </style>

  
  <script>
      // Navbar scroll effect using jQuery
      $(window).on('scroll', function() {
          if ($(window).scrollTop() > 50) {
              $('.navbar').addClass('scrolled');
          } else {
              $('.navbar').removeClass('scrolled');
          }
      });
  </script>

