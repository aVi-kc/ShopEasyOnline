
<link rel="stylesheet" href="./assets/css/nav.css">
<nav>
    <div class="logo">
        <img src="./image/logo 1.jpg" alt="ShopEasyOnline">
    </div>
    <ul class="nav-links">
        <li><a href="./index.php">Home</a></li>
        <li><a href="./product.php">All Products</a></li>
        <li class="dropdown">
            <a href="#">Category &#9662;</a>
        <ul class="dropdown-content">
            <li><a ref="./product.php">Jeans</a></li>
            <li><a href="./product.php">Shirts</a></li>
        </ul>
        </li>

        <li><a href="#contact">Contact</a> </li>
        <li><a href="#about">About US</a></li>

            <!-- User Account Icon -->
    <div class="user-cart-wrapper">
        <div class="user-account">
            <a href="#" class="user-icon">
                <img src="./image/user.png" alt="User Account">
            </a>
            <ul class="account-dropdown">
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </div>

        <!-- Cart Icon -->
        <div class="cart-icon">
            <a href="./cart.php">
                <img src="./image/cart/shopping-cart.png" alt="Cart">
                <span class="cart-count">0</span>
            </a>
        </div>
    </div>

        <div class="search-container">
        <form action="/search" method="GET">
            <input type="text" placeholder="Search" name="search">
            <button type="submit">Search</button>
        </form>
    </div>
    </ul>
    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="hamburger">&#9776;</label>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.querySelector('.nav-links');
    const dropdowns = document.querySelectorAll('.dropdown');

    function handleResize() {
        if (window.innerWidth > 768) {
            navLinks.style.display = 'flex';
            menuToggle.checked = false;
        } else {
            navLinks.style.display = menuToggle.checked ? 'flex' : 'none';
        }
    }

    menuToggle.addEventListener('change', function () {
        navLinks.style.display = menuToggle.checked ? 'flex' : 'none';
    });

    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', function (e) {
            e.stopPropagation();
            const dropdownContent = this.querySelector('.dropdown-content');
            if (dropdownContent) {
                dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
            }
        });
    });

    document.addEventListener('click', function () {
        document.querySelectorAll('.dropdown-content').forEach(content => {
            content.style.display = 'none';
        });
    });

    handleResize();
    window.addEventListener('resize', handleResize);

    function updateCartCount() {
        const cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];
        const cartCountElement = document.querySelector('.cart-count');
        console.log('Cart Items:', cartItems); // Debugging log
        console.log('Cart Items Length:', cartItems.length); // Debugging log
        cartCountElement.textContent = cartItems.length;
        cartCountElement.style.display = cartItems.length > 0 ? 'inline-block' : 'none';
    }

    function handleAddToCartClick(event) {
        console.log('Add to Cart button clicked'); // Debugging log
        const productItem = event.target.closest('.product');
        if (!productItem) return;

        const productName = productItem.querySelector('h3').textContent;
        const productPrice = productItem.querySelector('.price').textContent;
        const productImage = productItem.querySelector('img').src;

        let cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];
        cartItems.push({
            name: productName,
            price: productPrice,
            image: productImage
        });

        sessionStorage.setItem('cartItems', JSON.stringify(cartItems));
        updateCartCount(); // Update cart count
        alert(`${productName} has been added to your cart.`);
    }

    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(button => {
        button.removeEventListener('click', handleAddToCartClick); // Remove existing listeners
        button.addEventListener('click', handleAddToCartClick);
    });

    updateCartCount(); // Ensure the cart count is updated on page load
});

</script>



