@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="row">
        <div class="col-md-6 mb-4 mb-md-0">
            <h1 class="mb-4">Contact Us</h1>
            <p class="lead">We'd love to hear from you! Fill out the form below and we'll get back to you as soon as possible.</p>

            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>

        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Our Information</h2>

                    <div class="mb-4">
                        <h3 class="h5">Address</h3>
                        <address>
                            123 Tech Street<br>
                            Silicon Valley, CA 94043<br>
                            United States
                        </address>
                    </div>

                    <div class="mb-4">
                        <h3 class="h5">Contact Details</h3>
                        <p>
                            <strong>Phone:</strong> (123) 456-7890<br>
                            <strong>Email:</strong> info@ramsys.com<br>
                            <strong>Support:</strong> support@ramsys.com
                        </p>
                    </div>

                    <div class="mb-4">
                        <h3 class="h5">Business Hours</h3>
                        <p>
                            <strong>Monday-Friday:</strong> 9:00 AM - 6:00 PM<br>
                            <strong>Saturday:</strong> 10:00 AM - 4:00 PM<br>
                            <strong>Sunday:</strong> Closed
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
