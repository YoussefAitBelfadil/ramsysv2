<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramsys - Premium PC & Components</title>

    <!-- Favicon -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2171/2171947.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #0066cc;
            --primary-dark: #004c99;
            --primary-light: #e6f0ff;
            --secondary-color: #2d3748;
            --accent-color: #3498db;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #28a745;
            --danger-color: #dc3545;
            --warning-color: #ffc107;
            --info-color: #17a2b8;
            --gray-100: #f8f9fa;
            --gray-200: #e9ecef;
            --gray-300: #dee2e6;
            --gray-400: #ced4da;
            --gray-500: #adb5bd;
            --gray-600: #6c757d;
            --gray-700: #495057;
            --gray-800: #343a40;
            --gray-900: #212529;
            --transition-fast: 0.3s;
            --transition-medium: 0.5s;
            --transition-slow: 0.8s;
            --border-radius-sm: 0.25rem;
            --border-radius: 0.5rem;
            --border-radius-lg: 1rem;
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            --box-shadow-hover: 0 10px 25px rgba(0, 0, 0, 0.1);
            --box-shadow-lg: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--gray-800);
            overflow-x: hidden;
            background-color: #fafafa;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        /* Navbar Styles */
        .navbar {
            padding: 1rem 2rem;
            background-color: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: all var(--transition-fast);
        }

        .navbar.scrolled {
            padding: 0.75rem 2rem;
            background-color: rgba(255, 255, 255, 0.98) !important;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 1.75rem;
            color: var(--primary-color) !important;
            letter-spacing: -0.5px;
        }

        .navbar-brand span {
            color: var(--secondary-color);
        }

        .nav-link {
            font-weight: 500;
            color: var(--gray-700) !important;
            margin: 0 0.5rem;
            position: relative;
            transition: all var(--transition-fast);
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--primary-color);
            transition: width var(--transition-fast);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link.active {
            color: var(--primary-color) !important;
            font-weight: 600;
        }

        .nav-link.active::after {
            width: 100%;
        }

        .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .cart-icon {
            position: relative;
            font-size: 1.25rem;
            color: var(--gray-700);
            transition: all var(--transition-fast);
        }

        .cart-icon:hover {
            color: var(--primary-color);
            transform: scale(1.1);
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--primary-color);
            color: white;
            font-size: 0.7rem;
            font-weight: 600;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all var(--transition-fast);
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 85vh;
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.9), rgba(0, 76, 153, 0.85)), url('https://images.unsplash.com/photo-1597872200969-2b65d56bd16b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            color: white;
            padding: 5rem 0;
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .hero-subtitle {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            max-width: 600px;
            line-height: 1.6;
        }

        .hero-btn {
            padding: 0.75rem 2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: var(--border-radius);
            transition: all var(--transition-fast);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .hero-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.2);
            transition: all 0.5s;
            z-index: -1;
        }

        .hero-btn:hover::before {
            width: 100%;
        }

        .hero-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .hero-btn:active {
            transform: translateY(0);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .hero-image {
            position: relative;
            z-index: 2;
        }

        .hero-image img {
            max-width: 100%;
            border-radius: var(--border-radius-lg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            transform: perspective(1000px) rotateY(-10deg);
            transition: all var(--transition-medium);
        }

        .hero-image:hover img {
            transform: perspective(1000px) rotateY(0deg);
        }

        /* Featured Categories */
        .featured-categories {
            padding: 5rem 0;
            background-color: white;
        }

        .section-title {
            position: relative;
            margin-bottom: 3rem;
            font-weight: 700;
            text-align: center;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
            border-radius: 3px;
        }

        .category-card {
            position: relative;
            border-radius: var(--border-radius);
            overflow: hidden;
            margin-bottom: 2rem;
            box-shadow: var(--box-shadow);
            transition: all var(--transition-fast);
            cursor: pointer;
            height: 250px;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--box-shadow-hover);
        }

        .category-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all var(--transition-medium);
        }

        .category-card:hover img {
            transform: scale(1.1);
        }

        .category-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.1));
            display: flex;
            align-items: flex-end;
            padding: 1.5rem;
            transition: all var(--transition-fast);
        }

        .category-card:hover .category-overlay {
            background: linear-gradient(to top, rgba(0, 102, 204, 0.8), rgba(0, 0, 0, 0.2));
        }

        .category-title {
            color: white;
            font-weight: 600;
            margin-bottom: 0;
            font-size: 1.25rem;
            transition: all var(--transition-fast);
        }

        .category-card:hover .category-title {
            transform: translateY(-5px);
        }

        /* Featured Products */
        .featured-products {
            padding: 5rem 0;
            background-color: var(--gray-100);
        }

        .product-card {
            background-color: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            margin-bottom: 2rem;
            transition: all var(--transition-fast);
            position: relative;
            z-index: 1;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--box-shadow-hover);
        }

        .product-image {
            position: relative;
            overflow: hidden;
            height: 250px;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all var(--transition-medium);
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: var(--primary-color);
            color: white;
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            z-index: 2;
        }

        .product-actions {
            position: absolute;
            top: 15px;
            right: 15px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 2;
            opacity: 0;
            transform: translateX(20px);
            transition: all var(--transition-fast);
        }

        .product-card:hover .product-actions {
            opacity: 1;
            transform: translateX(0);
        }

        .action-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: white;
            color: var(--gray-700);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: all var(--transition-fast);
        }

        .action-btn:hover {
            background-color: var(--primary-color);
            color: white;
            transform: scale(1.1);
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-category {
            font-size: 0.85rem;
            color: var(--gray-600);
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .product-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--gray-800);
            transition: all var(--transition-fast);
        }

        .product-card:hover .product-title {
            color: var(--primary-color);
        }

        .product-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .product-price .old-price {
            font-size: 1rem;
            color: var(--gray-500);
            text-decoration: line-through;
            margin-right: 0.5rem;
        }

        .product-description {
            font-size: 0.9rem;
            color: var(--gray-600);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .add-to-cart {
            display: block;
            width: 100%;
            padding: 0.75rem;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            text-align: center;
            transition: all var(--transition-fast);
            text-decoration: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .add-to-cart::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.2);
            transition: all 0.5s;
            z-index: -1;
        }

        .add-to-cart:hover::before {
            width: 100%;
        }

        .add-to-cart:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Why Choose Us */
        .why-choose-us {
            padding: 5rem 0;
            background-color: white;
        }

        .feature-card {
            text-align: center;
            padding: 2rem;
            border-radius: var(--border-radius);
            background-color: white;
            box-shadow: var(--box-shadow);
            margin-bottom: 2rem;
            transition: all var(--transition-fast);
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0;
            background-color: var(--primary-light);
            transition: all var(--transition-medium);
            z-index: -1;
        }

        .feature-card:hover::before {
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--box-shadow-hover);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background-color: var(--primary-light);
            color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            transition: all var(--transition-fast);
        }

        .feature-card:hover .feature-icon {
            background-color: var(--primary-color);
            color: white;
            transform: rotateY(360deg);
        }

        .feature-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--gray-800);
        }

        .feature-description {
            font-size: 0.9rem;
            color: var(--gray-600);
            line-height: 1.6;
        }

        /* Testimonials */
        .testimonials {
            padding: 5rem 0;
            background-color: var(--gray-100);
            position: relative;
        }

        .testimonial-card {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: var(--box-shadow);
            margin-bottom: 2rem;
            position: relative;
            transition: all var(--transition-fast);
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--box-shadow-hover);
        }

        .testimonial-card::before {
            content: '\201C';
            font-family: Georgia, serif;
            position: absolute;
            top: 10px;
            left: 20px;
            font-size: 5rem;
            color: var(--primary-light);
            opacity: 0.3;
            line-height: 1;
        }

        .testimonial-content {
            font-size: 1rem;
            color: var(--gray-700);
            line-height: 1.7;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-image {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 1rem;
            border: 3px solid var(--primary-light);
        }

        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h5 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
            color: var(--gray-800);
        }

        .author-info p {
            font-size: 0.85rem;
            color: var(--gray-600);
            margin-bottom: 0;
        }

        .rating {
            color: var(--warning-color);
            margin-top: 0.5rem;
        }

        /* Newsletter */
        .newsletter {
            padding: 5rem 0;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            position: relative;
            overflow: hidden;
        }

        .newsletter::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(rgba(255, 255, 255, 0.1), transparent);
            transform: rotate(30deg);
        }

        .newsletter-content {
            position: relative;
            z-index: 1;
            text-align: center;
            max-width: 700px;
            margin: 0 auto;
        }

        .newsletter-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .newsletter-description {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .newsletter-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
            position: relative;
        }

        .newsletter-input {
            flex: 1;
            padding: 1rem 1.5rem;
            border: none;
            border-radius: var(--border-radius) 0 0 var(--border-radius);
            font-size: 1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .newsletter-input:focus {
            outline: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .newsletter-btn {
            padding: 1rem 2rem;
            background-color: var(--secondary-color);
            color: white;
            border: none;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
            font-weight: 600;
            cursor: pointer;
            transition: all var(--transition-fast);
        }

        .newsletter-btn:hover {
            background-color: var(--dark-color);
        }

        /* Footer */
        .footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 5rem 0 0;
        }

        .footer-logo {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 2rem;
            color: white;
            margin-bottom: 1.5rem;
            display: block;
        }

        .footer-logo span {
            color: var(--primary-color);
        }

        .footer-description {
            font-size: 0.9rem;
            color: var(--gray-400);
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }

        .footer-social {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all var(--transition-fast);
        }

        .social-link:hover {
            background-color: var(--primary-color);
            transform: translateY(-5px);
        }

        .footer-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: white;
            position: relative;
            padding-bottom: 0.75rem;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--primary-color);
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: var(--gray-400);
            text-decoration: none;
            transition: all var(--transition-fast);
            position: relative;
            padding-left: 15px;
        }

        .footer-links a::before {
            content: '\f105';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: var(--primary-color);
            transition: all var(--transition-fast);
        }

        .footer-links a:hover {
            color: white;
            padding-left: 20px;
        }

        .footer-links a:hover::before {
            left: 5px;
        }

        .contact-info {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .contact-info li {
            margin-bottom: 1rem;
            display: flex;
            align-items: flex-start;
        }

        .contact-info i {
            color: var(--primary-color);
            margin-right: 1rem;
            margin-top: 5px;
        }

        .contact-info p {
            color: var(--gray-400);
            margin-bottom: 0;
        }

        .footer-bottom {
            background-color: rgba(0, 0, 0, 0.2);
            padding: 1.5rem 0;
            margin-top: 4rem;
            text-align: center;
        }

        .footer-bottom p {
            margin-bottom: 0;
            color: var(--gray-400);
        }

        .footer-bottom a {
            color: var(--primary-color);
            text-decoration: none;
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all var(--transition-fast);
            z-index: 999;
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background-color: var(--primary-dark);
            transform: translateY(-5px);
        }

        /* Responsive Styles */
        @media (max-width: 1199.98px) {
            .hero-title {
                font-size: 3rem;
            }
        }

        @media (max-width: 991.98px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .hero-image {
                margin-top: 3rem;
            }

            .section-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 767.98px) {
            .hero-section {
                text-align: center;
                padding: 4rem 0;
            }

            .hero-subtitle {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-image {
                margin-top: 3rem;
            }

            .newsletter-form {
                flex-direction: column;
            }

            .newsletter-input {
                border-radius: var(--border-radius);
                margin-bottom: 1rem;
            }

            .newsletter-btn {
                border-radius: var(--border-radius);
                width: 100%;
            }
        }

        @media (max-width: 575.98px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .section-title {
                font-size: 1.75rem;
            }

            .product-card {
                max-width: 320px;
                margin-left: auto;
                margin-right: auto;
            }

            .feature-card {
                max-width: 320px;
                margin-left: auto;
                margin-right: auto;
            }
        }

        /* Animation Classes */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-up.active {
            opacity: 1;
            transform: translateY(0);
        }

        .fade-in {
            opacity: 0;
            transition: opacity 0.8s ease;
        }

        .fade-in.active {
            opacity: 1;
        }

        .zoom-in {
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .zoom-in.active {
            opacity: 1;
            transform: scale(1);
        }

        .slide-right {
            opacity: 0;
            transform: translateX(-30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .slide-right.active {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-left {
            opacity: 0;
            transform: translateX(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .slide-left.active {
            opacity: 1;
            transform: translateX(0);
        }

        /* Staggered Animation Delays */
        .delay-1 {
            transition-delay: 0.1s;
        }

        .delay-2 {
            transition-delay: 0.2s;
        }

        .delay-3 {
            transition-delay: 0.3s;
        }

        .delay-4 {
            transition-delay: 0.4s;
        }

        .delay-5 {
            transition-delay: 0.5s;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Rams<span>ys</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="ms-3 d-flex align-items-center">
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-primary me-2">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                    @endauth

                    <a href="{{ route('cart.index') }}" class="ms-3 cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                        @if(session()->has('cart') && count(session('cart')) > 0)
                            <span class="cart-count">{{ count(session('cart')) }}</span>
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="hero-title">Premium PCs & Components</h1>
                    <p class="hero-subtitle">Experience unparalleled performance with our custom-built gaming PCs and high-quality components. Built for gamers, by gamers.</p>
                    <a href="#featured-products" class="btn btn-light hero-btn">Shop Now <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-6 hero-image" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1587202372775-e229f172b9d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Gaming PC" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="featured-categories">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Browse Categories</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2042&q=80" alt="Desktop PCs">
                        <div class="category-overlay">
                            <h3 class="category-title">Desktop PCs</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1603481546238-487240415921?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Laptops">
                        <div class="category-overlay">
                            <h3 class="category-title">Laptops</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1591488320449-011701bb6704?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Components">
                        <div class="category-overlay">
                            <h3 class="category-title">Components</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1547394765-185e1e68f34e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Peripherals">
                        <div class="category-overlay">
                            <h3 class="category-title">Peripherals</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1600861194942-f883de0dfe96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Monitors">
                        <div class="category-overlay">
                            <h3 class="category-title">Monitors</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2065&q=80" alt="Accessories">
                        <div class="category-overlay">
                            <h3 class="category-title">Accessories</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section id="featured-products" class="featured-products">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Featured Products</h2>
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1587202372775-e229f172b9d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="{{ $product['name'] }}">
                            <span class="product-badge">New</span>
                            <div class="product-actions">
                                <a href="#" class="action-btn" title="Quick View"><i class="fas fa-eye"></i></a>
                                <a href="#" class="action-btn" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                <a href="#" class="action-btn" title="Compare"><i class="fas fa-sync-alt"></i></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-category">{{ $product['category'] }}</div>
                            <h3 class="product-title">{{ $product['name'] }}</h3>
                            <div class="product-price">${{ number_format($product['price'], 2) }}</div>
                            <p class="product-description">{{ Str::limit($product['description'], 100) }}</p>
                            <a href="{{ route('product.show', $product['id']) }}" class="add-to-cart">
                                <i class="fas fa-shopping-cart me-2"></i> View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose-us">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Why Choose Us</h2>
            <div class="row">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h3 class="feature-title">Free Shipping</h3>
                        <p class="feature-description">Free shipping on all orders over $99. We deliver to your doorstep with care.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="feature-title">3-Year Warranty</h3>
                        <p class="feature-description">All our products come with a minimum 3-year warranty for your peace of mind.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3 class="feature-title">24/7 Support</h3>
                        <p class="feature-description">Our technical support team is available 24/7 to assist you with any issues.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <h3 class="feature-title">Easy Returns</h3>
                        <p class="feature-description">Not satisfied? Return within 30 days for a full refund, no questions asked.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">What Our Customers Say</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <p class="testimonial-content">The gaming PC I purchased from Ramsys exceeded all my expectations. The build quality is exceptional, and the performance is outstanding. I can now play all my favorite games at max settings!</p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Doe">
                            </div>
                            <div class="author-info">
                                <h5>John Doe</h5>
                                <p>Gamer</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <p class="testimonial-content">I've been buying components from Ramsys for years, and their quality and customer service have always been top-notch. The technical support team is incredibly knowledgeable and helpful.</p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Jane Smith">
                            </div>
                            <div class="author-info">
                                <h5>Jane Smith</h5>
                                <p>IT Professional</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card">
                        <p class="testimonial-content">The custom PC I ordered was delivered ahead of schedule and works flawlessly. The attention to detail in the cable management and overall build is impressive. Highly recommended!</p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Robert Johnson">
                            </div>
                            <div class="author-info">
                                <h5>Robert Johnson</h5>
                                <p>Content Creator</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="newsletter-content" data-aos="fade-up">
                <h2 class="newsletter-title">Subscribe to Our Newsletter</h2>
                <p class="newsletter-description">Stay updated with our latest products, exclusive deals, and tech news.</p>
                <form class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Enter your email address" required>
                    <button type="submit" class="newsletter-btn">Subscribe</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="footer-logo">Rams<span>ys</span></a>
                    <p class="footer-description">Premium PCs and components for gamers, content creators, and professionals. Built with quality and performance in mind.</p>
                    <div class="footer-social">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="footer-title">Categories</h4>
                    <ul class="footer-links">
                        <li><a href="#">Desktop PCs</a></li>
                        <li><a href="#">Laptops</a></li>
                        <li><a href="#">Components</a></li>
                        <li><a href="#">Peripherals</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <h4 class="footer-title">Contact Us</h4>
                    <ul class="contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>123 Tech Street, Silicon Valley, CA 94043, USA</p>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <p>+1 (123) 456-7890</p>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <p>info@ramsys.com</p>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <p>Monday - Friday: 9:00 AM - 8:00 PM<br>Saturday - Sunday: 10:00 AM - 6:00 PM</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; 2023 Ramsys. All Rights Reserved. Designed by <a href="#">YourName</a></p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop"><i class="fas fa-arrow-up"></i></a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom JS -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });

        // Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Back to Top Button
        const backToTopButton = document.getElementById('backToTop');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTopButton.classList.add('active');
            } else {
                backToTopButton.classList.remove('active');
            }
        });

        backToTopButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Product Card Hover Animation
        const productCards = document.querySelectorAll('.product-card');

        productCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.querySelector('.product-image img').style.transform = 'scale(1.1)';
            });

            card.addEventListener('mouseleave', function() {
                this.querySelector('.product-image img').style.transform = 'scale(1)';
            });
        });

        // Custom Animation for Elements
        const animateElements = document.querySelectorAll('.fade-up, .fade-in, .zoom-in, .slide-right, .slide-left');

        function checkIfInView() {
            animateElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;

                if (elementTop < windowHeight - 100) {
                    element.classList.add('active');
                }
            });
        }

        // Initial check
        checkIfInView();

        // Check on scroll
        window.addEventListener('scroll', checkIfInView);
    </script>
</body>
</html>
