<!-- Begin Nav
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <!-- Begin Logo -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('frontend/img/logo.png') }}" alt="logo" class="logo-img">
        </a>
        <!-- End Logo -->
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <!-- Begin Menu -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Stories <span class="sr-only">(current)</span></a>
                </li>
                {{-- <li class="nav-item">
                <a class="nav-link" href="post.html">Post</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="author.html">Author</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Author</a>
                </li> 
            </ul>
            <!-- End Menu -->
            <!-- Begin Search -->
            <form class="form-inline my-2 my-lg-0 search-form">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg></span>
            </form>
            <!-- End Search -->
        </div>
    </div>
</nav>

<style>
    /* Navbar Styles */
    .navbar {
        padding: 0.8rem 0;
        transition: all 0.3s ease;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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

    /* Search Form */
    .search-form {
        position: relative;
        margin-left: 1rem;
    }

    .search-form .form-control {
        border-radius: 25px;
        padding: 0.5rem 1rem;
        border: 1px solid #dee2e6;
        transition: all 0.3s ease;
    }

    .search-form .form-control:focus {
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
        border-color: #0d6efd;
    }

    .search-icon {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .search-icon:hover {
        color: #0d6efd;
    }

    /* Mobile Responsive */
    @media (max-width: 991.98px) {
        .navbar-collapse {
            background: white;
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            margin-top: 1rem;
        }

        .nav-link {
            padding: 0.8rem 1rem !important;
        }

        .nav-link::after {
            display: none;
        }

        .search-form {
            margin: 1rem 0 0 0;
        }
    }

    /* Animation for navbar items */
    .navbar-nav .nav-item {
        opacity: 0;
        animation: fadeInDown 0.5s ease forwards;
    }

    .navbar-nav .nav-item:nth-child(1) { animation-delay: 0.1s; }
    .navbar-nav .nav-item:nth-child(2) { animation-delay: 0.2s; }
    .navbar-nav .nav-item:nth-child(3) { animation-delay: 0.3s; }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            document.querySelector('.navbar').classList.add('scrolled');
        } else {
            document.querySelector('.navbar').classList.remove('scrolled');
        }
    });

    // Search form focus effect
    document.querySelector('.search-form .form-control').addEventListener('focus', function() {
        this.parentElement.classList.add('focused');
    });

    document.querySelector('.search-form .form-control').addEventListener('blur', function() {
        this.parentElement.classList.remove('focused');
    });
</script>
<!-- End Nav
================================================== -->