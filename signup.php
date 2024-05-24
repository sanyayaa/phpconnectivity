<?php
$success=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $username=$_POST['username'];
    $password=$_POST['password'];

    // $sql="insert into `registration`(username,password) values('$username', '$password')";
    // $result = mysqli_query($conn,$sql);

    // if($result){
    //     echo "data inserted";

    // }
    // else{
    //     die(mysqli_error());
    // }

    $sql="Select * from `test2` where username='$username'";
    $result= mysqli_query($conn,$sql);
    //echo var_dump($result);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            //echo "user already exist";
            $user=1;
        }
        else{
            $sql="insert into `test2`(username,password) values('$username', '$password')";
            $result = mysqli_query($conn,$sql); 

            if($result){
                    echo "Signup Successful";
                    $success=1;
            
                }
                else{
                    die(mysqli_error($conn));
                }
        }


    }
}

?>


<!DOCTYPE <html>
<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <?php
    if($user)
    {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Sorry</strong> user already exist
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }

    ?>
    <!-- <?php
    // if($success)
    // {
    //     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    //     <strong>Success</strong> You have successfully signedup
    //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //   </div>';
    // }
    
    ?> -->
    <div class="main">
        <h1>SIGNUP PAGE</h1>
        <div class="main">
        <div class="form-box">
            <form class="form" action="signup.php" method="post">
                <span class="title">SIGN UP</span>
                
                <div class="form-container">
                    
                <input type="text" id="first" name="username" placeholder="Enter your Username" required>
                <input type="text" id="email" name="email" placeholder="Enter your email" required>
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

        <?php
    if($success)
    {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Success</strong> You have successfully Registered
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    
    ?>
    </div>
</body>

</html>