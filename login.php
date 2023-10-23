<?php
require("Connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title> Login </title>
</head>
<body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        <form method="POST">
        <form class="login-form">
          <input type="text" placeholder="username" name="AdminName"/>
          <input type="password" placeholder="password" name="AdminPassword"/>
          <button type="submit" name="Signin">login</button>
          <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
      </div>
    </div>
    <?php
    if(isset($_POST['Signin']))
    {
     
   $query = "SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`='$_POST[AdminPassword]'";
   $result=mysqli_query($con,$query);
   if(mysqli_num_rows($result)==1)
   {
    session_start();
    $_SESSION['AdminLoginId']= $_POST['AdminName'];
    header("location: ./Register/Shopkeeper.php");
   }
   else
   {
    echo "Incorrect password";
   }
    }
     
    
    ?>
</body>
</body>
</html>