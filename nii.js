const cartItems = document.querySelector('.cart-items');
const addToCartButtons = document.querySelectorAll('.add-to-cart');

addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        const product = button.dataset.product;
        const notification = `Item ${product} added to cart!`;
        alert(notification);
        const cartItem = document.createElement('div');
        cartItem.textContent = `Item ${product}`;
        cartItems.appendChild(cartItem);
    });
});