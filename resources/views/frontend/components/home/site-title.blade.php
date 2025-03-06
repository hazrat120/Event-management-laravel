<!-- Begin Site Title
================================================== -->
<div class="container">
	<div class="mainheading text-center py-5">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<h1 class="sitetitle display-4 fw-bold mb-4">
					Eventify
				</h1>
				<p class="lead text-muted mb-4">
					All Events are fantastic choice for all. Join Now.
				</p>
				<div class="d-flex justify-content-center gap-2">
					<a href="#" class="btn btn-primary btn-lg px-4 gap-1">
						Browse Events
					</a>
					<a href="#" class="btn btn-outline-primary btn-lg px-4 gap-1">
						Join Now
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
	.sitetitle {
		color: #2c3e50;
		font-size: 3.5rem;
		font-weight: 800;
		letter-spacing: -1px;
		line-height: 1.2;
		position: relative;
		display: inline-block;
	}
	
	.sitetitle::after {
		content: '';
		position: absolute;
		bottom: -10px;
		left: 50%;
		transform: translateX(-50%);
		width: 80px;
		height: 4px;
		background: linear-gradient(90deg, #3498db, #2ecc71);
		border-radius: 2px;
	}
	
	.mainheading {
		position: relative;
		overflow: hidden;
		background: #fff;
		border-radius: 10px;
		box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
		padding: 2rem;
		margin: 2rem 0;
	}
	
	.btn-primary {
		background: #3498db;
		border: none;
		transition: all 0.3s ease;
	}
	
	.btn-primary:hover {
		background: #2980b9;
		transform: translateY(-2px);
		box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
	}
	
	.btn-outline-primary {
		border: 2px solid #3498db;
		color: #3498db;
		transition: all 0.3s ease;
	}
	
	.btn-outline-primary:hover {
		background: #3498db;
		color: #fff;
		transform: translateY(-2px);
		box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
	}
	
	.lead {
		font-size: 1.25rem;
		color: #7f8c8d;
	}
	
	@media (max-width: 768px) {
		.sitetitle {
			font-size: 2.5rem;
		}
		
		.lead {
			font-size: 1.1rem;
		}
		
		.btn-lg {
			padding: 0.5rem 1rem;
			font-size: 1rem;
		}
		
		.mainheading {
			padding: 1.5rem;
			margin: 1rem 0;
		}
	}
</style>
<!-- End Site Title
================================================== -->