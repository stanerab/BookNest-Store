<div class="container my-5 pt-5 mt-5">
    <h1 style="font-weight: bold; font-size: 20px;"></h1>
    <div class="row justify-content-center text-decoration-none">
        <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 mb-4 mb-md-0">
            <!-- Fixed image path - using base_url() for correct routing -->
            <div class="image-container text-center">
                <img src="<?= base_url('images/' . esc($news['images'])) ?>" 
                     class="img-fluid rounded shadow-sm" 
                     style="max-height: 500px; width: auto; max-width: 100%; object-fit: contain;" 
                     alt="<?= esc($news['title']) ?> image"
                     onerror="this.src='https://via.placeholder.com/500x600?text=Book+Cover'">
            </div>
            
            <div class="book-details mt-4 px-2">
                <h3 class="fw-bold"><?= esc($news['title']) ?></h3>
                
<!-- Author field - Now fully dynamic from database -->
<div class="d-flex align-items-center mb-2">
    <span style="font-size:15px; font-weight:600;">
        <i class="bi bi-user me-1"></i> 
        <?php 
        // Check if author exists in database, if not show a default
        if (!empty($news['author'])): 
            echo esc($news['author']);
        else: 
            echo 'Unknown Author';
        endif; 
        ?>
    </span>
    <span class="mx-2 text-muted">|</span>
    <span style="font-size:15px; font-weight:600;"></span>
</div>

                <h5 class="fs-3 fw-bold text-primary mb-3">£<?= esc($news['price']) ?></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group w-100">
                        <!-- Buy now button with correct path -->
                        <a href="<?= base_url('payment') ?>" class="btn btn-info flex-fill me-2">
                            <i class="bi bi-bag me-1"></i> Buy now
                        </a>
                        
                        <!-- Add to cart button with updated function -->
                        <button onclick="addToBasket('<?= esc($news['title'], 'js') ?>', <?= esc($news['price']) ?>)"
                                class="btn btn-primary flex-fill">
                            <i class="bi bi-cart me-1"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12">
            <div class="description-container p-3 p-md-0">
                <h4 class="mb-3"><strong>About this book</strong></h4>
                <div class="book-description" style="line-height: 1.8; font-size: 1.1rem;">
                    <?= nl2br(esc($news['body'])) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Floating Cart Button - Add this to ALL pages -->
<div class="floating-cart">
    <a href="<?= base_url('basket') ?>" class="cart-button" id="floatingCart">
        <i class="bi bi-cart-fill"></i>
        <span class="cart-count-badge" id="cartCount">0</span>
    </a>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<!-- Toast Notification for better UX -->
<div id="toast" class="toast-notification">
    <i class="bi bi-check-circle-fill"></i>
    <span id="toast-message"></span>
</div>

