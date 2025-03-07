<!-- Begin Banner Section
================================================== -->
<section class="banner-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="banner-title display-4 fw-bold mb-4">
                    Welcome to Eventify
                </h1>
                <p class="banner-text text-muted mb-4">
                    Discover amazing events, connect with organizers, and create unforgettable experiences. Join our community today!
                </p>
                <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                    <a href="/" class="btn btn-primary btn-lg">
                        <i class="fas fa-calendar-alt me-2"></i>Browse Events
                    </a>
                    <a href="" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-user-plus me-2"></i>Join Now
                    </a>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="banner-image-wrapper">
                    <img src="" alt="Events Illustration" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .banner-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        min-height: 80vh;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .banner-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("{{ asset('images/pattern.svg') }}") repeat;
        opacity: 0.1;
        z-index: 0;
    }

    .banner-title {
        color: #2c3e50;
        font-size: 3.5rem;
        font-weight: 800;
        position: relative;
        margin-bottom: 2rem;
    }

    .banner-title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 0;
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #3498db, #2ecc71);
        border-radius: 2px;
    }

    .banner-text {
        font-size: 1.25rem;
        line-height: 1.8;
        color: #6c757d;
    }

    .btn-primary {
        background: linear-gradient(45deg, #3498db, #2ecc71);
        border: none;
        padding: 12px 30px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .btn-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, #2ecc71, #3498db);
        transition: all 0.5s ease;
        z-index: -1;
    }

    .btn-primary:hover::before {
        left: 0;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
    }

    .btn-outline-primary {
        border: 2px solid #3498db;
        color: #3498db;
        padding: 12px 30px;
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
    }

    .btn-outline-primary::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: linear-gradient(45deg, #3498db, #2ecc71);
        transition: all 0.3s ease;
        z-index: -1;
    }

    .btn-outline-primary:hover::after {
        width: 100%;
    }

    .btn-outline-primary:hover {
        color: #fff;
        border-color: transparent;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
    }

    .banner-image-wrapper {
        position: relative;
        text-align: center;
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-20px);
        }
        100% {
            transform: translateY(0px);
        }
    }

    .banner-image-wrapper::after {
        content: '';
        position: absolute;
        bottom: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        height: 20px;
        background: radial-gradient(ellipse at center, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 70%);
    }

    @media (max-width: 991.98px) {
        .banner-section {
            min-height: auto;
            padding: 4rem 0;
        }

        .banner-title {
            font-size: 2.5rem;
            text-align: center;
        }

        .banner-title::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .banner-text {
            font-size: 1.1rem;
            text-align: center;
        }
    }
</style>
<!-- End Banner Section
================================================== -->