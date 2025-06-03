<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep Czekoladowy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7e4c6;
            color: #5e321f;
        }
        header {
            background-color: #8b4513;
            color: white;
            text-align: center;
            padding: 20px;
        }
        h1 {
            margin: 0;
        }
        main {
            padding: 20px;
        }
        .products {
            display: flex;
            gap: 20px;
        }
        .product {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
        }
        button {
            background-color: #5e321f;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        button:hover {
            background-color: #8b4513;
        }
        #cart {
            list-style: none;
            padding: 0;
        }
    </style>
</head>
<body>

    <header>
        <h1>Sklep Czekoladowy</h1>
        <p>Najlepsza czekolada prosto do Twojego domu!</p>
    </header>

    <main>
        <h2>Nasze produkty</h2>
        <div class="products">
            <div class="product">
                <h3>Praliny mleczne</h3>
                <p>Wyjątkowe ręcznie robione praliny.</p>
                <span class="price">20 zł</span>
                <button onclick="addToCart('Praliny mleczne', 20)">Dodaj do koszyka</button>
            </div>
            <div class="product">
                <h3>Czekolada gorzka</h3>
                <p>Intensywny smak prawdziwej czekolady.</p>
                <span class="price">15 zł</span>
                <button onclick="addToCart('Czekolada gorzka', 15)">Dodaj do koszyka</button>
            </div>
        </div>
        
        <h2>Twój koszyk</h2>
        <ul id="cart"></ul>
    </main>

    <script>
        const cart = [];

        function addToCart(productName, price) {
            cart.push({ name: productName, price: price });
            updateCart();
        }

        function updateCart() {
            const cartElement = document.getElementById("cart");
            cartElement.innerHTML = "";
            cart.forEach(item => {
                const li = document.createElement("li");
                li.textContent = `${item.name} - ${item.price} zł`;
                cartElement.appendChild(li);
            });
        }
    </script>

</body>
</html>
