@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="hero-title">About Ramsys</h1>
                    <p class="hero-subtitle">Your trusted partner in high-performance computing solutions</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Our Story -->
        <section class="mt-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('images/about-us.jpg') }}" alt="About Ramsys" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-lg-6">
                    <h2 class="mb-4">Our Story</h2>
                    <p class="lead">Founded in 2010, Ramsys has grown from a small local shop to one of the leading providers of high-quality PCs and components.</p>
                    <p>Our journey began with a simple mission: to provide gamers, professionals, and tech enthusiasts with reliable, high-performance computing solutions at fair prices. What started as a passion project by a group of tech enthusiasts has evolved into a trusted brand known for quality and innovation.</p>
                    <p>Over the years, we've built a reputation for exceptional customer service, technical expertise, and a curated selection of products that meet our strict quality standards. We don't just sell computers – we build solutions that empower our customers to achieve more.</p>
                </div>
            </div>
        </section>

        <!-- Our Values -->
        <section class="mt-5 pt-5">
            <h2 class="section-title">Our Values</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="mb-4">
                                <i class="fas fa-gem fa-3x text-primary"></i>
                            </div>
                            <h4>Quality</h4>
                            <p class="text-muted">We never compromise on the quality of our products and services. Every component we use is carefully selected and tested to ensure reliability and performance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="mb-4">
                                <i class="fas fa-lightbulb fa-3x text-primary"></i>
                            </div>
                            <h4>Innovation</h4>
                            <p class="text-muted">We stay at the forefront of technology to bring you the latest advancements. Our team is constantly researching and testing new components to offer cutting-edge solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="mb-4">
                                <i class="fas fa-users fa-3x text-primary"></i>
                            </div>
                            <h4>Customer Focus</h4>
                            <p class="text-muted">Your satisfaction is our top priority. We're committed to providing exceptional service from your first interaction with us through long-term support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Team -->
        <section class="mt-5 pt-5">
            <h2 class="section-title">Meet Our Team</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('images/team-1.jpg') }}" class="card-img-top" alt="Team Member">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">John Smith</h5>
                            <p class="text-muted">Founder & CEO</p>
                            <div class="social-links-dark mt-3">
                                <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary me-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('images/team-2.jpg') }}" class="card-img-top" alt="Team Member">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">Emily Johnson</h5>
                            <p class="text-muted">Technical Director</p>
                            <div class="social-links-dark mt-3">
                                <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary me-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('images/team-3.jpg') }}" class="card-img-top" alt="Team Member">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">Michael Chen</h5>
                            <p class="text-muted">Lead Engineer</p>
                            <div class="social-links-dark mt-3">
                                <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary me-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('images/team-4.jpg') }}" class="card-img-top" alt="Team Member">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">Sarah Williams</h5>
                            <p class="text-muted">Customer Support Manager</p>
                            <div class="social-links-dark mt-3">
                                <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary me-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-primary"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Achievements -->
        <section class="mt-5 pt-5">
            <h2 class="section-title">Our Achievements</h2>
            <div class="row g-4 text-center">
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm py-4">
                        <div class="card-body">
                            <div class="display-4 fw-bold text-primary mb-2">10+</div>
                            <h5>Years in Business</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm py-4">
                        <div class="card-body">
                            <div class="display-4 fw-bold text-primary mb-2">5000+</div>
                            <h5>Happy Customers</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm py-4">
                        <div class="card-body">
                            <div class="display-4 fw-bold text-primary mb-2">15+</div>
                            <h5>Industry Awards</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm py-4">
                        <div class="card-body">
                            <div class="display-4 fw-bold text-primary mb-2">24/7</div>
                            <h5>Customer Support</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="mt-5 pt-5 mb-5">
            <div class="card border-0 bg-primary text-white shadow-sm">
                <div class="card-body p-5 text-center">
                    <h3 class="mb-3">Ready to experience the Ramsys difference?</h3>
                    <p class="lead mb-4">Browse our selection of high-performance PCs and components today.</p>
                    <a href="{{ route('home') }}" class="btn btn-light btn-lg px-5">Shop Now</a>
                </div>
            </div>
        </section>
    </div>
@endsection
