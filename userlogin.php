<?php 

require 'db.php';

if( isset($_POST['btn-login']) ) {  
        
      
        $email = ($_POST['email']);
        $pass = ($_POST['password']);
        $emailError = "";
        $passError = "";
        $error = false;
        
       //basic email validation
        if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
            $error = true;
            $emailError = "Please enter valid email address.";
        } else {
            // check email exist or not
            $query = "SELECT email FROM profile WHERE email='$email'";
            $result = mysql_query($query);
            $count = mysql_num_rows($result);
            if($count!=0){
                $error = true;
                $emailError = "Provided Email is already in use.";
            }
        }

        if (empty($pass)){
            $error = true;
            $passError = "Please enter password.";
        } else if(strlen($pass) < 6) {
            $error = true;
            $passError = "Password must have atleast 6 characters.";
        }
        
        
        
        // if there's no error, continue to login
        if (!$error) {
            
            $password = hash('sha256', $pass); // password hashing using SHA256
        
            $res=mysql_query("SELECT * FROM profile WHERE userEmail='$email'");
            $row=mysql_fetch_array($res);
            $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
            
            if( $count == 1 && $row['password']==$password ) {
                $_SESSION['user'] = $row['id'];
                header("Location: home.php");
            } else {
                $errMSG = "Incorrect Credentials, Try again...";
            }
                
        }
        
    }





?>

<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" >
    <meta name="description" content="WOWSlider">
    <meta name="google-site-verification" content="QapaVeCTXy4MLxEILztDixJjvPsF7NpjUdP1do_qhYg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.js"></script>
    <script type="text/javascript" src="js/jquerymkon.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</head>
<body style="background-image: url(images/mtd1.jpg);background-size: cover;background-repeat: no-repeat;background-attachment: fixed;" class="img-responsive">

     
     <div class="col-sm-12">
     <div style="height:500px; width: 500px; background-color:; margin-top: 100px; border-radius: 10px; " class="container">

       <center><h4 style="color:#dd2c00; ;font-size: 30px; font-weight: bold; font-family: franklin gothic heavy;">WELCOME TO MKONNECT!</h4></center><br><br>

<?php
            if ( isset($errMSG) ) {
                
                ?>
                <div class="form-group">
                <div class="alert alert-danger">
                <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
                </div>
                <?php
            }
            ?>
            


       <form method="POST" action="profile.php">

         <div class="form-group">
            	<div  class="input-group">
                <span style="background-color: #76ff03;" class="input-group-addon"><span style="color: white;" class="glyphicon glyphicon-envelope"></span></span>
            	<input style="height: 40px; background-color: transparent;color: #76ff03;" type="email" name="email" class="form-control" placeholder="Your Email">
                </div></input>
                
            
         </div><br><br>

         <div class="form-group">
            	<div  class="input-group">
                <span style="background-color: #76ff03;" class="input-group-addon"><span style="color: white;" class="glyphicon glyphicon-lock"></span></span>
            	<input style="height: 40px;background-color: transparent;color: #76ff03;" type="password" name="password" class="form-control" placeholder="Your Password">
                </div></input>
                
            
         </div><br><br>

            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-login">Login</button>
            </div><br>
            
            <div class="form-group">

            <center><p style="color: #fff;">Not yet a member?     <a href="index.php"><span style="color: #1976d2;font-weight:bold;">SIGN UP</span></a></p></center>


            </div>

             <div class="form-group">
            	<hr />
            </div>
            



       </form>

     </div>
     </div> 
     




</body>
</html>