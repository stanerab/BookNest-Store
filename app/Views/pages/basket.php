
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
            padding: 1rem;
        }

        /* Main container */
        .basket-wrapper {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        /* Header */
        .page-header {
            margin-bottom: 1rem;
        }

        .page-header h1 {
            font-size: clamp(1.8rem, 5vw, 2.5rem);
            font-weight: 700;
            color: #2c3e50;
            position: relative;
            padding-left: 1rem;
        }

        .page-header h1::before {
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

        /* Content grid */
        .content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        /* Common card styles */
        .card-section {
            background: white;
            border-radius: 20px;
            padding: 1.5rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            height: fit-content;
        }

        .section-title {
            font-size: clamp(1.3rem, 4vw, 1.8rem);
            font-weight: 700;
            color: #2c3e50;
            position: relative;
            padding-left: 1rem;
            margin-bottom: 1.5rem;
        }

        .section-title::before {
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

        /* Basket Items */
        .basket-items {
            list-style: none;
            margin-bottom: 1.5rem;
            max-height: 500px;
            overflow-y: auto;
            padding-right: 0.5rem;
        }

        .basket-items::-webkit-scrollbar {
            width: 6px;
        }

        .basket-items::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .basket-items::-webkit-scrollbar-thumb {
            background: #cbd5e0;
            border-radius: 10px;
        }

        .basket-items li {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            padding: 1rem;
            border-bottom: 1px solid #e2e8f0;
            transition: background 0.2s ease;
        }

        .basket-items li:hover {
            background: #f8fafc;
        }

        .item-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .item-name {
            font-weight: 500;
            color: #2c3e50;
            flex: 1;
            min-width: 200px;
        }

        .item-price {
            font-weight: 600;
            color: #e74c3c;
            white-space: nowrap;
        }

        .remove-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 0.4rem 1rem;
            border-radius: 6px;
            font-size: 0.85rem;
            cursor: pointer;
            transition: all 0.2s ease;
            white-space: nowrap;
        }

        .remove-btn:hover {
            background: #c0392b;
            transform: scale(1.05);
        }

        .basket-total {
            font-size: clamp(1.1rem, 3vw, 1.3rem);
            font-weight: 700;
            color: #e74c3c;
            text-align: right;
            margin: 1rem 0;
            padding-top: 1rem;
            border-top: 2px dashed #e2e8f0;
        }

        .checkout-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 50px;
            font-weight: 600;
            width: 100%;
            cursor: pointer;
            transition: all 0.2s ease;
            font-size: clamp(0.9rem, 3vw, 1.1rem);
        }

        .checkout-btn:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .checkout-btn:active {
            transform: translateY(0);
        }

        /* Products Grid */
        .products-grid {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1rem;
            max-height: 600px;
            overflow-y: auto;
            padding-right: 0.5rem;
        }

        .products-grid::-webkit-scrollbar {
            width: 6px;
        }

        .products-grid::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .products-grid::-webkit-scrollbar-thumb {
            background: #cbd5e0;
            border-radius: 10px;
        }

        .products-grid li {
            background: #f8fafc;
            border-radius: 12px;
            transition: all 0.2s ease;
        }

        .products-grid li:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .product-btn {
            background: #2c3e50;
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 12px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.2s ease;
            width: 100%;
            text-align: left;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            min-height: 70px;
            word-break: break-word;
        }

        .product-btn:hover {
            background: #e74c3c;
        }

        .product-btn i {
            font-size: 1.2rem;
            flex-shrink: 0;
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
            flex-shrink: 0;
        }

        /* Mobile Responsive */
        @media (max-width: 992px) {
            .content-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .products-grid {
                grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
                max-height: 500px;
            }
        }

        @media (max-width: 768px) {
            body {
                padding: 0.8rem;
            }

            .card-section {
                padding: 1rem;
            }

            .basket-items li {
                padding: 0.8rem;
            }

            .item-details {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }

            .item-name {
                min-width: auto;
                width: 100%;
            }

            .item-price {
                align-self: flex-start;
            }

            .remove-btn {
                align-self: flex-end;
                width: 100%;
                text-align: center;
            }

            .products-grid {
                grid-template-columns: 1fr;
                max-height: 400px;
            }

            .product-btn {
                padding: 0.8rem;
                font-size: 0.85rem;
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
                bottom: 1rem;
                font-size: 0.8rem;
                padding: 0.7rem 1.2rem;
                width: 90%;
            }
        }

        @media (max-width: 480px) {
            .products-grid {
                max-height: 350px;
            }

            .product-btn {
                min-height: 60px;
            }

            .basket-items {
                max-height: 400px;
            }
        }

        /* Empty state */
        .empty-basket {
            text-align: center;
            padding: 2rem;
            color: #94a3b8;
        }

        .empty-basket i {
            font-size: 3rem;
            margin-bottom: 1rem;
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

    <div class="basket-wrapper">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Your Basket</h1>
        </div>

        <!-- Content Grid -->
        <div class="content-grid">
            <!-- Basket Section -->
            <div class="card-section" id="basket">
                <h2 class="section-title">Shopping Cart</h2>
                <ul id="basketItems" class="basket-items"></ul>
                <div id="total" class="basket-total">Total: £0.00</div>
                <button onclick="checkout()" class="checkout-btn">Proceed to Checkout</button>
            </div>

            <!-- Products Section -->
            
           <div class="card-section" id="products">
    <h2 class="section-title">Available Products</h2>
    <ul id="productList" class="products-grid">

        <li>
            <button class="product-btn" onclick="addToBasket('Great Uncle Harry: A Tale of War and Empire by Michael Palin', 12.99)">
                <i class="bi bi-book"></i> Great Uncle Harry: A Tale of War and Empire – Michael Palin (£12.99)
            </button>
        </li>

        <li>
            <button class="product-btn" onclick="addToBasket('Arabia: A Journey Through the Heart of the Middle East by Levison Wood', 9.49)">
                <i class="bi bi-book"></i> Arabia – Levison Wood (£9.49)
            </button>
        </li>

        <li>
            <button class="product-btn" onclick="addToBasket('Somme 1916: A Battlefield Companion by Gerald Gliddon', 14.99)">
                <i class="bi bi-book"></i> Somme 1916 – Gerald Gliddon (£14.99)
            </button>
        </li>

        <li>
            <button class="product-btn" onclick="addToBasket('TIME Magazine (Anthony Eden Cover)', 8.99)">
                <i class="bi bi-book"></i> TIME Magazine – Anthony Eden Issue (£8.99)
            </button>
        </li>

        <li>
            <button class="product-btn" onclick="addToBasket('A Few Bad Men by Maj. Fred Galvin', 12.50)">
                <i class="bi bi-book"></i> A Few Bad Men – Maj. Fred Galvin (£12.50)
            </button>
        </li>

        <li>
            <button class="product-btn" onclick="addToBasket('Farewell to the Horses: Diary of a British Tommy 1915–1919 by Robert Elverstone', 19.99)">
                <i class="bi bi-book"></i> Farewell to the Horses – Robert Elverstone (£19.99)
            </button>
        </li>

        <li>
            <button class="product-btn" onclick="addToBasket('Ulster, Ireland and the Somme by Catherine Switzer', 9.50)">
                <i class="bi bi-book"></i> Ulster, Ireland and the Somme – Catherine Switzer (£9.50)
            </button>
        </li>

        <li>
            <button class="product-btn" onclick="addToBasket('British Imperialism: What the Empire Wasn’t by Bernard Porter', 11.99)">
                <i class="bi bi-book"></i> British Imperialism – Bernard Porter (£11.99)
            </button>
        </li>

        <li>
            <button class="product-btn" onclick="addToBasket('The Making of the British Empire by Arthur Hassall', 19.70)">
                <i class="bi bi-book"></i> The Making of the British Empire – Arthur Hassall (£19.70)
            </button>
        </li>

        <li>
            <button class="product-btn" onclick="addToBasket('Under the Eye of Power by Colin Dickey', 22.00)">
                <i class="bi bi-book"></i> Under the Eye of Power – Colin Dickey (£22.00)
            </button>
        </li>

        <li>
            <button class="product-btn" onclick="addToBasket('De Duik by Sara Ochs', 13.99)">
                <i class="bi bi-book"></i> De Duik – Sara Ochs (£13.99)
            </button>
        </li>

    </ul>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script>
        // Initialize basket from sessionStorage
        let basketItems = JSON.parse(sessionStorage.getItem("basketItems")) || [];

        // Toast notification function
        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toast-message');
            toastMessage.textContent = message;
            toast.classList.add('show');
            setTimeout(() => toast.classList.remove('show'), 2000);
        }

        // Update cart count in floating button
        function updateCartCount() {
            const cartCount = document.getElementById('cartCount');
            if (cartCount) {
                const totalItems = basketItems.length;
                cartCount.textContent = totalItems;
                if (totalItems > 0) {
                    cartCount.classList.add('pulse');
                    setTimeout(() => cartCount.classList.remove('pulse'), 300);
                }
            }
        }

        // Add to basket function
        function addToBasket(productName, price) {
            basketItems.push({ 
                name: productName, 
                price: price 
            });
            renderBasket();
            updateCartCount();
            showToast(`✨ Added "${productName.substring(0, 30)}..." to basket`);
        }

        // Remove from basket function
        function removeFromBasket(index) {
            const removedItem = basketItems[index];
            basketItems.splice(index, 1);
            renderBasket();
            updateCartCount();
            showToast(`🗑️ Removed from basket`);
        }

        // Render basket items
        function renderBasket() {
            const basketList = document.getElementById("basketItems");
            basketList.innerHTML = "";
            let total = 0;
            
            if (basketItems.length === 0) {
                const emptyMessage = document.createElement("li");
                emptyMessage.className = "empty-basket";
                emptyMessage.innerHTML = '<i class="bi bi-basket"></i><p>Your basket is empty</p>';
                basketList.appendChild(emptyMessage);
            } else {
                basketItems.forEach((item, index) => {
                    const listItem = document.createElement("li");
                    
                    // Item details container
                    const itemDetails = document.createElement("div");
                    itemDetails.className = "item-details";
                    
                    // Item name
                    const itemName = document.createElement("span");
                    itemName.className = "item-name";
                    itemName.textContent = item.name;
                    
                    // Item price
                    const itemPrice = document.createElement("span");
                    itemPrice.className = "item-price";
                    itemPrice.textContent = `£${item.price.toFixed(2)}`;
                    
                    // Remove button
                    const removeButton = document.createElement("button");
                    removeButton.className = "remove-btn";
                    removeButton.textContent = "Remove";
                    removeButton.onclick = () => removeFromBasket(index);
                    
                    itemDetails.appendChild(itemName);
                    itemDetails.appendChild(itemPrice);
                    listItem.appendChild(itemDetails);
                    listItem.appendChild(removeButton);
                    basketList.appendChild(listItem);
                    
                    total += item.price;
                });
            }
            
            document.getElementById("total").textContent = `Total: £${total.toFixed(2)}`;
            sessionStorage.setItem("basketItems", JSON.stringify(basketItems));
        }

        // Checkout function
        function checkout() {
            if (basketItems.length === 0) {
                showToast("❌ Your basket is empty!");
            } else {
                window.location.href = "payment";
            }
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            renderBasket();
            updateCartCount();
        });
    </script>
</body>
</html>