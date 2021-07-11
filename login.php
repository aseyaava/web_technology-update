<?php
$db = mysqli_connect("localhost", "root", "", "final");
if(isset($_POST['submit'])){
    session_start();
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql="SELECT * FROM ups3 WHERE email='$email' AND password='$password'";
    $verify = mysqli_query($db, $sql);

    if(mysqli_num_rows($verify)== 1){
        $_SESSION['email']=$email;
        header("location: main.html");
    }else {
        echo "Incorrect email ot password...please check and try again";
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Cart System</title>
    </head>
    <body bgcolor = "yellow">
        <h1>Login Form</h1>
        <form method="post" action="login.php">
            <table>
             
                <tr>    
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="enter mail"></td>
                    
                </tr>
                <tr>    
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="enter password"></td>
                    
                </tr>
                <tr>   
                    <td><input type="submit" name="submit" value="Login"></td>
                    
                </tr>
            </table>

            <p>Don't have account? Then click Sign UP.....</p>
            <a href ="signup.php">
            Sign Up
            </a>
           

        </form>
    </body>
</html>