<style>
    /* Floating Cart Button - Global Styles */
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

    /* Mobile responsive */
    @media (max-width: 768px) {
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
        
        .cart-count-badge {
            font-size: 0.7rem;
            min-width: 20px;
            padding: 0.15rem 0.4rem;
        }
    }

    /* Small phones */
    @media (max-width: 380px) {
        .floating-cart {
            bottom: 0.8rem;
            right: 0.8rem;
        }
        
        .cart-button {
            width: 45px;
            height: 45px;
        }
    }

    /* Header spacing fix */
    body {
        padding-top: 70px;
    }
    
    /* Toast notification styles */
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
        z-index: 9999;
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
    
    /* Image container */
    .image-container {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 1rem;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 400px;
    }
    
    .image-container img {
        transition: transform 0.3s ease;
    }
    
    .image-container img:hover {
        transform: scale(1.02);
    }
    
    /* Book description styling */
    .book-description {
        line-height: 1.8;
        color: #2c3e50;
        font-size: 1.1rem;
        text-align: justify;
    }
    
    /* Button styles */
    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
        color: white;
    }
    
    .btn-info:hover {
        background-color: #138496;
        border-color: #117a8b;
        color: white;
    }
    
    .btn-primary {
        background-color: #e74c3c;
        border-color: #e74c3c;
    }
    
    .btn-primary:hover {
        background-color: #c0392b;
        border-color: #c0392b;
    }
    
    /* Mobile responsive */
    @media (max-width: 768px) {
        body {
            padding-top: 60px;
        }
        
        .container {
            padding-left: 15px;
            padding-right: 15px;
        }
        
        .image-container {
            min-height: 300px;
            margin-bottom: 1rem;
        }
        
        .image-container img {
            max-height: 350px !important;
        }
        
        .book-details {
            text-align: center;
        }
        
        .book-details .d-flex {
            justify-content: center;
        }
        
        .btn-group {
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .btn-group .btn {
            margin: 0 !important;
            width: 100%;
        }
        
        .toast-notification {
            width: 90%;
            text-align: center;
            white-space: normal;
            bottom: 1rem;
            font-size: 0.85rem;
            padding: 0.7rem 1rem;
        }
        
        .description-container {
            margin-top: 2rem;
        }
        
        .book-description {
            font-size: 1rem;
            text-align: left;
        }
        
        h3.fw-bold {
            font-size: 1.5rem;
        }
        
        .fs-3 {
            font-size: 1.8rem !important;
        }
    }
    
    /* Small phones */
    @media (max-width: 576px) {
        .image-container {
            min-height: 250px;
        }
        
        .image-container img {
            max-height: 250px !important;
        }
        
        h3.fw-bold {
            font-size: 1.3rem;
        }
        
        .fs-3 {
            font-size: 1.5rem !important;
        }
    }
    
    /* Landscape mode */
    @media (max-height: 600px) and (orientation: landscape) {
        body {
            padding-top: 50px;
        }
        
        .image-container {
            min-height: 200px;
        }
        
        .image-container img {
            max-height: 200px !important;
        }
    }
</style>

<script>
// Toast notification function
function showToast(message) {
    // Create toast if it doesn't exist
    let toast = document.getElementById('toast');
    if (!toast) {
        toast = document.createElement('div');
        toast.id = 'toast';
        toast.className = 'toast-notification';
        toast.innerHTML = '<i class="bi bi-check-circle-fill"></i><span id="toast-message"></span>';
        document.body.appendChild(toast);
    }
    
    const toastMessage = document.getElementById('toast-message');
    toastMessage.textContent = message;
    toast.classList.add('show');
    
    setTimeout(() => {
        toast.classList.remove('show');
    }, 2000);
}

// Updated addToBasket function to match basket page expectations
function addToBasket(productName, price) {
    // Get existing basket from sessionStorage (to match basket page)
    let basket = JSON.parse(sessionStorage.getItem('basketItems')) || [];
    
    // Add item to basket (simple array as expected by basket page)
    basket.push({
        name: productName,
        price: price
    });
    
    // Save to sessionStorage
    sessionStorage.setItem('basketItems', JSON.stringify(basket));
    
    // Update cart count
    updateCartCount();
    
    // Show toast notification
    showToast(`✨ Added "${productName}" to basket`);
}

// Function to update cart count
function updateCartCount() {
    const basket = JSON.parse(sessionStorage.getItem('basketItems')) || [];
    const totalItems = basket.length;
    
    // Update cart badge
    const cartCount = document.getElementById('cartCount');
    if (cartCount) {
        cartCount.textContent = totalItems;
        cartCount.classList.add('pulse');
        setTimeout(() => cartCount.classList.remove('pulse'), 300);
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

// Listen for storage changes (updates cart if changed in another tab)
window.addEventListener('storage', function(e) {
    if (e.key === 'basketItems') {
        updateCartCount();
    }
});

// Fix for any potential header overlap on load
window.addEventListener('load', function() {
    // Check if there's a hash in URL and scroll to it with offset
    if (window.location.hash) {
        setTimeout(function() {
            const element = document.querySelector(window.location.hash);
            if (element) {
                const headerOffset = 80;
                const elementPosition = element.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        }, 100);
    }
});
</script>