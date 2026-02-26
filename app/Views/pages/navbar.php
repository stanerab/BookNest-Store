<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNest • Premium Bookstore</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #2c3e50;
            --accent: #e74c3c;
            --accent-light: #f5b7b1;
            --text-dark: #2c3e50;
            --text-light: #7f8c8d;
            --bg-light: #f8f9fa;
            --white: #ffffff;
            --shadow-sm: 0 4px 12px rgba(0,0,0,0.08);
            --shadow-md: 0 8px 24px rgba(0,0,0,0.12);
            --shadow-lg: 0 16px 32px rgba(0,0,0,0.16);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 20px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg-light);
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* Navigation */
        .navbar {
            background: var(--white);
            box-shadow: var(--shadow-sm);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.8rem;
            color: var(--primary) !important;
            letter-spacing: -0.5px;
        }

        .navbar-brand span {
            color: var(--accent);
        }

        .nav-link {
            font-weight: 500;
            color: var(--text-dark) !important;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--accent) !important;
        }

        /* Hero Carousel */
        .carousel {
            margin-top: 76px;
        }

        .carousel-item {
            height: 600px;
            position: relative;
        }

        .carousel-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.6));
            z-index: 1;
        }

        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .carousel-caption {
            z-index: 2;
            bottom: 100px;
        }

        .carousel-caption h5 {
            font-size: 3rem;
            font-weight: 800;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            margin-bottom: 1rem;
        }

        .carousel-caption p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Section Headers */
        .section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 3rem 0 2rem;
        }

        .section-header h2 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            position: relative;
            padding-left: 1rem;
        }

        .section-header h2::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 70%;
            background: var(--accent);
            border-radius: 2px;
        }

        .view-all {
            color: var(--accent);
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: gap 0.3s ease;
        }

        .view-all:hover {
            gap: 1rem;
            color: var(--primary);
        }

        /* Book Cards */
        .book-card {
            background: var(--white);
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            position: relative;
        }

        .book-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
        }

        .book-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--accent);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 2;
        }

        .book-image {
            height: 350px;
            overflow: hidden;
            position: relative;
        }

        .book-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .book-card:hover .book-image img {
            transform: scale(1.05);
        }

        .book-overlay {
            position: absolute;
            bottom: -50px;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            padding: 2rem 1rem 1rem;
            transition: bottom 0.3s ease;
        }

        .book-card:hover .book-overlay {
            bottom: 0;
        }

        .quick-view {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
        }

        .quick-view .btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            color: var(--primary);
            border: none;
            transition: all 0.3s ease;
        }

        .quick-view .btn:hover {
            background: var(--accent);
            color: white;
            transform: scale(1.1);
        }

        .book-info {
            padding: 1.5rem;
        }

        .book-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--primary);
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .book-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--accent);
            margin-bottom: 1rem;
        }

        .book-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #eee;
        }

        .book-date {
            color: var(--text-light);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .book-actions {
            display: flex;
            gap: 0.5rem;
        }

        .btn-view {
            background: #f0f0f0;
            color: var(--primary);
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-view:hover {
            background: var(--primary);
            color: white;
        }

        .btn-cart {
            background: var(--accent);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-cart:hover {
            background: #c0392b;
            transform: scale(1.05);
        }

        /* Map Section */
        .map-section {
            background: var(--white);
            border-radius: var(--radius-lg);
            padding: 2rem;
            margin: 4rem 0;
            box-shadow: var(--shadow-sm);
        }

        .map-section h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .map-section h3 i {
            color: var(--accent);
        }

        #map-container {
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
        }

        #map-container iframe {
            display: block;
        }

        /* Loading Skeleton */
        .skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        /* Toast Notification */
        .toast-notification {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: var(--primary);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            box-shadow: var(--shadow-lg);
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 9999;
        }

        .toast-notification.show {
            transform: translateY(0);
            opacity: 1;
        }

        .toast-notification i {
            margin-right: 0.5rem;
            color: var(--accent);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .carousel-item {
                height: 400px;
            }
            
            .carousel-caption h5 {
                font-size: 2rem;
            }
            
            .carousel-caption p {
                font-size: 1rem;
            }
            
            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .book-image {
                height: 250px;
            }
            
            .toast-notification {
                left: 1rem;
                right: 1rem;
                bottom: 1rem;
                text-align: center;
            }
        }

        @media (max-width: 576px) {
            .carousel-item {
                height: 300px;
            }
            
            .carousel-caption {
                bottom: 50px;
            }
            
            .carousel-caption h5 {
                font-size: 1.5rem;
            }
            
            .book-meta {
                flex-direction: column;
                gap: 0.5rem;
                align-items: flex-start;
            }
            
            .book-actions {
                width: 100%;
            }
            
            .btn-view, .btn-cart {
                flex: 1;
                text-align: center;
            }
        }
    </style>
</head>
<body>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('pages') ?>">Book<span>Nest</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pages') ?>">Home</a>
                </li>
                <li class="nav-item">
<a class="nav-link" href="<?= base_url('pages#map') ?>">Bookshops</a>                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('contact') ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>