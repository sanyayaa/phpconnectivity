<?php
session_start();

// Redirect to login page if user is not logged in
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style2.css">
<head>
    <title>Welcome</title>
</head>
<body>
    <div class="main">
        <h1>Hello, <?php echo $username; ?></h1>
        <p>Welcome to our website!</p>
    </div>
</body>
</html>
