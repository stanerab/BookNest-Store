<!-- Hero Carousel - Unique & Creative Design -->
<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>
    
    <div class="carousel-inner">
        <!-- Slide 1 - Book Pages Animation -->
        <div class="carousel-item active">
            <div class="carousel-image-wrapper">
                <!-- Animated book pages background -->
                <div class="animated-bg book-pages"></div>
                
                <!-- Floating books animation -->
                <div class="floating-books">
                    <div class="book-float book-1"><i class="bi bi-book"></i></div>
                    <div class="book-float book-2"><i class="bi bi-book-half"></i></div>
                    <div class="book-float book-3"><i class="bi bi-book-fill"></i></div>
                    <div class="book-float book-4"><i class="bi bi-journal"></i></div>
                    <div class="book-float book-5"><i class="bi bi-journal-bookmark-fill"></i></div>
                </div>
                
                <!-- Main decorative elements -->
                <div class="decorative-circle circle-1"></div>
                <div class="decorative-circle circle-2"></div>
                
                <!-- Abstract lines -->
                <div class="abstract-lines">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                </div>
            </div>
            
            <div class="carousel-caption">
                <div class="caption-content">
                    <span class="badge bg-danger mb-3 px-3 py-2">🌟 FEATURED</span>
                    <h5 class="display-4 fw-bold mb-3">Discover Your Next Adventure</h5>
                    <p class="lead mb-4">Thousands of books waiting to be explored. Find your perfect read today.</p>
                    <div class="cta-buttons">
                        <a href="<?= base_url('pages') ?>" class="btn btn-light btn-lg px-4 me-2">Browse Books</a>
                        <a href="<?= base_url('about') ?>" class="btn btn-outline-light btn-lg px-4">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 - Library Shelf Animation -->
        <div class="carousel-item">
            <div class="carousel-image-wrapper">
                <!-- Animated bookshelf background -->
                <div class="animated-bg bookshelf"></div>
                
                <!-- Moving book stack animation -->
                <div class="book-stack">
                    <div class="stack stack-1"></div>
                    <div class="stack stack-2"></div>
                    <div class="stack stack-3"></div>
                    <div class="stack stack-4"></div>
                </div>
                
                <!-- Falling bookmarks animation -->
                <div class="falling-bookmarks">
                    <div class="bookmark bm-1">📖</div>
                    <div class="bookmark bm-2">📕</div>
                    <div class="bookmark bm-3">📗</div>
                    <div class="bookmark bm-4">📘</div>
                    <div class="bookmark bm-5">📙</div>
                </div>
                
                <!-- Rotating quill -->
                <div class="rotating-quill">
                    <i class="bi bi-feather"></i>
                </div>
            </div>
            
            <div class="carousel-caption">
                <div class="caption-content">
                    <span class="badge bg-danger mb-3 px-3 py-2">✨ NEW</span>
                    <h5 class="display-4 fw-bold mb-3">New Arrivals Weekly</h5>
                    <p class="lead mb-4">Be the first to read the latest releases from your favorite authors.</p>
                    <div class="cta-buttons">
                        <a href="<?= base_url('pages') ?>" class="btn btn-light btn-lg px-4 me-2">Shop New</a>
                        <a href="<?= base_url('contact') ?>" class="btn btn-outline-light btn-lg px-4">Get Updates</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 - Reading Nook Animation -->
        <div class="carousel-item">
            <div class="carousel-image-wrapper">
                <!-- Animated reading nook background -->
                <div class="animated-bg reading-nook"></div>
                
                <!-- Pulsing reading lamp -->
                <div class="reading-lamp">
                    <div class="lamp-base"></div>
                    <div class="lamp-pole"></div>
                    <div class="lamp-shade"></div>
                    <div class="lamp-light"></div>
                </div>
                
                <!-- Floating quotes -->
                <div class="floating-quotes">
                    <div class="quote q-1">"📚"</div>
                    <div class="quote q-2">"✨"</div>
                    <div class="quote q-3">"💫"</div>
                    <div class="quote q-4">"⭐"</div>
                </div>
                
                <!-- Turning pages effect -->
                <div class="turning-pages">
                    <div class="page page-1"></div>
                    <div class="page page-2"></div>
                    <div class="page page-3"></div>
                </div>
            </div>
            
            <div class="carousel-caption">
                <div class="caption-content">
                    <span class="badge bg-danger mb-3 px-3 py-2">🔥 BESTSELLERS</span>
                    <h5 class="display-4 fw-bold mb-3">Bestseller Collection</h5>
                    <p class="lead mb-4">Top-rated books loved by readers worldwide. Join the community today.</p>
                    <div class="cta-buttons">
                        <a href="<?= base_url('pages') ?>" class="btn btn-light btn-lg px-4 me-2">Shop Bestsellers</a>
                        <a href="<?= base_url('about') ?>" class="btn btn-outline-light btn-lg px-4">Our Story</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<style>
    /* Carousel Wrapper */
    .carousel-image-wrapper {
        position: relative;
        width: 100%;
        height: 600px;
        overflow: hidden;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    /* Animated Backgrounds */
    .animated-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .book-pages {
        background: linear-gradient(45deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4);
        background-size: 400% 400%;
        animation: gradientBG 15s ease infinite;
    }

    .bookshelf {
        background: linear-gradient(135deg, #2c3e50, #3498db, #9b59b6, #e74c3c);
        background-size: 400% 400%;
        animation: gradientBG 15s ease infinite;
    }

    .reading-nook {
        background: linear-gradient(45deg, #f39c12, #d35400, #c0392b, #8e44ad);
        background-size: 400% 400%;
        animation: gradientBG 15s ease infinite;
    }

    @keyframes gradientBG {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* Floating Books Animation */
    .floating-books {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 2;
    }

    .book-float {
        position: absolute;
        font-size: 2rem;
        color: rgba(255, 255, 255, 0.6);
        animation: float 6s ease-in-out infinite;
    }

    .book-1 { top: 20%; left: 10%; animation-delay: 0s; }
    .book-2 { top: 60%; left: 15%; animation-delay: 1s; }
    .book-3 { top: 30%; right: 20%; animation-delay: 2s; }
    .book-4 { bottom: 20%; right: 10%; animation-delay: 3s; }
    .book-5 { top: 70%; left: 80%; animation-delay: 4s; }

    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        25% { transform: translateY(-20px) rotate(5deg); }
        75% { transform: translateY(20px) rotate(-5deg); }
    }

    /* Decorative Circles */
    .decorative-circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        z-index: 2;
        animation: pulse 4s ease-in-out infinite;
    }

    .circle-1 {
        width: 300px;
        height: 300px;
        top: -50px;
        right: -50px;
    }

    .circle-2 {
        width: 200px;
        height: 200px;
        bottom: -30px;
        left: -30px;
        animation-delay: 2s;
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); opacity: 0.1; }
        50% { transform: scale(1.2); opacity: 0.2; }
    }

    /* Abstract Lines */
    .abstract-lines {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 2;
    }

    .line {
        position: absolute;
        background: rgba(255, 255, 255, 0.1);
        transform-origin: center;
    }

    .line-1 {
        width: 200%;
        height: 2px;
        top: 30%;
        left: -50%;
        transform: rotate(30deg);
        animation: slideLine 10s linear infinite;
    }

    .line-2 {
        width: 150%;
        height: 2px;
        bottom: 40%;
        right: -30%;
        transform: rotate(-20deg);
        animation: slideLine 8s linear infinite reverse;
    }

    .line-3 {
        width: 180%;
        height: 2px;
        top: 60%;
        left: -40%;
        transform: rotate(10deg);
        animation: slideLine 12s linear infinite;
    }

    @keyframes slideLine {
        0% { transform: translateX(-100%) rotate(30deg); }
        100% { transform: translateX(100%) rotate(30deg); }
    }

    /* Book Stack Animation */
    .book-stack {
        position: absolute;
        bottom: 50px;
        right: 50px;
        z-index: 2;
    }

    .stack {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
        margin: 2px;
        border-radius: 4px;
        animation: stackMove 3s ease-in-out infinite;
    }

    .stack-1 { animation-delay: 0s; }
    .stack-2 { animation-delay: 0.5s; }
    .stack-3 { animation-delay: 1s; }
    .stack-4 { animation-delay: 1.5s; }

    @keyframes stackMove {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    /* Falling Bookmarks */
    .falling-bookmarks {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 2;
    }

    .bookmark {
        position: absolute;
        font-size: 1.5rem;
        color: rgba(255, 255, 255, 0.4);
        animation: fall 8s linear infinite;
    }

    .bm-1 { left: 10%; animation-delay: 0s; }
    .bm-2 { left: 30%; animation-delay: 2s; }
    .bm-3 { left: 50%; animation-delay: 4s; }
    .bm-4 { left: 70%; animation-delay: 1s; }
    .bm-5 { left: 90%; animation-delay: 3s; }

    @keyframes fall {
        0% { transform: translateY(-100px) rotate(0deg); opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { transform: translateY(700px) rotate(360deg); opacity: 0; }
    }

    /* Rotating Quill */
    .rotating-quill {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 4rem;
        color: rgba(255, 255, 255, 0.3);
        z-index: 2;
        animation: rotateQuill 20s linear infinite;
    }

    @keyframes rotateQuill {
        from { transform: translate(-50%, -50%) rotate(0deg); }
        to { transform: translate(-50%, -50%) rotate(360deg); }
    }

    /* Reading Lamp */
    .reading-lamp {
        position: absolute;
        bottom: 50px;
        left: 50px;
        z-index: 2;
    }

    .lamp-base {
        width: 40px;
        height: 10px;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 5px;
    }

    .lamp-pole {
        width: 6px;
        height: 100px;
        background: rgba(255, 255, 255, 0.5);
        margin: 0 auto;
    }

    .lamp-shade {
        width: 40px;
        height: 20px;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 20px 20px 0 0;
        margin: 0 auto;
    }

    .lamp-light {
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
        position: absolute;
        top: -150px;
        left: -80px;
        animation: lampGlow 3s ease-in-out infinite;
    }

    @keyframes lampGlow {
        0%, 100% { opacity: 0.3; }
        50% { opacity: 0.6; }
    }

    /* Floating Quotes */
    .floating-quotes {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 2;
    }

    .quote {
        position: absolute;
        font-size: 2rem;
        color: rgba(255, 255, 255, 0.2);
        animation: quoteFloat 8s ease-in-out infinite;
    }

    .q-1 { top: 20%; left: 20%; animation-delay: 0s; }
    .q-2 { top: 50%; right: 30%; animation-delay: 2s; }
    .q-3 { bottom: 30%; left: 40%; animation-delay: 4s; }
    .q-4 { top: 70%; right: 20%; animation-delay: 6s; }

    @keyframes quoteFloat {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
    }

    /* Turning Pages */
    .turning-pages {
        position: absolute;
        bottom: 30px;
        left: 30px;
        z-index: 2;
    }

    .page {
        width: 60px;
        height: 80px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 4px;
        margin: 2px;
        transform-origin: left;
        animation: turnPage 4s ease-in-out infinite;
    }

    .page-1 { animation-delay: 0s; }
    .page-2 { animation-delay: 1s; }
    .page-3 { animation-delay: 2s; }

    @keyframes turnPage {
        0%, 100% { transform: perspective(400px) rotateY(0deg); }
        50% { transform: perspective(400px) rotateY(-30deg); }
    }

    /* Carousel Caption */
    .carousel-caption {
        bottom: 20%;
        z-index: 10;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .caption-content {
        animation: fadeInUp 1s ease-out;
    }

    .carousel-caption h5 {
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 800;
        animation: slideInLeft 1s ease-out;
    }

    .carousel-caption p {
        font-size: clamp(1rem, 2vw, 1.3rem);
        animation: slideInRight 1s ease-out 0.2s both;
    }

    .cta-buttons {
        animation: fadeInUp 1s ease-out 0.4s both;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .carousel-image-wrapper {
            height: 400px;
        }

        .carousel-caption {
            bottom: 15%;
        }

        .book-float {
            font-size: 1.5rem;
        }

        .rotating-quill {
            font-size: 3rem;
        }

        .cta-buttons .btn {
            font-size: 0.9rem;
            padding: 0.6rem 1.2rem;
        }
    }

    @media (max-width: 576px) {
        .carousel-image-wrapper {
            height: 350px;
        }

        .carousel-caption h5 {
            font-size: 1.5rem;
        }

        .carousel-caption p {
            font-size: 0.9rem;
        }

        .cta-buttons {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .cta-buttons .btn {
            margin: 0 !important;
        }
    }
</style>

<!-- Floating Cart Button (Fixed Position) -->
<div class="floating-cart">
    <a href="<?= base_url('basket') ?>" class="cart-button" id="floatingCart">
        <i class="bi bi-cart-fill"></i>
        <span class="cart-count-badge" id="cartCount">0</span>
    </a>
</div>

<!-- Main Content -->
<div class="container my-5" id="bestsellers">
    
    <!-- Section Header - CSS animation only -->
    <div class="section-header fade-in">
        <h2><?= esc($title) ?></h2>
        <a href="<?= base_url('/pages') ?>" class="view-all">
            View All <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    <!-- Books Grid - Optimized with native lazy loading -->
    <?php if ($news_list !== []): ?>
        <div class="books-grid">
            <?php foreach ($news_list as $index => $news_item): ?>
                <div class="book-card slide-up" style="animation-delay: <?= $index * 0.05 ?>s">
                    
                    <?php if ($index < 3): ?>
                        <span class="book-badge">Bestseller</span>
                    <?php endif; ?>
                    
                    <!-- Make the entire card clickable (except buttons) -->
                    <a href="<?= base_url('book/' . esc($news_item['slug'], 'url')) ?>" class="book-link">
                        <div class="book-image">
                            <!-- Tiny SVG placeholder -->
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='400' viewBox='0 0 300 400'%3E%3Crect width='300' height='400' fill='%23f0f0f0'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' fill='%23999' font-size='16'%3E📚%3C/text%3E%3C/svg%3E"
                                 data-src="<?= base_url('images/' . esc($news_item['images'])) ?>" 
                                 class="lazy-image"
                                 alt="<?= esc($news_item['title']) ?>"
                                 onerror="this.src='https://via.placeholder.com/300x400?text=📚'">
                            
                            <div class="book-overlay">
                                <div class="quick-view">
                                    <span class="btn" onclick="event.preventDefault(); quickView('<?= esc($news_item['slug']) ?>')" title="Quick View">
                                        <i class="bi bi-eye"></i>
                                    </span>
                                    <span class="btn" onclick="event.preventDefault(); addToWishlist('<?= esc($news_item['title']) ?>')" title="Add to Wishlist">
                                        <i class="bi bi-heart"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    
                    <div class="book-info">
                        <a href="<?= base_url('book/' . esc($news_item['slug'], 'url')) ?>" class="book-title-link">
                            <h3 class="book-title"><?= esc($news_item['title']) ?></h3>
                        </a>
                        
                        <div class="book-price">£<?= esc($news_item['price']) ?></div>
                        
                        <!-- Book Meta - Fixed structure -->
                        <div class="book-meta">
                            <span class="book-date">
                                <i class="bi bi-calendar"></i>
                                <?= date('M j', strtotime(esc($news_item['created_at']))) ?>
                            </span>
                            
                            <div class="book-actions">
                                <a href="<?= base_url('book/' . esc($news_item['slug'], 'url')) ?>" class="btn-view" title="View details">
                                    <i class="bi bi-info-circle"></i>
                                </a>
                                <button class="btn-cart" onclick="addToBasket('<?= esc($news_item['title'], 'js') ?>', <?= esc($news_item['price']) ?>, '<?= esc($news_item['slug'], 'js') ?>')" title="Add to cart">
                                    <i class="bi bi-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="text-center py-5 fade-in">
            <i class="bi bi-book" style="font-size: 4rem; color: var(--text-light);"></i>
            <h3 class="mt-3">No Books Found</h3>
            <p class="text-muted">Check back later for new arrivals.</p>
        </div>
    <?php endif; ?>

    <!-- Map Section - Lazy loaded -->
    <div class="map-section fade-in" id="map">
        <h3>
            <i class="bi bi-geo-alt-fill"></i>
            Bookshops Near You
        </h3>
        <div id="map-container">
            <div class="text-center py-5">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading map...</span>
                </div>
                <p class="mt-2">Finding bookshops near you...</p>
            </div>
        </div>
    </div>
</div>
<!-- Toast Notification -->
<div id="toast" class="toast-notification">
    <i class="bi bi-check-circle-fill"></i>
    <span id="toast-message"></span>
</div>

<style>
    /* Ultra-fast CSS animations (no AOS) */
    .fade-in {
        opacity: 0;
        animation: fadeIn 0.5s ease forwards;
    }
    
    .slide-up {
        opacity: 0;
        transform: translateY(20px);
        animation: slideUp 0.4s ease forwards;
    }
    
    @keyframes fadeIn {
        to { opacity: 1; }
    }
    
    @keyframes slideUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Carousel image wrapper */
    .carousel-image-wrapper {
        position: relative;
        width: 100%;
        height: 600px;
        background: var(--primary);
    }
    
    .carousel-image-wrapper img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: opacity 0.3s ease;
    }
    
    .carousel-image-wrapper img.lazy-image {
        opacity: 0;
    }
    
    .carousel-image-wrapper img.lazy-image.loaded {
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
        background: var(--accent);
        color: white;
        border-radius: 50%;
        box-shadow: var(--shadow-lg);
        text-decoration: none;
        transition: transform 0.2s ease;
        position: relative;
    }
    
    .cart-button:hover {
        transform: scale(1.1);
        background: #c0392b;
        color: white;
    }
    
    .cart-button i {
        font-size: 1.5rem;
    }
    
    .cart-count-badge {
        position: absolute;
        top: -5px;
        right: -5px;
        background: var(--primary);
        color: white;
        font-size: 0.75rem;
        font-weight: 600;
        padding: 0.2rem 0.5rem;
        border-radius: 20px;
        min-width: 22px;
        text-align: center;
        border: 2px solid white;
        transition: transform 0.2s ease;
    }
    
    .cart-count-badge.pulse {
        animation: cartPulse 0.3s ease;
    }
    
    @keyframes cartPulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.3); }
        100% { transform: scale(1); }
    }
    
    /* Books grid */
    .books-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1.5rem;
        margin: 2rem 0;
    }
    
    .book-card {
        background: var(--white);
        border-radius: var(--radius-md);
        overflow: hidden;
        box-shadow: var(--shadow-sm);
        transition: transform 0.2s ease;
        height: 100%;
        position: relative;
        display: flex;
        flex-direction: column;
    }
    
    .book-card:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-md);
    }
    
    .book-link {
        text-decoration: none;
        color: inherit;
        display: block;
    }
    
    .book-badge {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        background: var(--accent);
        color: white;
        padding: 0.2rem 0.6rem;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 600;
        z-index: 10;
    }
    
    .book-image {
        position: relative;
        height: 280px;
        overflow: hidden;
        background: #f5f5f5;
        cursor: pointer;
    }
    
    .book-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: transform 0.2s ease;
    }
    
    .book-card:hover .book-image img {
        transform: scale(1.02);
    }
    
    .book-overlay {
        position: absolute;
        bottom: -40px;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
        padding: 1.5rem 1rem 0.5rem;
        transition: bottom 0.2s ease;
        z-index: 5;
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
        width: 35px;
        height: 35px;
        border-radius: 50%;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: white;
        color: var(--primary);
        border: none;
        transition: all 0.2s ease;
        cursor: pointer;
    }
    
    .quick-view .btn:active {
        transform: scale(0.95);
    }
    
    .book-info {
        padding: 1rem;
        flex: 1;
    }
    
    .book-title-link {
        text-decoration: none;
        color: inherit;
    }
    
    .book-title-link:hover .book-title {
        color: var(--accent);
    }
    
    .book-title {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 0.3rem;
        color: var(--primary);
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        transition: color 0.2s ease;
    }
    
    .book-price {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--accent);
        margin-bottom: 0.5rem;
    }
    
    .book-meta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 0.5rem;
        padding-top: 0.5rem;
        border-top: 1px solid #eee;
    }
    
    .book-date {
        color: var(--text-light);
        font-size: 0.8rem;
    }
    
    .book-actions {
        display: flex;
        gap: 0.3rem;
    }
    
    .btn-view, .btn-cart {
        border: none;
        padding: 0.4rem;
        border-radius: 4px;
        font-size: 0.8rem;
        cursor: pointer;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
    }
    
    .btn-view {
        background: #f0f0f0;
        color: var(--primary);
        text-decoration: none;
        display: inline-flex;
    }
    
    .btn-view:hover {
        background: var(--primary);
        color: white;
    }
    
    .btn-cart {
        background: var(--accent);
        color: white;
    }
    
    .btn-cart:hover {
        background: #c0392b;
        transform: scale(1.05);
    }
    
    /* Map section */
    .map-section {
        background: var(--white);
        border-radius: var(--radius-lg);
        padding: 1.5rem;
        margin: 3rem 0;
    }
    
    #map-container {
        min-height: 350px;
    }
    
    /* Toast */
    .toast-notification {
        position: fixed;
        bottom: 2rem;
        left: 50%;
        transform: translateX(-50%) translateY(100px);
        background: var(--primary);
        color: white;
        padding: 0.8rem 2rem;
        border-radius: 50px;
        box-shadow: var(--shadow-lg);
        opacity: 0;
        transition: all 0.2s ease;
        z-index: 9998;
        font-size: 0.9rem;
        white-space: nowrap;
    }
    
    .toast-notification.show {
        transform: translateX(-50%) translateY(0);
        opacity: 1;
    }
    
    .toast-notification i {
        margin-right: 0.5rem;
        color: var(--accent);
    }
    
    /* Mobile optimizations */
    @media (max-width: 768px) {
        .carousel-image-wrapper {
            height: 400px;
        }
        
        .books-grid {
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 1rem;
        }
        
        .book-image {
            height: 200px;
        }
        
        .book-overlay {
            display: none;
        }
        
        .slide-up {
            animation-duration: 0.3s;
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
            bottom: 5rem;
            font-size: 0.8rem;
            padding: 0.6rem 1.5rem;
            white-space: normal;
            width: 90%;
            text-align: center;
        }
    }
