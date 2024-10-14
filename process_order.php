<?php
session_start();
require 'mailer/autoload.php'; // Include PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$order = [
    'order_id' => uniqid(),
    'date' => date('Y-m-d H:i:s'),
    'products' => $_SESSION['cart'],
    'total' => $total,
];

// Add the order to the history.
$_SESSION['order_history'][] = $order;

// Clear the cart after purchase.
unset($_SESSION['cart']);

header('Location: profile.php');
exit();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customerEmail = $_POST['customer_email'];
    $storeEmail = 'akrmsalah79@gmail.com'; // Change to your store email
    $total = 0;
    $orderDetails = "";

    foreach ($_SESSION['cart'] as $item) {
        $itemTotal = $item['price'] * $item['quantity'];
        $total += $itemTotal;
        $orderDetails .= "Product: {$item['name']}\n";
        $orderDetails .= "Price: {$item['price']}\n";
        $orderDetails .= "Quantity: {$item['quantity']}\n";
        $orderDetails .= "Total: $itemTotal\n\n";
    }
    $orderDetails .= "Grand Total: $total";

    // Send Email
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';   // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'akrmsalah79@gmail.com';
        $mail->Password = 'sfcl uoye nhlq vbev';
        $mail->SMTPSecure = 'ssl';         
        $mail->Port       = 465; 

        $mail->setFrom('akrmsalah79@gmail.com', 'Store');
        $mail->addAddress($storeEmail);
        $mail->Subject = "New order from: $customerEmail";
        $mail->Body = "Customer Email: $customerEmail\n\n$orderDetails";

        $mail->send();
        header("Location: index.php");
    } catch (Exception $e) {
        echo "Order could not be sent.";
    }
}
?>
