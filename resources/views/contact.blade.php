@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="hero-title">Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <h2 class="mb-4">Send Us a Message</h2>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="John Doe" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" placeholder="john@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="+212-438287890">
                                </div>
                                <div class="col-md-6">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="subject" placeholder="How can we help?" required>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Tell us more about your inquiry..." required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg mt-3">
                                        <i class="fas fa-paper-plane me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h3 class="mb-4">Contact Information</h3>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <div class="bg-primary text-white rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Our Location</h5>
                                    <p class="text-muted mb-0">101 , Immeuble Sibam,Angle Boulevard Mohamed V Et Avenue Moulay
                                        Hassan 1er, Place De La Liberté, Guéliz - Gueliz (AR)</p>
                                </div>
                            </li>
                            <li class="d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <div class="bg-primary text-white rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Phone Number</h5>
                                    <p class="text-muted mb-0">+212-524420042</p>
                                </div>
                            </li>
                            <li class="d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <div class="bg-primary text-white rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Email Address</h5>
                                    <p class="text-muted mb-0">info@ramsys.com</p>
                                    <p class="text-muted mb-0">support@ramsys.com</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="bg-primary text-white rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-1">Business Hours</h5>
                                    <p class="text-muted mb-0">Monday - Friday: 9:00 AM - 7:00 PM</p>
                                    <p class="text-muted mb-0">Saturday: 9:30 AM - 3:00 PM</p>
                                    <p class="text-muted mb-0">Sunday: Closed</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="mb-4">Connect With Us</h3>
                        <div class="d-flex gap-3">
                            <a href="#" class="btn btn-outline-primary btn-lg rounded-circle">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-lg rounded-circle">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-lg rounded-circle">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-lg rounded-circle">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-lg rounded-circle">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        <!-- Map Section -->
        <div class="mt-5 mb-5">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5325.7602502385635!2d-8.0053084!3d31.6293958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafefba5881e62b%3A0xb02ee51692adb02a!2sRAMSYSMAROC!5e1!3m2!1sfr!2sma!4v1746131806818!5m2!1sfr!2sma"  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <section class="mt-5 mb-5">
            <h2 class="section-title">Problems / Solutions</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Non-compliant item
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The product is exchanged for the one you chose when ordering, with the return and resending costs being our responsibility.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Poor condition or damaged item
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The product will be exchanged for a new one, with shipping costs covered by us. However,
                                    damage must be reported within 48 hours of receiving the package; after this time, the item
                                    will not be exchanged.
                                    If the item in question is no longer in stock, you will be refunded the amount of the order.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    The amount charged is incorrect
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    A new invoice will be sent to you if you wish, with the exact amount you paid when you placed your order.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 shadow-sm">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Not delivered in a timely manner
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    If the product has not been shipped, the total amount of your order will be
                                    refunded within a maximum of 15 days.
                                    If the product has been shipped, you must return the package to us once it has been received.
                                    As soon as we acknowledge receipt, the amount of your order, along with the return shipping costs,
                                    will be refunded within a maximum of 15 days.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 shadow-sm">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Product failure during the warranty period
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    If the product is still under warranty and the defect that has occurred is material and not a
                                    fault in use, you return the product in question to us for repair, with the return costs being
                                    borne by the customer.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
