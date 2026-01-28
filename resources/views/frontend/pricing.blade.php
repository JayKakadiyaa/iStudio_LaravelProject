<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iSTUDIO - Interior Design Packages</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="{{asset('frontend/img/favicon.ico')}}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Space+Grotesk:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

    <style>
        :root {
            --istudio-green: #198754; 
            --istudio-light: #f8faf9;
            --istudio-dark: #1a2d26;
        }

        body { background-color: var(--istudio-light); font-family: 'Open Sans', sans-serif; }

        .pricing-card {
            border: none;
            border-radius: 20px;
            transition: all 0.4s ease;
            background: #ffffff;
            overflow: hidden;
        }

        .pricing-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 1.5rem 4rem rgba(0,0,0,0.1) !important;
        }

        .pricing-card.featured {
            border: 2px solid var(--istudio-green);
        }

        .price-tag {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 3rem;
            font-weight: 700;
            color: var(--istudio-dark);
        }

        .price-tag span { font-size: 1rem; color: #6c757d; font-weight: 400; }

        .btn-istudio-outline {
            border: 2px solid var(--istudio-green);
            color: var(--istudio-green);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-istudio-outline:hover {
            background-color: var(--istudio-green);
            color: white;
        }

        .btn-istudio-fill {
            background-color: var(--istudio-green);
            color: white;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .feature-item i {
            color: var(--istudio-green);
            font-size: 1.2rem;
        }

        .badge-popular {
            background-color: var(--istudio-green);
            padding: 6px 25px;
            border-radius: 0 0 15px 15px;
            color: white;
            font-size: 0.85rem;
            font-weight: 700;
            display: inline-block;
        }
    </style>
</head>

<body>
    
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h6 class="text-primary text-uppercase fw-bold">Design Packages</h6>
            <h1 class="display-5 mb-4">Affordable Interior Solutions</h1>
            <p class="text-muted">Transform your living space with our curated design plans tailored to fit your budget and style.</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="pricing-card h-100 p-5 shadow-sm text-center">
                    <h4 class="mb-1">Essential</h4>
                    <p class="text-muted small mb-4">For Single Room Makeovers</p>
                    <div class="price-tag mb-0">₹4,999</div>
                    <p class="text-muted mb-4">Consultation Fee</p>
                    <hr>
                    <ul class="list-unstyled text-start mb-5">
                        <li class="feature-item mb-3"><i class="bi bi-check-circle-fill me-3"></i> 2D Layout Planning</li>
                        <li class="feature-item mb-3"><i class="bi bi-check-circle-fill me-3"></i> Color Palette Selection</li>
                        <li class="feature-item mb-3"><i class="bi bi-check-circle-fill me-3"></i> Furniture Moodboard</li>
                        <li class="feature-item mb-3 text-muted"><i class="bi bi-x-circle me-3"></i> 3D Realistic Renders</li>
                        <li class="feature-item mb-3 text-muted"><i class="bi bi-x-circle me-3"></i> Site Supervision</li>
                    </ul>
                    <a href="{{url('/contact')}}" class="btn btn-istudio-outline w-100 py-3 mt-auto">Book Now</a>
                </div>
            </div>

            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="pricing-card featured h-100 shadow text-center position-relative">
                    <div class="badge-popular mb-4">Most Requested</div>
                    <div class="px-5 pb-5">
                        <h4 class="mb-1">Elite</h4>
                        <p class="text-muted small mb-4">For Full Home Design</p>
                        <div class="price-tag mb-0">₹14,999</div>
                        <p class="text-muted mb-4">Design Fee</p>
                        <hr>
                        <ul class="list-unstyled text-start mb-5">
                            <li class="feature-item mb-3"><i class="bi bi-check-circle-fill me-3"></i> Detailed 2D & 3D Plans</li>
                            <li class="feature-item mb-3"><i class="bi bi-check-circle-fill me-3"></i> Electrical & Plumbing Maps</li>
                            <li class="feature-item mb-3"><i class="bi bi-check-circle-fill me-3"></i> Material Specifications</li>
                            <li class="feature-item mb-3"><i class="bi bi-check-circle-fill me-3"></i> 2 Site Visits Included</li>
                            <li class="feature-item mb-3 text-muted"><i class="bi bi-x-circle me-3"></i> Turnkey Execution</li>
                        </ul>
                        <a href="{{url('/contact')}}" class="btn btn-istudio-fill btn-primary w-100 py-3 mt-auto">Get Started</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="pricing-card h-100 p-5 shadow-sm text-center">
                    <h4 class="mb-1">Luxury</h4>
                    <p class="text-muted small mb-4">For Turnkey Solutions</p>
                    <div class="price-tag mb-0">₹49,999</div>
                    <p class="text-muted mb-4">Booking Amount</p>
                    <hr>
                    <ul class="list-unstyled text-start mb-5">
                        <li class="feature-item mb-3"><i class="bi bi-check-circle-fill me-3"></i> Full VR Walkthrough</li>
                        <li class="feature-item mb-3"><i class="bi bi-check-circle-fill me-3"></i> Custom Furniture Design</li>
                        <li class="feature-item mb-3"><i class="bi bi-check-circle-fill me-3"></i> End-to-End Execution</li>
                        <li class="feature-item mb-3"><i class="bi bi-check-circle-fill me-3"></i> Dedicated Project Manager</li>
                        <li class="feature-item mb-3"><i class="bi bi-check-circle-fill me-3"></i> Post-Work Warranty</li>
                    </ul>
                    <a href="{{url('/contact')}}" class="btn btn-istudio-outline w-100 py-3 mt-auto">Enquire Now</a>
                </div>
            </div>
        </div>

        <div class="text-center mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="p-4 bg-white rounded-3 shadow-sm d-inline-block">
                <p class="mb-0 text-muted"><i class="fa fa-info-circle text-primary me-2"></i> Custom commercial project? <a href="{{url('/contact')}}" class="text-primary fw-bold">Request a custom quote</a></p>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>