<style>

/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Hero Section */
.hero {
    background-image: url('hero-background.jpg'); /* Replace with your actual image */
    background-size: cover;
    background-position: center;
    height: 60vh; /* Reduced from 80vh to 60vh for a more compact look */
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    padding: 10px 0; /* Reduce padding */
}

.hero-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px; /* Keep a manageable width */
    width: 100%;
    padding: 10px 20px; /* Reduced padding */
    background-color: rgba(0, 0, 0, 0.4); /* Slightly lighter background */
    border-radius: 10px;
    flex-wrap: wrap; /* Allows wrapping on smaller screens */
}

.hero-text {
    flex: 1;
    padding-right: 15px; /* Reduced padding */
}

.hero-text h1 {
    font-size: 2.5rem; /* Smaller font size */
    margin-bottom: 15px;
    font-weight: bold;
}

.hero-text p {
    font-size: 1rem; /* Slightly smaller font */
    margin-bottom: 20px;
}

.cta-button {
    background-color: green;
    color: white;
    padding: 10px 20px;
    font-size: 1rem;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: darkgreen;
}

.hero-thumbnail {
    flex: 0 1 250px;
    margin-top: 15px; /* Add margin on smaller screens */
}

.hero-thumbnail img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Responsive Styles */
@media (max-width: 768px) {
    .hero {
        height: auto; /* Auto adjust height */
        padding: 30px 15px;
    }

    .hero-content {
        flex-direction: column;
        padding: 15px;
    }

    .hero-text {
        padding-right: 0;
        text-align: center;
    }

    .hero-text h1 {
        font-size: 2rem; /* Adjusted font size */
    }

    .hero-text p {
        font-size: 0.9rem;
    }

    .hero-thumbnail {
        margin-top: 10px;
        width: 100%;
    }

    .hero-thumbnail img {
        width: 70%;
        margin: 0 auto;
    }
}


</style>




<section class="container hero">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Welcome to ShopEasy Online</h1>
            <p>Explore our wide range of products and enjoy a seamless shopping experience.</p>
            <a href="product.php" class="cta-button">Shop Now</a>
        </div>
        <div class="hero-thumbnail">
            <img src="./image/Sample 1.jpeg" alt="ShopEasy Thumbnail" />
        </div>
    </div>
</section>
