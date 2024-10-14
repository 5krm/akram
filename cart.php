<?php 
session_start();
$total = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/responsive.css" />

</head>
<body>
    <!--AFIA TABASSUM-->
    <!--===========Header============-->
    <header class="header" id="header">
        <img src="img/logo.png" alt="logo">
        <nav class="nav_container container flex-div">
            <ul class="flex-div">
                <li><a class="nav_link" href="index.php">Home</a></li>
                <li><a class="nav_link" href="index.php">Product</a></li>
                <li><a class="nav_link" href="index.php">Service</a></li>
                <li><a class="nav_link" href="cart.php">Cart</a></li>
            </ul>
        </nav>

    </header>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #c0392b;
        }
        .total {
            text-align: right;
            font-size: 1.2em;
            margin: 20px auto;
            color: #333;
        }
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
        }
        .popup-content {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h2>Your Cart</h2>
    <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Actions</th>
            <th>Buy</th>
        </tr>

        <?php if (!empty($_SESSION['cart'])): ?>
            <?php foreach ($_SESSION['cart'] as $id => $item): 
                $itemTotal = $item['price'] * $item['quantity'];
                $total += $itemTotal;
            ?>
                <tr>
                    <td><?= htmlspecialchars($item['name']) ?></td>
                    <td>$<?= number_format($item['price'], 2) ?></td>
                    <td><?= $item['quantity'] ?></td>
                    <td>$<?= number_format($itemTotal, 2) ?></td>
                    <td>
                        <form action="remove_from_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="<?= $id ?>">
                            <button type="submit">Remove</button>
                        </form>
                    </td>
                    <td>
                    <button id="buyButton">Buy</button></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Your cart is empty.</td>
            </tr>
        <?php endif; ?>
    </table>



    <div class="popup" id="emailPopup">
        <div class="popup-content">
            <h3>Enter your email to receive the product:</h3>
            <form action="process_order.php" method="POST">
                <input type="email" name="customer_email"  placeholder="Enter your email">
                <button type="submit">Order</button>
            </form>
        </div>
    </div>

    <script>
        const buyButton = document.getElementById('buyButton');
        const emailPopup = document.getElementById('emailPopup');

        buyButton.addEventListener('click', () => {
            emailPopup.style.display = 'flex';
        });
    </script>
</body>
</html>
