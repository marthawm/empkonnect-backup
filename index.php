<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form wizard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/agency.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/form.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--favicon-->
       
     <link href="images/favicon-32x32.png" rel="shortcut icon" type="image/x-icon">
     
</head>
<body style="background-image: url(images/mtd1.jpg);background-size: cover;background-repeat: no-repeat;background-attachment: fixed;" class="img-responsive">


 

<div style="height:500px; width: 500px; background-color:; margin-top: -10px; border-radius: 10px; " class="container">
       <center><h4 style="color:#dd2c00; font-size: 30px; font-weight: bold; font-family: franklin gothic heavy;">WELCOME TO MKONNECT!</h4></center><br><br>

 <form  method="POST" action="index.php">
  <div class="form-group">
        <div class="input-group">
        <span style="background-color:#76ff03;" class="input-group-addon"><span style="color: white;" class="glyphicon glyphicon-user"></span></span>
        <input  style="background-color: transparent;color: #76ff03;" type="text" class="form-control" id="inputEmail3" placeholder="firstname" name="fname" required="">
        </div>
  </div><br>
  <div class="form-group" >
    <div class="input-group">
      <span style="background-color: #76ff03;" class="input-group-addon"><span style="color: white;" class="glyphicon glyphicon-user"></span></span> 
      <input  style="background-color: transparent;color: #76ff03;" type="text" class="form-control" id="inputEmail3" placeholder="LastName" name="lname" required="">
    </div>
  </div><br>
  
  <div class="form-group" >
    <div class="input-group">
    <span style="background-color: #76ff03;" class="input-group-addon"><span style="color: white;" class="glyphicon glyphicon-envelope"></span></span>
    <input  style="background-color: transparent;color: #76ff03;" type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" required="">
    </div>
  </div><br>
  <div class="form-group" >
    <div class="input-group">
    <span style="background-color: #76ff03;" class="input-group-addon"><span style="color: white;" class="glyphicon glyphicon-lock"></span></span>
    <input  style="background-color: transparent;color: #76ff03;" type="password" class="form-control" id="inputEmail3" placeholder="password" name="pass" required="">
    </div>
  </div><br>
  <div class="form-group" >
    <div class="input-group">
    <span style="background-color: #76ff03;" class="input-group-addon"><span style="color: white;" class="glyphicon glyphicon-lock"></span></span>
    <input style="background-color: transparent;color: #76ff03;" type="password" class="form-control" id="inputEmail3" placeholder="Confirm password" name="cpass" required="">
    </div>
  </div>
 <div class="form-group">
              <button type="submit" class="btn btn-block btn-primary" name="register">Sign Up</button>
 </div>

<div class="form-group">

            <center><p style="color: #fff;">Already a member?     <a href="login.php"><span style="color: #1976d2;font-weight:bold;">SIGN IN</span></a></p></center>


            </div>

             <div class="form-group">
              <hr />
            </div>
            

  </form>
  </div>
  

</body>
</html>

<?php
 require 'db.php';

if(isset($_POST['register'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$pass= md5($pass);




$sql = "INSERT INTO users (firstname, lastname, email,password)
VALUES ('$fname','$lname','$email','$pass')";





$qury=mysqli_query($con,$sql);

if($qury){

    echo "<div class='alert alert-success fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong>SUCCESS!</strong>  Registration Successful.
</div>";  
$newURL = "profile.php";
header('Location: '.$newURL);
}

}








?>





   