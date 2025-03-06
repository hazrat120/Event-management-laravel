<!-- Begin Footer
================================================== -->
<footer class="footer bg-dark text-light py-4 mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <div class="d-flex align-items-center">
                    <i class="fas fa-calendar-alt me-2"></i>
                    <p class="mb-0">
                        Copyright &copy; {{ date('Y') }} Event Management
                    </p>
                </div>
            </div>
            <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                        <svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25">
                        <path d="M10 19a1 1 0 0 1-.7-.3l-5-5a1 1 0 0 1 0-1.4l5-5a1 1 0 1 1 1.4 1.4L6.4 12l4.3 4.3a1 1 0 0 1-.7 1.7zm5 0a1 1 0 0 1-.7-1.7l4.3-4.3-4.3-4.3a1 1 0 0 1 1.4-1.4l5 5a1 1 0 0 1 0 1.4l-5 5a1 1 0 0 1-.7.3zm-4-1a1 1 0 0 1-.9-1.2l3-10a1 1 0 0 1 1.9.6l-3 10a1 1 0 0 1-1 .7z" fill-rule="evenodd"></path>
                        </svg>                              
                    <p class="mb-0">
                        Developed by 
                        <a href="https://github.com/hazrat120" 
                           class="text-light text-decoration-none hover-effect" 
                           target="_blank">
                            Hazrat Ali
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <div class="social-links">
                    <a href="#" class="text-light me-3 hover-effect">
                        <svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25">
                        <path d="M13.5 9V7.5c0-.7.4-1.5 1.5-1.5h2V3h-2.5C11.9 3 11 5 11 7v2H9v3h2v9h3v-9h2.5l.5-3h-3z" fill-rule="evenodd"></path>
                        </svg>                              
                    </a>

                    <a href="#" class="text-light me-3 hover-effect">
                        <svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25">
                        <path d="M6 9h3v9H6zM7.5 6.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM10 9h3v1.2c.4-.7 1.5-1.2 2.6-1.2 2.7 0 3.4 1.8 3.4 4.1v4.9h-3v-4.3c0-1-.4-2-1.6-2s-1.9 1-1.9 2v4.3h-3V9z" fill-rule="evenodd"></path>
                        </svg>   
                    </a>

                    <a href="#" class="text-light me-3 hover-effect">
                        <svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25">
                        <path d="M12.5 3C7 3 3 7.2 3 12.7c0 4.3 2.7 8 6.5 9.3.5.1.7-.2.7-.5v-2c-2.7.6-3.2-1.2-3.2-1.2-.5-1.3-1.2-1.6-1.2-1.6-1-.7.1-.7.1-.7 1.1.1 1.7 1.2 1.7 1.2 1 .1 2 .7 2.4 1.3.2-.6.5-1.1 1-1.4-2.2-.3-4.5-1.1-4.5-4.9 0-1.1.4-2.1 1.1-2.9-.1-.3-.5-1.3.1-2.7 0 0 .9-.3 2.9 1.1.9-.3 1.8-.4 2.7-.4.9 0 1.8.1 2.7.4 2-1.4 2.9-1.1 2.9-1.1.6 1.4.2 2.4.1 2.7.7.8 1.1 1.8 1.1 2.9 0 3.8-2.3 4.6-4.5 4.9.5.5 1 1.4 1 2.8v4c0 .3.2.6.7.5 3.8-1.3 6.5-5 6.5-9.3C22 7.2 18 3 12.5 3z" fill-rule="evenodd"></path>
                        </svg>   
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer {
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .hover-effect {
        transition: all 0.3s ease;
    }
    
    .hover-effect:hover {
        color: #007bff !important;
        transform: translateY(-2px);
    }
    
    .social-links a {
        display: inline-block;
        width: 35px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }
    
    .social-links a:hover {
        background: #007bff;
        transform: translateY(-3px);
    }
</style>
<!-- End Footer
================================================== -->