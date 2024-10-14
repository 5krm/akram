<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>

    <!-- Additional Custom Signup Styles -->
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="signup-container">
        <div class="signup-header">
            <h2>Create an Account</h2>
        </div>

        <form method="post" class="signup-form">
            <!-- Email Field -->
            <input type="email" id="email" name="email" placeholder="Type your email..." required>

            <!-- Password Field -->
            <input type="password" name="password" placeholder="Type your password..." required>

            <!-- Role Selection Field -->
            <label for="role">Select Role:</label>
            <select id="role" name="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            <!-- Signup Button -->
            <button name="signup" id="signup-btn">Signup</button>

            <div class="signup-footer">
                <p>Already have an account? <a href="login.php">Sign in</a></p>
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['signup'])) {
        // Database connection
        $conn = new PDO("mysql:host=localhost;dbname=akram", "root", "");

        // Collecting input data
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password for security
        $role = $_POST['role']; // Get the selected role
        $code = md5(time());

        // Check if email already exists
        $checkemail = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $checkemail->bindParam("email", $email);
        $checkemail->execute();

        if ($checkemail->rowCount() > 0) {
            echo "This email is already in use.";
        } else {
            // Insert user data into the database
            $sql = $conn->prepare("INSERT INTO users(email, password, role, code) VALUES(:email, :password, :role, :code)");
            $sql->bindParam("email", $email);
            $sql->bindParam("password", $password);
            $sql->bindParam("role", $role); // Bind the role parameter
            $sql->bindParam("code", $code);

         
            // After successful signup (in your signup code)
if ($sql->execute()) {
    // Get the last inserted user ID
    $userId = $conn->lastInsertId();

    // Example: Create a sample order for the user
    $totalAmount = 100.00; // Sample total amount
    $orderSql = $conn->prepare("INSERT INTO orders (user_id, total_amount) VALUES (:user_id, :total_amount)");
    $orderSql->bindParam("user_id", $userId);
    $orderSql->bindParam("total_amount", $totalAmount);

    if ($orderSql->execute()) {
        echo "<p style='color: green;'>Signup successful! A sample order has been created. You can sign in now.</p>";
    } else {
        echo "<p style='color: red;'>Signup successful, but failed to create a sample order.</p>";
    }
}

        }
    }
    ?>
</body>
</html>



