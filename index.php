<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopEasy Online</title>
    <link rel="stylesheet" href="sample.css"> <!-- External CSS for styling -->
</head>
<body>

    <!-- Header and Navigation -->
    <header>
    <?php
        include "nav.php";
    ?>
    </header>

    <!-- Hero Section -->
    <section class="container hero">
        <h1>Welcome to ShopEasy Online</h1>
        <p>Explore our wide range of products and enjoy a seamless shopping experience.</p>
    </section>

    <!-- Category Section -->
    <section class="container category">
        <h2>Shop by Categories</h2>
        <div class="category-list">
            <div class="category-item">
                <img src="images/category1.jpg" alt="Category 1">
                <p>Electronics</p>
            </div>
            <div class="category-item">
                <img src="images/category2.jpg" alt="Category 2">
                <p>Fashion</p>
            </div>
            <div class="category-item">
                <img src="images/category3.jpg" alt="Category 3">
                <p>Home Appliances</p>
            </div>
        </div>
    </section>

    <!-- Product Slideshow Section -->
    <section class="container product-slideshow">
        <h2>Featured Products</h2>
        <div class="slideshow-container">
            <!-- Add your product slideshow here -->
            <div class="product-slide">
                <img src="./image/Sample 1.jpeg" alt="Product 1">
                <h3>Product 1</h3>
                <p>$25.99</p>
            </div>
            <div class="product-slide">
                <img src="./image/Sample 2.jpeg" alt="Product 2">
                <h3>Product 2</h3>
                <p>$35.99</p>
            </div>
            <!-- Add more slides as needed -->
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="container testimonial">
        <h2>What Our Customers Say</h2>
        <div class="testimonial-list">
            <div class="testimonial-item">
                <p>"Great service and fast delivery! Highly recommended."</p>
                <p>- Customer 1</p>
            </div>
            <div class="testimonial-item">
                <p>"I love the product quality. Will shop again!"</p>
                <p>- Customer 2</p>
            </div>
            <div class="testimonial-item">
                <p>"Amazing experience from start to finish."</p>
                <p>- Customer 3</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 ShopEasy Online. All rights reserved.</p>
    </footer>

</body>
</html>