</style>

<!-- Bootstrap JS only (no AOS) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Ultra-fast image lazy loader
document.addEventListener('DOMContentLoaded', function() {
    const lazyImages = document.querySelectorAll('.lazy-image');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        }, { rootMargin: '50px' });
        
        lazyImages.forEach(img => imageObserver.observe(img));
    } else {
        // Fallback for older browsers
        lazyImages.forEach(img => {
            img.src = img.dataset.src;
            img.classList.add('loaded');
        });
    }
    
    // Initialize cart count
    updateCartCount();
});

// Toast notification
function showToast(message) {
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toast-message');
    toastMessage.textContent = message;
    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 2000);
}

// Update cart count
function updateCartCount() {
    // Use sessionStorage to match basket page
    const basket = JSON.parse(sessionStorage.getItem('basketItems')) || [];
    const totalItems = basket.length; // basket page uses simple array, no quantity
    const cartCount = document.getElementById('cartCount');
    
    if (cartCount) {
        cartCount.textContent = totalItems;
        cartCount.classList.add('pulse');
        setTimeout(() => cartCount.classList.remove('pulse'), 300);
    }
}

// Basket functions - Modified to use sessionStorage to match basket page
function addToBasket(productName, price, slug) {
    // Get existing basket from sessionStorage (to match basket page)
    let basket = JSON.parse(sessionStorage.getItem('basketItems')) || [];
    
    // Add item to basket (simple array as used in basket page)
    basket.push({
        name: productName,
        price: price
        // Note: slug and quantity not needed for basket page's simple implementation
    });
    
    // Save to sessionStorage
    sessionStorage.setItem('basketItems', JSON.stringify(basket));
    
    // Update cart count
    updateCartCount();
    
    // Show toast notification
    showToast(`✨ Added "${productName}" to basket`);
}

