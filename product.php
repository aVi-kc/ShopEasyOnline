
<link rel="stylesheet" href="./assets/css/product.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>

<!-- Product Listing Section -->
<header>
<?php
include "nav.php";
?>
</header>
<section class="container products">
    <h2>All Products</h2>
    <div class="product-list">
        <div class="product-item">
            <img src="./image/product/jeans/jeans 1.jpeg" alt="Product 1">
            <h3>Smartphone</h3>
            <p class="price">$499</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product-item">
            <img src="./image/product/jeans/jeans 2.jpeg" alt="Product 2">
            <h3>Men's Watch</h3>
            <p class="price">$150</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product-item">
            <img src="./image/product/jeans/jeans 3.jpeg" alt="Product 3">
            <h3>Winter Jacket</h3>
            <p class="price">$120</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product-item">
            <img src="./image/product/jeans/jeans 4.jpeg" alt="Product 4">
            <h3>Bluetooth Headphones</h3>
            <p class="price">$79</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product-item">
            <img src="./image/product/shirts/tshrts 1.jpeg" alt="Product 4">
            <h3>Bluetooth Headphones</h3>
            <p class="price">$79</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product-item">
            <img src="./image/product/shirts/tshrts 2.jpeg" alt="Product 4">
            <h3>Bluetooth Headphones</h3>
            <p class="price">$79</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product-item">
            <img src="./image/product/shirts/tshrts 3.jpeg" alt="Product 4">
            <h3>Bluetooth Headphones</h3>
            <p class="price">$79</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product-item">
            <img src="./image/product/shirts/tshrts 4.jpeg" alt="Product 4">
            <h3>Bluetooth Headphones</h3>
            <p class="price">$79</p>
            <button class="add-to-cart">Add to Cart</button>
        </div>

    </div>
    <script>
        // JavaScript to handle adding multiple products to cart
        const addToCartButtons = document.querySelectorAll('.add-to-cart');

        // Iterate over each "Add to Cart" button
        addToCartButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                const productItem = event.target.parentElement; // Get the parent of the button (product div)
                const productName = productItem.querySelector('h3').textContent;
                const productPrice = productItem.querySelector('.price').textContent;
                const productImage = productItem.querySelector('img').src;

                // Retrieve cart items from sessionStorage or create an empty array if it doesn't exist
                let cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];

                // Add the selected product to the cart
                cartItems.push({
                    name: productName,
                    price: productPrice,
                    image: productImage
                });

                // Update sessionStorage with the new cart items
                sessionStorage.setItem('cartItems', JSON.stringify(cartItems));

                alert(`${productName} has been added to your cart.`);
            });
        });
    </script>
    
</body>
<footer>
<?php
include "footer.php";
?>
</footer>
</html>


