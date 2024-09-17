<style>

.category-item {
    text-align: center;
    margin: 15px;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.category-item:hover {
    transform: scale(1.05);
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
}

.category-item p {
    font-size: 1.2rem;
    color: #333;
}

.category-item:hover p {
    color: #007BFF; /* Change text color on hover */
}

.category-item img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

.category-item:hover img {
    border: 2px solid #007BFF; /* Add a border on hover */
}

</style>


<section class="container product-slideshow">
        <h2>Featured Products</h2>
        <div class="slideshow-container">
            <!-- Add your product slideshow here -->
            <div class="product-slide">
            <img src="./image/product/jeans/jeans 1.jpeg" alt="Product 1">
            <h3>Smartphone</h3>
            <p class="price">$499</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product-slide">
            <img src="./image/product/jeans/jeans 2.jpeg" alt="Product 2">
            <h3>Men's Watch</h3>
            <p class="price">$150</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product-slide">
            <img src="./image/product/jeans/jeans 3.jpeg" alt="Product 3">
            <h3>Winter Jacket</h3>
            <p class="price">$120</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
            <!-- Add more slides as needed -->
        </div>
    </section>