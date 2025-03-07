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
                <div class="col-md-4 p-3">
                    <div class="card h-100 shadow">
                        <!-- Image Section -->
                        <div class="card-img-wrapper">
                            <a href="{{ url('/post'.'/'.$recent->id)}}">
                                <div class="card-img-top" style="background-image: url('{{ asset($recent->image)}}');">
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Content Section -->
                        <div class="card-body d-flex p-4 flex-column">
                            <!-- Badge -->
                            <div class="mb-3">
                                <span class="badge bg-secondary">{{ $recent->type }}</span>
                            </div>

                            <!-- Title -->
                            <h2 class="card-title h5">
                                <a href="{{ url('/post'.'/'.$recent->id)}}" class="text-decoration-none text-dark hover-primary">
                                    {{ $recent->title }}
                                </a>
                            </h2>

                            <!-- Description -->
                            <p class="card-text text-muted">
                                {{ Str::limit($recent->description, 150) }}
                            </p>

                            <!-- Event Info -->
                            <div class="event-info my-2">
                                <div class="info-item">
                                    <i class="far fa-calendar-alt text-primary"></i>
                                    <span>{{ date('d F Y',strtotime($recent->date)) }}</span>
                                </div>
                                <div class="info-item">
                                    <i class="far fa-clock text-primary"></i>
                                    <span>6 min read</span>
                                </div>
                            </div>

                            <!-- Author -->
                            <div class="author-section d-flex align-items-center mt-3">
                                <img class="rounded-circle author-img" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=50&amp;d=mm&amp;r=x" alt="Author">
                                <div class="author-info ms-2">
                                    <h6 class="mb-0">{{ $recent->user->firstName }}</h6>
                                    <small class="text-muted">Event Organizer</small>
                                </div>
                            </div>

                            <!-- Action Button -->
                            <div class="d-flex justify-content-between align-items-center py-3">
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
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border: none;
        border-radius: 15px;
    }
    
    .hover-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;
    }
    
    .card {
        border-radius: 15px !important;
    }

    .card-img-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 15px 15px 0 0;
    }
    
    .card-img-top {
        height: 200px;
        background-size: cover;
        background-position: center;
        transition: transform 0.4s ease;
    }
    
    .hover-card:hover .card-img-top {
        transform: scale(1.1);
    }
    
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.4);
        opacity: 0;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .hover-card:hover .overlay {
        opacity: 1;
    }
    
    .overlay-content i {
        color: white;
        font-size: 2rem;
    }
    
    .badges .badge {
        margin-right: 5px;
        padding: 6px 12px;
        font-weight: 500;
    }
    
    .event-info {
        display: flex;
        gap: 15px;
    }
    
    .info-item {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 0.9rem;
    }
    
    .author-img {
        width: 40px;
        height: 40px;
        border: 2px solid #fff;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    .btn-primary {
        border-radius: 25px;
        font-weight: 500;
        padding: 8px 20px;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        transform: translateX(5px);
    }
    
    .section-title h2 span::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #0d6efd, #0dcaf0);
        border-radius: 2px;
    }
    
    @media (max-width: 768px) {
        .col-md-4 {
            padding: 10px;
        }
    }
</style>
<!-- End List Posts
================================================== -->