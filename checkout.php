 <link rel="stylesheet" href="./assets/css/checkout.css">
 <!-- Checkout Section -->
 <section class="checkout">
        <div class="container">
            <h1>Checkout</h1>

            <form action="#" method="POST" id="checkout-form">
                <!-- Shipping Information -->
                <div class="section">
                    <h2>Shipping Information</h2>
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" name="full-name" required>

                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" required>

                    <label for="city">City</label>
                    <input type="text" id="city" name="city" required>

                    <label for="state">State</label>
                    <input type="text" id="state" name="state" required>

                    <label for="zip">ZIP Code</label>
                    <input type="text" id="zip" name="zip" required>

                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" required>
                </div>

                <!-- Payment Information -->
                <div class="section">
                    <h2>Payment Information</h2>
                    <label for="card-number">Card Number</label>
                    <input type="text" id="card-number" name="card-number" required>

                    <label for="expiry-date">Expiry Date</label>
                    <input type="text" id="expiry-date" name="expiry-date" required>

                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" required>

                    <label for="billing-address">Billing Address</label>
                    <input type="text" id="billing-address" name="billing-address" required>
                </div>

                <!-- Order Summary -->
                <div class="section">
                    <h2>Order Summary</h2>
                    <table class="order-summary">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Headphone</td>
                                <td>$29.99</td>
                                <td>1</td>
                                <td>$29.99</td>
                            </tr>
                            <tr>
                                <td>T-Shirts</td>
                                <td>$39.99</td>
                                <td>1</td>
                                <td>$39.99</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="3">Total</th>
                                <th>$69.98</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <button type="submit" class="checkout-btn">Place Order</button>
            </form>
        </div>
    </section>
<?php
include "footer.php";
?>