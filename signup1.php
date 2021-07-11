<?php
$db = mysqli_connect("localhost","root", "","final");
if(isset($_POST['submit_button'])){
    session_start();
    
    $name = $_POST['fullname'];
    $email = $_POST['email'];

    
    
    $password = md5($_POST['password']); 
    $confirmpassword = md5($_POST['confirmpassword']);
    if($password==$confirmpassword)
    {
    $sql ="INSERT INTO ups9(name,email,password,confirmpassword) VALUES('$name','$email','$password','$confirmpassword')";
    mysqli_query($db,$sql);
    
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    
    //$_SESSION['password']=$password;
    //$_SESSION['confirmpassword']=$confirmpassword;
    header("location:login2.php");
    }
    else echo "password does not match";
}
//echo "WELCOME TO THE PORTAL";



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart system</title>
        <link rel="stylesheet" type="text/css" href="style8.css">
    </head>
    <body  background= "https://www.incimages.com/uploaded_files/image/1920x1080/getty_663974538_353364.jpg">
    <header id= "top-header">
                <div class= "large-box">
        <h1> Cart System Sign Up</h1>   
        
      
                   
                    
                    
                   





        <form class="box" action="signup1.php" method="POST">
           
        <input type="text" name="fullname" placeholder="Enter name" id="username">
            <input type="email" name="email" placeholder="Enter email" id="email">
            <input type="password" name="password" placeholder ="Enter password" id="password" >
            <input type="password" name="confirmpassword" placeholder ="Re-enter password" id="confirmpassword" >
        
            <input type="submit" name="submit_button" value= "Sign up">
        
        
       
            <h6><a href ="img.html">
        Help
        </a>
</h6>
      
                <br>
                
            
                

                     
      
        <button class="btn btn1 "><a href="http://www.gmail.com/">Sign up with Email</a></button>
        
     
           

          <button class="btn btn2"><a href="https://www.facebook.com/"> Sign up with Facebook</a></button>
         

         

       
        </form>
    </body>
</html>