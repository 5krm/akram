<?php
session_start();

// product data 
$products = [
    1 => ["name" => "Enchilade", "price" => 15.00],
    2 => ["name" => "Chicken Pot Pie", "price" => 25.00],
    3 => ["name" => "Green Beans", "price" => 12.00],
    4 => ["name" => "akram", "price" => 12.00],
    5 => ["name" => "Ga", "price" => 12.00],
    6 => ["name" => " Bns", "price" => 12.00],
    7 => ["name" => " ns", "price" => 12.00],
    8 => ["name" => " B", "price" => 12.00],
    9 => ["name" => " ss", "price" => 12.00],
    10 => ["name" => " sdej", "price" => 12.00],
    11 => ["name" => "d hy", "price" => 12.00],
    12 => ["name" => "s ss", "price" => 12.00],
    13 => ["name" => "geg ", "price" => 12.00],
    14 => ["name" => " feg", "price" => 12.00],
    15=> ["name" => "erg gbf", "price" => 12.00],
   
];

// Check if the product ID and quantity are set
if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $product_id = $_POST['product_id'];
    $quantity = (int)$_POST['quantity'];

    // Check if the product exists
    if (array_key_exists($product_id, $products)) {
        $product = $products[$product_id];

        // Initialize cart session variable if it doesn't exist
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // Check if the product is already in the cart
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]['quantity'] += $quantity; // Update quantity
        } else {
            $_SESSION['cart'][$product_id] = [
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => $quantity
            ];
        }
    }
}
// Redirect back to the product page
header("Location: cart.php"); // Adjust as necessary
exit();
?>
