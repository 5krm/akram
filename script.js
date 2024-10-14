
    //AFIA TABASSUM
    //extra card show or hide
    document.getElementById("toggleProducts").addEventListener("click", function() {
        var extraProducts = document.querySelector(".extra-product-grid");
        var button = document.getElementById("toggleProducts");
        
        if (extraProducts.style.display === "none" || extraProducts.style.display === "") {
            extraProducts.style.display = "grid";
            button.textContent = "See Less Products";
        } else {
            extraProducts.style.display = "none";
            button.textContent = "See More Products";
        }
    });

    //Subscription message
    document.getElementById('subscribe-btn').addEventListener('click', function() {
        var email = document.getElementById('email').value;
        var message = document.getElementById('message');
        
        if (email.trim() === "") {
            message.textContent = "Enter your email.";
            message.style.color = "red";
            message.style.display = "block";
        } else {
            message.textContent = "Subscription successful!";
            message.style.color = "white";
            message.style.display = "block";
        }
    });
    function addToCart(productId) {
        const productCard = document.getElementById(`product-card-${productId}`);
        const productName = productCard.querySelector('h3').textContent;
        const productPrice = productCard.querySelector('.rating-price span:last-child').textContent;
        const productImage = productCard.querySelector('img').src;
    
        // Create a cart item object
        const cartItem = {
            productId: productId,
            name: productName,
            price: productPrice,
            image: productImage,
            quantity: 1
        };
    
        // Get the existing cart items from local storage or create an empty array
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    
        // Check if the product already exists in the cart
        const existingItem = cartItems.find(item => item.productId === productId);
    
        if (existingItem) {
            // If the product exists, increment its quantity
            existingItem.quantity++;
        } else {
            // If the product doesn't exist, add it to the cart
            cartItems.push(cartItem);
        }
    
        // Update the cart in local storage
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
    
        // Update the cart display on the page
        updateCartDisplay();
    }
    
    function updateCartDisplay() {
        const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        const cartItemsElement = document.getElementById('cart-items');
        cartItemsElement.innerHTML = '';
    
        cartItems.forEach(item => {
            const cartItemElement = document.createElement('li');
            cartItemElement.innerHTML = `
                <img src="${item.image}" alt="${item.name}">
                <div>
                    <p>${item.name}</p>
                    <p>$${item.price}</p>
                    <button onclick="removeFromCart(${item.productId})">Remove</button>
                </div>
            `;
            cartItemsElement.appendChild(cartItemElement);
        });
    
        const totalCostElement = document.getElementById('total-cost');
        const totalCost = cartItems.reduce((total, item) => total + (item.price * item.quantity), 0);
        totalCostElement.textContent = `$${totalCost.toFixed(2)}`;
    }
    const addToCartButtons = document.querySelectorAll('.product-card button');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const productId = button.closest('.product-card').id.replace('product-card-', '');
            addToCart(productId);
        });
    });
    // ... (rest of your JavaScript code)

// Update the cart display function to populate the cart section
function updateCartDisplay() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const cartItemsElement = document.getElementById('cart-items');
    cartItemsElement.innerHTML = '';

    cartItems.forEach(item => {
        const cartItemElement = document.createElement('li');
        cartItemElement.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <div>
                <p>${item.name}</p>
                <p>$${item.price}</p>
                <button onclick="removeFromCart(${item.productId})">Remove</button>
            </div>
        `;
        cartItemsElement.appendChild(cartItemElement);
    });

    const totalCostElement = document.getElementById('total-cost');
    const totalCost = cartItems.reduce((total, item) => total + (item.price * item.quantity), 0);
    totalCostElement.textContent = `$${totalCost.toFixed(2)}`;
}