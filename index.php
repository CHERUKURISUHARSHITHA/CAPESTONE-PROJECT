<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	
<div class="">
  	<!-- notification message -->
  	-------------------------
	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beverage Order</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        .menu-item {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 5px;
            background-color: white;
        }

        .order-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Beverage Shop</h1>
    </header>

    <main>
        <section>
            <h2>Coffee Menu</h2>
            <div class="menu-item">
                <img src="img-1.png" alt="Coffee 1">
                <div class="menu-item-details">
                    <h3>Coffee 1</h3>
                    <p>A rich and aromatic cup of coffee.</p>
                    <p>Price: $3.99</p>
                </div>
                <button class="order-button" onclick="window.location.href='login.php';">Order Now</button>
            </div>

            <div class="menu-item">
                <img src="img-3.png" alt="Coffee 2">
                <div class="menu-item-details">
                    <h3>Coffee 2</h3>
                    <p>Smooth and balanced espresso shot.</p>
                    <p>Price: $4.99</p>
                </div>
                <button class="order-button" onclick="window.location.href='login.php';">Order Now</button>
            </div>
        </section>

        <section>
            <h2>Cappuccino Menu</h2>
            <div class="menu-item">
                <img src="img-4.png" alt="Cappuccino 1">
                <div class="menu-item-details">
                    <h3>Cappuccino 1</h3>
                    <p>Frothy cappuccino with a hint of cocoa.</p>
                    <p>Price: $5.99</p>
                </div>
                <button class="order-button" onclick="window.location.href='login.php';">Order Now</button>
            </div>

            <div class="menu-item">
                <img src="imag2.jpg" alt="Cappuccino 2" width="400" height="400">
                <div class="menu-item-details">
                    <h3>Cappuccino 2</h3>
                    <p>Classic cappuccino with a swirl of caramel.</p>
                    <p>Price: $6.99</p>
                </div>
                <button class="order-button" onclick="window.location.href='login.php';">Order Now</button>
            </div>
        </section>

        <section>
            <h2>Mocktail Menu</h2>
            <div class="menu-item">
                <img src="img.jpg" alt="Mocktail 1" width="400" height="400">
                <div class="menu-item-details">
                    <h3>Mocktail 1</h3>
                    <p>Refreshing mocktail with tropical flavors.</p>
                    <p>Price: $4.99</p>
                </div>
                <button class="order-button" onclick="window.location.href='login.php';">Order Now</button>
            </div>

            <div class="menu-item">
                <img src="img6.jpeg" alt="Mocktail 2" width="400" height="400">
                <div class="menu-item-details">
                    <h3>Mocktail 2</h3>
                    <p>Sparkling mocktail with a zesty citrus twist.</p>
                    <p>Price: $5.99</p>
                </div>
                <button class="order-button" onclick="window.location.href='login.php';">Order Now</button>
            </div>
        </section>
    </main>

    <script>
        function orderReceived() {
            window.location.href = 'order_received.html';
        }
    </script>

	----------------------------

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>
