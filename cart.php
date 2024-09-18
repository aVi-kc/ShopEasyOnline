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

    // Function to update the cart count in the header
    function updateCartCount() {
        const cartCountElement = document.querySelector('.cart-count');
        cartCountElement.textContent = cartItems.length;
        cartCountElement.style.display = cartItems.length > 0 ? 'inline-block' : 'none';
    }

    // Function to render cart items dynamically
    function renderCartItems() {
        cartContent.innerHTML = ''; // Clear existing content

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

        // Add event listeners to remove items from cart
        const removeButtons = document.querySelectorAll('.remove-item');
        removeButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                const itemIndex = event.target.getAttribute('data-index');
                cartItems.splice(itemIndex, 1); // Remove the item from cartItems array
                sessionStorage.setItem('cartItems', JSON.stringify(cartItems)); // Update sessionStorage

                // Update cart display without reloading the page
                renderCartItems(); 
                updateCartCount(); // Update the cart count after removing the item
            });
        });
    }

    function addToCart(product) {
        const productName = product.querySelector('h3').textContent;
        const productPrice = product.querySelector('.price').textContent;
        const productImage = product.querySelector('img').src;

        const newItem = {
            name: productName,
            price: productPrice,
            image: productImage
        };

        // Add the new item to the existing cartItems
        cartItems.push(newItem);
        console.log(`Cart items: ${JSON.stringify(cartItems)}`);

        // Update sessionStorage with the new cartItems
        sessionStorage.setItem('cartItems', JSON.stringify(cartItems));

        // Update cart count and cart items display in real-time
        updateCartCount(); // Call updateCartCount() here
        renderCartItems();
        alert(`${productName} has been added to your cart.`);
    }

    // Initialize the cart on page load
    renderCartItems();
    updateCartCount();

    // JavaScript to handle adding multiple products to cart
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    // Iterate over each "Add to Cart" button
    addToCartButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            const productItem = event.target.parentElement; // Get the parent of the button (product div)
            addToCart(productItem); // Call the addToCart function
        });
    });
</script>


<?php
include "footer.php";
?>