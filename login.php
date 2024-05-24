<?php
session_start();
//$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $username=$_POST['username'];
    $password=$_POST['password'];


    $sql="Select * from `test2` where username='$username' and password='$password'";
    $result= mysqli_query($conn,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            echo "Login Successful";
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit();
            //$user=1;
        }
        else{ 
            echo "Invalid Credentials";
        }
    }            
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="style3.css">
</head>

<body>

    <div class="main">
        <div class="form-box">
            <form class="form" action="login.php" method="post">
                <span class="title">LOGIN IN</span>
                
                <div class="form-container">
                    
                <input type="text" id="first" name="username" placeholder="Enter your Username" required>
                        <input type="password" id="password" name="password" placeholder="Enter your Password" required>
                </div>
                <button type="submit" onclick="solve()">
                                LOGIN
                            </button>
            </form>
            <div class="form-section">
            <p>Have an account? <a href="">Log in</a> </p>
            </div>
        </div>

    </div>
</body>

</html>