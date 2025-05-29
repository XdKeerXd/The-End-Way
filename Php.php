<?php
session_start();

// Define the correct password
$correctPassword = "your_secure_password";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputPassword = $_POST['password'] ?? '';
    
    if ($inputPassword === $correctPassword) {
        $_SESSION['authenticated'] = true;
        header("Location: server_content.php");
        exit();
    } else {
        $error = "Invalid password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Server Access</title>
</head>
<body>
    <div style="text-align: center; margin-top: 100px;">
        <h2>Enter Password to Access Server</h2>
        <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
        <form method="POST" action="">
            <input type="password" name="password" required>
            <br><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>