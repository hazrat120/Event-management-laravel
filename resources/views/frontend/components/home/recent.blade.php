<!-- Begin List Posts
	================================================== -->
<section class="recent-posts py-5">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2 class="display-4 fw-bold">
                <span>
                    All Stories
                    <span></span>
                </span>
            </h2>
        </div>
        <div class="row g-4">
            @foreach ($recentEvents as $recent)
                 <!-- begin post -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm hover-card">
                        <a href="{{ url('/post'.'/'.$recent->id)}}" class="text-decoration-none">
                            <div class="card-img-top" style="height: 200px; background-image: url('{{ asset($recent->image)}}'); background-size: cover; background-position: center;">
                            </div>
                        </a>
                        <div class="card-body d-flex flex-column p-1">
                            <div class="mb-3">
                                <span class="badge bg-secondary">{{ $recent->type }}</span>
                            </div>
                            <h2 class="card-title h5 mb-3">
                                <a href="{{ url('/post'.'/'.$recent->id)}}" class="text-decoration-none text-dark hover-primary">
                                    {{ $recent->title }}
                                </a>
                            </h2>
                            <p class="card-text text-muted mb-3">
                                {{ Str::limit($recent->description, 150) }}
                            </p>
                            <div class="mt-auto">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0">
                                        <a href="#" class="text-decoration-none">
                                            <img class="rounded-circle" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=50&amp;d=mm&amp;r=x" alt="Author">
                                        </a>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0">
                                            <a href="#" class="text-decoration-none text-dark hover-primary">
                                                {{ $recent->user->firstName }}
                                            </a>
                                        </h6>
                                        <small class="text-muted">
                                            <i class="far fa-calendar-alt me-1"></i>
                                            {{ date('d F Y',strtotime($recent->date)) }}
                                        </small>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ url('/post'.'/'.$recent->id)}}" class="btn btn-outline-primary btn-sm">
                                        Read More
                                        <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                    <span class="badge bg-light text-dark">
                                        <i class="far fa-clock me-1"></i>6 min read
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->
            @endforeach
        </div>
        
        <div class="mt-4">
            {{ $recentEvents->links() }}
        </div>
    </div>
</section>

<style>
    .hover-card {
        transition: all 0.3s ease;
        border: none;
        overflow: hidden;
    }
    
    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    
    .hover-primary {
        transition: color 0.3s ease;
    }
    
    .hover-primary:hover {
        color: #0d6efd !important;
    }
    
    .card-img-top {
        position: relative;
        overflow: hidden;
    }
    
    .card-img-top::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.1) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .card:hover .card-img-top::after {
        opacity: 1;
    }
    
    .section-title h2 span {
        position: relative;
        display: inline-block;
    }
    
    .section-title h2 span::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, #0d6efd, #0dcaf0);
        border-radius: 3px;
    }
    
    .badge {
        font-weight: 500;
        padding: 0.5em 1em;
    }
    
    .btn-outline-primary {
        border-width: 2px;
        font-weight: 500;
    }
    
    .btn-outline-primary:hover {
        transform: translateX(5px);
    }
    
    @media (max-width: 768px) {
        .card-img-top {
            height: 180px !important;
        }
        
        .card-title {
            font-size: 1.1rem;
        }
    }
</style>
        <!-- End List Posts
        ================================================== -->