function addToWishlist(productName) {
    let wishlist = JSON.parse(localStorage.getItem('booknest_wishlist')) || [];
    wishlist.push({ 
        name: productName,
        date: new Date().toISOString()
    });
    localStorage.setItem('booknest_wishlist', JSON.stringify(wishlist));
    showToast(`❤️ Added to wishlist`);
}

function quickView(slug) {
    window.location.href = `<?= base_url('book/') ?>${slug}`;
}

// Map - optimized


    // Geolocation for map
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showMap, showError);
    } else {
        document.getElementById("map-container").innerHTML = "<p>Geolocation is not supported by your browser.</p>";
    }

    function showMap(position) {
        const lat = position.coords.latitude;
        const lng = position.coords.longitude;
        const query = `bookshops`;
        const mapURL = `https://www.google.com/maps?q=${query}&ll=${lat},${lng}&z=14&output=embed`;

        const iframe = `<iframe
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            src="${mapURL}">
        </iframe>`;

        document.getElementById("map-container").innerHTML = iframe;
    }

    function showError(error) {
        let message = "Unable to retrieve your location.";
        if (error.code === error.PERMISSION_DENIED) {
            message = "Location access was denied. Showing default map.";
        }

        const fallbackIframe = `<iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2423.9801138425496!2d-2.130058023429131!3d52.588052772079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487083cb0f37dc97%3A0x9cb8e3cc0509a0d0!2sUniversity%20of%20Wolverhampton!5e0!3m2!1sen!2suk!4v1743168182781!5m2!1sen!2suk" 
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-download">
        </iframe>`;

        document.getElementById("map-container").innerHTML = `<p>${message}</p>${fallbackIframe}`;
    }




// Load map after page load
window.addEventListener('load', initMap);

// Listen for storage changes
window.addEventListener('storage', function(e) {
    if (e.key === 'basketItems') {
        updateCartCount();
    }
});

// Custom event for same-page updates
window.addEventListener('basketUpdated', function() {
    updateCartCount();
});

// Remove duplicate functions at the bottom
// The functions below are duplicates - keep only the ones above
</script>