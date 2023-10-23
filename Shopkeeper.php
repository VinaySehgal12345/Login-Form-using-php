<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet"  href="./css/rstyle.css">
</head>
<body> 

<blockquote class="blockquote btn btn-primary">
  <p class="mb-0"><h3>
    Add New Shopkeeper</p></h3>
</blockquote>

  <div class="container">
    <?php
    if(isset($_POST["submit"])){
        $fullName = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $category = $_POST["category"];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);


        $errors = array();

        if(empty($fullName) OR empty($email) OR empty($password) OR empty($category) ) {
            array_push($errors, "All fields are required");
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
        }
        if(strlen($password)<8){
            array_push($errors, "password must be at least 8 charactes long");
        }
        if(count($errors)>0){
            foreach($errors as $error){
                echo "<div class='alert alert-danger'> $error</div>";

            }
        }
        else{
             //we will insert the data inter database
            require_once "database.php";
            $sql = "INSERT INTO user (full_name, email,  password, category) VALUES (?, ?, ?, ?)";
          
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"ssss",$fullName, $email, $passwordHash, $category);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'> You are registered successfully .</div>";


            }
            else {
                die("something went wrong");
        }
        }
        }
    ?>
    <form action="Shopkeeper.php" method="post">
    <blockquote class="blockquote text-center">
  <p class="mb-0">
    Name of Shopkeeper:</p>
</blockquote>
        
        <div class="form-group">

            <input type="text" class="form-control" name="fullname" placeholder="Full Name">
</div>
<div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
</div>
<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
</div>

<div class="form-group">
 
  <select name= "category" class="form-control">
    <option value="">--Select a category</option>
    <option value="BMW">BMW</option>
    <option value="BAJAJ">BAJAJ</option>
    <option value="AUDI">AUDI</option>
    <option value="HONDA">BAJAJ</option>
    </select>
    </div>

<div class="form-group">

    <input type="submit" class="btn btn-primary" value="Add" name="submit">
</div>
    
</div>



</body>
</html>