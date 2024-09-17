<?php
include "nav.php";
?>
<style>
        /* Basic styling for the cart */
        .cart-items {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            text-align: center;
        }
        .cart-items h2 {
            margin-bottom: 20px;
        }
        .cart-item {
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
        .cart-item img {
            max-width: 100px;
            height: auto;
            display: block;
            margin: 0 auto 10px;
        }
        .cart-item .product-name {
            font-size: 1.2rem;
        }
        .cart-item .product-price {
            color: green;
        }
        .cart-item .remove-item {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 0.9rem;
        }
        .cart-item .remove-item:hover {
            background-color: darkred;
        }
    </style>
<div class="header-container">

    <section class="cart">
        <div class="container">
            <h1>Your Shopping Cart</h1>
            <div class="cart-items">
        <div id="cart-content"></div>

    </div>   
</div>
    </section>
    <script>
        // Retrieve cart items from sessionStorage
        const cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];

        const cartContent = document.getElementById('cart-content');

        // Check if cart is empty
        if (cartItems.length > 0) {
            cartItems.forEach((item, index) => {
                // Create a cart item div
                const cartItem = document.createElement('div');
                cartItem.classList.add('cart-item');
                cartItem.innerHTML = `
                    <img src="${item.image}" alt="${item.name}">
                    <span class="product-name">${item.name}</span> - 
                    <span class="product-price">${item.price}</span>
                    <br>
                    <button class="remove-item" data-index="${index}">Remove</button>
                `;
                cartContent.appendChild(cartItem);
            });
        } else {
            cartContent.textContent = 'Your cart is empty.';
        }

        // Add event listener to remove items from cart
        const removeButtons = document.querySelectorAll('.remove-item');
        removeButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                const itemIndex = event.target.getAttribute('data-index');
                cartItems.splice(itemIndex, 1); // Remove the item from cartItems array
                sessionStorage.setItem('cartItems', JSON.stringify(cartItems)); // Update sessionStorage
                location.reload(); // Reload the page to update the cart display
            });
        });

        
    </script>


<?php
include "footer.php";
?>