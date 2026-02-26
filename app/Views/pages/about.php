<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <title>About BookNest</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8f9fa;
            color: #2c3e50;
            padding-top: 80px;
            min-height: 100vh;
        }

        /* Navigation */
        .navbar {
            background: white;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.8rem;
            color: #2c3e50 !important;
            letter-spacing: -0.5px;
        }

        .navbar-brand span {
            color: #e74c3c;
        }

        .nav-link {
            font-weight: 500;
            color: #2c3e50 !important;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #e74c3c !important;
        }

        /* Page Header */
        .page-header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .page-header h2 {
            font-size: clamp(2rem, 5vw, 2.5rem);
            font-weight: 700;
            color: #2c3e50;
            position: relative;
            display: inline-block;
            padding-bottom: 1rem;
        }

        .page-header h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #e74c3c;
            border-radius: 2px;
        }

        .page-header p {
            font-size: clamp(1rem, 3vw, 1.2rem);
            color: #64748b;
            max-width: 700px;
            margin: 1rem auto 0;
        }

        /* Content Sections */
        .content-section {
            background: white;
            border-radius: 20px;
            padding: clamp(1.5rem, 4vw, 2.5rem);
            margin-bottom: 2rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }

        .content-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }

        .content-section h3 {
            font-size: clamp(1.3rem, 4vw, 1.8rem);
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 1.5rem;
            position: relative;
            padding-left: 1rem;
        }

        .content-section h3::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 70%;
            background: #e74c3c;
            border-radius: 2px;
        }

        .content-section p {
            font-size: clamp(0.95rem, 3vw, 1.1rem);
            line-height: 1.8;
            color: #2c3e50;
            margin-bottom: 0;
        }

        /* Team Section */
        .team-section {
            margin-top: 3rem;
        }

        .team-section h3 {
            text-align: center;
            font-size: clamp(1.5rem, 4vw, 2rem);
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 2rem;
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .team-section h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: #e74c3c;
            border-radius: 2px;
        }

        .team-card {
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            height: 100%;
        }

        .team-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 28px rgba(0,0,0,0.15);
        }

        .team-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
            border: 4px solid #e74c3c;
            padding: 3px;
            transition: transform 0.3s ease;
        }

        .team-card:hover .team-image {
            transform: scale(1.05);
        }

        .team-card h5 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 0.25rem;
        }

        .team-card p {
            color: #64748b;
            font-size: 1rem;
            margin-bottom: 0;
        }

        /* Floating Cart Button */
        .floating-cart {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 9999;
        }

        .cart-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background: #e74c3c;
            color: white;
            border-radius: 50%;
            box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3);
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            border: 2px solid white;
        }

        .cart-button:hover {
            transform: scale(1.1);
            background: #c0392b;
            color: white;
            box-shadow: 0 6px 20px rgba(192, 57, 43, 0.4);
        }

        .cart-button i {
            font-size: 1.5rem;
        }

        .cart-count-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #2c3e50;
            color: white;
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.2rem 0.5rem;
            border-radius: 20px;
            min-width: 22px;
            text-align: center;
            border: 2px solid white;
            transition: transform 0.2s ease;
            line-height: 1.2;
        }

        .cart-count-badge.pulse {
            animation: cartPulse 0.3s ease;
        }

        @keyframes cartPulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.3); }
            100% { transform: scale(1); }
        }

        /* Toast Notification */
        .toast-notification {
            position: fixed;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%) translateY(100px);
            background: #2c3e50;
            color: white;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            box-shadow: 0 16px 32px rgba(0,0,0,0.16);
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 9998;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .toast-notification.show {
            transform: translateX(-50%) translateY(0);
            opacity: 1;
        }

        .toast-notification i {
            color: #e74c3c;
            font-size: 1.1rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            body {
                padding-top: 70px;
            }

            .navbar-brand {
                font-size: 1.5rem;
            }

            .content-section {
                padding: 1.2rem;
                margin-bottom: 1.5rem;
            }

            .team-image {
                width: 120px;
                height: 120px;
            }

            .floating-cart {
                bottom: 1rem;
                right: 1rem;
            }

            .cart-button {
                width: 50px;
                height: 50px;
            }

            .cart-button i {
                font-size: 1.2rem;
            }

            .toast-notification {
                width: 90%;
                text-align: center;
                white-space: normal;
                font-size: 0.85rem;
                padding: 0.7rem 1.2rem;
            }
        }

        @media (max-width: 576px) {
            .team-image {
                width: 100px;
                height: 100px;
            }

            .team-card h5 {
                font-size: 1.1rem;
            }

            .team-card p {
                font-size: 0.9rem;
            }
        }

        /* Container spacing */
        .container {
            max-width: 1200px;
            padding: 0 20px;
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
                    <a class="nav-link" href="<?= base_url('books') ?>">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Floating Cart Button -->
<div class="floating-cart">
    <a href="<?= base_url('basket') ?>" class="cart-button" id="floatingCart">
        <i class="bi bi-cart-fill"></i>
        <span class="cart-count-badge" id="cartCount">0</span>
    </a>
</div>

<!-- Toast Notification -->
<div id="toast" class="toast-notification">
    <i class="bi bi-check-circle-fill"></i>
    <span id="toast-message"></span>
</div>

<!-- Main Content -->
<div class="container mt-5">
    <!-- Page Header -->
    <div class="page-header">
        <h2>About BookNest</h2>
        <p>Your favorite online bookshop for the best reads.</p>
    </div>

    <!-- Who We Are Section -->
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="content-section">
                <h3>Who We Are</h3>
                <p>BookNest is an independent bookshop dedicated to bringing readers the best selection of books, from
                    classic literature to modern bestsellers. Our goal is to create a community of book lovers and provide
                    them with an excellent shopping experience.</p>
            </div>
        </div>
    </div>

    <!-- Our Mission Section -->
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="content-section">
                <h3>Our Mission</h3>
                <p>We believe in the power of books to inspire, educate, and entertain. Our mission is to make books
                    accessible to everyone while supporting independent authors and publishers.</p>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="team-section">
        <h3>Meet Our Team</h3>
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6">
                <div class="team-card">
                    <img src="<?= base_url('images/ceo.jpeg') ?>" 
                         alt="Stanley Erhabor" 
                         class="team-image"
                         onerror="this.src='https://via.placeholder.com/150x150?text=CEO'">
                    <h5>Stanley Erhabor</h5>
                    <p>Founder & CEO</p>
                </div>
            </div>
            <!-- Add more team members here if needed -->
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Toast notification function
function showToast(message) {
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toast-message');
    toastMessage.textContent = message;
    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 2000);
}

// Update cart count
function updateCartCount() {
    const basket = JSON.parse(sessionStorage.getItem('basketItems')) || [];
    const totalItems = basket.length;
    const cartCount = document.getElementById('cartCount');
    
    if (cartCount) {
        cartCount.textContent = totalItems;
        if (totalItems > 0) {
            cartCount.classList.add('pulse');
            setTimeout(() => cartCount.classList.remove('pulse'), 300);
        }
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    updateCartCount();
    
    // Add pulse animation style if not exists
    if (!document.querySelector('#pulse-style')) {
        const style = document.createElement('style');
        style.id = 'pulse-style';
        style.textContent = `
            @keyframes pulse {
                0% { transform: scale(1); }
                50% { transform: scale(1.3); }
                100% { transform: scale(1); }
            }
            .pulse {
                animation: pulse 0.3s ease;
            }
        `;
        document.head.appendChild(style);
    }
});

// Listen for storage changes
window.addEventListener('storage', function(e) {
    if (e.key === 'basketItems') {
        updateCartCount();
    }
});
</script>

<!-- Remove the old style block since it's now integrated -->
</body>
</html>