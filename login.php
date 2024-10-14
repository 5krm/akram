<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
    <div class="signin-container">
        <div class="signin-header">
            <h2>Login</h2>
            
        </div>

        <form method="post" class="signin-form">
            <!-- Email Field -->
            <input type="email" id="email" name="email" 
                   placeholder="Type your email..." 
                   required><br>

            <!-- Password Field -->
            <input type="password" name="password" placeholder="Type your password..." required>

            <!-- Remember Me Checkbox -->
            <label>
                <input type="checkbox" name="remember">
                Remember Me
            </label><br>

            <!-- Login Button -->
            <button name="login" id="subscribe-btn">Login</button>
        </form>

        <div class="signin-footer">
        <a href="signup.php">Do not have an account?</a>
        </div>
    </div>

    <?php
    session_start(); // Start the session

    if (isset($_POST['login'])) {
        // Database connection
        $conn = new PDO("mysql:host=localhost;dbname=akram", "root", "");

        // Collecting input data
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Fetch user data based on email
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = :email");
        $stmt->bindParam("email", $email);
        $stmt->execute();

        // Check if user exists
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Store user ID in session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $email; // Store email in session if needed

                // Redirect to the user's profile or home page
                header("Location: profile.php");
                exit();
            } else {
                echo "<p style='color: red;'>Invalid password.</p>";
            }
        } else {
            echo "<p style='color: red;'>No account found with that email.</p>";
        }
    }
    ?>
</body>
</html>
