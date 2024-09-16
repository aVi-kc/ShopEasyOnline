<?php
include "nav.php";
?>
<link rel="stylesheet" href="./assets/css/cart.css">
<div class="header-container">
           <!-- <div class="cart-icon">
                <a href="cart.php">
                    <img src="image/cart/shopping-cart.png" alt="Cart">
                    <span class="cart-count">3</span>
                </a>
            </div>-->
        </div>
    </header>
    <!-- Cart Section -->
    <section class="cart">
        <div class="container">
            <h1>Your Shopping Cart</h1>
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="./image/product/allProducts/electronic.jpeg" alt="Product 1" class="cart-image">
                            <p>Headphone</p>
                        </td>
                        <td>$29.99</td>
                        <td>
                            <input type="number" value="1" min="1" class="quantity-input">
                        </td>
                        <td class="total">$29.99</td>
                        <td>
                            <button class="remove-btn">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="image/product/allProducts/boostup_clothing-category_shirts-2.jpg" alt="Product 2"
                                class="cart-image">
                            <p>T-shirts</p>
                        </td>
                        <td>$39.99</td>
                        <td>
                            <input type="number" value="1" min="1" class="quantity-input">
                        </td>
                        <td class="total">$39.99</td>
                        <td>
                            <button class="remove-btn">Remove</button>
                        </td>
                    </tr>
                    <!-- Add more product rows as needed -->
                </tbody>
            </table>
            <div class="cart-summary">
                <p>Total Items: <span id="total-items">2</span></p>
                <p>Total Price: <span id="total-price">$69.98</span></p>
                <button class="checkout-btn" onclick="window.location.href='checkout.php'">Proceed to Checkout</button>
            </div>
        </div>
    </section>
    <script src="jquery/cart.js"></script>
<?php
include "footer.php";
?>