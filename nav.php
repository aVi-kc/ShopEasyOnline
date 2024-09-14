
<link rel="stylesheet" href="./assets/nav.css">

<nav>
    <div class="logo">
        <img src="./image/logo 1.jpg" alt="ShopEasyOnline">
    </div>

    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="hamburger">&#9776;</label>

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

        <div class="cart-icon">
    <a href="./cart.php">
        <img src="./image/cart/shopping-cart.png" alt="Cart">
        <span class="cart-count">3</span>
    </a>
</div>
        <div class="search-container">
        <form action="/search" method="GET">
            <input type="text" placeholder="Search" name="search">
            <button type="submit">Search</button>
        </form>
    </div>
    <!-- User Account Icon -->
    <div class="user-account">
        <a href="#" class="user-icon">
            <img src="./image/user.png" alt="User Account">
        </a>
        <ul class="account-dropdown">
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </div>        
    </ul>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.querySelector('.nav-links');
    const dropdowns = document.querySelectorAll('.dropdown');

    // Function to handle resizing
    function handleResize() {
        if (window.innerWidth > 768) {
            // Ensure menu is visible on larger screens
            navLinks.style.display = 'flex';
            menuToggle.checked = false; // Ensure checkbox is unchecked
        } else {
            // Ensure menu is hidden on smaller screens
            navLinks.style.display = menuToggle.checked ? 'flex' : 'none';
        }
    }

    // Event listener for menu toggle
    menuToggle.addEventListener('change', function () {
        navLinks.style.display = menuToggle.checked ? 'flex' : 'none';
    });

    // Event listeners for dropdown menus
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', function (e) {
            e.stopPropagation(); // Prevent event from bubbling up
            const dropdownContent = this.querySelector('.dropdown-content');
            if (dropdownContent) {
                dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
            }
        });
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function () {
        document.querySelectorAll('.dropdown-content').forEach(content => {
            content.style.display = 'none';
        });
    });

    // Initial check
    handleResize();

    // Add event listener for window resize
    window.addEventListener('resize', handleResize);
});

</script>



