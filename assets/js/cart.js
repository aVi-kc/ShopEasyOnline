// Function to update cart count
function updateCartCount() {
    const cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];
    const cartCountElement = document.querySelector('.cart-count');
    cartCountElement.textContent = cartItems.length; // Update count with the number of items
}

// Call updateCartCount initially to show count when page is loaded
updateCartCount();

// Event listener for adding items to the cart
const addToCartButtons = document.querySelectorAll('.add-to-cart');

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

        // Update the cart count after adding a product
        updateCartCount();

        alert(`${productName} has been added to your cart.`);
    });
});