	<!-- Begin Featured
	================================================== -->
    <!-- In the head section -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
	<section class="featured-posts py-5">
		<div class="container">
			<div class="section-title text-center mb-5">
				<h2 class="display-4 fw-bold">
					<span>
						Featured Events
						<span></span>
					</span>
				</h2>
			</div>
			<div class="row g-4">
				@foreach ($featurEvents as $featur)
					<!-- begin post -->
					<div class="col-md-6 p-2">
						<div class="card h-100 shadow-sm hover-card">
							<div class="row g-0">
								<div class="col-md-5">
									<a href="{{ url('/post'.'/'.$featur->id)}}" class="text-decoration-none">
										<div class="card-img-top h-100" style="background-image:url({{ asset($featur->image) }}); background-size: cover; background-position: center;">
										</div>
									</a>
								</div>
								<div class="col-md-6 p-2">
									<div class="card-body d-flex flex-column h-100">
										<div class="mb-3">
											<span class="badge bg-primary">{{ $featur->type }}</span>
										</div>
										<h2 class="card-title h4 mb-3">
											<a href="{{ url('/post'.'/'.$featur->id)}}" class="text-decoration-none text-dark hover-primary">
												{{ $featur->title }}
											</a>
										</h2>
										<p class="card-text text-muted mb-3">
											{{ Str::limit($featur->description, 150) }}
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
															{{ ucwords($featur->user->firstName) }}
														</a>
													</h6>
													<small class="text-muted">
														<i class="far fa-calendar-alt me-1"></i>
														{{ date('d F Y',strtotime($featur->date)) }}
													</small>
												</div>
											</div>
											<div class="d-flex justify-content-between align-items-center">
												<a href="{{ url('/post'.'/'.$featur->id)}}" class="btn btn-outline-primary btn-sm">
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
						</div>
					</div>
					<!-- end post -->
				@endforeach
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
			height: 100%;
			min-height: 200px;
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
				height: 200px;
			}
			
			.card-title {
				font-size: 1.25rem;
			}
		}
	</style>
	<!-- End Featured
	================================================== -->