
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
            min-height: 100vh;
            padding-top: 80px;
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

        /* Payment Container */
        .payment-wrapper {
            max-width: 600px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .payment-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }

        .payment-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }

        .payment-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .payment-header h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #2c3e50;
            position: relative;
            padding-left: 1rem;
            margin-bottom: 0;
        }

        .payment-header h2::before {
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

        .payment-icon {
            font-size: 2rem;
            color: #e74c3c;
        }

        /* Order Summary */
        .order-summary {
            background: #f8fafc;
            border-radius: 16px;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .summary-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 0;
            border-bottom: 1px dashed #e2e8f0;
        }

        .summary-item:last-child {
            border-bottom: none;
        }

        .summary-item.total {
            margin-top: 0.5rem;
            padding-top: 1rem;
            border-top: 2px solid #e2e8f0;
            font-weight: 700;
            color: #e74c3c;
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

        .input-group-text {
            background: #e74c3c;
            color: white;
            border: none;
            border-radius: 12px 0 0 12px;
        }

        .btn-pay {
            background: #e74c3c;
            color: white;
            border: none;
            border-radius: 12px;
            padding: 1rem;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .btn-pay:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .btn-pay:active {
            transform: translateY(0);
        }

        .btn-pay i {
            margin-right: 0.5rem;
        }

        /* Payment Methods */
        .payment-methods {
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 2px dashed #e2e8f0;
        }

        .payment-methods h6 {
            font-size: 0.9rem;
            color: #64748b;
            margin-bottom: 1rem;
        }

        .payment-icons {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .payment-icons img {
            height: 30px;
            object-fit: contain;
            transition: transform 0.3s ease;
            filter: grayscale(1);
            opacity: 0.7;
        }

        .payment-icons img:hover {
            transform: scale(1.1);
            filter: grayscale(0);
            opacity: 1;
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
            max-width: 90%;
            text-align: center;
            white-space: normal;
            word-break: break-word;
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

            .payment-card {
                padding: 1.5rem;
            }

            .payment-header h2 {
                font-size: 1.5rem;
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
        }

        @media (max-width: 576px) {
            .payment-wrapper {
                margin: 1rem auto;
            }

            .payment-icons img {
                height: 25px;
            }

            .btn-pay {
                padding: 0.8rem;
                font-size: 1rem;
            }
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

    <!-- Payment Section -->
    <div class="payment-wrapper">
        <div class="payment-card">
            <div class="payment-header">
                <i class="bi bi-credit-card payment-icon"></i>
                <h2>Payment Details</h2>
            </div>

            <!-- Order Summary -->
            <div class="order-summary" id="orderSummary">
                <div class="summary-title">Order Summary</div>
                <div id="orderItems"></div>
                <div class="summary-item total" id="orderTotal">Total: £0.00</div>
            </div>

            <!-- Payment Form -->
            <form onsubmit="return validatePayment()">
                <div class="mb-3">
                    <label class="form-label">
                        <i class="bi bi-credit-card me-2"></i>Card Number
                    </label>
                    <input type="text" id="cardNumber" class="form-control" 
                           placeholder="1234 5678 9012 3456" 
                           maxlength="16"
                           pattern="\d*"
                           title="Please enter a valid 16-digit card number"
                           required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            <i class="bi bi-calendar me-2"></i>Expiry Date
                        </label>
                        <input type="text" id="expiryDate" class="form-control" 
                               placeholder="MM/YY" 
                               maxlength="5"
                               pattern="(0[1-9]|1[0-2])\/([0-9]{2})"
                               title="Please enter a valid expiry date in MM/YY format"
                               required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            <i class="bi bi-shield-lock me-2"></i>CVV
                        </label>
                        <input type="password" id="cvv" class="form-control" 
                               placeholder="123" 
                               maxlength="3"
                               pattern="\d{3}"
                               title="Please enter a valid 3-digit CVV"
                               required>
                    </div>
                </div>

                <button type="submit" class="btn-pay w-100">
                    <i class="bi bi-lock-fill"></i> Pay Now
                </button>
            </form>

            <!-- Payment Methods -->
            <div class="payment-methods">
                <h6 class="text-center">Accepted Payment Methods</h6>
                <div class="payment-icons">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="MasterCard">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal">
<img src="https://cdn.simpleicons.org/americanexpress" alt="American Express" width="50">
<img src="https://cdn.simpleicons.org/visa" alt="Visa" width="50">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Load basket items for order summary
        function loadOrderSummary() {
            const basket = JSON.parse(sessionStorage.getItem('basketItems')) || [];
            const orderItems = document.getElementById('orderItems');
            const orderTotal = document.getElementById('orderTotal');
            
            if (basket.length === 0) {
                orderItems.innerHTML = '<p class="text-muted">No items in basket</p>';
                orderTotal.innerHTML = 'Total: £0.00';
                return;
            }
            
            let html = '';
            let total = 0;
            
            basket.forEach(item => {
                total += item.price;
                html += `
                    <div class="summary-item">
                        <span>${item.name}</span>
                        <span>£${item.price.toFixed(2)}</span>
                    </div>
                `;
            });
            
            orderItems.innerHTML = html;
            orderTotal.innerHTML = `Total: £${total.toFixed(2)}`;
        }

        // Update cart count
        function updateCartCount() {
            const basket = JSON.parse(sessionStorage.getItem('basketItems')) || [];
            const cartCount = document.getElementById('cartCount');
            
            if (cartCount) {
                cartCount.textContent = basket.length;
                if (basket.length > 0) {
                    cartCount.classList.add('pulse');
                    setTimeout(() => cartCount.classList.remove('pulse'), 300);
                }
            }
        }

        // Show toast notification
        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toast-message');
            toastMessage.textContent = message;
            toast.classList.add('show');
            setTimeout(() => toast.classList.remove('show'), 3000);
        }

        // Validate payment
        function validatePayment() {
            let cardNumber = document.getElementById("cardNumber").value.replace(/\s/g, '');
            let expiry = document.getElementById("expiryDate").value;
            let cvv = document.getElementById("cvv").value;
            
            // Check if basket is empty
            const basket = JSON.parse(sessionStorage.getItem('basketItems')) || [];
            if (basket.length === 0) {
                showToast("❌ Your basket is empty!");
                return false;
            }
            
            // Validate card number
            if (cardNumber.length !== 16 || isNaN(cardNumber)) {
                showToast("❌ Please enter a valid 16-digit card number.");
                return false;
            }
            
            // Validate expiry date
            if (!expiry.match(/^(0[1-9]|1[0-2])\/(\d{2})$/)) {
                showToast("❌ Please enter a valid expiry date in MM/YY format.");
                return false;
            }
            
            // Check if card is not expired
            let [month, year] = expiry.split('/');
            let currentDate = new Date();
            let currentYear = currentDate.getFullYear() % 100;
            let currentMonth = currentDate.getMonth() + 1;
            
            if (parseInt(year) < currentYear || (parseInt(year) === currentYear && parseInt(month) < currentMonth)) {
                showToast("❌ Your card has expired!");
                return false;
            }
            
            // Validate CVV
            if (cvv.length !== 3 || isNaN(cvv)) {
                showToast("❌ Please enter a valid 3-digit CVV.");
                return false;
            }
            
            // Payment successful - clear basket and redirect
            showToast("✅ Payment successful! Thank you for your purchase.");
            
            // Clear basket after successful payment
            setTimeout(() => {
                sessionStorage.removeItem('basketItems');
                window.location.href = "<?= base_url('pages') ?>";
            }, 2000);
            
            return false; // Prevent form submission since we're handling it
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            loadOrderSummary();
            updateCartCount();
        });

        // Listen for storage changes
        window.addEventListener('storage', function(e) {
            if (e.key === 'basketItems') {
                loadOrderSummary();
                updateCartCount();
            }
        });
    </script>
</body>
</html>