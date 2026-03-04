<!-- Hero Carousel -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" style="height: 600px; margin-top: 76px;">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>
    
    <div class="carousel-inner" style="height: 100%;">
        <div class="carousel-item active">
            <img src="<?= base_url('images/bannner.jpg') ?>" class="d-block w-100" alt="Banner" style="height: 600px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="display-4 fw-bold">Discover Your Next Adventure</h5>
                <p class="lead">Thousands of books waiting to be explored</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('images/banner3.jpeg') ?>" class="d-block w-100" alt="Banner 3" style="height: 600px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="display-4 fw-bold">New Arrivals Weekly</h5>
                <p class="lead">Be the first to read the latest releases</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('images/book-banner2.avif') ?>" class="d-block w-100" alt="Book Banner 2" style="height: 600px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="display-4 fw-bold">Bestseller Collection</h5>
                <p class="lead">Top-rated books loved by readers worldwide</p>
            </div>
        </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Main Content -->
<div class="container my-5">
    
    <!-- Section Header -->
    <div class="section-header fade-in">
        <h2><?= esc($title) ?></h2>
        <a href="<?= base_url('/books') ?>" class="view-all">
            View All <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    <!-- Books Grid -->
    <?php if ($news_list !== []): ?>
        <div class="books-grid">
            <?php foreach ($news_list as $index => $news_item): ?>
                <div class="book-card slide-up" style="animation-delay: <?= $index * 0.05 ?>s">
                    
                    <?php if ($index < 3): ?>
                        <span class="book-badge">Bestseller</span>
                    <?php endif; ?>
                    
                    <!-- Book Image with Link -->
                    <a href="<?= base_url('book/' . esc($news_item['slug'], 'url')) ?>" class="book-link">
                        <div class="book-image">
                            <img src="<?= base_url('images/' . esc($news_item['images'])) ?>" 
                                 alt="<?= esc($news_item['title']) ?>"
                                 loading="lazy"
                                 onerror="this.src='https://via.placeholder.com/300x400?text=📚'">
                        </div>
                    </a>
                    
                    <!-- Book Info -->
                    <div class="book-info">
                        <a href="<?= base_url('book/' . esc($news_item['slug'], 'url')) ?>" class="book-title-link">
                            <h3 class="book-title"><?= esc($news_item['title']) ?></h3>
                        </a>
                        
                        <div class="book-price">£<?= esc($news_item['price']) ?></div>
                        
                        <!-- Book Meta -->
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
        <div class="text-center py-5">
            <i class="bi bi-book" style="font-size: 4rem; color: #94a3b8;"></i>
            <h3 class="mt-3">No Books Found</h3>
            <p class="text-muted">Check back later for new arrivals.</p>
        </div>
    <?php endif; ?>
</div>