<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/cloud.png') }}" type="image/png">
    <title>Ramsys - @yield('title', 'PC and Components Store')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #0056b3;
            --primary-light: #e6f0ff;
            --secondary-color: #f8f9fa;
            --accent-color: #ff6b00;
            --text-color: #333;
            --light-gray: #f4f4f4;
            --medium-gray: #e0e0e0;
            --dark-gray: #666;
            --transition-speed: 0.3s;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            padding-top: 76px;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        /* Navbar Styles */
        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            transition: all var(--transition-speed);
        }

        .navbar-brand {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 1.5rem;
            color: var(--primary-color) !important;
        }

        .nav-link {
            color: var(--text-color) !important;
            font-weight: 500;
            margin: 0 10px;
            position: relative;
            transition: color var(--transition-speed);
        }

        .nav-link:hover, .nav-link.active {
            color: var(--primary-color) !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: var(--primary-color);
            transition: width var(--transition-speed);
        }

        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, #003366 100%);
            color: white;
            padding: 5rem 0;
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: url('/images/hero-pattern.png');
            background-size: cover;
            opacity: 0.1;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            font-weight: 300;
        }

        .btn-hero {
            padding: 0.75rem 2rem;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            background-color: var(--accent-color);
            border: none;
            transition: transform var(--transition-speed), box-shadow var(--transition-speed);
        }

        .btn-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            background-color: #ff7d20;
        }

        /* Product Cards */
        .product-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: all var(--transition-speed);
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .product-img {
            height: 220px;
            object-fit: contain;
            padding: 1.5rem;
            background-color: var(--light-gray);
            transition: transform var(--transition-speed);
        }

        .product-card:hover .product-img {
            transform: scale(1.05);
        }

        .card-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin: 1rem 0;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 0.5rem 1.5rem;
            font-weight: 500;
            transition: all var(--transition-speed);
        }

        .btn-primary:hover {
            background-color: #004494;
            border-color: #004494;
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        /* Product Detail Page */
        .breadcrumb {
            background-color: var(--light-gray);
            padding: 0.75rem 1rem;
            border-radius: 5px;
            margin-bottom: 2rem;
        }

        .breadcrumb-item a {
            color: var(--primary-color);
            text-decoration: none;
        }

        .product-detail-img {
            max-height: 500px;
            object-fit: contain;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            background-color: var(--light-gray);
            padding: 2rem;
        }

        .product-detail-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .product-detail-price {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin: 1.5rem 0;
        }

        .btn-cart {
            background-color: var(--accent-color);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            transition: all var(--transition-speed);
        }

        .btn-cart:hover {
            background-color: #ff7d20;
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .specs-table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .specs-table thead {
            background-color: var(--primary-color);
            color: white;
        }

        .specs-table tr td:first-child {
            font-weight: 600;
            width: 40%;
            background-color: var(--primary-light);
        }

        /* Back Button */
        .btn-back {
            display: inline-flex;
            align-items: center;
            color: var(--primary-color);
            font-weight: 500;
            text-decoration: none;
            transition: all var(--transition-speed);
            margin-bottom: 1rem;
        }

        .btn-back:hover {
            color: #004494;
            transform: translateX(-5px);
        }

        .btn-back i {
            margin-right: 0.5rem;
        }

        /* Section Titles */
        .section-title {
            position: relative;
            margin-bottom: 2.5rem;
            padding-bottom: 1rem;
            text-align: center;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
        }

        /* Footer */
        .footer {
            background-color: var(--primary-color);
            color: white;
            padding: 3rem 0 1.5rem;
            margin-top: 5rem;
        }

        .footer h5 {
            font-weight: 600;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.75rem;
        }

        .footer h5::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--accent-color);
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color var(--transition-speed);
        }

        .footer-links a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            transition: all var(--transition-speed);
        }

        .social-links a:hover {
            background-color: var(--accent-color);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            margin-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .product-detail-title {
                font-size: 2rem;
                margin-top: 2rem;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 3rem 0;
            }

            .hero-title {
                font-size: 2rem;
            }

            .section-title {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">


        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                <i class="fas fa-home me-1"></i> Home
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                <i class="fas fa-info-circle me-1"></i> About
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                <i class="fas fa-envelope me-1"></i> Contact
            </a>
        </li>

        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">
                    <i class="fas fa-sign-in-alt me-1"></i> Login
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">
                    <i class="fas fa-user-plus me-1"></i> Register
                </a>
            </li>
            <!-- Add this to your navbar, just before the authentication links -->
        @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user-circle me-1"></i> {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('dashboard') }}">
                            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="{{ route('cart.index') }}">
                            <i class="fas fa-shopping-cart"></i> Cart
                            @php
                                $cart = Auth::check()
                                    ? \App\Models\Cart::where('user_id', Auth::id())->first()
                                    : \App\Models\Cart::where('session_id', session()->getId())->first();
                                $itemCount = $cart ? $cart->totalItems : 0;
                            @endphp
                            @if($itemCount > 0)
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ $itemCount }}
                                    <span class="visually-hidden">items in cart</span>
                                </span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('profile') }}">
                            <i class="fas fa-user-edit me-2"></i> My Profile
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
    </ul>
</div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer" style="background-color: rgb(45, 55, 72)">
        <div class="container" >
            <div class="row" >
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5><img src="{{ asset('images/logo.jpg') }} " alt="Ramsys Logo" style="height: 35px"  /></h5>
                    <p class="footer-description">RAMSYS is a company specializing in the sale of computer and electronic equipment, as well as the provision of
                        IT and telecommunications services. Since its inception, it has established itself as a major player in the regional market thanks to a wide range
                        of quality products and services.</p>
                    {{-- <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div> --}}
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5>Product Categories</h5>
                    <ul class="footer-links">
                        <li><a href="#">Gaming PCs</a></li>
                        <li><a href="#">Workstations</a></li>
                        <li><a href="#">Graphics Cards</a></li>
                        <li><a href="#">Processors</a></li>
                        <li><a href="#">Peripherals</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5>Contact Us</h5>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt me-2"></i> 101,Imeuble Sibam,Angle Boulevard Mohamed V <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Et Avenue Moulay
                            Hassan 1er, <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Place De La Liberté, Guéliz - Gueliz (AR)</li>
                        <li><i class="fas fa-phone me-2"></i> +212-524420042</li>
                        <li><i class="fas fa-clock me-2"></i> Monday - Friday: 9:00 AM - 7:00 PM<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saturday : 9:30 AM - 3:00 PM<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sunday : Closed</li>
                    </ul>
                </div>
            </div>
            <div class="copyright" >
                <p>All Rights Reserved. Designed by <a href="https://github.com/YoussefAitBelfadil">YAB</a><br> &copy; {{ now()->year }} </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80, // Adjust for navbar height
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Navbar scroll effect
            const navbar = document.querySelector('.navbar');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.style.padding = '10px 0';
                    navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
                } else {
                    navbar.style.padding = '15px 0';
                    navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
                }
            });
        });
    </script>
</body>
</html>
