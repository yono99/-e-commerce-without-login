 
        const d = new Date();
        let text = "&copy;  Cahyono. All right reserved.";
        let content = d.getFullYear() + " " + text;
        document.getElementById("demo").innerHTML = content;

        // Shopping Cart Logic
        const cartItemsElement = document.getElementById("cartItems");
        const totalItemsElement = document.getElementById("totalItems");
        let cart = [];

        // Load cart items from localStorage on page load
        if (localStorage.getItem("cart")) {
            cart = JSON.parse(localStorage.getItem("cart"));
            renderCart();
        }

        function addToCart(productName, price) {
            cart.push({ productName, price });
            // Save updated cart to localStorage
            localStorage.setItem("cart", JSON.stringify(cart));
            renderCart();
        }

        function count() {
            const totalItems = cart.length;
            console.log(`Total Items in Cart: ${totalItems}`);
            totalItemsElement.textContent = totalItems; // Set the count value to the element

            // Tambahkan logika CSS untuk menonaktifkan elemen jika jumlah total item adalah 0
            // Use both display and visibility properties
            totalItemsElement.style.display = !totalItems ? "none" : "inline";
            totalItemsElement.style.visibility = !totalItems ? "hidden" : "visible";


            return totalItems;
        }

        function renderCart() {
            // Clear existing items in the cart
            cartItemsElement.innerHTML = "";
            // Render each item in the cart
            cart.forEach(item => {
                const cartItem = document.createElement("li");
                cartItem.textContent = `${item.productName} - $${item.price}`;
                cartItemsElement.appendChild(cartItem);
            });

            // Update count
            count();
        }


    