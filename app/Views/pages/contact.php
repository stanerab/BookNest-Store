<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <title>Contact Us - BookNest</title>
    
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

        /* Contact Form Container */
        .contact-container {
            background: white;
            border-radius: 20px;
            padding: clamp(1.5rem, 4vw, 2.5rem);
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            max-width: 600px;
            margin: 0 auto;
            transition: transform 0.3s ease;
        }

        .contact-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }

        /* Form Elements */
        .form-label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }

        .form-control {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8fafc;
        }

        .form-control:focus {
            border-color: #e74c3c;
            box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.25);
            outline: none;
            background: white;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .btn-primary {
            background: #e74c3c;
            border: none;
            border-radius: 12px;
            padding: 0.9rem 1.5rem;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .btn-primary:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        /* Alert Messages */
        .alert {
            border-radius: 12px;
            padding: 1rem 1.5rem;
            margin-bottom: 2rem;
            border: none;
            font-weight: 500;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border-left: 4px solid #28a745;
        }

        .alert-danger {
            background: #f8d7da;
            color: #721c24;
            border-left: 4px solid #dc3545;
        }

        /* Contact Info Section */
        .contact-info {
            margin-top: 3rem;
            text-align: center;
        }

        .contact-info h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 1.5rem;
        }

        .info-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .info-card {
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }

        .info-card i {
            font-size: 2.5rem;
            color: #e74c3c;
            margin-bottom: 1rem;
        }

        .info-card h4 {
            font-size: 1.2rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .info-card p {
            color: #64748b;
            margin-bottom: 0;
            font-size: 0.95rem;
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

            .contact-container {
                margin: 0 1rem;
            }

            .info-cards {
                grid-template-columns: 1fr;
                padding: 0 1rem;
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
                bottom: 1rem;
            }
        }

        @media (max-width: 576px) {
            .btn-primary {
                padding: 0.8rem;
                font-size: 1rem;
            }

            .info-card {
                padding: 1.2rem;
            }

            .info-card i {
                font-size: 2rem;
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
        <h2>Contact Us</h2>
        <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
    </div>

    <!-- Session Messages -->
    <?php if (session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            <?= session('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php elseif (session()->has('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-circle-fill me-2"></i>
            <?= session('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <!-- Contact Form -->
    <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
            <div class="contact-container">
                <form action="<?= base_url('contact/submit') ?>" method="POST">
                    <?= csrf_field() ?>
                    
                    <div class="mb-4">
                        <label for="name" class="form-label">
                            <i class="bi bi-person me-2"></i>Your Name
                        </label>
                        <input type="text" class="form-control" id="name" name="name" 
                               placeholder="Enter your full name" required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="email" class="form-label">
                            <i class="bi bi-envelope me-2"></i>Your Email
                        </label>
                        <input type="email" class="form-control" id="email" name="email" 
                               placeholder="Enter your email address" required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="message" class="form-label">
                            <i class="bi bi-chat-text me-2"></i>Message
                        </label>
                        <textarea class="form-control" id="message" name="message" 
                                  rows="4" placeholder="Write your message here..." required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="bi bi-send me-2"></i>Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Contact Information Section -->
    <div class="contact-info">
        <h3>Other Ways to Connect</h3>
        <div class="info-cards">
            <div class="info-card">
                <i class="bi bi-envelope-fill"></i>
                <h4>Email</h4>
                <p>support@booknest.com</p>
                <p class="small text-muted">We reply within 24 hours</p>
            </div>
            
            <div class="info-card">
                <i class="bi bi-telephone-fill"></i>
                <h4>Phone</h4>
                <p>+44 123 456 7890</p>
                <p class="small text-muted">Mon-Fri, 9am-5pm</p>
            </div>
            
            <div class="info-card">
                <i class="bi bi-geo-alt-fill"></i>
                <h4>Visit Us</h4>
                <p>123 Book Street</p>
                <p class="small text-muted">London, UK</p>
            </div>
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

// Auto-dismiss alerts after 5 seconds
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 5000);
});
</script>

</body>
</html>