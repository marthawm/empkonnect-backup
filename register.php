<?php

$_SESSION['email'] = $_POST['email'];
$_SESSION['firstname'] = $_POST['firstname'];
$_SESSION['lastname'] = $_POST['lastname'];

require "db.php";
if(isset($_POST['inputdata'])){

$companyname = $_POST['companyname'];
$companyphone = $_POST['companyphone'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['cpass'];
//validate pass

if($password != $confirm){

  echo " <div class='alert alert-danger fade in' style='margin-left:10%; margin-right:30%; margin-bottom: -10%'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong>ERROR!</strong> Password Do Not match please try again.
</div>";
exit();
}

// $password= md5($password);
$pass= md5($pass);

$check ="select * from users WHERE email='".$email."'";

$check_query = mysqli_query($con,$check);

if(mysqli_num_rows($check_query)){

  echo "<div class='alert alert-danger fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong>ERROR!</strong>  ''".$email."'  already exist, Please try another one!'.
</div>";
exit();
}

$insert = "insert into employer_register(companyname, companyphone, firstname,lastname,email,password)VALUES('$companyname','$companyphone','$firstname','$lastname','$email','$password')";

$query=mysqli_query($con,$insert);

if($query){

    echo "<div class='alert alert-success fade in'>
    <a href='#' class='close' data-dismiss='alert'>&times;</a>
    <strong>SUCCESS!</strong>  Registration Successful.
</div>";  
// $newURL = "login.php";
// header('Location: '.$newURL);
}
}

 ?>