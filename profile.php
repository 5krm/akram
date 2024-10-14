<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login if not logged in
    header("Location: login.php");
    exit();
}

// Database connection
$conn = new PDO("mysql:host=localhost;dbname=akram", "root", "");

// Fetch the user's order history
$userId = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT * FROM orders WHERE user_id = :user_id ORDER BY order_date DESC");
$stmt->bindParam("user_id", $userId);
$stmt->execute();
$orderHistory = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/responsive.css" />
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
        .user-info {
            text-align: center;
            margin-bottom: 20px;
        }
        .logout-btn {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px;
            background-color: #d9534f; /* Bootstrap Danger color */
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }
        .logout-btn:hover {
            background-color: #c9302c; /* Darker shade on hover */
        }
    
    </style>
</head>
<body>
    <header class="header" id="header">
        <img src="img/logo.png" alt="logo">
        <nav class="nav_container container flex-div">
            <ul class="flex-div">
                <li><a class="nav_link" href="index.php">Home</a></li>
                <li><a class="nav_link" href="index.php">Product</a></li>
                <li><a class="nav_link" href="index.php">Service</a></li>
                <li><a class="nav_link" href="cart.php">Cart</a></li>
                <li><a class="nav_link" href="profile.php">Profile</a></li>
            </ul>
        </nav>
    </header>

    <div class="user-info">
        <h2>Welcome, <?= htmlspecialchars($_SESSION['email']) ?></h2>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

    <h2>Your Order History</h2>

    <?php if (!empty($orderHistory)): ?>
        <table>
            <tr>
                <th>Order ID</th>
                <th>Date</th>
                <th>Total Amount</th>
            </tr>

            <?php foreach ($orderHistory as $order): ?>
                <tr>
                    <td><?= htmlspecialchars($order['id']) ?></td>
                    <td><?= htmlspecialchars($order['order_date']) ?></td>
                    <td>$<?= number_format($order['total_amount'], 2) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p style="text-align: center;">You have no order history yet.</p>
    <?php endif; ?>
</body>
</html>
