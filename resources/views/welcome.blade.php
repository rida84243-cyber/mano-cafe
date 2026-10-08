<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mano Cafe | Cat Store</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #fff8fb;
            color: #444;
        }

        /* NAVBAR */
        nav {
            background: #ffe4ef;
            padding: 18px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .logo {
            font-size: 27px;
            font-weight: bold;
            color: #e91e63;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        nav ul li a {
            text-decoration: none;
            color: #555;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #e91e63;
        }

        .cart-top {
            background: #e91e63;
            color: white;
            padding: 9px 16px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
        }

        /* HERO */
        .hero {
            min-height: 450px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(135deg, #ffe8f1, #fff5fa);
        }

        .hero h1 {
            font-size: 52px;
            color: #d81b60;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 25px;
        }

        .hero-btn {
            display: inline-block;
            background: #e91e63;
            color: white;
            padding: 13px 28px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
        }

        .hero-btn:hover {
            background: #c2185b;
        }

        /* GENERAL */
        section {
            padding: 60px 7%;
        }

        .section-title {
            text-align: center;
            margin-bottom: 35px;
        }

        .section-title h2 {
            color: #e91e63;
            font-size: 32px;
            margin-bottom: 8px;
        }

        .section-title p {
            color: #777;
        }

        /* CATEGORIES */
        .categories {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .category {
            background: white;
            padding: 30px 20px;
            text-align: center;
            border-radius: 18px;
            box-shadow: 0 4px 15px rgba(233,30,99,0.10);
            border: 1px solid #ffd4e4;
        }

        .category-icon {
            font-size: 50px;
            margin-bottom: 15px;
        }

        .category h3 {
            color: #e91e63;
        }

        /* PRODUCTS */
        .products {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .product-card {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 5px 18px rgba(233,30,99,0.12);
            border: 1px solid #ffd6e5;
            text-align: center;
            padding-bottom: 20px;
            transition: 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-img {
            height: 190px;
            background: #ffeaf2;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 80px;
        }

        .product-card h3 {
            color: #e91e63;
            margin: 18px 10px 8px;
        }

        .product-card p {
            color: #777;
            font-size: 14px;
            margin: 0 10px 12px;
        }

        .price {
            display: block;
            color: #333;
            font-size: 19px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .add-btn {
            border: none;
            background: #e91e63;
            color: white;
            padding: 11px 20px;
            border-radius: 22px;
            cursor: pointer;
            font-weight: bold;
        }

        .add-btn:hover {
            background: #c2185b;
        }

        /* ABOUT */
        .about {
            background: #ffeef5;
            text-align: center;
        }

        .about h2 {
            color: #e91e63;
            font-size: 32px;
            margin-bottom: 15px;
        }

        .about p {
            max-width: 750px;
            margin: auto;
            line-height: 1.8;
        }

        /* CART */
        .cart-box {
            background: white;
            max-width: 900px;
            margin: auto;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .cart-item h4 {
            color: #e91e63;
        }

        .quantity button {
            border: none;
            background: #ffe0eb;
            color: #d81b60;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            font-weight: bold;
        }

        .quantity span {
            margin: 0 10px;
            font-weight: bold;
        }

        .remove-btn {
            border: none;
            background: #ffebee;
            color: #d32f2f;
            padding: 7px 12px;
            border-radius: 15px;
            cursor: pointer;
        }

        .cart-total {
            text-align: right;
            margin-top: 25px;
            font-size: 22px;
            color: #e91e63;
            font-weight: bold;
        }

        /* DELIVERY */
        .order-form {
            max-width: 750px;
            margin: auto;
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .order-form h2 {
            color: #e91e63;
            text-align: center;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ffc5d9;
            border-radius: 10px;
            outline: none;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #e91e63;
        }

        textarea {
            height: 100px;
            resize: none;
        }

        .place-order {
            width: 100%;
            border: none;
            background: #e91e63;
            color: white;
            padding: 14px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .place-order:hover {
            background: #c2185b;
        }

        /* FOOTER */
        footer {
            background: #e91e63;
            color: white;
            text-align: center;
            padding: 25px;
            margin-top: 30px;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {

            .products {
                grid-template-columns: repeat(2, 1fr);
            }

            .categories {
                grid-template-columns: repeat(2, 1fr);
            }

            nav ul {
                gap: 10px;
            }

            .hero h1 {
                font-size: 40px;
            }
        }

        @media (max-width: 600px) {

            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }

            .products {
                grid-template-columns: 1fr;
            }

            .categories {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 34px;
            }

            .cart-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->

<nav>

    <div class="logo">
        🐾 Mano Cafe
    </div>

    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#accessories">Accessories</a></li>
        <li><a href="#toys">Toys</a></li>
        <li><a href="#dresses">Dresses</a></li>
        <li><a href="#about">About</a></li>
    </ul>

    <div class="cart-top" onclick="goToCart()">
        🛒 Cart (<span id="cart-count">0</span>)
    </div>

</nav>


<!-- HERO -->

<section class="hero" id="home">

    <div>

        <h1>Welcome to Mano Cafe 🐱💕</h1>

        <p>
            Everything Your Cat Loves in One Cute Place!
        </p>

        <a href="#accessories" class="hero-btn">
            Shop Now 🛍️
        </a>

    </div>

</section>


<!-- CATEGORIES -->

<section>

    <div class="section-title">

        <h2>Shop by Category</h2>

        <p>Find something special for your furry friend 🐾</p>

    </div>


    <div class="categories">

        <div class="category">

            <div class="category-icon">🎀</div>

            <h3>Accessories</h3>

            <p>Beautiful accessories for your cat</p>

        </div>


        <div class="category">

            <div class="category-icon">🧸</div>

            <h3>Cat Toys</h3>

            <p>Fun toys for happy cats</p>

        </div>


        <div class="category">

            <div class="category-icon">👗</div>

            <h3>Cat Dresses</h3>

            <p>Cute dresses for your little one</p>

        </div>


        <div class="category">

            <div class="category-icon">🛏️</div>

            <h3>Cat Beds</h3>

            <p>Soft and cozy sleeping beds</p>

        </div>

    </div>

</section>


<!-- ACCESSORIES -->

<section id="accessories">

    <div class="section-title">

        <h2>🎀 Cat Accessories</h2>

        <p>Cute accessories for your lovely cats</p>

    </div>


    <div class="products">

        <div class="product-card">

            <div class="product-img">
                🎀
            </div>

            <h3>Pink Cat Collar</h3>

            <p>Beautiful pink collar with cute design</p>

            <span class="price">Rs. 850</span>

            <button class="add-btn"
                onclick="addToCart('Pink Cat Collar', 850)">
                Add to Cart
            </button>

        </div>


        <div class="product-card">

            <div class="product-img">
                🐾
            </div>

            <h3>Cat Harness</h3>

            <p>Comfortable harness for outdoor walks</p>

            <span class="price">Rs. 1,200</span>

            <button class="add-btn"
                onclick="addToCart('Cat Harness', 1200)">
                Add to Cart
            </button>

        </div>


        <div class="product-card">

            <div class="product-img">
                🥣
            </div>

            <h3>Pink Cat Bowl</h3>

            <p>Beautiful food and water bowl</p>

            <span class="price">Rs. 950</span>

            <button class="add-btn"
                onclick="addToCart('Pink Cat Bowl', 950)">
                Add to Cart
            </button>

        </div>


        <div class="product-card">

            <div class="product-img">
                🛏️
            </div>

            <h3>Cozy Cat Bed</h3>

            <p>Soft and comfortable sleeping bed</p>

            <span class="price">Rs. 2,500</span>

            <button class="add-btn"
                onclick="addToCart('Cozy Cat Bed', 2500)">
                Add to Cart
            </button>

        </div>

    </div>

</section>


<!-- TOYS -->

<section id="toys">

    <div class="section-title">

        <h2>🧸 Cute Cat Toys</h2>

        <p>Fun and playful toys for your little friends 🐱</p>

    </div>


    <div class="products">

        <div class="product-card">

            <div class="product-img">
                🧸
            </div>

            <h3>Fluffy Teddy Toy</h3>

            <p>Soft teddy toy for playful cats</p>

            <span class="price">Rs. 650</span>

            <button class="add-btn"
                onclick="addToCart('Fluffy Teddy Toy', 650)">
                Add to Cart
            </button>

        </div>


        <div class="product-card">

            <div class="product-img">
                🐭
            </div>

            <h3>Little Mouse Toy</h3>

            <p>Cute mouse toy for your cat</p>

            <span class="price">Rs. 500</span>

            <button class="add-btn"
                onclick="addToCart('Little Mouse Toy', 500)">
                Add to Cart
            </button>

        </div>


        <div class="product-card">

            <div class="product-img">
                🎀
            </div>

            <h3>Pink Ball Toy</h3>

            <p>Colorful ball for active cats</p>

            <span class="price">Rs. 450</span>

            <button class="add-btn"
                onclick="addToCart('Pink Ball Toy', 450)">
                Add to Cart
            </button>

        </div>


        <div class="product-card">

            <div class="product-img">
                🪶
            </div>

            <h3>Feather Wand</h3>

            <p>Interactive feather toy for cats</p>

            <span class="price">Rs. 700</span>

            <button class="add-btn"
                onclick="addToCart('Feather Wand', 700)">
                Add to Cart
            </button>

        </div>


        <div class="product-card">

            <div class="product-img">
                🐟
            </div>

            <h3>Fish Toy</h3>

            <p>Fun fish-shaped toy for cats</p>

            <span class="price">Rs. 550</span>

            <button class="add-btn"
                onclick="addToCart('Fish Toy', 550)">
                Add to Cart
            </button>

        </div>


        <div class="product-card">

            <div class="product-img">
                🧶
            </div>

            <h3>Pink Yarn Ball</h3>

            <p>Simple and fun yarn ball</p>

            <span class="price">Rs. 400</span>

            <button class="add-btn"
                onclick="addToCart('Pink Yarn Ball', 400)">
                Add to Cart
            </button>

        </div>

    </div>

</section>


<!-- DRESSES -->

<section id="dresses">

    <div class="section-title">

        <h2>👗 Cute Cat Dresses</h2>

        <p>Make your cat look even more adorable 💕</p>

    </div>


    <div class="products">

        <div class="product-card">

            <div class="product-img">
                👗🐱
            </div>

            <h3>Pink Princess Dress</h3>

            <p>Beautiful princess dress for cats</p>

            <span class="price">Rs. 1,800</span>

            <button class="add-btn"
                onclick="addToCart('Pink Princess Dress', 1800)">
                Add to Cart
            </button>

        </div>


        <div class="product-card">

            <div class="product-img">
                🌸🐱
            </div>

            <h3>Floral Cat Dress</h3>

            <p>Lovely floral dress with cute style</p>

            <span class="price">Rs. 1,650</span>

            <button class="add-btn"
                onclick="addToCart('Floral Cat Dress', 1650)">
                Add to Cart
            </button>

        </div>


        <div class="product-card">

            <div class="product-img">
                💛🐱
            </div>

            <h3>Sunny Yellow Dress</h3>

            <p>Bright and cute summer dress</p>

            <span class="price">Rs. 1,700</span>

            <button class="add-btn"
                onclick="addToCart('Sunny Yellow Dress', 1700)">
                Add to Cart
            </button>

        </div>


        <div class="product-card">

            <div class="product-img">
                🎀🐱
            </div>

            <h3>Polka Dot Dress</h3>

            <p>Pretty polka dot dress for cats</p>

            <span class="price">Rs. 1,550</span>

            <button class="add-btn"
                onclick="addToCart('Polka Dot Dress', 1550)">
                Add to Cart
            </button>

        </div>

    </div>

</section>


<!-- ABOUT -->

<section class="about" id="about">

    <h2>💕 About Mano Cafe</h2>

    <p>
        Mano Cafe is a cute online store specially made for cats.
        We provide adorable cat accessories, fun toys, cozy beds
        and beautiful dresses for your furry friends.
        Our goal is to make every cat happy and comfortable. 🐱🎀
    </p>

</section>


<!-- CART -->

<section id="cart">

    <div class="section-title">

        <h2>🛒 Your Shopping Cart</h2>

        <p>Review your selected products</p>

    </div>


    <div class="cart-box">

        <div id="cart-items">

            <p style="text-align:center;">
                Your cart is empty 🐱
            </p>

        </div>


        <div class="cart-total">

            Total:
            Rs. <span id="cart-total">0</span>

        </div>

    </div>

</section>


<!-- DELIVERY -->

<section>

    <div class="order-form">

        <h2>🚚 Delivery Details</h2>


        <div class="form-group">

            <label>Full Name</label>

            <input
                type="text"
                id="name"
                placeholder="Enter your full name"
            >

        </div>


        <div class="form-group">

            <label>Phone Number</label>

            <input
                type="text"
                id="phone"
                placeholder="Enter your phone number"
            >

        </div>


        <div class="form-group">

            <label>Email</label>

            <input
                type="email"
                id="email"
                placeholder="Enter your email"
            >

        </div>


        <div class="form-group">

            <label>City</label>

            <input
                type="text"
                id="city"
                placeholder="Enter your city"
            >

        </div>


        <div class="form-group">

            <label>Complete Address</label>

            <textarea
                id="address"
                placeholder="Enter your complete delivery address">
            </textarea>

        </div>


        <div class="form-group">

            <label>Payment Method</label>

            <select id="payment">

                <option value="">
                    Select Payment Method
                </option>

                <option value="Cash on Delivery">
                    Cash on Delivery
                </option>

                <option value="Bank Transfer">
                    Bank Transfer
                </option>

            </select>

        </div>


        <button class="place-order"
            onclick="placeOrder()">

            Place Order 🐾

        </button>

    </div>

</section>


<!-- FOOTER -->

<footer>

    <p>
        🐾 © 2026 Mano Cafe — Made with Love for Cats 💕
    </p>

</footer>


<!-- JAVASCRIPT -->

<script>

    let cart = [];


    function addToCart(name, price) {

        let existingProduct = cart.find(
            item => item.name === name
        );


        if (existingProduct) {

            existingProduct.quantity++;

        } else {

            cart.push({
                name: name,
                price: price,
                quantity: 1
            });

        }


        updateCart();

        alert(name + " added to cart! 🛒");

    }


    function updateCart() {

        let cartItems = document.getElementById("cart-items");

        let cartCount = document.getElementById("cart-count");

        let cartTotal = document.getElementById("cart-total");


        cartItems.innerHTML = "";


        if (cart.length === 0) {

            cartItems.innerHTML =
                '<p style="text-align:center;">Your cart is empty 🐱</p>';

            cartCount.innerText = 0;

            cartTotal.innerText = 0;

            return;

        }


        let total = 0;

        let count = 0;


        cart.forEach((item, index) => {

            let itemTotal =
                item.price * item.quantity;


            total += itemTotal;

            count += item.quantity;


            cartItems.innerHTML += `

                <div class="cart-item">

                    <div>

                        <h4>${item.name}</h4>

                        <p>Rs. ${item.price} each</p>

                    </div>


                    <div class="quantity">

                        <button onclick="decreaseQuantity(${index})">
                            -
                        </button>

                        <span>${item.quantity}</span>

                        <button onclick="increaseQuantity(${index})">
                            +
                        </button>

                    </div>


                    <strong>
                        Rs. ${itemTotal}
                    </strong>


                    <button
                        class="remove-btn"
                        onclick="removeItem(${index})">

                        Remove

                    </button>

                </div>

            `;

        });


        cartCount.innerText = count;

        cartTotal.innerText = total;

    }


    function increaseQuantity(index) {

        cart[index].quantity++;

        updateCart();

    }


    function decreaseQuantity(index) {

        if (cart[index].quantity > 1) {

            cart[index].quantity--;

        } else {

            cart.splice(index, 1);

        }


        updateCart();

    }


    function removeItem(index) {

        cart.splice(index, 1);

        updateCart();

    }


    function goToCart() {

        document.getElementById("cart")
            .scrollIntoView({
                behavior: "smooth"
            });

    }


    function placeOrder() {

        if (cart.length === 0) {

            alert("Please add at least one product to your cart! 🐱");

            return;

        }


        let name =
            document.getElementById("name").value.trim();

        let phone =
            document.getElementById("phone").value.trim();

        let email =
            document.getElementById("email").value.trim();

        let city =
            document.getElementById("city").value.trim();

        let address =
            document.getElementById("address").value.trim();

        let payment =
            document.getElementById("payment").value;


        if (
            name === "" ||
            phone === "" ||
            email === "" ||
            city === "" ||
            address === "" ||
            payment === ""
        ) {

            alert("Please fill all delivery details. 💕");

            return;

        }


        alert(
            "🎉 Order Placed Successfully!\n\n" +
            "Thank you " + name +
            " for shopping at Mano Cafe! 🐱💕"
        );


        cart = [];

        updateCart();


        document.getElementById("name").value = "";
        document.getElementById("phone").value = "";
        document.getElementById("email").value = "";
        document.getElementById("city").value = "";
        document.getElementById("address").value = "";
        document.getElementById("payment").value = "";

    }


    updateCart();

</script>

</body>
</html>